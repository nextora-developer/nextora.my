@php
    $rating = (int) ($r['rating'] ?? 5);
    $name = $r['name'] ?? 'Customer';
    $title = $r['title'] ?? '';
    $body = $r['body'] ?? '';
    $meta = $r['meta'] ?? 'Verified Buyer';
    $initial = mb_strtoupper(mb_substr($name, 0, 1));
@endphp

<div class="group relative h-full rounded-[2.5rem] border border-black/[0.06] bg-white p-2 transition-all duration-500 hover:border-[#D4AF37]/30 hover:shadow-[0_32px_64px_-16px_rgba(212,175,55,0.1)]">
    
    {{-- Decorative Background Element --}}
    <div class="absolute top-0 right-0 -mr-2 -mt-2 h-24 w-24 rounded-full bg-[#D4AF37]/5 blur-2xl transition-opacity group-hover:opacity-100 opacity-0"></div>

    <div class="relative flex h-full flex-col overflow-hidden rounded-[2.2rem] bg-white p-8">
        
        {{-- Header: Avatar & Name --}}
        <div class="flex items-start justify-between">
            <div class="flex items-center gap-4">
                <div class="relative">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-[#1a1a1a] to-[#333] text-white shadow-lg shadow-black/10">
                        <span class="text-sm font-bold tracking-tighter">{{ $initial }}</span>
                    </div>
                    {{-- Floating Verified Badge --}}
                    <div class="absolute -bottom-1 -right-1 flex h-5 w-5 items-center justify-center rounded-full bg-white shadow-sm">
                        <svg class="h-3.5 w-3.5 text-[#D4AF37]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-[15px] font-extrabold text-[#0B0B0B]">{{ $name }}</h3>
                    <div class="flex items-center gap-1.5 mt-0.5">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-[#D4AF37]">Premium Member</span>
                    </div>
                </div>
            </div>

            {{-- Large Elegant Quote Icon --}}
            <svg class="h-8 w-8 text-black/[0.04] transition-colors group-hover:text-[#D4AF37]/10" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V12C14.017 12.5523 13.5693 13 13.017 13H11.017C10.4647 13 10.017 12.5523 10.017 12V9C10.017 6.79086 11.8079 5 14.017 5H19.017C21.2261 5 23.017 6.79086 23.017 9V15C23.017 18.3137 20.3307 21 17.017 21H14.017ZM1.017 21L1.017 18C1.017 16.8954 1.91243 16 3.017 16H6.017C6.56928 16 7.017 15.5523 7.017 15V9C7.017 8.44772 6.56928 8 6.017 8H2.017C1.46472 8 1.017 8.44772 1.017 9V12C1.017 12.5523 0.569282 13 0.017 13H-1.983C-2.53528 13 -2.983 12.5523 -2.983 12V9C-2.983 6.79086 -1.19214 5 1.017 5H6.017C8.22614 5 10.017 6.79086 10.017 9V15C10.017 18.3137 7.33071 21 4.017 21H1.017Z" />
            </svg>
        </div>

        {{-- Star Rating --}}
        <div class="mt-8 flex items-center gap-1">
            @for ($i = 1; $i <= 5; $i++)
                <svg class="h-3.5 w-3.5 {{ $i <= $rating ? 'text-[#D4AF37]' : 'text-black/5' }}" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
            @endfor
        </div>

        {{-- Content --}}
        <div class="mt-4 flex-1">
            @if ($title)
                <h4 class="text-[17px] font-bold text-[#0B0B0B] leading-tight mb-3">
                    {{ $title }}
                </h4>
            @endif
            
            <div class="relative">
                {{-- Side accent line --}}
                <div class="absolute left-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-[#D4AF37]/40 to-transparent -ml-4"></div>
                <p class="text-[14px] text-gray-500 leading-[1.7] font-medium tracking-tight">
                    "{{ $body }}"
                </p>
            </div>
        </div>

        {{-- Footer --}}
        <div class="mt-8 flex items-center justify-between border-t border-black/[0.04] pt-6">
            <div class="flex items-center gap-2">
                <span class="flex h-2 w-2 rounded-full bg-[#D4AF37]"></span>
                <span class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400">
                    Verified Purchase
                </span>
            </div>
            
            <div class="flex -space-x-1">
                @for ($i = 0; $i < 3; $i++)
                    <div class="h-1.5 w-1.5 rounded-full border border-white bg-gray-200"></div>
                @endfor
            </div>
        </div>
    </div>
</div>