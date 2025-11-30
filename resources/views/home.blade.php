<x-Layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Container -->
    <div class="max-w-7xl mx-auto mt-6 px-4">
        <h3 class="text-xl font-semibold mb-4">Dashboard Overview</h3>

        <!-- Grid 3 kolom -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

            <!-- Lowest Stock -->
            <div class="bg-red-600 text-white rounded-xl shadow-md p-5">
                <h5 class="text-lg font-semibold flex items-center gap-2">
                    <i class="fa-solid fa-circle-exclamation"></i> Lowest Stock
                </h5>
                <p class="text-3xl font-bold mt-2">S0250 (Sprite 250ml)</p>
                <p class="text-xl mt-1">45 Items</p>
            </div>

            <!-- Highest Stock -->
            <div class="bg-green-600 text-white rounded-xl shadow-md p-5">
                <h5 class="text-lg font-semibold flex items-center gap-2">
                    <i class="fa-solid fa-check-to-slot"></i> Highest Stock
                </h5>
                <p class="text-3xl font-bold mt-2">C0500 (Coca Cola 250ml)</p>
                <p class="text-xl mt-1">120 Items</p>
            </div>

            <!-- Warehouse Capacity -->
            <div class="bg-sky-600 text-white rounded-xl shadow-md p-5">
                <h5 class="text-lg font-semibold flex items-center gap-2">
                    <i class="fa-solid fa-circle-info"></i> Warehouse Capacity
                </h5>
                <p class="text-3xl font-bold mt-2">2% Full</p>
            </div>

        </div>
    </div>
</x-Layout>
