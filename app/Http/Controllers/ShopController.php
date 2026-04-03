<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Voucher;
use App\Models\Banner;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // Homepage
    public function home()
    {
        $banners = Banner::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $categories = Category::where('is_active', true)
            ->whereNull('parent_id')
            ->with(['children' => function ($q) {
                $q->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('name');
            }])
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        // ✅ New Arrivals (latest)
        $featured = Product::query()
            ->where('is_active', true)
            ->withMin('variants', 'price')
            ->with(['category', 'variants']) // 你前端有用到 $product->category / variants
            ->latest()
            ->limit(10)
            ->get();

        // ✅ Popular (by sales)
        $popular = Product::query()
            ->where('is_active', true)
            ->withMin('variants', 'price')
            ->with(['category', 'variants'])
            ->withSum([
                'orderItems as sold_qty' => function ($q) {
                    $q->whereHas('order', function ($oq) {
                        $oq->whereIn('status', ['paid', 'completed']);
                    });
                }
            ], 'qty')
            ->orderByRaw('COALESCE(sold_qty, 0) desc')
            ->latest()
            ->limit(10)
            ->get();

        $homeVouchers = Voucher::query()
            ->where('is_active', true)
            ->where(function ($q) {
                $q->whereNull('starts_at')->orWhere('starts_at', '<=', now());
            })
            ->where(function ($q) {
                $q->whereNull('expires_at')->orWhere('expires_at', '>=', now());
            })
            ->latest()
            ->take(2)
            ->get();

        return view('shop.home', compact(
            'featured',
            'popular',
            'categories',
            'banners',
            'homeVouchers'
        ));
    }


    // Shop listing + Search
    public function index(Request $request)
    {
        $query = Product::query()
            ->where('is_active', true)
            ->withMin('variants', 'price'); // variants_min_price

        // =========================
        // 🔍 Search (name + description + price)
        // =========================
        if ($search = $request->q) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('short_description', 'like', "%{$search}%");

                // ✅ 如果输入的是数字 → 也 search price
                if (is_numeric($search)) {
                    $q->orWhere('price', $search)
                        ->orWhereHas('variants', function ($vq) use ($search) {
                            $vq->where('price', $search);
                        });
                }
            });
        }

        // =========================
        // 📂 Category filter
        // =========================
        if ($categorySlug = $request->category) {
            $cat = Category::where('slug', $categorySlug)
                ->where('is_active', true)
                ->first();

            if ($cat) {
                if (is_null($cat->parent_id)) {
                    $subIds = Category::where('parent_id', $cat->id)
                        ->where('is_active', true)
                        ->pluck('id');

                    $query->whereIn('category_id', $subIds->all());
                } else {
                    $query->where('category_id', $cat->id);
                }
            }
        }

        // =========================
        // 💰 Price filter (最重要🔥)
        // =========================
        $min = $request->min_price;
        $max = $request->max_price;

        if ($min !== null || $max !== null) {
            if ($min !== null) {
                $query->whereRaw(
                    "COALESCE(variants_min_price, price) >= ?",
                    [$min]
                );
            }

            if ($max !== null) {
                $query->whereRaw(
                    "COALESCE(variants_min_price, price) <= ?",
                    [$max]
                );
            }
        }

        // =========================
        // 🔃 Sorting
        // =========================
        $sortPriceExpr = "COALESCE(variants_min_price, price)";

        switch ($request->sort) {
            case 'price_asc':
                $query->orderByRaw("$sortPriceExpr asc");
                break;

            case 'price_desc':
                $query->orderByRaw("$sortPriceExpr desc");
                break;

            case 'latest':
                $query->latest();
                break;

            default:
                $query->latest();
        }

        // =========================
        // 📦 Pagination
        // =========================
        $products = $query
            ->paginate(12)
            ->onEachSide(2)
            ->withQueryString();

        // =========================
        // 📂 Categories
        // =========================
        $categories = Category::where('is_active', true)
            ->whereNull('parent_id')
            ->with(['children' => function ($q) {
                $q->where('is_active', true)
                    ->orderBy('sort_order')
                    ->orderBy('name');
            }])
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('shop.index', compact('products', 'categories'));
    }


    // Product detail (route model binding by slug already in your routes)
    public function show(Product $product)
    {
        abort_unless($product->is_active, 404);

        $product->load([
            'category',
            'options.values' => fn($q) => $q->orderBy('sort_order'),
            'variants' => fn($q) => $q->where('is_active', true),
        ]);

        $reviews = $product->reviews()
            ->with('user:id,name')
            ->latest()
            ->paginate(6);

        $avgRating = round($product->reviews()->avg('rating') ?? 0, 1);
        $reviewCount = $product->reviews()->count();


        $related = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('is_active', true) // ✅ 只拿 active
            ->latest()
            ->limit(4)
            ->get();


        return view('shop.show', compact('product', 'related', 'reviews', 'avgRating', 'reviewCount'));
    }
}
