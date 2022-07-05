<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //tras os itens de acordo com a condição inserida
        //$posts = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->get();

        //traz todos os registros
        //$posts = Post::all();

        //ordenando pelo model na consulta total
        //$posts = Post::orderBy('title','desc')->get();

        //Metodo usando o orderByDesc
        //$posts = Post::orderByDesc('title')->get();

        //ordenando pelo asc
        //$posts = Post::orderBy('title')->get();

        //ordenando pelo asc declarado
        //$posts = Post::orderBy('title','asc')->get();


//        $posts = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->first();
//        foreach ($posts as $post){
//            echo "<h1>{$post->title}</h1>";
//            echo "<h2>{$post->subtitle}</h2>";
//            echo "<p>{$post->description}</p>";
//            echo "<hr>";
//        }

////      $post = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->first();
//        echo "<h1>{$post->title}</h1>";
//        echo "<h2>{$post->subtitle}</h2>";
//        echo "<p>{$post->description}</p>";
//        echo "<hr>";

        //$post = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->firstOrFail();
        //echo "<h1>{$post->title}</h1>";
//        echo "<h2>{$post->subtitle}</h2>";
//        echo "<p>{$post->description}</p>";
//        echo "<hr>";

//        $post = Post::find(1);
//        echo "<h1>{$post->title}</h1>";
//        echo "<h2>{$post->subtitle}</h2>";
//        echo "<p>{$post->description}</p>";
//        echo "<hr>";

//        $post = Post::findOrFail(99);
//        echo "<h1>{$post->title}</h1>";
//        echo "<h2>{$post->subtitle}</h2>";
//        echo "<p>{$post->description}</p>";
//        echo "<hr>";


//        $posts = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->min('title');
//        $posts = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->max('title');
//        $posts = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->count('title');
//        $posts = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->sum('title');
//        $posts = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->avg('title');


        //$posts = Post::where('created_at', '>=', date('Y-m-d H:i:s'))->get();
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);

        //return view('posts.index')->with(['posts' => $posts]);



        //var_dump($posts);
       // return view('posts.index',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
