@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')

    <div class="max-w-3xl mx-auto bg-white shadow-md p-6 rounded-lg">

        <h1 class="text-2xl font-bold mb-6">Tambah Produk</h1>

        {{-- ERROR ALERT --}}
        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded">
                <ul class="list-disc ml-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" class="space-y-5">
            @csrf

            {{-- SKU --}}
            <div>
                <label class="block font-semibold mb-1">SKU</label>
                <input type="text" name="sku"
                    class="w-full border border-gray-300 p-2 rounded focus:ring focus:ring-blue-300"
                    placeholder="Contoh: WID-001">
            </div>

            {{-- Nama Produk --}}
            <div>
                <label class="block font-semibold mb-1">Nama Produk</label>
                <input type="text" name="name"
                    class="w-full border border-gray-300 p-2 rounded focus:ring focus:ring-blue-300"
                    placeholder="Nama produk">
            </div>

            {{-- Stok --}}
            <div>
                <label class="block font-semibold mb-1">Stok</label>
                <input type="number" name="stock"
                    class="w-full border border-gray-300 p-2 rounded focus:ring focus:ring-blue-300" placeholder="0">
            </div>

            {{-- Deskripsi --}}
            <div>
                <label class="block font-semibold mb-1">Deskripsi (opsional)</label>
                <textarea name="description" rows="4"
                    class="w-full border border-gray-300 p-2 rounded focus:ring focus:ring-blue-300"
                    placeholder="Tambahkan deskripsi jika perlu"></textarea>
            </div>

            {{-- Buttons --}}
            <div class="flex gap-4 mt-6">
                <button type="submit" class="px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">
                    Simpan
                </button>

                <a href="{{ route('products.index') }}"
                    class="px-6 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
                    Back
                </a>
            </div>

        </form>
    </div>

@endsection
