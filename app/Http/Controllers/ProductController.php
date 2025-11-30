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

        return redirect()->route('products.index')
                         ->with('success', 'Product created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'sku'   => 'required|unique:products,sku,' . $product->id,
            'name'  => 'required',
            'stock' => 'required|integer',
        ]);

        $product->update([
            'sku'         => $request->sku,
            'name'        => $request->name,
            'stock'       => $request->stock,
            'description' => $request->description,
        ]);

        return redirect()->route('products.index')
                         ->with('success', 'Product updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Product deleted');
    }
}
