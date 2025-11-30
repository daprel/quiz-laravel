<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel CRUD')</title>
    @vite('resources/css/app.css') {{-- optional jika pakai Vite untuk CSS --}}
</head>

<body class="font-sans antialiased">

    {{-- Navbar sederhana (opsional) --}}
    <nav style="margin-bottom: 20px;" class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                            alt="Your Company" class="size-8" />
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="{{ route('products.index') }}" aria-current="page"
                                class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Product</a>
                            <a href="{{ route('products.create') }}"
                                class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Add
                                New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="px-8">
        {{-- Disinilah semua halaman CRUD ditampilkan --}}
        @yield('content')
    </main>


</body>

</html>
