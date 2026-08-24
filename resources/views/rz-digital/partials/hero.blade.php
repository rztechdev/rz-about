<section id="hero" class="relative pt-40 pb-20 md:pt-56 md:pb-28 bg-white dark:bg-zinc-950 text-[#2E2E2A] dark:text-zinc-100 overflow-hidden transition-colors duration-300">
    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 bg-grid-pattern pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Column: Copy & CTAs -->
            <div class="lg:col-span-7 flex flex-col items-start text-left">
                <!-- Main Headline (efek mengetik / typewriter + kursor) -->
                <h1 id="rz-typewriter" class="relative font-fraunces text-3xl sm:text-4xl lg:text-[44px] font-black text-[#2E2E2A] dark:text-zinc-50 leading-[1.18] sm:leading-[1.15] tracking-tight mb-5">Website Profesional untuk UMKM, <span class="text-[#8B9B70] dark:text-[#A2B187]">Harga Masuk Akal.</span></h1>
                <script>
                    (function () {
                        var h = document.getElementById('rz-typewriter');
                        var hero = document.getElementById('hero');
                        if (!h || !hero) return;
                        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return; // biarkan statis

                        // Ambil segmen (teks biasa + segmen highlight) dari isi asli
                        var segments = [];
                        h.childNodes.forEach(function (node) {
                            if (node.nodeType === 3) segments.push({ text: node.textContent, cls: '' });
                            else if (node.nodeType === 1) segments.push({ text: node.textContent, cls: node.getAttribute('class') || '' });
                        });

                        hero.classList.add('rz-typing'); // sembunyikan elemen bawah selama mengetik
                        h.textContent = '';

                        var chars = [];
                        segments.forEach(function (seg) {
                            seg.text.split(/(\s+)/).forEach(function (part) {
                                if (part === '') return;
                                if (/^\s+$/.test(part)) {
                                    var sp = document.createElement('span');
                                    sp.className = 'tw-char'; sp.dataset.space = '1';
                                    sp.innerHTML = '&nbsp;'; sp.style.opacity = '0';
                                    h.appendChild(sp); chars.push(sp);
                                } else {
                                    var word = document.createElement('span');
                                    word.style.whiteSpace = 'nowrap'; word.style.display = 'inline-block';
                                    if (seg.cls) word.className = seg.cls;
                                    for (var i = 0; i < part.length; i++) {
                                        var c = document.createElement('span');
                                        c.className = 'tw-char'; c.textContent = part[i]; c.style.opacity = '0';
                                        word.appendChild(c); chars.push(c);
                                    }
                                    h.appendChild(word);
                                }
                            });
                        });

                        var cursor = document.createElement('span');
                        cursor.className = 'tw-cursor';
                        h.appendChild(cursor);

                        function moveCursor(el) {
                            var hr = h.getBoundingClientRect(), r = el.getBoundingClientRect();
                            cursor.style.left = (r.right - hr.left) + 'px';
                            cursor.style.top = (r.top - hr.top) + 'px';
                            cursor.style.height = r.height + 'px';
                        }

                        var idx = 0;
                        function type() {
                            if (idx >= chars.length) {
                                hero.classList.remove('rz-typing');
                                hero.classList.add('rz-typed-done'); // munculkan elemen bawah
                                setTimeout(function () { cursor.classList.add('tw-cursor-hide'); }, 1600);
                                return;
                            }
                            var c = chars[idx];
                            c.style.opacity = '1';
                            moveCursor(c);
                            idx++;
                            setTimeout(type, c.dataset.space ? 28 : 45);
                        }

                        setTimeout(type, 350);

                        // Pengaman: bila mengetik gagal/menggantung, tampilkan semua teks & elemen bawah.
                        setTimeout(function () {
                            if (!hero.classList.contains('rz-typed-done')) {
                                chars.forEach(function (c) { c.style.opacity = '1'; });
                                cursor.classList.add('tw-cursor-hide');
                                hero.classList.remove('rz-typing');
                                hero.classList.add('rz-typed-done');
                            }
                        }, 6000);
                    })();
                </script>

                <!-- Subheadline (muncul setelah headline selesai) -->
                <p class="rz-after-stream text-sm sm:text-base text-[#595952] dark:text-zinc-400 font-normal leading-relaxed max-w-xl mb-7">
                    Tampil lebih dipercaya di internet. Desain modern, proses cepat, tanpa istilah teknis yang bikin pusing.
                </p>

                <!-- Dual CTA Buttons -->
                <div class="rz-after-stream flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5 w-full sm:w-auto mb-8" style="animation-delay: 0.15s">
                    <a 
                        href="https://wa.me/6285151699883?text=Halo%20RZ%20Digital%20Creative,%20saya%20ingin%20konsultasi%20pembuatan%20website%20untuk%20usaha%20saya."
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center justify-center gap-2.5 px-6 py-3.5 rounded-full bg-[#8B9B70] hover:bg-[#7A8A60] text-white text-xs sm:text-sm font-bold shadow-md shadow-[#8B9B70]/20 hover:shadow-lg transition-all duration-200 active:scale-95 group rz-focus-ring"
                    >
                        <!-- WhatsApp Icon -->
                        <svg class="w-4.5 h-4.5 text-white group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.969.54 1.777.781 2.796.781 3.182 0 5.768-2.587 5.768-5.766 0-3.18-2.586-5.767-5.768-5.767zm9.969 5.766c0 5.503-4.478 9.98-9.969 9.98-1.745 0-3.376-.453-4.793-1.242L2 22l1.328-4.851C2.474 15.698 2 13.911 2 11.938 2 6.435 6.478 1.958 11.969 1.958c5.491 0 10.031 4.477 10.031 9.98z"/>
                        </svg>
                        <span>Konsultasi Gratis via WhatsApp</span>
                    </a>

                    <a 
                        href="#paket-harga"
                        class="inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-full bg-white dark:bg-zinc-900 hover:bg-zinc-50 dark:hover:bg-zinc-800 text-[#2E2E2A] dark:text-zinc-100 border border-zinc-300 dark:border-zinc-700 text-xs sm:text-sm font-semibold shadow-xs transition-all duration-200 active:scale-95 rz-focus-ring"
                    >
                        <span>Lihat Paket Harga</span>
                        <svg class="w-4 h-4 text-[#8B9B70] dark:text-[#A2B187]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                </div>

                <!-- Trust Badge: layout semula (avatar inisial + rating & review berganti) -->
                <div class="rz-after-stream flex items-center gap-3 pt-4 border-t border-zinc-200 dark:border-zinc-800 w-full" style="animation-delay: 0.3s">
                    <!-- Avatar inisial (huruf, bukan foto orang) -->
                    <div class="flex -space-x-2">
                        @foreach([['R', 'bg-[#8B9B70]'], ['S', 'bg-amber-500'], ['T', 'bg-sky-600'], ['K', 'bg-rose-500']] as $a)
                            <div class="inline-flex h-8 w-8 rounded-full ring-2 ring-white dark:ring-zinc-950 {{ $a[1] }} text-white font-bold text-xs items-center justify-center shadow-xs">{{ $a[0] }}</div>
                        @endforeach
                    </div>

                    <div class="flex flex-col min-w-0">
                        <!-- Baris rating -->
                        <div class="flex items-center gap-1.5 text-xs text-[#2E2E2A] dark:text-zinc-200">
                            <span class="text-amber-400">★★★★★</span>
                            <span class="font-mono font-bold">100% Ramah UMKM</span>
                        </div>

                        <!-- Baris review (berganti cepat, slide kanan → kiri) -->
                        <div
                            x-data="{
                                i: 0,
                                show: true,
                                items: [
                                    'Dipercaya usaha Resto, Salon, Toko & Klinik',
                                    'Website toko online selesai hanya 7 hari',
                                    'Komunikasi santai via WhatsApp, hasil rapi',
                                    'Revisi sampai puas, harga ramah UMKM',
                                    'Usaha jadi mudah ditemukan calon pembeli'
                                ]
                            }"
                            x-init="setInterval(() => { show = false; setTimeout(() => { i = (i + 1) % items.length; show = true }, 180) }, 2200)"
                            class="relative overflow-hidden h-4 mt-0.5">
                            <span x-show="show"
                                  x-transition:enter="transition ease-out duration-300"
                                  x-transition:enter-start="opacity-0 translate-x-5"
                                  x-transition:enter-end="opacity-100 translate-x-0"
                                  x-transition:leave="transition ease-in duration-150 absolute inset-0"
                                  x-transition:leave-start="opacity-100 translate-x-0"
                                  x-transition:leave-end="opacity-0 -translate-x-5"
                                  x-text="items[i]"
                                  class="block text-xs text-[#595952] dark:text-zinc-400 truncate"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Real-World UMKM Website Mockup Visual -->
            <div class="lg:col-span-5 relative rz-reveal-scale rz-delay-2">
                <!-- Outer Decorative Frame -->
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    
                    <!-- Laptop Screen Mockup Frame -->
                    <div class="relative bg-[#2E2E2A] dark:bg-zinc-900 rounded-2xl p-2.5 sm:p-3 shadow-2xl border border-zinc-200 dark:border-zinc-800">
                        <!-- Browser Header Dots -->
                        <div class="flex items-center justify-between px-2 py-1.5 mb-2 bg-[#22221E] dark:bg-zinc-950 rounded-lg">
                            <div class="flex items-center space-x-1.5">
                                <div class="w-2.5 h-2.5 rounded-full bg-red-400/80"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-amber-400/80"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-emerald-400/80"></div>
                            </div>
                            <div class="px-3 py-0.5 rounded-md bg-[#2E2E2A] dark:bg-zinc-900 text-[10px] font-mono text-zinc-400 flex items-center gap-1">
                                <svg class="w-2.5 h-2.5 text-emerald-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                                </svg>
                                <span>tokoroti-berkah.com</span>
                            </div>
                            <div class="w-4"></div>
                        </div>

                        <!-- Mockup Inner Content (Previewing actual UMKM Site) -->
                        <div class="bg-zinc-50 dark:bg-zinc-950/80 rounded-xl overflow-hidden text-[#2E2E2A] dark:text-zinc-100 p-4 sm:p-5 shadow-inner border border-transparent dark:border-zinc-800/60">
                            <!-- Mini Nav -->
                            <div class="flex items-center justify-between pb-3 border-b border-zinc-200 dark:border-zinc-800">
                                <div class="flex items-center gap-2">
                                    <div class="w-5 h-5 rounded-md bg-[#8B9B70] flex items-center justify-center text-white text-[10px] font-bold">🥖</div>
                                    <span class="font-fraunces text-xs font-bold text-[#2E2E2A] dark:text-zinc-100">Kopi & Roti Nusantara</span>
                                </div>
                                <div class="hidden sm:flex items-center gap-2 text-[10px] text-[#595952] dark:text-zinc-400">
                                    <span>Menu</span>
                                    <span>Lokasi</span>
                                    <span class="px-2 py-0.5 rounded-full bg-[#8B9B70] text-white font-medium">Pesan WA</span>
                                </div>
                            </div>

                            <!-- Mini Hero Banner -->
                            <div class="py-4">
                                <span class="text-[9px] font-mono text-[#8B9B70] dark:text-[#A2B187] font-bold uppercase tracking-wider">Fresh Everyday</span>
                                <h3 class="font-fraunces text-base sm:text-lg font-bold text-[#2E2E2A] dark:text-zinc-100 leading-tight mt-0.5">
                                    Roti Artisan & Kopi Susu Aren Asli
                                </h3>
                                <p class="text-[11px] text-[#595952] dark:text-zinc-400 mt-1 leading-snug">
                                    Dibuat segar setiap pagi tanpa bahan pengawet. Tersedia pesan online antar langsung ke rumah.
                                </p>
                            </div>

                            <!-- Mini Product Grid -->
                            <div class="grid grid-cols-2 gap-2 pt-1">
                                <div class="bg-white dark:bg-zinc-900 p-2 rounded-lg border border-zinc-200 dark:border-zinc-800 flex items-center gap-2">
                                    <div class="w-8 h-8 rounded bg-[#A2B187]/20 flex items-center justify-center text-sm">🥐</div>
                                    <div>
                                        <div class="text-[10px] font-bold text-[#2E2E2A] dark:text-zinc-100">Butter Croissant</div>
                                        <div class="text-[9px] font-mono text-[#8B9B70] dark:text-[#A2B187]">Rp 18.000</div>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-zinc-900 p-2 rounded-lg border border-zinc-200 dark:border-zinc-800 flex items-center gap-2">
                                    <div class="w-8 h-8 rounded bg-[#A2B187]/20 flex items-center justify-center text-sm">☕</div>
                                    <div>
                                        <div class="text-[10px] font-bold text-[#2E2E2A] dark:text-zinc-100">Es Kopi Aren</div>
                                        <div class="text-[9px] font-mono text-[#8B9B70] dark:text-[#A2B187]">Rp 22.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Mobile Screen Mockup Card -->
                    <div class="absolute -bottom-8 -right-4 sm:-right-6 w-44 sm:w-48 bg-[#2E2E2A] dark:bg-zinc-900 rounded-2xl p-2 shadow-2xl border border-zinc-200 dark:border-zinc-800 animate-ribbon-drift">
                        <div class="bg-white dark:bg-zinc-950 rounded-xl p-3 text-[#2E2E2A] dark:text-zinc-100">
                            <div class="flex items-center gap-2 pb-2 border-b border-zinc-200 dark:border-zinc-800">
                                <div class="w-4 h-4 rounded-full bg-emerald-500 flex items-center justify-center text-white text-[8px]">✓</div>
                                <span class="text-[10px] font-bold font-mono">Chat Langsung</span>
                            </div>
                            <div class="py-2 text-[10px] leading-tight text-[#595952] dark:text-zinc-400">
                                "Website ini dibuat oleh <span class="text-[#8B9B70] dark:text-[#A2B187] font-bold">RZ Digital</span> dalam 5 hari!"
                            </div>
                            <div class="bg-[#8B9B70] text-white text-[9px] font-bold py-1 px-2 rounded-md text-center">
                                Cepat & Tanpa Ribet
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<style>
    @keyframes rz-word-in { from { opacity: 0; transform: translateY(0.35em); } to { opacity: 1; transform: none; } }
    @keyframes tw-blink { 0%, 49% { opacity: 1; } 50%, 100% { opacity: 0; } }

    /* Kursor "garis" mengetik */
    #hero .tw-cursor {
        position: absolute;
        width: 3px;
        background: #8B9B70;
        border-radius: 2px;
        left: 0; top: 0;
        animation: tw-blink 1s steps(1) infinite;
        pointer-events: none;
    }
    #hero .tw-cursor-hide { opacity: 0 !important; animation: none; transition: opacity 0.3s; }

    /* Elemen bawah disembunyikan selama mengetik, muncul setelah selesai */
    #hero.rz-typing .rz-after-stream { opacity: 0; }
    #hero.rz-typed-done .rz-after-stream {
        opacity: 0;
        animation: rz-word-in 0.5s ease forwards;
    }
</style>
