@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Produk</h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            + Add New Product
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        @forelse($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text text-muted">
                            {{ Str::limit($product['description'], 80) }}
                        </p>
                        <p class="card-text">
                            <strong class="text-primary">Rp {{ number_format($product['price'], 0, ',', '.') }}</strong>
                        </p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="btn-group w-100" role="group">
                            <a href="{{ route('products.show', $product['id']) }}" class="btn btn-sm btn-outline-info">Detail</a>
                            <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    Belum ada produk yang tersedia.
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection
