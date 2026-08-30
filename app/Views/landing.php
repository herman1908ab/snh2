<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HERMèNS — Essential Collection</title>
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
    </style>
</head>
<body class="bg-[#FAF9F6] text-neutral-900 antialiased selection:bg-neutral-900 selection:text-white">

    <!-- Header / Navbar -->
    <header class="sticky top-0 z-50 bg-[#FAF9F6]/90 backdrop-blur-md border-b border-neutral-200">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#" class="flex items-center">
                <img src="<?= htmlspecialchars(APP_BASE_URL) ?>/images/logo_snh.jpg" alt="Logo HERMèNS" class="h-12 w-auto md:h-14">
            </a>
            <nav class="hidden md:flex space-x-8 text-xs tracking-widest uppercase font-medium">
                <a href="#hero" class="hover:opacity-60 transition">Home</a>
                <a href="#catalog" class="hover:opacity-60 transition">Lihat Koleksi</a>
                <a href="#about" class="hover:opacity-60 transition">Filosopi</a>
            </nav>
            <div>
                <a href="#catalog" class="text-xs uppercase tracking-widest border-b border-black pb-1 hover:opacity-60 transition">Shop Now</a>
            </div>
        </div>
    </header>

    <!-- Hero Section / Lookbook Carousel -->
    <section id="hero" class="relative max-w-7xl mx-auto px-6 py-8">
        <div class="swiper heroSwiper w-full h-[65vh] md:h-[80vh] rounded-none">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative bg-neutral-100 overflow-hidden">
                    <img src="<?= htmlspecialchars(APP_BASE_URL) ?>/images/hero/editorial-1.jpeg" aria-hidden="true" class="absolute inset-0 w-full h-full object-cover scale-110 blur-2xl brightness-[.55] select-none" alt="">
                    <img src="<?= htmlspecialchars(APP_BASE_URL) ?>/images/hero/editorial-1.jpeg" class="relative w-full h-full object-contain" alt="Busana Syar'i Editorial">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent flex items-end">
                        <div class="font-poppins text-white max-w-2xl px-8 pb-12 md:px-16 md:pb-16">
                            <div class="flex items-center gap-4 mb-4 md:mb-5">
                                <span class="block w-10 md:w-14 h-px bg-white/80"></span>
                                <p class="text-[10px] md:text-xs tracking-[0.35em] uppercase">Busana Syar'i Premium</p>
                            </div>
                            <h2 class="text-[26px] leading-snug md:text-4xl md:leading-tight lg:text-[44px] font-light">Menjaga Diri dalam Balutan yang Anggun.</h2>
                            <p class="mt-3 md:mt-4 text-xs md:text-sm font-light text-white/80 max-w-md leading-relaxed">Kesempurnaan di setiap detail, kenyamanan di setiap langkah.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative bg-neutral-100 overflow-hidden">
                    <img src="<?= htmlspecialchars(APP_BASE_URL) ?>/images/hero/editorial-2.jpeg" aria-hidden="true" class="absolute inset-0 w-full h-full object-cover scale-110 blur-2xl brightness-[.55] select-none" alt="">
                    <img src="<?= htmlspecialchars(APP_BASE_URL) ?>/images/hero/editorial-2.jpeg" class="relative w-full h-full object-contain" alt="Bahan Premium Editorial">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent flex items-end">
                        <div class="font-poppins text-white max-w-2xl px-8 pb-12 md:px-16 md:pb-16">
                            <div class="flex items-center gap-4 mb-4 md:mb-5">
                                <span class="block w-10 md:w-14 h-px bg-white/80"></span>
                                <p class="text-[10px] md:text-xs tracking-[0.35em] uppercase">Bahan Premium Pilihan</p>
                            </div>
                            <h2 class="text-[26px] leading-snug md:text-4xl md:leading-tight lg:text-[44px] font-light">Adem, Ringan, dan Menutup Sempurna.</h2>
                            <p class="mt-3 md:mt-4 text-xs md:text-sm font-light text-white/80 max-w-md leading-relaxed">Serat berkualitas tinggi yang dirancang untuk kenyamanan sepanjang hari.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative bg-neutral-100 overflow-hidden">
                    <img src="<?= htmlspecialchars(APP_BASE_URL) ?>/images/hero/editorial-3.jpeg" aria-hidden="true" class="absolute inset-0 w-full h-full object-cover scale-110 blur-2xl brightness-[.55] select-none" alt="">
                    <img src="<?= htmlspecialchars(APP_BASE_URL) ?>/images/hero/editorial-3.jpeg" class="relative w-full h-full object-contain" alt="Koleksi Terbaru Editorial">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/25 to-transparent flex items-end">
                        <div class="font-poppins text-white max-w-2xl px-8 pb-12 md:px-16 md:pb-16">
                            <div class="flex items-center gap-4 mb-4 md:mb-5">
                                <span class="block w-10 md:w-14 h-px bg-white/80"></span>
                                <p class="text-[10px] md:text-xs tracking-[0.35em] uppercase">Koleksi Terbaru</p>
                            </div>
                            <h2 class="text-[26px] leading-snug md:text-4xl md:leading-tight lg:text-[44px] font-light">Anggun untuk Setiap Momen Berhargamu.</h2>
                            <p class="mt-3 md:mt-4 text-xs md:text-sm font-light text-white/80 max-w-md leading-relaxed">Potongan modern dengan sentuhan elegan khas HERMèNS.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Catalog Section -->
    <section id="catalog" class="max-w-7xl mx-auto px-6 py-20">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 pb-6 border-b border-neutral-200">
            <div>
                <span class="text-xs tracking-widest uppercase text-neutral-500 block mb-2">Curated Selection</span>
                <h2 class="font-serif-editorial text-3xl md:text-4xl">Essential Apparel</h2>
            </div>
            <p class="text-xs text-neutral-500 max-w-xs mt-4 md:mt-0">Pemesanan Bisa Flexible Dan Cepat</p>
        </div>

        <!-- Product Grid (Masonry - gambar tampil utuh sesuai orientasi aslinya) -->
        <div class="columns-1 md:columns-2 lg:columns-3 gap-x-8">
            <?php foreach ($products as $product): ?>
                <?php 
                    $formattedPrice = "Rp " . number_format($product['price'], 0, ',', '.');
                    $waText = urlencode("Halo Admin, saya berminat memesan produk berikut:\n\n*Produk:* {$product['name']}\n*Harga:* {$formattedPrice}\n\nApakah stok masih tersedia?");
                    $waUrl = "https://wa.me/{$whatsappNumber}?text={$waText}";
                ?>
                <div class="group break-inside-avoid mb-8 w-full inline-block">
                    <div>
                        <div class="relative w-full bg-neutral-100 overflow-hidden mb-5">
                            <img 
                                src="<?= htmlspecialchars(APP_BASE_URL . $product['image']) ?>" 
                                alt="<?= htmlspecialchars($product['name']) ?>"
                                class="w-full h-auto group-hover:scale-105 transition duration-700 ease-out"
                                loading="lazy"
                            >
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

                    <a 
                        href="<?= $waUrl ?>" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="w-full bg-black text-white text-xs uppercase tracking-widest py-4 text-center font-medium hover:bg-neutral-800 transition duration-300 block"
                    >
                        Pesan via WhatsApp
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Brand Philosophy / About -->
    <section id="about" class="bg-neutral-900 text-white py-24 px-6 my-12">
        <div class="max-w-3xl mx-auto text-center">
            <span class="text-xs tracking-widest uppercase text-neutral-400 block mb-4">Our Philosophy</span>
            <h2 class="font-serif-editorial text-3xl md:text-5xl font-normal leading-relaxed mb-6">"Buy less, choose well, make it last."</h2>
            <p class="text-sm font-light text-neutral-400 leading-relaxed max-w-xl mx-auto">
                Setiap helai benang diproses tanpa kompromi. Kami percaya bahwa pakaian seharusnya meningkatkan rasa percaya diri tanpa mengorbankan kenyamanan.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-neutral-200 py-12 max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-xs text-neutral-500 gap-4">
        <p>&copy; <?= date('Y') ?> HERMèNS. All rights reserved.</p>
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
        });
    </script>
</body>
</html>
