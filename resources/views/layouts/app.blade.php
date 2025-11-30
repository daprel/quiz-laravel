<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel CRUD')</title>
    @vite('resources/css/app.css') {{-- optional jika pakai Vite untuk CSS --}}
</head>
<body class="font-sans antialiased" style="padding: 20px;">

    {{-- Navbar sederhana (opsional) --}}
    <nav style="margin-bottom: 20px;">
        <a href="{{ route('products.index') }}">Products</a> |
        <a href="{{ route('products.create') }}">Add Product</a>
    </nav>

    {{-- Disinilah semua halaman CRUD ditampilkan --}}
    @yield('content')

</body>
</html>
