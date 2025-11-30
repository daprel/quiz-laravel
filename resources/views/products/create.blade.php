<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>

<h1>Tambah Produk</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <label>SKU:</label><br>
    <input type="text" name="sku"><br><br>

    <label>Nama Produk:</label><br>
    <input type="text" name="name"><br><br>

    <label>Stok:</label><br>
    <input type="number" name="stock"><br><br>

    <label>Deskripsi (opsional):</label><br>
    <textarea name="description"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>
