<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentMethod;

class PaymentMethodSeeder extends Seeder
{
    public function run(): void
    {
        /**
         * 1️⃣ Online / Bank Transfer
         */
        PaymentMethod::updateOrCreate(
            ['code' => 'online_transfer'],
            [
                'name'                => 'Online Transfer',
                'short_description'   => 'Transfer to our company bank account & upload receipt',
                'is_active'           => true,
                'is_default'          => true,

                'bank_name'           => 'Maybank',
                'bank_account_name'   => 'NEXTORA ENTERPRISE',
                'bank_account_number' => '00000000000000',

                'duitnow_qr_path'     => null,
                'instructions'        => 'Please transfer the total amount and upload your payment receipt.',
            ]
        );

        /**
         * 2️⃣ Revenue Monster (Online Payment / E-Wallet)
         */
        PaymentMethod::updateOrCreate(
            ['code' => 'revenue_monster'],
            [
                'name'              => 'Revenue Monster',
                'short_description' => 'Pay securely via Touch ’n Go, GrabPay, ShopeePay, FPX & more',
                'is_active'         => true,
                'is_default'        => false,

                // ❌ 不需要银行信息
                'bank_name'           => null,
                'bank_account_name'   => null,
                'bank_account_number' => null,
                'duitnow_qr_path'     => null,

                'instructions' => 'You will be redirected to a secure payment page to complete your payment.',
            ]
        );

        /**
         * 3️⃣ HitPay
         */
        PaymentMethod::updateOrCreate(
            ['code' => 'hitpay'],
            [
                'name'              => 'HitPay',
                'short_description' => 'Pay via FPX, cards, eWallets (HitPay gateway)',
                'is_active'         => true,
                'is_default'        => false,

                'bank_name'           => null,
                'bank_account_name'   => null,
                'bank_account_number' => null,
                'duitnow_qr_path'     => null,

                'instructions' => 'You will be redirected to HitPay secure payment page to complete your payment.',
            ]
        );

        /**
         * 4️⃣ CommercePay
         */
        PaymentMethod::updateOrCreate(
            ['code' => 'commercepay'],
            [
                'name'              => 'CommercePay',
                'short_description' => 'Pay via cards, FPX & supported banks (CommercePay)',
                'is_active'         => true,
                'is_default'        => false,

                'bank_name'           => null,
                'bank_account_name'   => null,
                'bank_account_number' => null,
                'duitnow_qr_path'     => null,

                'instructions' => 'You will be redirected to CommercePay secure payment page to complete your payment.',
            ]
        );
    }
}
