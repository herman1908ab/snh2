<?php

require_once __DIR__ . '/../Models/ProductModel.php';

class ProductController {
    private ProductModel $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    /**
     * Render Halaman Utama Landing Page
     */
    public function index(): void {
        $products = $this->productModel->getAllProducts();
        
        // Nomor HP Admin untuk Order WhatsApp (atur di config/app.php)
        $whatsappNumber = WA_NUMBER;

        require_once __DIR__ . '/../Views/landing.php';
    }

    /**
     * PLACEHOLDER FUTURE UPGRADE:
     * Method ini dipisahkan agar siap digunakan saat integrasi Cart, Checkout,
     * dan Payment Gateway (Midtrans/Xendit) tanpa mengubah core struktur.
     */
    public function checkout(): void {
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'success',
            'message' => 'Checkout endpoint ready for integration.'
        ]);
        exit;
    }
}
