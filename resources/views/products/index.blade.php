@extends('layouts.app') 

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
        <table id="productTable" class="table table-bordered table-striped">
           
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

    {{-- Tidak perlu pagination Laravel karena DataTables pakai pagination sendiri --}}
    {{-- {{ $products->links() }} --}}
</div>
@endsection

@section('scripts')
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <script>
        $(document).ready(function () {
            $('#productTable').DataTable({
                 paging: true,
    searching: true,
    ordering: true,
    lengthMenu: [1, 2, 3, 4, 5],
    language: {
        search: "🔍 Cari Produk:",
        lengthMenu: "Tampilkan _MENU_ data per halaman",
        zeroRecords: "Tidak ditemukan",
        info: "Menampilkan _START_ - _END_ dari total _TOTAL_ data",
        infoEmpty: "Tidak ada data yang tersedia",
        paginate: {
            next: "➡️ Berikutnya",
            previous: "⬅️ Sebelumnya"
                  }
              }
            });
        });
    </script>
@endsection
