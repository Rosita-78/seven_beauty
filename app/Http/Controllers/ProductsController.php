<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        $data = new Products();
        $data->name = $request->name;
        $data->harga = $request->harga;
        $data->kategori = $request->kategori;
        $data->jumlah_dipesan = $request->jumlah_dipesan;
        $filename = '';
        if ($request->hasFile('gambar')) {
            $filename = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('/asset/upload/'), $filename);
            $filename = $request->getSchemeAndHttpHost().'/asset/upload/'.$filename;
        }
        $data->gambar = $filename;
        $data->save();
        
        return redirect()->route('product.index')->with('pesan', 'Data berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $product)
    {
        return view('product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        $categories = Categories::all();
        return view('admin.products.edit', compact('product'), compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $product)
    {
        $product->name = $request->name;
        $product->harga = $request->harga;
        $product->kategori = $request->kategori;
        $filename = '';

        // Check if there's an existing file and delete it
        if ($product->gambar) {
            $existingFilePath = str_replace($request->getSchemeAndHttpHost(), '', $product->gambar);
            if (file_exists(public_path($existingFilePath))) {
                unlink(public_path($existingFilePath));
            }
        }

        if ($request->hasFile('gambar')) {
            $filename = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('/asset/upload/'), $filename);
            $filename = $request->getSchemeAndHttpHost().'/asset/upload/'.$filename;
        }

        $product->gambar = $filename;
        dd($product);
        $product->save();
        
        return redirect()->route('product.index')->with('pesan', 'Data berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        
        $product->delete();

        return redirect()->route('product.index')->with('pesan', 'Data Berhasil Dihapus');
    }
}
