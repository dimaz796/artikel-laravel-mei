<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Category $category)
    {
        return view(
            'categories',
            [
                "title" => "Halaman Category",
                "categories" => Category::all(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil data kategori dari database
        
        // Pass data ke view
        return view('category.tambah_category', [
            "title" => "Tambah Artikel",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->post('category'),
            'slug' => $request->post('slug'),
        ];

        Category::create($data);

        return redirect()->to('/categories')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view(
            'category',
            [
                "title" => $category->name,
                "posts" => $category->posts,
                "category" => $category->name,
            ]
        );
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
