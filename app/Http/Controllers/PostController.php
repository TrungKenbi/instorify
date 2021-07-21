<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Photo;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->orderBy('id', 'DESC')->get();
        dd($posts);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
//            'photos.*' => 'mimes:jpg,jpeg,png,bmp,tiff|max:10240', // max 10MB
//            'music.*' => 'mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav|max:10240', // max 10MB
        ]);

        DB::transaction(function () use ($request) {
            $post = new Post([
                'user_id' => Auth::id(),
                'content' => $request->get('content'),
            ]);

            $post->save();

            if ($request->hasfile('photos')) {
                foreach ($request->file('photos') as $file) {
                    $path = Storage::disk('public')->putFile('photos', $file, 'public');
                    $photo = new Photo();
                    $photo->post_id = $post->id;
                    $photo->url = Storage::url($path);
                    $photo->save();
                }
            }

            if ($request->hasfile('music')) {
                foreach ($request->file('music') as $file) {
                    $path = Storage::disk('public')->putFile('music', $file, 'public');
                    $music = new Music();
                    $music->post_id = $post->id;
                    $music->url = Storage::url($path);
                    $music->save();
                }
            }
        });

        return redirect('/posts')->with('success', 'Posts saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
