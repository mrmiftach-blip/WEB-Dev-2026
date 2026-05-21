@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Detail Produk</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-3 fw-bold">ID Produk:</div>
                        <div class="col-md-9">{{ $product['id'] }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 fw-bold">Nama Produk:</div>
                        <div class="col-md-9">{{ $product['name'] }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 fw-bold">Deskripsi:</div>
                        <div class="col-md-9">{{ $product['description'] }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 fw-bold">Harga:</div>
                        <div class="col-md-9">
                            <span class="text-primary fs-5">Rp {{ number_format($product['price'], 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
                        <div>
                            <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-warning">Edit Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
