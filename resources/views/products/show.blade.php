@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Detail Produk</h3>
    </div>
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-8">
                <h4>{{ $product->name }}</h4>
                <p class="text-muted">Barcode: {{ $product->barcode }}</p>
            </div>
            <div class="col-md-4 text-end">
                <span class="badge bg-primary">{{ $product->category }}</span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}
                    </li>
                    <li class="list-group-item">
                        <strong>Stok Tersedia:</strong> {{ $product->stock }}
                    </li>
                    <li class="list-group-item">
                        <strong>Ditambahkan pada:</strong> {{ $product->created_at->format('d M Y H:i') }}
                    </li>
                    <li class="list-group-item">
                        <strong>Terakhir diupdate:</strong> {{ $product->updated_at->format('d M Y H:i') }}
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Deskripsi Produk</h5>
                    </div>
                    <div class="card-body">
                        <p>{{ $product->description ?? 'Tidak ada deskripsi' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 d-flex justify-content-between">
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a href="{{ route('products.index') }}" class="btn btn-primary">
                <i class="fas fa-list"></i> Kembali ke Daftar
            </a>
        </div>
    </div>
</div>
@endsection