<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snh — Collection</title>
    <!-- Favicon (logo di tab browser) -->
    <link rel="icon" type="image/jpeg" href="<?= htmlspecialchars(APP_BASE_URL) ?>/images/logo_snh.jpg">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper CSS untuk Carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..700;1,6..96,400..700&family=Inter:wght@300;400;500;600&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-serif-editorial { font-family: 'Bodoni Moda', serif; }
        .font-poppins { font-family: 'Poppins', sans-serif; }
        .swiper-button-next, .swiper-button-prev { color: #000 !important; }
        .swiper-pagination-bullet-active { background: #000 !important; }
        .heroSwiper .swiper-pagination-bullet { background: rgba(255,255,255,.55); opacity: 1; }
        .heroSwiper .swiper-pagination-bullet-active { background: #fff !important; }
        /* CTA toggle untuk touch device */
        #ctaToggle.cta-active .cta-text {
            transform: translateX(-1.5rem);
            opacity: 0;
            pointer-events: none;
        }
        #ctaToggle.cta-active .cta-icons {
            opacity: 1;
            transform: translateX(0);
            pointer-events: auto;
        }
        /* Peta pada section Kontak: tampil hitam-putih elegan, berwarna saat disentuh */
        .map-frame iframe {
            filter: grayscale(1) contrast(1.05) brightness(.94);
            transition: filter .8s ease;
        }
        .map-frame:hover iframe {
            filter: grayscale(0) contrast(1) brightness(1);
        }
    </style>
</head>
<body class="bg-[#FAF9F6] text-neutral-900 antialiased selection:bg-neutral-900 selection:text-white">

    <!-- Header / Navbar -->
    <header class="sticky top-0 z-50 bg-[#FAF9F6]/90 backdrop-blur-md border-b border-neutral-200">
        <div class="w-full px-4 md:px-8 h-14 md:h-20 flex items-center justify-between">
            <a href="#" class="flex items-center">
                <img src="<?= htmlspecialchars(APP_BASE_URL) ?>/images/logo_snh.jpg" alt="Logo Snh" class="h-10 md:h-14">
            </a>
            <nav class="flex items-center space-x-4 md:space-x-8 text-[10px] md:text-xs tracking-widest uppercase font-medium">
                <a href="#hero" class="hover:opacity-60 transition">Home</a>
                <a href="#catalog" class="hover:opacity-60 transition">Koleksi</a>
                <a href="#catalog" id="navKategori" class="hover:opacity-60 transition">Kategori</a>
                <a href="#kontak" class="hover:opacity-60 transition">Kontak</a>
            </nav>
            <div id="ctaToggle" class="group/cta relative hidden lg:flex items-center justify-end h-10 w-60 cursor-pointer">
                <!-- Teks CTA: menggeser ke kiri saat di-hover -->
                <a href="#catalog" class="cta-text absolute right-0 text-xs uppercase tracking-widest border-b border-black pb-1 transition-all duration-500 ease-out group-hover/cta:-translate-x-6 group-hover/cta:opacity-0 group-hover/cta:pointer-events-none">Pesan Sekarang Juga!</a>
                <!-- Ikon sosmed: muncul menggantikan teks -->
                <div class="cta-icons hidden sm:flex items-center gap-2.5 absolute right-0 opacity-0 translate-x-6 pointer-events-none transition-all duration-500 ease-out group-hover/cta:opacity-100 group-hover/cta:translate-x-0 group-hover/cta:pointer-events-auto">
                    <a href="<?= htmlspecialchars(SOCIAL_LINKS['shopee']) ?>" target="_blank" rel="noopener noreferrer" title="Shopee" aria-label="Shopee" class="w-9 h-9 flex items-center justify-center rounded-full bg-white border border-neutral-200 hover:border-neutral-400 transition duration-300">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" aria-hidden="true"><path fill="#EE4D2D" d="M15.9414 17.9633c.229-1.879-.981-3.077-4.1758-4.0969-1.548-.528-2.277-1.22-2.26-2.1719.065-1.056 1.048-1.825 2.352-1.85a5.2898 5.2898 0 0 1 2.8838.89c.116.072.197.06.263-.039.09-.145.315-.494.39-.62.051-.081.061-.187-.068-.281-.185-.1369-.704-.4149-.983-.5319a6.4697 6.4697 0 0 0-2.5118-.514c-1.909.008-3.4129 1.215-3.5389 2.826-.082 1.1629.494 2.1078 1.73 2.8278.262.152 1.6799.716 2.2438.892 1.774.552 2.695 1.5419 2.478 2.6969-.197 1.047-1.299 1.7239-2.818 1.7439-1.2039-.046-2.2878-.537-3.1278-1.19l-.141-.11c-.104-.08-.218-.075-.287.03-.05.077-.376.547-.458.67-.077.108-.035.168.045.234.35.293.817.613 1.134.775a6.7097 6.7097 0 0 0 2.8289.727 4.9048 4.9048 0 0 0 2.0759-.354c1.095-.465 1.8029-1.394 1.9449-2.554zM11.9986 1.4009c-2.068 0-3.7539 1.95-3.8329 4.3899h7.6657c-.08-2.44-1.765-4.3899-3.8328-4.3899zm7.8516 22.5981-.08.001-15.7843-.002c-1.074-.04-1.863-.91-1.971-1.991l-.01-.195L1.298 6.2858a.459.459 0 0 1 .45-.494h4.9748C6.8448 2.568 9.1607 0 11.9996 0c2.8388 0 5.1537 2.5689 5.2757 5.7898h4.9678a.459.459 0 0 1 .458.483l-.773 15.5883-.007.131c-.094 1.094-.979 1.9769-2.0709 2.0059z"/></svg>
                    </a>
                    <a href="<?= htmlspecialchars(SOCIAL_LINKS['tiktok']) ?>" target="_blank" rel="noopener noreferrer" title="TikTok" aria-label="TikTok" class="w-9 h-9 flex items-center justify-center rounded-full bg-white border border-neutral-200 hover:border-neutral-400 transition duration-300">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" aria-hidden="true"><path fill="#25F4EE" transform="translate(-0.5,-0.35)" d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/><path fill="#FE2C55" transform="translate(0.5,0.35)" d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/><path fill="#010101" d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </a>
                    <a href="https://wa.me/<?= htmlspecialchars(WA_NUMBER) ?>" target="_blank" rel="noopener noreferrer" title="WhatsApp" aria-label="WhatsApp" class="w-9 h-9 flex items-center justify-center rounded-full bg-white border border-neutral-200 hover:border-neutral-400 transition duration-300">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" aria-hidden="true"><path fill="#25D366" d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    </a>
                    <a href="<?= htmlspecialchars(SOCIAL_LINKS['instagram']) ?>" target="_blank" rel="noopener noreferrer" title="Instagram" aria-label="Instagram" class="w-9 h-9 flex items-center justify-center rounded-full bg-white border border-neutral-200 hover:border-neutral-400 transition duration-300">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" aria-hidden="true">
                            <rect width="24" height="24" rx="6" fill="url(#igGrad)"/>
                            <g transform="translate(2.4,2.4) scale(0.8)"><path fill="#ffffff" d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section / Lookbook Carousel -->
    <section id="hero" class="relative w-full">
        <div class="swiper heroSwiper w-full aspect-[3/2] rounded-none">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative bg-neutral-100 overflow-hidden">
                    <img src="<?= htmlspecialchars(APP_BASE_URL) ?>/images/hero/editorial-1.jpeg" aria-hidden="true" class="absolute inset-0 w-full h-full object-cover scale-110 blur-2xl brightness-[.55] select-none" alt="">
                    <img src="<?= htmlspecialchars(APP_BASE_URL) ?>/images/hero/editorial-1.jpeg" class="relative w-full h-full object-cover" alt="Busana Syar'i Editorial">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/40 to-transparent flex items-center">
                        <div class="font-poppins text-white max-w-2xl px-4 sm:px-6 md:px-16">
                            <div class="flex items-center gap-3 mb-3 md:mb-5">
                                <span class="block w-8 md:w-14 h-px bg-white/80"></span>
                                <p class="text-[9px] md:text-xs tracking-[0.25em] md:tracking-[0.35em] uppercase">Busana Syar'i Premium</p>
                            </div>
                            <h2 class="text-lg leading-snug sm:text-xl md:text-4xl md:leading-tight lg:text-[44px] font-light">Menjaga Diri dalam Balutan yang Anggun.</h2>
                            <p class="mt-2 md:mt-4 text-[11px] md:text-sm font-light text-white/80 max-w-md leading-relaxed">Kesempurnaan di setiap detail, kenyamanan di setiap langkah.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative bg-neutral-100 overflow-hidden">
                    <img src="<?= htmlspecialchars(APP_BASE_URL) ?>/images/hero/editorial-2.jpeg" aria-hidden="true" class="absolute inset-0 w-full h-full object-cover scale-110 blur-2xl brightness-[.55] select-none" alt="">
                    <img src="<?= htmlspecialchars(APP_BASE_URL) ?>/images/hero/editorial-2.jpeg" class="relative w-full h-full object-cover" alt="Bahan Premium Editorial">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/40 to-transparent flex items-center">
                        <div class="font-poppins text-white max-w-2xl px-4 sm:px-6 md:px-16">
                            <div class="flex items-center gap-3 mb-3 md:mb-5">
                                <span class="block w-8 md:w-14 h-px bg-white/80"></span>
                                <p class="text-[9px] md:text-xs tracking-[0.25em] md:tracking-[0.35em] uppercase">Bahan Premium Pilihan</p>
                            </div>
                            <h2 class="text-lg leading-snug sm:text-xl md:text-4xl md:leading-tight lg:text-[44px] font-light">Adem, Ringan, dan Menutup Sempurna.</h2>
                            <p class="mt-2 md:mt-4 text-[11px] md:text-sm font-light text-white/80 max-w-md leading-relaxed">Serat berkualitas tinggi yang dirancang untuk kenyamanan sepanjang hari.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative bg-neutral-100 overflow-hidden">
                    <img src="<?= htmlspecialchars(APP_BASE_URL) ?>/images/hero/editorial-3.jpeg" aria-hidden="true" class="absolute inset-0 w-full h-full object-cover scale-110 blur-2xl brightness-[.55] select-none" alt="">
                    <img src="<?= htmlspecialchars(APP_BASE_URL) ?>/images/hero/editorial-3.jpeg" class="relative w-full h-full object-cover" alt="Koleksi Terbaru Editorial">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/40 to-transparent flex items-center">
                        <div class="font-poppins text-white max-w-2xl px-4 sm:px-6 md:px-16">
                            <div class="flex items-center gap-3 mb-3 md:mb-5">
                                <span class="block w-8 md:w-14 h-px bg-white/80"></span>
                                <p class="text-[9px] md:text-xs tracking-[0.25em] md:tracking-[0.35em] uppercase">Koleksi Terbaru</p>
                            </div>
                            <h2 class="text-lg leading-snug sm:text-xl md:text-4xl md:leading-tight lg:text-[44px] font-light">Anggun untuk Setiap Momen Berhargamu.</h2>
                            <p class="mt-2 md:mt-4 text-[11px] md:text-sm font-light text-white/80 max-w-md leading-relaxed">Potongan modern dengan sentuhan elegan khas Snh-Collection.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <!-- Navigasi panah kiri-kanan (pojok bawah) -->
            <button class="hero-prev absolute bottom-6 left-4 md:bottom-8 md:left-6 z-10 w-10 h-10 md:w-12 md:h-12 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-md border border-white/30 text-white hover:bg-white/40 hover:scale-110 transition-all duration-300" aria-label="Slide sebelumnya">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button class="hero-next absolute bottom-6 right-4 md:bottom-8 md:right-6 z-10 w-10 h-10 md:w-12 md:h-12 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-md border border-white/30 text-white hover:bg-white/40 hover:scale-110 transition-all duration-300" aria-label="Slide berikutnya">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </section>

    <!-- Catalog Section -->
    <section id="catalog" class="relative w-full px-4 md:px-8 py-20 overflow-hidden">
        <!-- Semburan gradasi lembut di belakang kartu (biar efek kaca terlihat) -->
        <div class="pointer-events-none absolute -top-24 -left-24 w-[28rem] h-[28rem] rounded-full bg-rose-200/40 blur-3xl"></div>
        <div class="pointer-events-none absolute top-1/3 -right-24 w-[26rem] h-[26rem] rounded-full bg-amber-100/50 blur-3xl"></div>
        <div class="relative z-10 flex flex-col md:flex-row md:items-end justify-between mb-12 pb-6 border-b border-neutral-200">
            <div>
                <span class="text-xs tracking-widest uppercase text-neutral-500 block mb-2">Curated Selection</span>
                <h2 class="font-serif-editorial text-3xl md:text-4xl">Essential Apparel</h2>
            </div>
            <p class="text-xs text-neutral-500 max-w-xs mt-4 md:mt-0">Pemesanan Bisa Flexible Dan Cepat</p>
            <div class="mt-4 md:mt-0">
                <label for="categoryFilter" class="sr-only">Filter Kategori</label>
                <select id="categoryFilter" class="text-xs uppercase tracking-widest bg-white border border-neutral-300 rounded-full px-5 py-3 cursor-pointer hover:border-black focus:outline-none focus:border-black transition">
                    <option value="all" selected>Semua Produk</option>
                    <option value="gamis">Gamis Wanita Dewasa</option>
                    <option value="abaya">Abaya</option>
                    <option value="pakaian-muslim-anak-perempuan">Pakaian Muslim Anak Perempuan</option>
                </select>
            </div>
        </div>

        <!-- Product Grid (Gaya galeri Instagram: tile seragam 4:5) -->
        <div class="relative z-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">
            <?php foreach ($products as $product): ?>
                <?php 
                    $formattedPrice = "Rp " . number_format($product['price'], 0, ',', '.');
                    $waText = urlencode("Halo Admin, saya berminat memesan produk berikut:\n\n*Produk:* {$product['name']}\n*Harga:* {$formattedPrice}\n\nApakah stok masih tersedia?");
                    $waUrl = "https://wa.me/{$whatsappNumber}?text={$waText}";
                ?>
                <div class="group flex flex-col rounded-3xl border border-white/70 bg-white/55 backdrop-blur-md shadow-[0_6px_24px_rgba(0,0,0,0.06)] p-4 transition-all duration-300 hover:shadow-[0_10px_36px_rgba(0,0,0,0.10)] hover:border-white hover:-translate-y-1" data-cat="<?= htmlspecialchars($product['category'] ?? 'all') ?>">
                    <div>
                        <div class="js-gallery relative w-full aspect-[4/5] bg-neutral-100 overflow-hidden mb-5 cursor-zoom-in rounded-2xl" data-slug="<?= htmlspecialchars($product['slug']) ?>" title="Klik untuk lihat foto dari berbagai angle">
                            <img 
                                src="<?= htmlspecialchars(APP_BASE_URL . $product['image']) ?>" 
                                alt="<?= htmlspecialchars($product['name']) ?>"
                                class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700 ease-out select-none"
                                loading="lazy"
                            >
                            <?php if (!empty($product['video'])): ?>
                                <!-- Video preview: fade-in & diputar otomatis saat kursor hover di atas gambar -->
                                <video
                                    class="js-video absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-500 pointer-events-none select-none"
                                    src="<?= htmlspecialchars(APP_BASE_URL . $product['video']) ?>"
                                    muted loop playsinline preload="none"
                                ></video>
                            <?php endif; ?>
                            <?php if ($product['stock'] <= 5 && $product['stock'] > 0): ?>
                                <span class="absolute top-3 left-3 bg-white text-[10px] uppercase tracking-wider px-2 py-1 font-medium">Stok Terbatas</span>
                            <?php endif; ?>
                        </div>
                        
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-sm font-medium text-neutral-900 group-hover:underline underline-offset-4 decoration-neutral-400">
                                <?= htmlspecialchars($product['name']) ?>
                            </h3>
                            <span class="text-sm font-semibold text-neutral-900 ml-4 whitespace-nowrap">
                                <?= $formattedPrice ?>
                            </span>
                        </div>
                        
                        <p class="text-xs text-neutral-500 line-clamp-2 mb-6 font-light">
                            <?= htmlspecialchars($product['description']) ?>
                        </p>
                    </div>

                    <!-- Ajakan CTA + Ikon sosmed toko (warna asli brand) -->
                    <div class="mt-auto pt-2">
                        <p class="text-[11px] uppercase tracking-[0.25em] text-neutral-500 text-center mb-3">Udah Siap Belum? Pilih Jalur Favoritmu Untuk Order...</p>
                        <div class="flex items-center justify-center gap-4">
                        <a href="<?= htmlspecialchars(SOCIAL_LINKS['shopee']) ?>" target="_blank" rel="noopener noreferrer" title="Belanja di Shopee" aria-label="Shopee" class="w-14 h-14 flex items-center justify-center rounded-full bg-white border border-neutral-200 hover:scale-110 hover:border-neutral-400 transition duration-300">
                            <svg class="w-7 h-7" viewBox="0 0 24 24" aria-hidden="true"><path fill="#EE4D2D" d="M15.9414 17.9633c.229-1.879-.981-3.077-4.1758-4.0969-1.548-.528-2.277-1.22-2.26-2.1719.065-1.056 1.048-1.825 2.352-1.85a5.2898 5.2898 0 0 1 2.8838.89c.116.072.197.06.263-.039.09-.145.315-.494.39-.62.051-.081.061-.187-.068-.281-.185-.1369-.704-.4149-.983-.5319a6.4697 6.4697 0 0 0-2.5118-.514c-1.909.008-3.4129 1.215-3.5389 2.826-.082 1.1629.494 2.1078 1.73 2.8278.262.152 1.6799.716 2.2438.892 1.774.552 2.695 1.5419 2.478 2.6969-.197 1.047-1.299 1.7239-2.818 1.7439-1.2039-.046-2.2878-.537-3.1278-1.19l-.141-.11c-.104-.08-.218-.075-.287.03-.05.077-.376.547-.458.67-.077.108-.035.168.045.234.35.293.817.613 1.134.775a6.7097 6.7097 0 0 0 2.8289.727 4.9048 4.9048 0 0 0 2.0759-.354c1.095-.465 1.8029-1.394 1.9449-2.554zM11.9986 1.4009c-2.068 0-3.7539 1.95-3.8329 4.3899h7.6657c-.08-2.44-1.765-4.3899-3.8328-4.3899zm7.8516 22.5981-.08.001-15.7843-.002c-1.074-.04-1.863-.91-1.971-1.991l-.01-.195L1.298 6.2858a.459.459 0 0 1 .45-.494h4.9748C6.8448 2.568 9.1607 0 11.9996 0c2.8388 0 5.1537 2.5689 5.2757 5.7898h4.9678a.459.459 0 0 1 .458.483l-.773 15.5883-.007.131c-.094 1.094-.979 1.9769-2.0709 2.0059z"/></svg>
                        </a>
                        <a href="<?= htmlspecialchars(SOCIAL_LINKS['tiktok']) ?>" target="_blank" rel="noopener noreferrer" title="Ikuti di TikTok" aria-label="TikTok" class="w-14 h-14 flex items-center justify-center rounded-full bg-white border border-neutral-200 hover:scale-110 hover:border-neutral-400 transition duration-300">
                            <svg class="w-7 h-7" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill="#25F4EE" transform="translate(-0.5,-0.35)" d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                <path fill="#FE2C55" transform="translate(0.5,0.35)" d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                <path fill="#010101" d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                            </svg>
                        </a>
                        <a href="<?= $waUrl ?>" target="_blank" rel="noopener noreferrer" title="Pesan via WhatsApp" aria-label="WhatsApp" class="w-14 h-14 flex items-center justify-center rounded-full bg-white border border-neutral-200 hover:scale-110 hover:border-neutral-400 transition duration-300">
                            <svg class="w-7 h-7" viewBox="0 0 24 24" aria-hidden="true"><path fill="#25D366" d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </a>
                        <a href="<?= htmlspecialchars(SOCIAL_LINKS['instagram']) ?>" target="_blank" rel="noopener noreferrer" title="Follow di Instagram" aria-label="Instagram" class="w-14 h-14 flex items-center justify-center rounded-full bg-white border border-neutral-200 hover:scale-110 hover:border-neutral-400 transition duration-300">
                            <svg class="w-7 h-7" viewBox="0 0 24 24" aria-hidden="true">
                                <defs>
                                    <radialGradient id="igGrad" cx="30%" cy="107%" r="150%">
                                        <stop offset="0%" stop-color="#fdf497"/>
                                        <stop offset="5%" stop-color="#fdf497"/>
                                        <stop offset="45%" stop-color="#fd5949"/>
                                        <stop offset="60%" stop-color="#d6249f"/>
                                        <stop offset="90%" stop-color="#285AEB"/>
                                    </radialGradient>
                                </defs>
                                <rect width="24" height="24" rx="6" fill="url(#igGrad)"/>
                                <g transform="translate(2.4,2.4) scale(0.8)"><path fill="#ffffff" d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></g>
                            </svg>
                        </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="relative bg-neutral-900 text-white py-24 px-6 my-12 overflow-hidden">
        <!-- Cahaya dekoratif lembut di sudut section -->
        <div class="pointer-events-none absolute -top-40 -left-40 w-[32rem] h-[32rem] rounded-full bg-rose-200/[0.07] blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-40 -right-40 w-[32rem] h-[32rem] rounded-full bg-amber-100/[0.07] blur-3xl"></div>

        <div class="relative z-10 max-w-6xl mx-auto">
            <!-- Kepala section -->
            <div class="text-center mb-14 md:mb-20">
                <span class="text-[10px] md:text-xs tracking-[0.35em] uppercase text-neutral-400 block mb-4">Get In Touch</span>
                <h2 class="font-serif-editorial text-4xl md:text-6xl font-normal">Kontak Kami</h2>
                <div class="flex items-center justify-center gap-3 mt-6" aria-hidden="true">
                    <span class="block w-10 md:w-16 h-px bg-white/25"></span>
                    <span class="block w-1.5 h-1.5 rotate-45 bg-neutral-400"></span>
                    <span class="block w-10 md:w-16 h-px bg-white/25"></span>
                </div>
                <p class="mt-6 text-sm font-light text-neutral-400 max-w-md mx-auto leading-relaxed">
                    Kami senang mendengar dari Anda. Kunjungi showroom kami, atau sapa kami melalui kanal favoritmu.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-stretch">
                <!-- Kolom kiri: detail kontak -->
                <div class="flex flex-col justify-center">

                    <!-- Alamat Showroom -->
                    <div class="group flex items-start gap-5">
                        <div class="shrink-0 w-12 h-12 flex items-center justify-center rounded-full border border-white/15 bg-white/5 text-white group-hover:bg-white group-hover:text-neutral-900 group-hover:border-white transition-all duration-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-[10px] tracking-[0.3em] uppercase text-neutral-500 mb-2">Alamat Showroom</p>
                            <p class="font-poppins text-sm font-light leading-relaxed text-neutral-200"><?= nl2br(htmlspecialchars(STORE_ADDRESS)) ?></p>
                            <a href="<?= htmlspecialchars(MAPS_LINK) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 mt-3 text-[11px] tracking-[0.2em] uppercase border-b border-white/30 pb-1 hover:border-white hover:gap-3 transition-all duration-300">
                                Buka di Google Maps
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12l-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                    </div>

                    <div class="w-full h-px bg-gradient-to-r from-transparent via-white/15 to-transparent my-8" aria-hidden="true"></div>

                    <!-- WhatsApp / Telepon -->
                    <div class="group flex items-start gap-5">
                        <div class="shrink-0 w-12 h-12 flex items-center justify-center rounded-full border border-white/15 bg-white/5 text-white group-hover:bg-white group-hover:text-neutral-900 group-hover:border-white transition-all duration-500">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </div>
                        <div>
                            <p class="text-[10px] tracking-[0.3em] uppercase text-neutral-500 mb-2">WhatsApp / Telepon</p>
                            <p class="font-poppins text-sm font-light text-neutral-200"><?= htmlspecialchars('+' . substr(WA_NUMBER, 0, 2) . ' ' . substr(WA_NUMBER, 2, 3) . '-' . substr(WA_NUMBER, 5, 4) . '-' . substr(WA_NUMBER, 9)) ?></p>
                            <a href="https://wa.me/<?= htmlspecialchars(WA_NUMBER) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 mt-3 text-[11px] tracking-[0.2em] uppercase border-b border-white/30 pb-1 hover:border-white hover:gap-3 transition-all duration-300">
                                Chat Admin Sekarang
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12l-7.5 7.5M21 12H3"/></svg>
                            </a>
                        </div>
                    </div>

                    <div class="w-full h-px bg-gradient-to-r from-transparent via-white/15 to-transparent my-8" aria-hidden="true"></div>

                    <!-- Jam Operasional -->
                    <div class="group flex items-start gap-5">
                        <div class="shrink-0 w-12 h-12 flex items-center justify-center rounded-full border border-white/15 bg-white/5 text-white group-hover:bg-white group-hover:text-neutral-900 group-hover:border-white transition-all duration-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-[10px] tracking-[0.3em] uppercase text-neutral-500 mb-2">Jam Operasional</p>
                            <p class="font-poppins text-sm font-light text-neutral-200"><?= htmlspecialchars(STORE_HOURS) ?></p>
                        </div>
                    </div>

                    <div class="w-full h-px bg-gradient-to-r from-transparent via-white/15 to-transparent my-8" aria-hidden="true"></div>

                    <!-- Media sosial -->
                    <div>
                        <p class="text-[10px] tracking-[0.3em] uppercase text-neutral-500 mb-4">Temukan Kami Di</p>
                        <div class="flex items-center gap-3">
                            <a href="<?= htmlspecialchars(SOCIAL_LINKS['instagram']) ?>" target="_blank" rel="noopener noreferrer" title="Instagram" aria-label="Instagram" class="w-11 h-11 flex items-center justify-center rounded-full border border-white/15 bg-white/5 hover:bg-white hover:border-white hover:scale-110 transition duration-300">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" aria-hidden="true">
                                    <defs>
                                        <radialGradient id="igGradKontak" cx="30%" cy="107%" r="150%">
                                            <stop offset="0%" stop-color="#fdf497"/>
                                            <stop offset="5%" stop-color="#fdf497"/>
                                            <stop offset="45%" stop-color="#fd5949"/>
                                            <stop offset="60%" stop-color="#d6249f"/>
                                            <stop offset="90%" stop-color="#285AEB"/>
                                        </radialGradient>
                                    </defs>
                                    <rect width="24" height="24" rx="6" fill="url(#igGradKontak)"/>
                                    <g transform="translate(2.4,2.4) scale(0.8)"><path fill="#ffffff" d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></g>
                                </svg>
                            </a>
                            <a href="<?= htmlspecialchars(SOCIAL_LINKS['tiktok']) ?>" target="_blank" rel="noopener noreferrer" title="TikTok" aria-label="TikTok" class="w-11 h-11 flex items-center justify-center rounded-full border border-white/15 bg-white/5 hover:bg-white hover:border-white hover:scale-110 transition duration-300">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill="#25F4EE" transform="translate(-0.5,-0.35)" d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                    <path fill="#FE2C55" transform="translate(0.5,0.35)" d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                    <path fill="#010101" d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                </svg>
                            </a>
                            <a href="<?= htmlspecialchars(SOCIAL_LINKS['shopee']) ?>" target="_blank" rel="noopener noreferrer" title="Shopee" aria-label="Shopee" class="w-11 h-11 flex items-center justify-center rounded-full border border-white/15 bg-white/5 hover:bg-white hover:border-white hover:scale-110 transition duration-300">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" aria-hidden="true"><path fill="#EE4D2D" d="M15.9414 17.9633c.229-1.879-.981-3.077-4.1758-4.0969-1.548-.528-2.277-1.22-2.26-2.1719.065-1.056 1.048-1.825 2.352-1.85a5.2898 5.2898 0 0 1 2.8838.89c.116.072.197.06.263-.039.09-.145.315-.494.39-.62.051-.081.061-.187-.068-.281-.185-.1369-.704-.4149-.983-.5319a6.4697 6.4697 0 0 0-2.5118-.514c-1.909.008-3.4129 1.215-3.5389 2.826-.082 1.1629.494 2.1078 1.73 2.8278.262.152 1.6799.716 2.2438.892 1.774.552 2.695 1.5419 2.478 2.6969-.197 1.047-1.299 1.7239-2.818 1.7439-1.2039-.046-2.2878-.537-3.1278-1.19l-.141-.11c-.104-.08-.218-.075-.287.03-.05.077-.376.547-.458.67-.077.108-.035.168.045.234.35.293.817.613 1.134.775a6.7097 6.7097 0 0 0 2.8289.727 4.9048 4.9048 0 0 0 2.0759-.354c1.095-.465 1.8029-1.394 1.9449-2.554zM11.9986 1.4009c-2.068 0-3.7539 1.95-3.8329 4.3899h7.6657c-.08-2.44-1.765-4.3899-3.8328-4.3899zm7.8516 22.5981-.08.001-15.7843-.002c-1.074-.04-1.863-.91-1.971-1.991l-.01-.195L1.298 6.2858a.459.459 0 0 1 .45-.494h4.9748C6.8448 2.568 9.1607 0 11.9996 0c2.8388 0 5.1537 2.5689 5.2757 5.7898h4.9678a.459.459 0 0 1 .458.483l-.773 15.5883-.007.131c-.094 1.094-.979 1.9769-2.0709 2.0059z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kolom kanan: peta lokasi toko -->
                <div class="map-frame relative min-h-[340px] lg:min-h-[520px] rounded-[2rem] overflow-hidden border border-white/10 shadow-[0_24px_70px_rgba(0,0,0,0.5)]">
                    <iframe src="<?= htmlspecialchars(MAPS_EMBED_URL) ?>" class="absolute inset-0 w-full h-full" style="border:0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Peta Lokasi Snh — Collection"></iframe>
                    <div class="absolute top-4 left-4 bg-black/60 backdrop-blur-md border border-white/10 rounded-full px-4 py-2 text-[9px] md:text-[10px] tracking-[0.25em] uppercase text-white/90 pointer-events-none">Snh — Collection Store</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-neutral-200 py-12 w-full px-4 md:px-8 flex flex-col md:flex-row justify-between items-center text-xs text-neutral-500 gap-4">
        <p>&copy; <?= date('Y') ?> RK. All rights reserved.</p>
        <div class="flex space-x-6">
            <a href="#" class="hover:text-black transition">Instagram</a>
            <a href="#" class="hover:text-black transition">TikTok</a>
            <a href="#" class="hover:text-black transition">Terms & Conditions</a>
        </div>
    </footer>

    <!-- Swiper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.heroSwiper', {
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                prevEl: '.hero-prev',
                nextEl: '.hero-next',
            },
        });
    </script>
    <?php
        // Kumpulkan daftar foto/video per produk untuk modal galeri,
        // beserta deskripsi tiap item yang dibaca OTOMATIS dari file .txt
        // bernama sama di folder yang sama (1 media = 1 file .txt).
        $productModel = new ProductModel();
        $galleries = [];
        $galleryDescriptions = [];
        foreach ($products as $gp) {
            $items = !empty($gp['gallery']) ? $gp['gallery'] : [$gp['image']];
            $galleries[$gp['slug']] = $items;
            $galleryDescriptions[$gp['slug']] = $productModel->getGalleryDescriptions($items);
        }
    ?>
    <!-- Modal Galeri Produk -->
    <div id="galleryModal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/90 p-4" role="dialog" aria-modal="true">
        <button id="gmClose" class="absolute top-4 right-6 text-white/70 hover:text-white text-4xl leading-none transition" aria-label="Tutup">&times;</button>
        <button id="gmPrev" class="absolute left-3 md:left-8 text-white/60 hover:text-white text-5xl md:text-6xl font-light select-none transition" aria-label="Foto sebelumnya">&#8249;</button>
        <div class="w-full max-w-3xl">
            <div class="flex items-center justify-center">
                <!-- Container media: diisi elemen <img> atau <video> oleh JavaScript -->
                <div id="gmMain" class="max-h-[70vh] max-w-full flex items-center justify-center select-none overflow-hidden"></div>
            </div>
            <!-- Deskripsi item yang sedang ditampilkan (dibaca dari file .txt) -->
            <p id="gmDesc" class="hidden max-w-xl mx-auto mt-5 px-2 text-center font-poppins text-xs md:text-sm font-light leading-relaxed text-white/70"></p>
            <div id="gmThumbs" class="flex justify-center gap-3 mt-5 overflow-x-auto pb-1"></div>
        </div>
        <button id="gmNext" class="absolute right-3 md:right-8 text-white/60 hover:text-white text-5xl md:text-6xl font-light select-none transition" aria-label="Foto berikutnya">&#8250;</button>
    </div>

    <script>
        // Link "Kategori" di navbar: scroll ke dropdown lalu buka daftarnya otomatis
        document.getElementById('navKategori').addEventListener('click', function () {
            var sel = document.getElementById('categoryFilter');
            sel.classList.add('ring-2', 'ring-black', 'ring-offset-2');
            setTimeout(function () { sel.classList.remove('ring-2', 'ring-black', 'ring-offset-2'); }, 1600);
            setTimeout(function () {
                try { sel.showPicker(); } catch (e) { sel.focus(); }
            }, 600);
        });

        // Filter kategori produk (tanpa reload halaman)
        document.getElementById('categoryFilter').addEventListener('change', function () {
            var pilih = this.value;
            document.querySelectorAll('#catalog [data-cat]').forEach(function (card) {
                card.style.display = (pilih === 'all' || card.dataset.cat === pilih) ? '' : 'none';
            });
        });

        (function () {
            var GALLERIES = <?= json_encode($galleries ?? []) ?>;
            var DESCRIPTIONS = <?= json_encode($galleryDescriptions ?? []) ?>;
            var BASE = "<?= htmlspecialchars(APP_BASE_URL) ?>";
            var list = [], idx = 0, currentSlug = '';
            var modal = document.getElementById('galleryModal');
            var mainImg = document.getElementById('gmMain');
            var thumbsBox = document.getElementById('gmThumbs');

            // Deteksi file video berdasarkan ekstensi (mendukung mp4, webm, ogg, mov, m4v)
            function isVideo(path) {
                return /\.(mp4|webm|ogg|mov|m4v)(\?.*)?$/i.test(path);
            }

            // Buat elemen media: <video> untuk file video, <img> untuk gambar
            function buildMedia(path, cls, withControls) {
                if (isVideo(path)) {
                    var v = document.createElement('video');
                    v.src = full(path);
                    v.className = cls;
                    v.muted = true;
                    v.loop = true;
                    v.playsInline = true;
                    v.preload = 'metadata';
                    if (withControls) v.controls = true;
                    return v;
                }
                var im = document.createElement('img');
                im.src = full(path);
                im.className = cls;
                return im;
            }

            function full(path) {
                return path.indexOf('http') === 0 ? path : BASE + path;
            }

            function show(i) {
                if (!list.length) return;
                idx = (i + list.length) % list.length;
                // Hentikan video sebelumnya (jika ada), lalu render media baru (gambar/video)
                var oldVid = mainImg.querySelector('video');
                if (oldVid) oldVid.pause();
                mainImg.innerHTML = '';
                var media = buildMedia(list[idx], 'max-h-[70vh] max-w-full object-contain', true);
                mainImg.appendChild(media);
                if (media.tagName === 'VIDEO') media.play().catch(function () {});

                // Efek zoom pada gambar: membesar 2x mengikuti titik posisi kursor
                if (media.tagName === 'IMG') {
                    media.style.cursor = 'zoom-in';
                    media.style.transition = 'transform .3s ease';
                    media.addEventListener('mouseenter', function () {
                        media.style.transform = 'scale(2)';
                    });
                    media.addEventListener('mousemove', function (e) {
                        var r = media.getBoundingClientRect();
                        media.style.transformOrigin =
                            (((e.clientX - r.left) / r.width) * 100) + '% ' +
                            (((e.clientY - r.top) / r.height) * 100) + '%';
                    });
                    media.addEventListener('mouseleave', function () {
                        media.style.transform = 'scale(1)';
                    });
                }
                Array.prototype.forEach.call(thumbsBox.children, function (btn, n) {
                    btn.className = 'relative h-16 w-16 shrink-0 border-2 transition ' +
                        (n === idx ? 'border-white opacity-100' : 'border-transparent opacity-50 hover:opacity-90');
                });

                // Tampilkan deskripsi item aktif (sumber: file .txt per media)
                var descEl = document.getElementById('gmDesc');
                var desc = ((DESCRIPTIONS[currentSlug] || [])[idx]) || '';
                if (desc) {
                    descEl.textContent = desc;
                    descEl.classList.remove('hidden');
                } else {
                    descEl.textContent = '';
                    descEl.classList.add('hidden');
                }
            }

            function open(slug) {
                currentSlug = slug;
                list = GALLERIES[slug] || [];
                if (!list.length) return;
                thumbsBox.innerHTML = '';
                list.forEach(function (path, n) {
                    var b = document.createElement('button');
                    b.type = 'button';
                    b.title = ((DESCRIPTIONS[slug] || [])[n]) || '';
                    b.appendChild(buildMedia(path, 'h-16 w-16 object-cover pointer-events-none', false));
                    // Tanda ikon play untuk item yang berupa video
                    if (isVideo(path)) {
                        var badge = document.createElement('span');
                        badge.className = 'absolute inset-0 flex items-center justify-center bg-black/30 pointer-events-none';
                        badge.innerHTML = '<svg class="w-5 h-5 text-white drop-shadow" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>';
                        b.appendChild(badge);
                    }
                    b.addEventListener('click', function () { show(n); });
                    thumbsBox.appendChild(b);
                });
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
                show(0);
            }

            function close() {
                var v = mainImg.querySelector('video');
                if (v) v.pause();
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = '';
            }

            document.querySelectorAll('.js-gallery').forEach(function (el) {
                // Hover pada gambar produk: putar video preview (jika ada), lalu fade-in
                var vid = el.querySelector('.js-video');
                if (vid) {
                    el.addEventListener('mouseenter', function () {
                        vid.play().catch(function () {});
                        vid.classList.remove('opacity-0');
                    });
                    el.addEventListener('mouseleave', function () {
                        vid.pause();
                        vid.classList.add('opacity-0');
                    });
                }
                el.addEventListener('click', function () { open(el.dataset.slug); });
            });
            document.getElementById('gmClose').addEventListener('click', close);
            document.getElementById('gmPrev').addEventListener('click', function () { show(idx - 1); });
            document.getElementById('gmNext').addEventListener('click', function () { show(idx + 1); });
            modal.addEventListener('click', function (e) { if (e.target === modal) close(); });
            document.addEventListener('keydown', function (e) {
                if (modal.classList.contains('hidden')) return;
                if (e.key === 'Escape') close();
                if (e.key === 'ArrowLeft') show(idx - 1);
                if (e.key === 'ArrowRight') show(idx + 1);
            });
        })();

        /* CTA toggle untuk touch device / klik */
        (function () {
            var cta = document.getElementById('ctaToggle');
            if (!cta) return;
            cta.addEventListener('click', function (e) {
                e.stopPropagation();
                this.classList.toggle('cta-active');
            });
            document.addEventListener('click', function (e) {
                if (!cta.contains(e.target)) cta.classList.remove('cta-active');
            });
        })();
    </script>
</body>
</html>
