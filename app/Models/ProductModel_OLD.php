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
            'name' => 'Satin Black Pink - Black Pink, Red Velvet, White',
            'slug' => 'oversized-heavyweight-tee-white',
            'price' => 249000.00,
            'image' => '/images/products/produk_1.jpg',
            'description' => 'Katun 24s combed tebal dengan potongan ala Pakistan.',
            'stock' => 25,
        ],
        [
            'id' => 2,
            'name' => 'Relaxed Fit Linen Shirt - Natural Beige',
            'slug' => 'relaxed-fit-linen-shirt-beige',
            'price' => 429000.00,
            'image' => '/images/products/produk_2.jpg',
            'description' => 'Gamis Modern dengan Rompi linen adem bernapas untuk gaya santai elegan.',
            'stock' => 15,
        ],
        [
            'id' => 3,
            'name' => 'Minimalist Pleated Trousers - Deep Charcoal',
            'slug' => 'minimalist-pleated-trousers-charcoal',
            'price' => 499000.00,
            'image' => '/images/products/produk_3.jpg',
            'description' => 'Berbagai macam aksesoris dengan potongan yang modern ke-kinian.',
            'stock' => 10,
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
}
