<x-Layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3>Ini halaman layout</h3>

    <!-- Section tabel dan input -->
    <section class="container mx-auto py-6">

        <h2 class="text-2xl font-semibold mb-4">SKU List</h2>

        <!-- Search Input -->
        <div class="flex items-center mb-4">
            <span class="px-3 py-2 bg-gray-900 text-white rounded-l flex items-center">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
            <input type="text" id="searchInput"
                class="w-full border border-gray-300 px-4 py-2 rounded-r outline-none focus:ring focus:ring-blue-300"
                placeholder="Search inventory (code, name, size)">
        </div>

        <!-- Table Section -->
        <div class="overflow-x-auto rounded-lg shadow">
            <table class="w-full text-left border-collapse">
                <thead class="bg-green-200">
                    <tr>
                        <th class="px-4 py-3 font-semibold">Product Code</th>
                        <th class="px-4 py-3 font-semibold">Brand</th>
                        <th class="px-4 py-3 font-semibold">Size</th>
                        <th class="px-4 py-3 font-semibold">Stock Quantity</th>
                    </tr>
                </thead>

                <tbody id="inventoryTable">
                    <tr class="odd:bg-gray-50 hover:bg-gray-100">
                        <td class="px-4 py-3">C0500</td>
                        <td class="px-4 py-3">Coca Cola</td>
                        <td class="px-4 py-3">500ml</td>
                        <td class="px-4 py-3">120</td>
                    </tr>

                    <tr class="odd:bg-gray-50 hover:bg-gray-100">
                        <td class="px-4 py-3">C0250</td>
                        <td class="px-4 py-3">Coca Cola</td>
                        <td class="px-4 py-3">250ml</td>
                        <td class="px-4 py-3">120</td>
                    </tr>

                    <tr class="odd:bg-gray-50 hover:bg-gray-100">
                        <td class="px-4 py-3">S0500</td>
                        <td class="px-4 py-3">Sprite</td>
                        <td class="px-4 py-3">500ml</td>
                        <td class="px-4 py-3">80</td>
                    </tr>

                    <tr class="odd:bg-gray-50 hover:bg-gray-100">
                        <td class="px-4 py-3">S0250</td>
                        <td class="px-4 py-3">Sprite</td>
                        <td class="px-4 py-3">250ml</td>
                        <td class="px-4 py-3">45</td>
                    </tr>

                    <tr class="odd:bg-gray-50 hover:bg-gray-100">
                        <td class="px-4 py-3">F0500</td>
                        <td class="px-4 py-3">Fanta</td>
                        <td class="px-4 py-3">500ml</td>
                        <td class="px-4 py-3">80</td>
                    </tr>

                    <tr class="odd:bg-gray-50 hover:bg-gray-100">
                        <td class="px-4 py-3">F0250</td>
                        <td class="px-4 py-3">Fanta</td>
                        <td class="px-4 py-3">250ml</td>
                        <td class="px-4 py-3">80</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>


    <!-- Section 2: 3 Kolom -->
    <section class="container mx-auto py-6">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Kolom 1 -->
            <div>
                <h1 class="text-2xl font-bold mb-3">Petunjuk Penggunaan</h1>
                <p class="leading-relaxed text-gray-700">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Aenean lobortis risus quis nunc condimentum pulvinar. Nulla et venenatis sem,
                    vitae sagittis arcu. Aenean at mattis lectus, id posuere sapien.
                </p>
            </div>

            <!-- Form Add SKU -->
            <div>
                <form class="p-5 rounded shadow bg-gray-100 space-y-4">
                    <h2 class="text-xl font-semibold"><i class="fa-regular fa-square-plus"></i> Add New SKU</h2>

                    <!-- Input group -->
                    <div class="flex">
                        <span class="px-3 py-2 bg-gray-300 rounded-l">Code</span>
                        <input type="text" class="flex-1 border border-gray-300 px-3 py-2 rounded-r"
                            placeholder="ex: C0500">
                    </div>

                    <div class="flex">
                        <span class="px-3 py-2 bg-gray-300 rounded-l">Name</span>
                        <input type="text" class="flex-1 border border-gray-300 px-3 py-2 rounded-r"
                            placeholder="ex: Coca Cola">
                    </div>

                    <div class="flex">
                        <span class="px-3 py-2 bg-gray-300 rounded-l">Qty</span>
                        <input type="number" min="0" class="flex-1 border border-gray-300 px-3 py-2 rounded-r"
                            placeholder="ex: 100">
                    </div>

                    <button type="button" class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
                        Add Product
                    </button>
                </form>
            </div>

            <!-- Form Update SKU -->
            <div>
                <form class="p-5 rounded shadow bg-gray-100 space-y-4">
                    <h2 class="text-xl font-semibold"><i class="fa-solid fa-arrows-rotate"></i> Update SKU</h2>

                    <div class="flex">
                        <span class="px-3 py-2 bg-gray-300 rounded-l">Code</span>
                        <input type="text" class="flex-1 border border-gray-300 px-3 py-2 rounded-r"
                            placeholder="ex: C0500">
                    </div>

                    <div class="flex">
                        <span class="px-3 py-2 bg-gray-300 rounded-l">Qty</span>
                        <input type="number" min="0" class="flex-1 border border-gray-300 px-3 py-2 rounded-r"
                            placeholder="ex: 100">
                    </div>

                    <button type="button" class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
                        Update
                    </button>
                </form>
            </div>

        </div>

    </section>


</x-Layout>
