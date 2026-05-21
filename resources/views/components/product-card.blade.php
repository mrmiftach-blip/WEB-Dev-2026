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
            <a href="{{ route('products.show', $product['id']) }}" class="btn btn-sm btn-outline-info">
                <i class="fas fa-eye"></i> Detail
            </a>
            <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-sm btn-outline-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
        </div>
    </div>
</div>
