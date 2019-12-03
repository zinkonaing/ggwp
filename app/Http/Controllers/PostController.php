<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = new Post();

        $list = $post->latest()->get();

        return view("post.index",compact('list'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("post.create");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title"=>"required|unique:posts,title|min:5|max:255",
            "category_id"=>"required|numeric|exists:categories,id",
            "description" => "required|min:15"
        ]);
        $post   = new Post();
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->description = $request->description;
        $post->save();
        return redirect()->route("post.index")->with("status","<p class='alert alert-success'>{$request->title} is added</p>");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $info = $post;
        return view("post.show",compact('info'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $name=$post->title;
        $post->delete();
        return redirect()->route("post.index");
    }
}