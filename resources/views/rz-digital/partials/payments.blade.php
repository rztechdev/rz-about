@php
    // Logo pembayaran asli (tersimpan lokal di public/images/payments).
    // Tambah/kurangi cukup dengan menambah file SVG lalu daftarkan di sini.
    $payments = [
        ['file' => 'visa.svg',       'name' => 'Visa'],
        ['file' => 'mastercard.svg', 'name' => 'Mastercard'],
        ['file' => 'jcb.svg',        'name' => 'JCB'],
        ['file' => 'amex.svg',       'name' => 'American Express'],
        ['file' => 'paypal.svg',     'name' => 'PayPal'],
        ['file' => 'qris.svg',       'name' => 'QRIS'],
        ['file' => 'ovo.svg',        'name' => 'OVO'],
        ['file' => 'dana.svg',       'name' => 'DANA'],
        ['file' => 'gopay.svg',      'name' => 'GoPay'],
        ['file' => 'shopee.svg',     'name' => 'ShopeePay'],
        ['file' => 'linkaja.svg',    'name' => 'LinkAja'],
        ['file' => 'bca.svg',            'name' => 'Bank BCA'],
        ['file' => 'bni.svg',            'name' => 'Bank BNI'],
        ['file' => 'bri.svg',            'name' => 'Bank BRI'],
        ['file' => 'mandiri.svg',        'name' => 'Bank Mandiri'],
        ['file' => 'mandiri_emoney.svg', 'name' => 'Mandiri e-money'],
        ['file' => 'bsi.svg',            'name' => 'Bank BSI'],
        ['file' => 'tokopedia.svg',      'name' => 'Tokopedia'],
        ['file' => 'alfamart.svg',       'name' => 'Alfamart'],
        ['file' => 'indomaret.svg',      'name' => 'Indomaret'],
    ];
@endphp

<section aria-label="Metode Pembayaran yang Didukung"
         class="relative border-t border-zinc-200 dark:border-zinc-800/80 bg-white dark:bg-zinc-950 py-4 sm:py-5 overflow-hidden transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-3 sm:gap-5">

        <!-- Label tetap -->
        <span class="shrink-0 text-[10px] sm:text-[11px] font-bold font-mono tracking-widest uppercase text-zinc-400 dark:text-zinc-500 select-none">
            Pembayaran
        </span>

        <!-- Track marquee -->
        <div class="rz-pay-marquee relative flex-1 overflow-hidden">
            <!-- Fade kiri & kanan -->
            <div class="pointer-events-none absolute left-0 top-0 bottom-0 w-8 sm:w-14 z-10 bg-gradient-to-r from-white dark:from-zinc-950 to-transparent"></div>
            <div class="pointer-events-none absolute right-0 top-0 bottom-0 w-8 sm:w-14 z-10 bg-gradient-to-l from-white dark:from-zinc-950 to-transparent"></div>

            <div class="rz-pay-track flex items-center gap-3 sm:gap-4 w-max">
                {{-- Dua salinan untuk loop mulus --}}
                @foreach(array_merge($payments, $payments) as $p)
                    <div class="shrink-0 h-9 sm:h-10 px-3 sm:px-4 flex items-center justify-center rounded-xl bg-white border border-zinc-200/80 shadow-sm"
                         title="{{ $p['name'] }}">
                        <img src="{{ asset('images/payments/' . $p['file']) }}"
                             alt="{{ $p['name'] }}"
                             loading="lazy"
                             class="h-4 sm:h-5 w-auto max-w-[70px] sm:max-w-[84px] object-contain">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes rz-pay-scroll {
        from { transform: translateX(0); }
        to   { transform: translateX(-50%); }
    }
    .rz-pay-track {
        animation: rz-pay-scroll 45s linear infinite;
        will-change: transform;
    }
    .rz-pay-marquee:hover .rz-pay-track {
        animation-play-state: paused;
    }
    @media (prefers-reduced-motion: reduce) {
        .rz-pay-track { animation: none; }
    }
</style>
