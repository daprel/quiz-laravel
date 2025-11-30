<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Tampilkan semua produk
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Tampilkan form tambah
    public function create()
    {
        return view('products.create');
    }

    // Simpan produk ke database
    public function store(Request $request)
    {
        // Validasi paling dasar
        $request->validate([
            'sku'   => 'required|unique:products,sku',
            'name'  => 'required',
            'stock' => 'required|integer',
        ]);

        Product::create([
            'sku'         => $request->sku,
            'name'        => $request->name,
            'stock'       => $request->stock,
            'description' => $request->description,
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
