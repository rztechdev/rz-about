<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Primary SEO Meta Tags -->
    <title>RZ Digital Creative — Jasa Pembuatan Website Profesional Khusus UMKM Indonesia</title>
    <meta name="title" content="RZ Digital Creative — Jasa Pembuatan Website Profesional Khusus UMKM Indonesia">
    <meta name="description" content="Jasa pembuatan website profesional, estetik, dan terjangkau untuk UMKM Indonesia. Mulai dari Landing Page, Company Profile, hingga Toko Online dengan proses cepat 5-10 hari.">
    <meta name="keywords" content="jasa website umkm, bikin website toko, company profile murah, web developer indonesia, rz digital creative, website cepat">
    <meta name="author" content="RZ Digital Creative">
    <meta name="theme-color" content="#A2B187">

    <!-- Favicon & Brand Icons -->
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo_rz_teks.jpeg') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo_rz_teks.jpeg') }}">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="RZ Digital Creative — Jasa Pembuatan Website Khusus UMKM">
    <meta property="og:description" content="Website profesional untuk usaha Anda dengan harga masuk akal. Tanpa istilah teknis ribet, selesai 5-10 hari kerja.">
    <meta property="og:image" content="{{ asset('images/logo_rz_teks.jpeg') }}">

    <!-- Google Fonts: Inter, JetBrains Mono, Material Symbols Outlined -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=JetBrains+Mono:ital,wght@0,400;0,500;0,600;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Early theme check to prevent FOUC (matching rz - portal-client) -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Typography overrides to match rz - portal-client */
        .font-fraunces {
            font-family: 'Inter', sans-serif;
        }
        .font-mono {
            font-family: 'JetBrains Mono', monospace;
        }
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>
<body x-data="themeHandler" class="bg-white dark:bg-zinc-950 text-[#2E2E2A] dark:text-zinc-100 antialiased selection:bg-[#A2B187] selection:text-white min-h-screen flex flex-col relative overflow-x-hidden transition-colors duration-300">

    <!-- Decorative Clean Grid Pattern (matching rz - portal-client) -->
    <div class="fixed inset-0 bg-grid-pattern pointer-events-none z-0"></div>

    <!-- 1. Navbar -->
    @include('rz-digital.partials.navbar')

    <!-- Main One-Page Content Flow -->
    <main class="flex-grow">
        <!-- 2. Hero Section -->
        @include('rz-digital.partials.hero')

        <!-- 3. Problem/Agitate Section -->
        @include('rz-digital.partials.problem')

        <!-- 4. Layanan Section -->
        @include('rz-digital.partials.services')

        <!-- 5. Proses Kerja Section -->
        @include('rz-digital.partials.process')

        <!-- 6. Kenapa Pilih Kami Section -->
        @include('rz-digital.partials.why-us')

        <!-- 7. Paket & Harga Section -->
        @include('rz-digital.partials.pricing')

        <!-- 8. FAQ Section -->
        @include('rz-digital.partials.faq')

        <!-- 9. Client Spotlight Placeholder -->
        @include('rz-digital.partials.spotlight')

        <!-- 10. Final CTA Section -->
        @include('rz-digital.partials.cta')
    </main>

    <!-- 11. Footer -->
    @include('rz-digital.partials.footer')

    <!-- Floating WhatsApp Action Button -->
    <div class="fixed bottom-6 right-6 z-40">
        <a 
            href="https://wa.me/6285151699883?text=Halo%20RZ%20Digital%20Creative,%20saya%20tertarik%20untuk%20konsultasi%20pembuatan%20website."
            target="_blank"
            rel="noopener noreferrer"
            class="flex items-center gap-2.5 px-4 py-3 rounded-full bg-[#25D366] hover:bg-[#20bd5a] text-white shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105 active:scale-95 group border-2 border-white/80 dark:border-zinc-800"
            aria-label="Chat WhatsApp Langsung"
        >
            <svg class="w-6 h-6 group-hover:rotate-12 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.969.54 1.777.781 2.796.781 3.182 0 5.768-2.587 5.768-5.766 0-3.18-2.586-5.767-5.768-5.767zm9.969 5.766c0 5.503-4.478 9.98-9.969 9.98-1.745 0-3.376-.453-4.793-1.242L2 22l1.328-4.851C2.474 15.698 2 13.911 2 11.938 2 6.435 6.478 1.958 11.969 1.958c5.491 0 10.031 4.477 10.031 9.98z"/>
            </svg>
            <span class="hidden sm:inline font-bold text-xs">Konsultasi WA</span>
        </a>
    </div>

    <!-- Scroll Reveal Observer Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const revealSelector = '.rz-reveal-up, .rz-reveal-scale, .rz-reveal-left, .rz-reveal-right, .rz-reveal-tilt';
            const revealElements = document.querySelectorAll(revealSelector);
            
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries, obs) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('rz-revealed');
                            obs.unobserve(entry.target);
                        }
                    });
                }, {
                    root: null,
                    rootMargin: '0px 0px -30px 0px',
                    threshold: 0.08
                });

                revealElements.forEach(el => observer.observe(el));
            } else {
                revealElements.forEach(el => el.classList.add('rz-revealed'));
            }
        });
    </script>

</body>
</html>
