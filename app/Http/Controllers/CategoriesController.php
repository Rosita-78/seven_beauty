<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriesRequest $request)
    {
        $data = new Categories();
        $data->name = $request->name;
        $filename = '';
        if ($request->hasFile('gambar')) {
            $filename = $request->getSchemeAndHttpHost().'/asset/upload/'.time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('/asset/upload/'), $filename);
        }
        $data->gambar = $filename;
        $data->save();
        
        return redirect()->route('categories.index')->with('pesan', 'Data berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriesRequest $request, Categories $category)
    {
        $category->name = $request->name;
        $filename = '';
        if ($request->hasFile('gambar')) {
            $filename = $request->getSchemeAndHttpHost().'/asset/upload/'.time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('/asset/upload/'), $filename);
        }
        $category->gambar = $filename;
        $category->save();
        return redirect()->route('categories.index')->with('pesan', 'Data Berhasil Diubah');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $category)
    {

        $category->delete();

        return redirect()->route('categories.index')->with('pesan', 'Data Berhasil Dihapus');
    }
}
