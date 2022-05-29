<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderby('id', 'desc')->paginate(20);
        return view('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newPost = new Post();
        $request->validate([
                'title' => 'required|min:3|max:255',
                'author' => 'required|min:3|max:255',
                'content' => 'required|min:3|max:255',
                'image_url' => 'required|min:3',
            ],
            [
                "required" => "Non puoi inserire un post senza :attribute.",
            ]
        );
        $newPost->title = $data['title'];
        $newPost->author = $data ['author'];
        $newPost->content = $data['content'];
        $newPost->image_url = $data['image_url'];
        $newPost->slug = Str::slug($data['title'], '-');
        $newPost->save();

        return redirect()->route('admin.posts.index', $newPost)->with('message', 'Il nuovo post ' . $newPost->title . ' è stato aggiunto');
    }

    /**
     * Display the specified resource.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $request->validate([
                'title' => 'required|min:3|max:255',
                'author' => 'required|min:3|max:255',
                'content' => 'required|min:3',
                'image_url' => 'required|min:3|max:255',
            ],
            [
                "required" => "Non puoi inserire un post senza :attribute.",
            ]
        );

        $data = $request->all();
        $post->title = $data['title'];
        $post->author = $data ['author'];
        $post->content = $data['content'];
        $post->image_url = $data['image_url'];
        $post->slug = Str::slug( $post->title, '-');
        $post->save();

        return redirect()->route('admin.posts.index', $post)->with('message', $post->title .' è stato modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route("admin.posts.index",$post)->with('message', $post->title .' è stato eliminato');
    }
}
