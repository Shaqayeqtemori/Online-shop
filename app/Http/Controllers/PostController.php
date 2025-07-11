<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }
    public function create() {
        return view('posts.create');
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
        }
        Post::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'body' => $request->body,
            'image' => $imagePath,
        ]);
        return redirect('/')->with('success', 'Post submitted!');
    }
}
