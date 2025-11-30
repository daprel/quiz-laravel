@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
    <h1>Daftar Produk</h1>

    <a href="{{ route('products.create') }}">Tambah Produk</a>

    <br><br>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>SKU</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Deskripsi</th>
        </tr>

        @foreach($products as $p)
        <tr>
            <td>{{ $p->sku }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->stock }}</td>
            <td>{{ $p->description }}</td>
        </tr>
        @endforeach
    </table>
@endsection
