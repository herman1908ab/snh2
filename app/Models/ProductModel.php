<?php

class ProductModel
{
    /**
     * Katalog produk statis (tanpa database).
     * Tambah / ubah / hapus produk langsung pada array ini.
     * Path gambar relatif ke folder public/ (contoh: public/images/products/nama-file.jpg).
     */
    private static array $products = [
        [
            'id' => 1,
            'name' => 'Gamis Wanita Kekinian Abaya Humaira Dress Syari',
            'slug' => 'oversized-heavyweight-tee-white',
            'category' => 'abaya',
            'price' => 249000.00,
            'image' => '/images/products/abaya/GWK_Abaya_Humaira_Thumb.png',
            // Video preview yang diputar saat kursor hover di atas gambar produk (test: hanya produk id 1).
            'video' => '/images/products/abaya/Angel_abaya1/Abaya1_vid.mp4',
            // Foto dari berbagai angle untuk modal. Ganti path sesuai foto milikmu.
            'gallery' => [
                '/images/products/abaya/GWK_Abaya_Humaira_ANGEL/GWK Abaya humaira detail.png',
                '/images/products/abaya/GWK_Abaya_Humaira_ANGEL/GWK Abaya humaira display.jpeg',
                '/images/products/abaya/GWK_Abaya_Humaira_ANGEL/GWK_Abaya_humaira_studio.png',
                '/images/products/abaya/GWK_Abaya_Humaira_ANGEL/GWK_Abaya_humaira_outdoor.png',
                '/images/products/abaya/GWK_Abaya_Humaira_ANGEL/Abaya1_vid.mp4',
            ],
            'description' => 'Katun 24s combed tebal dengan potongan ala Pakistan.',
            'stock' => 25,
        ],
        [
            'id' => 2,
            'name' => 'GWA Nadya Syari Resleting Busui',
            'slug' => 'minimalist-pleated-trousers-charcoal',
            'category' => 'abaya',
            'price' => 499000.00,
            'image' => '/images/products/abaya/GWA nadya syari resleting busui_Thumb.png',
            'gallery' => [
                '/images/products/abaya/GWA nadya syari resleting busui_ANGEL/GWA nadya syari resleting busui_1.png',
                '/images/products/abaya/GWA nadya syari resleting busui_ANGEL/GWA nadya syari resleting busui_close-up_1.png',
                '/images/products/abaya/GWA nadya syari resleting busui_ANGEL/GWA nadya syari resleting busui_outdor (3).jpeg',
                '/images/products/abaya/GWA nadya syari resleting busui_ANGEL/GWA nadya syari resleting busui_studio.png',
                '/images/products/abaya/GWA nadya syari resleting busui_ANGEL/GWA nadya syari resleting busui_Thumb.png',
            ],
            'description' => 'Berbagai macam aksesoris dengan potongan yang modern ke-kinian.',
            'stock' => 10,
        ],
        [
            'id' => 3,
            'name' => 'Kaftan Wanita Gamis Abaya Zifana Syari Bling Kancing Busui',
            'slug' => 'minimalist-pleated-trousers-charcoal',
            'category' => 'abaya',
            'price' => 499000.00,
            'image' => '/images/products/abaya/GWA zifana syari_Thumb.png',
            'gallery' => [
                '/images/products/abaya/Kaftan Wanita Gamis Abaya Zifana Syari Bling Kancing Busui_Angel/GWA zifana syari_close-up (1).jpeg',
                '/images/products/abaya/Kaftan Wanita Gamis Abaya Zifana Syari Bling Kancing Busui_Angel/GWA zifana syari_display(4).jpeg',
                '/images/products/abaya/Kaftan Wanita Gamis Abaya Zifana Syari Bling Kancing Busui_Angel/Kaftan Wanita Gamis Abaya Zifana Syari Bling Kancing Busui.png',
                '/images/products/abaya/Kaftan Wanita Gamis Abaya Zifana Syari Bling Kancing Busui_Angel/GWA zifana syari_Thumb.png',
            ],
            'description' => 'Berbagai macam aksesoris dengan potongan yang modern ke-kinian.',
            'stock' => 10,
        ],
        [
            'id' => 4,
            'name' => 'Gamis Wanita Nailal Dress Syari',
            'slug' => 'minimalist-pleated-trousers-charcoal',
            'category' => 'abaya',
            'price' => 499000.00,
            'image' => '/images/products/abaya/Gamis Wanita Nailal Dress Syari_Thumbnil.png',
            'gallery' => [
                '/images/products/abaya/Gamis Wanita Nailal Dress Syari_Angel/GWN_Dress Syari_DISPLAY(2).jpg',
                '/images/products/abaya/Gamis Wanita Nailal Dress Syari_Angel/GWN_Dress Syari_OUTDOR (5).png',
                '/images/products/abaya/Gamis Wanita Nailal Dress Syari_Angel/GWN_Dress Syari_STUDIO_15.png',
                '/images/products/abaya/Gamis Wanita Nailal Dress Syari_Angel/GWN_Dress Syari_Thumbnil.png',
                '/images/products/abaya/Gamis Wanita Nailal Dress Syari_Angel/GWN_DRESS_SYARI_CLOSEUP_DPN.png',
            ],
            'description' => 'Berbagai macam aksesoris dengan potongan yang modern ke-kinian.',
            'stock' => 10,
        ],
        [
            'id' => 5,
            'name' => 'Gamis Wanita Bling Dress Zulfa Syari Resleting Emas Busui',
            'slug' => 'Gamis Wanita Bling Dress Zulfa Syari Resleting Emas Busui_Angel',
            'category' => 'gamis',
            'price' => 259000.00,
            'image' => '/images/products/gamis-wanita-dewasa/Gamis Wanita Bling Dress Zulfa05 Syari Resleting Emas Busui.jpeg',
            'gallery' => [
                '/images/products/gamis-wanita-dewasa/1.Gamis Wanita Bling Dress Zulfa05 Syari Resleting Emas Busui_Angel/Gamis Wanita Bling Dress Zulfa05 Syari Resleting Emas Busui_studio.jpeg',
                '/images/products/gamis-wanita-dewasa/1.Gamis Wanita Bling Dress Zulfa05 Syari Resleting Emas Busui_Angel/GWD_Bling_Dress_Zulfa05_Syari_DISPLAY (4).jpg',
                '/images/products/gamis-wanita-dewasa/1.Gamis Wanita Bling Dress Zulfa05 Syari Resleting Emas Busui_Angel/GWD_Bling_Dress_Zulfa05_Syari_DISPLAY (3).jpg',
                '/images/products/gamis-wanita-dewasa/1.Gamis Wanita Bling Dress Zulfa05 Syari Resleting Emas Busui_Angel/GWD_Bling_Dress_Zulfa05_Syari_DISPLAY (2).jpg',
                '/images/products/gamis-wanita-dewasa/1.Gamis Wanita Bling Dress Zulfa05 Syari Resleting Emas Busui_Angel/GWB Dress Zulafa05 closeup  (4).jpg',
                '/images/products/gamis-wanita-dewasa/1.Gamis Wanita Bling Dress Zulfa05 Syari Resleting Emas Busui_Angel/GWB Dress Zulafa05 closeup  (2).jpg',
                '/images/products/gamis-wanita-dewasa/1.Gamis Wanita Bling Dress Zulfa05 Syari Resleting Emas Busui_Angel/GWB Dress Zulafa05 closeup  (1).jpg',
                '/images/products/gamis-wanita-dewasa/1.Gamis Wanita Bling Dress Zulfa05 Syari Resleting Emas Busui_Angel/Gamis Wanita Bling Dress Zulfa05 Syari Resleting Emas Busui_outdoor.jpeg',
            ],
            'description' => 'Dress Muslimah Syari Flowly dengan jatuhan yang lembut dan anggun. (Edit deskripsi & harga sesuai kebutuhan.)',
            'stock' => 15,
        ],
        [
            'id' => 6,
            'name' => 'Dress Hanna Muslimah Syari Flowly',
            'slug' => 'dress-hanna-muslimah-syari-flowly',
            'category' => 'gamis',
            'price' => 259000.00,
            'image' => '/images/products/gamis-wanita-dewasa/GWD dress hanna muslimah syari__thumb.png',
            'gallery' => [
                '/images/products/gamis-wanita-dewasa/Angel_gamis1/gamis1_angel1.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis1/gamis1_angel2.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis1/gamis1_angel3.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis1/gamis1_angel4.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis1/gamis1_angel5.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis1/gamis1_angel6.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis1/gamis1_angel7.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis1/gamis1_angel8.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis1/gamis1_angel9.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis1/gamis1_angel10.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis1/gamis1_angel11.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis1/gamis1_angel12.jpg',
            ],
            'description' => 'Dress Muslimah Syari Flowly dengan jatuhan yang lembut dan anggun. (Edit deskripsi & harga sesuai kebutuhan.)',
            'stock' => 15,
        ],
        [
            'id' => 7,
            'name' => 'Gamis Wanita Bling Dress Zulfa01 Abaya Safna',
            'slug' => 'gamis-wanita-bling-dress-zulfa01-abaya-safna',
            'category' => 'gamis',
            'price' => 329000.00,
            'image' => '/images/products/gamis-wanita-dewasa/gamis-2.jpg',
            'gallery' => [
                '/images/products/gamis-wanita-dewasa/Angel_gamis2/gamis2_angel1.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis2/gamis2_angel2.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis2/gamis2_angel3.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis2/gamis2_angel4.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis2/gamis2_angel5.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis2/gamis2_angel6.jpg',
            ],
            'description' => 'Gamis Bling Dress Zulfa01 dengan detail abaya safna yang elegan. (Edit deskripsi & harga sesuai kebutuhan.)',
            'stock' => 12,
        ],
        [
            'id' => 8,
            'name' => 'Gamis Wanita Bling Dress Zulfa05 Syari Resleting Emas Busui',
            'slug' => 'gamis-wanita-bling-dress-zulfa05-syari-resleting-emas-busui',
            'category' => 'gamis',
            'price' => 319000.00,
            'image' => '/images/products/gamis-wanita-dewasa/gamis-3.jpg',
            'gallery' => [
                '/images/products/gamis-wanita-dewasa/Angel_gamis3/gamis3_angel1.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis3/gamis3_angel2.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis3/gamis3_angel3.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis3/gamis3_angel4.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis3/gamis3_angel5.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis3/gamis3_angel6.jpg',
                '/images/products/gamis-wanita-dewasa/Angel_gamis3/gamis3_angel7.jpg',
            ],
            'description' => 'Gamis Bling Dress Zulfa05 Syari dengan resleting emas, nyaman untuk busui. (Edit deskripsi & harga sesuai kebutuhan.)',
            'stock' => 10,
        ],
        
        [
            'id' => 9,
            'name' => 'Gamis Anak Perempuan Nasya 2 Tone Warna Charcoal_Angel',
            'slug' => 'Gamis Anak Perempuan Nasya 2 Tone Warna Charcoal_Angel',
            'category' => 'pakaian-muslim-anak-perempuan',
            'price' => 199000.00,
            'image' => '/images/products/pakaian-muslim-anak-perempuan/GAP NASYA 2 TONE_Thumb.png',
            'gallery' => [
                '/images/products/pakaian-muslim-anak-perempuan/Gamis Anak Perempuan Nasya 2 Tone Warna Charcoal_Angel/GAP NASYA 2 TONE STUDIO (1).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Gamis Anak Perempuan Nasya 2 Tone Warna Charcoal_Angel/GAP NASYA 2 TONE STUDIO (2).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Gamis Anak Perempuan Nasya 2 Tone Warna Charcoal_Angel/GAP NASYA 2 TONE_CLOSE UP (2).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Gamis Anak Perempuan Nasya 2 Tone Warna Charcoal_Angel/GAP NASYA 2 TONE_CLOSE UP (3).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Gamis Anak Perempuan Nasya 2 Tone Warna Charcoal_Angel/GAP NASYA 2 TONE_DISPLAY (1).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Gamis Anak Perempuan Nasya 2 Tone Warna Charcoal_Angel/GAP NASYA 2 TONE_DISPLAY (7).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Gamis Anak Perempuan Nasya 2 Tone Warna Charcoal_Angel/GAP NASYA 2 TONE_OUTDOOR (2).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Gamis Anak Perempuan Nasya 2 Tone Warna Charcoal_Angel/GAP NASYA 2 TONE_OUTDOOR (3).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Gamis Anak Perempuan Nasya 2 Tone Warna Charcoal_Angel/GAP NASYA 2 TONE_Thumb.png',
            ],
            'description' => 'Contoh produk: gamis anak muslimah dengan hijab panjang, bahan adem dan jatuhan rapi. (Foto ilustrasi placeholder — ganti dengan foto asli.)',
            'stock' => 20,
        ],
        [
            'id' => 10,
            'name' => 'Setelan celana anak perempuan one set aini_Angel',
            'slug' => 'Setelan celana anak perempuan one set aini_Angel',
            'category' => 'pakaian-muslim-anak-perempuan',
            'price' => 199000.00,
            'image' => '/images/products/pakaian-muslim-anak-perempuan/SCAP ONE SET AINI_Thumb.png',
            'gallery' => [
                '/images/products/pakaian-muslim-anak-perempuan/Setelan celana anak perempuan one set aini_Angel/SCAP ONE SET AINI DISPLAY_11.png',
                '/images/products/pakaian-muslim-anak-perempuan/Setelan celana anak perempuan one set aini_Angel/SCAP ONE SET AINI_CLOSE UP (7).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Setelan celana anak perempuan one set aini_Angel/SCAP ONE SET AINI_OUTDOOR (2).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Setelan celana anak perempuan one set aini_Angel/SCAP ONE SET AINI_OUTDOOR (3).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Setelan celana anak perempuan one set aini_Angel/SCAP ONE SET AINI_OUTDOOR (7).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Setelan celana anak perempuan one set aini_Angel/SCAP ONE SET AINI_STUDIO (1).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Setelan celana anak perempuan one set aini_Angel/SCAP ONE SET AINI_STUDIO (2).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Setelan celana anak perempuan one set aini_Angel/SCAP ONE SET AINI_STUDIO (6).jpeg',
                '/images/products/pakaian-muslim-anak-perempuan/Setelan celana anak perempuan one set aini_Angel/SCAP ONE SET AINI_Thumb.png',
            ],
            'description' => 'Contoh produk: gamis anak muslimah dengan hijab panjang, bahan adem dan jatuhan rapi. (Foto ilustrasi placeholder — ganti dengan foto asli.)',
            'stock' => 20,
        ],
        [
            'id' => 11,
            'name' => '3.Gamis Knit Anak Remaja Dress Zulea Muslim Syari Kualitas Premium Lengan Panjang',
            'slug' => 'pakaian-muslim-anak-perempuan-1',
            'category' => 'pakaian-muslim-anak-perempuan',
            'price' => 199000.00,
            'image' => '/images/products/pakaian-muslim-anak-perempuan/anak-1.jpg',
            'gallery' => [
                '/images/products/pakaian-muslim-anak-perempuan/Angel_anak1/anak1_angel1.jpg',
                '/images/products/pakaian-muslim-anak-perempuan/Angel_anak1/anak1_angel2.jpg',
                '/images/products/pakaian-muslim-anak-perempuan/Angel_anak1/anak1_angel3.jpg',
                '/images/products/pakaian-muslim-anak-perempuan/Angel_anak1/anak1_angel4.jpg',
            ],
            'description' => 'Contoh produk: gamis anak muslimah dengan hijab panjang, bahan adem dan jatuhan rapi. (Foto ilustrasi placeholder — ganti dengan foto asli.)',
            'stock' => 2,
        ],
        [
            'id' => 12,
            'name' => '4.Gamis Anak Perempuan Zulea Baju Muslim Syari Knit Kerah Resleting Kualitas Premium',
            'slug' => 'pakaian-muslim-anak-perempuan-1',
            'category' => 'pakaian-muslim-anak-perempuan',
            'price' => 199000.00,
            'image' => '/images/products/pakaian-muslim-anak-perempuan/anak-1.jpg',
            'gallery' => [
                '/images/products/pakaian-muslim-anak-perempuan/Angel_anak1/anak1_angel1.jpg',
                '/images/products/pakaian-muslim-anak-perempuan/Angel_anak1/anak1_angel2.jpg',
                '/images/products/pakaian-muslim-anak-perempuan/Angel_anak1/anak1_angel3.jpg',
                '/images/products/pakaian-muslim-anak-perempuan/Angel_anak1/anak1_angel4.jpg',
            ],
            'description' => 'Contoh produk: gamis anak muslimah dengan hijab panjang, bahan adem dan jatuhan rapi. (Foto ilustrasi placeholder — ganti dengan foto asli.)',
            'stock' => 20,
        ],
        [
            'id' => 13,
            'name' => '5.Gamis Anak Perempuan Zulea Baju Muslim Syari Knit Kerah Kancing',
            'slug' => 'pakaian-muslim-anak-perempuan-1',
            'category' => 'pakaian-muslim-anak-perempuan',
            'price' => 199000.00,
            'image' => '/images/products/pakaian-muslim-anak-perempuan/anak-1.jpg',
            'gallery' => [
                '/images/products/pakaian-muslim-anak-perempuan/Angel_anak1/anak1_angel1.jpg',
                '/images/products/pakaian-muslim-anak-perempuan/Angel_anak1/anak1_angel2.jpg',
                '/images/products/pakaian-muslim-anak-perempuan/Angel_anak1/anak1_angel3.jpg',
                '/images/products/pakaian-muslim-anak-perempuan/Angel_anak1/anak1_angel4.jpg',
            ],
            'description' => 'Contoh produk: gamis anak muslimah dengan hijab panjang, bahan adem dan jatuhan rapi. (Foto ilustrasi placeholder — ganti dengan foto asli.)',
            'stock' => 20,
        ],
    ];

    /**
     * Mengambil seluruh data produk untuk katalog
     */
    public function getAllProducts(): array
    {
        return self::$products;
    }

    /**
     * Mengambil detail satu produk berdasarkan slug
     */
    public function getProductBySlug(string $slug): ?array
    {
        foreach (self::$products as $product) {
            if ($product['slug'] === $slug) {
                return $product;
            }
        }

        return null;
    }

    /**
     * Mengambil deskripsi per item galeri secara OTOMATIS dari file .txt
     * yang bernama sama dengan file medianya dan berada di folder yang sama.
     * Contoh: /images/products/abaya/Angel_abaya1/abaya1_angel1.jpg
     *      -> public/images/products/abaya/Angel_abaya1/abaya1_angel1.txt
     *
     * Return: array teks deskripsi dengan urutan yang sama seperti $mediaPaths.
     * Item yang tidak memiliki file .txt akan bernilai string kosong.
     */
    public function getGalleryDescriptions(array $mediaPaths): array
    {
        $publicDir = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'public';
        $descriptions = [];

        foreach ($mediaPaths as $mediaPath) {
            $info = pathinfo($mediaPath);
            $txtFile = $publicDir
                . str_replace('/', DIRECTORY_SEPARATOR, (string) ($info['dirname'] ?? ''))
                . DIRECTORY_SEPARATOR . ($info['filename'] ?? '') . '.txt';

            $descriptions[] = is_file($txtFile)
                ? trim((string) file_get_contents($txtFile))
                : '';
        }

        return $descriptions;
    }
}
