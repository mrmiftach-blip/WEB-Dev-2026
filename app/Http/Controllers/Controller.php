<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Data produk simulasi (seperti database sementara)
    private $products = [
        ['id' => 1, 'name' => 'Laptop ASUS ROG', 'description' => 'Laptop gaming dengan RTX 4060', 'price' => 15000000],
        ['id' => 2, 'name' => 'Mouse Logitech G502', 'description' => 'Mouse gaming dengan 11 tombol programmable', 'price' => 850000],
        ['id' => 3, 'name' => 'Keyboard Mechanical', 'description' => 'Keyboard mechanical RGB switch blue', 'price' => 650000],
        ['id' => 4, 'name' => 'Monitor Samsung 24"', 'description' => 'Monitor IPS Full HD 75Hz', 'price' => 1850000],
        ['id' => 5, 'name' => 'Headset Razer Kraken', 'description' => 'Headset gaming dengan surround sound 7.1', 'price' => 1200000],
        ['id' => 6, 'name' => 'SSD 1TB NVMe', 'description' => 'SSD PCIe Gen 4 kecepatan 7000MB/s', 'price' => 1750000],
        ['id' => 7, 'name' => 'RAM 16GB DDR4', 'description' => 'RAM Corsair Vengeance 3200MHz', 'price' => 950000],
        ['id' => 8, 'name' => 'Webcam Logitech C920', 'description' => 'Webcam Full HD untuk streaming', 'price' => 1450000],
        ['id' => 9, 'name' => 'Microphone Blue Yeti', 'description' => 'Microphone condenser USB', 'price' => 2250000],
        ['id' => 10, 'name' => 'Speaker Bluetooth JBL', 'description' => 'Speaker portable tahan air', 'price' => 750000],
        ['id' => 11, 'name' => 'Smartphone Samsung A54', 'description' => 'HP mid-range dengan kamera 50MP', 'price' => 5500000],
        ['id' => 12, 'name' => 'Power Bank 20000mAh', 'description' => 'Power bank fast charging 65W', 'price' => 450000],
        ['id' => 13, 'name' => 'Charger 65W GaN', 'description' => 'Charger universal port USB-C', 'price' => 350000],
        ['id' => 14, 'name' => 'Hardisk Eksternal 2TB', 'description' => 'Hardisk portable USB 3.0', 'price' => 1250000],
        ['id' => 15, 'name' => 'Kabel USB-C 2m', 'description' => 'Kabel braided fast charging', 'price' => 125000],
        ['id' => 16, 'name' => 'Router TP-Link', 'description' => 'Router WiFi 6 dual band', 'price' => 850000],
        ['id' => 17, 'name' => 'Printer Epson L3210', 'description' => 'Printer all-in-one dengan tank system', 'price' => 2850000],
        ['id' => 18, 'name' => 'Scanner Canon', 'description' => 'Scanner dokumen kecepatan tinggi', 'price' => 1750000],
        ['id' => 19, 'name' => 'Projector Epson', 'description' => 'Projector Full HD 3500 lumens', 'price' => 6500000],
        ['id' => 20, 'name' => 'UPS 650VA', 'description' => 'Uninterruptible power supply untuk PC', 'price' => 950000],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menampilkan 20 produk (data sudah ada 20 produk)
        $products = $this->products;

        return view('products.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.form', [
            'product' => null,
            'isEdit' => false
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        // Buat ID baru (simulasi auto increment)
        $newId = count($this->products) + 1;

        // Simpan produk (simulasi)
        // Di sini Anda bisa menyimpan ke database
        // Untuk contoh, kita redirect dengan pesan sukses

        return redirect()->route('products.index')
            ->with('success', 'Product berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return view('products.form', [
            'product' => $product,
            'isEdit' => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        // Simulasi update produk
        // Di sini Anda bisa update ke database

        return redirect()->route('products.index')
            ->with('success', 'Product berhasil diupdate!');
    }
}
