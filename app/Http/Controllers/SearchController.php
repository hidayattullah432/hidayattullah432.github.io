<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function post(Request $request){
        


        // $posts = post::when($request->keyword, function ($query) use ($request) {
        //     $query->where('body', 'like', "%{$request->keyword}%")
        //         ->orWhere('title', 'like', "%{$request->keyword}%");
        // })->get();
    
        // return view('posts.index', compact('posts'));


        $query = request('query');
        $posts = Post::where("title","like","%$query%")
        ->orWhere("body","like","%$query%")
        ->orWhere("sumber","like","%$query%")
        ->orWhere("tanggal","like","%$query%")->latest()->paginate(10);


        // $posts = Post::when($request->keyword, function ($query) use ($request) {
        //     $query->where('title', 'like', "%{$request->keyword}%")
        //         ->orWhere('body', 'like', "%{$request->keyword}%")
        //         ->orWhere('tanggal', 'like', "%{$request->keyword}%")
        //         ->orWhere('sumber', 'like', "%{$request->keyword}%");
        // })->paginate(10);
    
        return view('posts.index', compact('posts'));
    }
}
