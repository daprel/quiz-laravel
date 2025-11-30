<x-Layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3>Ini halaman layout</h3>

<h1>Daftar Produk</h1>

{{-- tombol tambah --}}
<a href="{{ route('products.create') }}"
   style="padding: 8px 12px; background: #4CAF50; color: white; text-decoration: none; border-radius: 4px;">
    + Tambah Produk
</a>

<br><br>

{{-- pesan sukses --}}
@if(session('success'))
    <div style="padding: 10px; background: #D4EDDA; color: #155724; border-left: 4px solid #28A745; margin-bottom: 15px;">
        {{ session('success') }}
    </div>
@endif

<table border="1" cellpadding="8" cellspacing="0" width="100%">
    <thead style="background: #f0f0f0;">
        <tr>
            <th>SKU</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th style="width: 150px; text-align:center;">Actions</th>
        </tr>
    </thead>

    <tbody>
    @forelse($products as $p)
        <tr>
            <td>{{ $p->sku }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->stock }}</td>
            <td>{{ $p->description }}</td>

            <td style="text-align:center;">

                {{-- tombol edit --}}
                <a href="{{ route('products.edit', $p->id) }}"
                   style="padding: 5px 10px; background: #FFC107; color: black; text-decoration:none; border-radius:4px;">
                    Edit
                </a>

                {{-- tombol delete --}}
                <form action="{{ route('products.destroy', $p->id) }}"
                      method="POST"
                      style="display:inline-block;"
                      onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        style="padding: 5px 10px; background: #DC3545; color: white; border:none; border-radius:4px;">
                        Delete
                    </button>
                </form>

            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" style="text-align:center;">Belum ada produk</td>
        </tr>
    @endforelse
    </tbody>
</table>
@endsection


</x-Layout>