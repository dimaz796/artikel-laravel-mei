<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog', [
            "title" => "Blog",
            "posts" => Post::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil data kategori dari database
        $categories = Category::all();
        
        // Pass data ke view
        return view('artikel.tambah_artikel', [
            "title" => "Tambah Artikel",
            "posts" => Post::latest()->get(),
            "categories" => $categories // Pastikan variabel categories dipassing ke view
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // session()
        $id_user = $request->session()->get('id_user');

        // $validatedData = $request->validate([
        //     'title' => 'required|max:255',
        //     'slug' => 'required|unique:posts',
        //     'excerpt' => 'required',
        //     'body' => 'required',
        //     'category_id' => 'required|exists:categories,id',
        //     'user_id' => $id_user,
        // ]);
        $data = [
            'title' => $request->post('title'),
            'slug' => $request->post('slug'),
            'excerpt' => $request->post('excerpt'),
            'body' => $request->post('body'),
            'category_id' => $request->post('category_id'),
            'user_id' => $id_user,
        ];

        Post::create($data);

        return redirect()->to('/blog')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "isi" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $title = "Edit";
        return view('artikel.edit', compact('post','categories','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findorFail($id);


        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->excerpt = $request->input('excerpt');
        $post->body = $request->input('body');
        $post->category_id = $request->input('category_id');
        
        // Simpan perubahan ke database
        $post->save();
if ($request->method() === 'PUT' || $request->method() === 'PATCH') {
        // Proses pembaruan data
        return redirect()->to('/blog')->with('success', 'Post created successfully!');
    } else {
        // Tangani kasus jika metode bukan PUT atau PATCH
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Temukan post yang akan dihapus
        $post = Post::findOrFail($id);
    
        // Hapus post dari database
        $post->delete();
    
        // Redirect dengan pesan sukses atau lakukan tindakan lain yang sesuai
        return redirect()->to('/blog')->with('success', 'Post deleted successfully');
    }
}
