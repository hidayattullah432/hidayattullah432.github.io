<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        return view('Posts.index', [
            'posts' => Post::latest()->paginate(12),
        ]);
    }
    
    public function table(){
        return view('posts.table', [
            'posts' => Post::latest()->paginate(10),
        ]);
    }


    public function show(post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        // return view('posts.create', ['post' => new Post()]);
        return view('posts.create');
    }

    public function store(PostRequest $request){

        $attr = $request->all();
        
        $slug = \Str::slug(request('title'));
        $attr['slug'] = $slug;


        $cover = request()->file('cover');
        $coverUrl = $cover->storeAs("images/posts","{$slug}.{$cover->extension()}");


        $attr['cover'] = $coverUrl;
        
        
        Post::create($attr);


            Session()->flash('success','E-Kliping berhasil di upload');
        return back();
    }



    public function edit(post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(PostRequest $request, post $post) 
    {

        if (request()-file('cover')){
            \Storage::delete($post->cover);
            $cover = request()->file('cover')->store("images/posts");
        } else {
            $cover = $post->cover;
        }
               
        $attr = $request->all();
        $attr['cover'] = $cover;
        
        $post->update($attr);

            Session()->flash('success','E-Kliping berhasil di rubah');
        
            return back();
    }


    public function destroy(Post $post){
        \Storage::delete($post->cover);
        $post->delete();
        session()->flash("succuss", "Klipingnya sudah dihapus");
        return redirect('posts/table');
    } 



}
