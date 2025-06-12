@extends('layouts.app') <!-- Pastikan layout utama ada -->

@section('content')
<div class="container">
    <h1 class="my-4">Daftar Produk Alfamart</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk Baru</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <!-- Bagian HEADER TABEL -->
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Barcode</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            <!-- Bagian BODY TABEL -->
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->barcode }}</td>
                    <td>{{ $product->name }}</td>
                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->category }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus produk?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    {{ $products->links() }}
</div>
@endsection