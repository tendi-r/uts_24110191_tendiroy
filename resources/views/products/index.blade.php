@extends('layouts.app')

@section('content')
<div style="background-color: #1e1e2f; min-height: 100vh; padding: 30px; color: #f0f0f0; font-family: 'Segoe UI', sans-serif;">
    <div class="container">
        <h1 class="mb-4" style="font-weight: bold;">Daftar Produk Alfamart</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('products.create') }}" class="btn mb-3" style="background-color: #4e8cff; color: white;">Tambah Produk Baru</a>

        <div class="table-responsive">
            <table id="productTable" class="table table-bordered table-hover text-light" style="background-color: rgba(255,255,255,0.05);">
                <thead style="background-color: rgba(255,255,255,0.1); color: #fff;">
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
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm" style="background-color: #ffc107; color: black;">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm" style="background-color: #e74c3c; color: white;" onclick="return confirm('Hapus produk?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- DataTables JS & CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <style>
        /* Tambahan styling dark untuk datatables */
        table.dataTable {
            color: #f0f0f0;
            background-color: rgba(255, 255, 255, 0.05);
        }
        .dataTables_wrapper .dataTables_filter input {
            background-color: #2e2e3a;
            color: white;
            border: 1px solid #555;
        }
        .dataTables_wrapper .dataTables_length select {
            background-color: #2e2e3a;
            color: white;
        }
    </style>

    <script>
        $(document).ready(function () {
            $('#productTable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                lengthMenu: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
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

