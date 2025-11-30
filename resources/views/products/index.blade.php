@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')

    <div class="max-w-6xl mx-auto">

        <h1 class="text-3xl font-bold mb-6">Daftar Produk</h1>

        {{-- Pesan sukses --}}
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tombol tambah --}}
        <div class="mb-4">
            <a href="{{ route('products.create') }}"
                class="inline-block px-6 py-2 bg-green-600 text-white rounded shadow hover:bg-green-700 transition">
                + Tambah Produk
            </a>
        </div>

        {{-- Tabel --}}
        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="w-full text-left border-collapse">

                {{-- Header --}}
                <thead class="bg-gray-100 text-gray-700 uppercase text-sm">
                    <tr>
                        <th class="px-4 py-3">SKU</th>
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3 text-center">Stok</th>
                        <th class="px-4 py-3">Deskripsi</th>
                        <th class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>

                {{-- Body --}}
                <tbody class="divide-y divide-gray-200">

                    @forelse($products as $p)
                        <tr class="hover:bg-gray-50 transition">

                            <td class="px-4 py-3 font-medium text-gray-900">{{ $p->sku }}</td>
                            <td class="px-4 py-3">{{ $p->name }}</td>
                            <td class="px-4 py-3 text-center">{{ $p->stock }}</td>
                            <td class="px-4 py-3 text-gray-700">{{ $p->description }}</td>

                            <td class="px-4 py-3 text-center">

                                {{-- Tombol Edit --}}
                                <a href="{{ route('products.edit', $p->id) }}"
                                    class="inline-flex items-center justify-center w-24 h-10  bg-yellow-400 text-black font-medium rounded hover:bg-yellow-500 transition">
                                    Edit
                                </a>

                                {{-- Tombol Delete --}}
                                <form action="{{ route('products.destroy', $p->id) }}" method="POST" class="inline-flex"
                                    onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        class="inline-flex items-center justify-center w-24 h-10  bg-red-600 text-white font-medium rounded ml-2 hover:bg-red-700 transition">
                                        Delete
                                    </button>
                                </form>

                            </td>

                        </tr>

                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-6 text-center text-gray-500">
                                Belum ada produk
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>

@endsection
