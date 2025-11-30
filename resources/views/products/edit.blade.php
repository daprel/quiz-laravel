@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<h1>Edit Produk</h1>

{{-- tampilkan error validasi --}}
@if ($errors->any())
    <div style="padding: 10px; background: #F8D7DA; color: #842029; border-left: 4px solid #DC3545; margin-bottom: 20px;">
        <ul style="margin:0; padding-left:20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <table cellpadding="5" cellspacing="0" width="100%" style="max-width:600px;">
        <tr>
            <td style="width:150px;"><strong>SKU</strong></td>
            <td>
                <input type="text" name="sku" value="{{ old('sku', $product->sku) }}"
                       style="width:100%; padding:8px;">
            </td>
        </tr>

        <tr>
            <td><strong>Nama Produk</strong></td>
            <td>
                <input type="text" name="name" value="{{ old('name', $product->name) }}"
                       style="width:100%; padding:8px;">
            </td>
        </tr>

        <tr>
            <td><strong>Stok</strong></td>
            <td>
                <input type="number" name="stock" value="{{ old('stock', $product->stock) }}"
                       style="width:100%; padding:8px;">
            </td>
        </tr>

        <tr>
            <td><strong>Deskripsi</strong></td>
            <td>
                <textarea name="description" rows="4"
                          style="width:100%; padding:8px;">{{ old('description', $product->description) }}</textarea>
            </td>
        </tr>
    </table>

    <br>

    <button type="submit"
        style="padding: 10px 20px; background: #FFC107; border:none; border-radius:4px; cursor:pointer;">
        Update
    </button>

    <a href="{{ route('products.index') }}"
       style="padding: 10px 20px; background: #6C757D; color:white; text-decoration:none; border-radius:4px; margin-left:10px;">
        Back
    </a>
</form>

@endsection
