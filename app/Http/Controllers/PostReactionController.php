<?php

namespace App\Http\Controllers;

use App\Models\PostReaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostReactionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param $postId
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store($postId, Request $request)
    {
        $request->validate([
            'type' => 'required|in:like,care,love,haha,wow,angry'
        ]);

        $reaction = PostReaction::where('user_id', Auth::id())
            ->where('post_id', $postId)
            ->first();

        if ($reaction) {
            $reaction->delete();
        } else {
            $reaction = PostReaction::create([
                'user_id' => Auth::id(),
                'post_id' => $postId,
                'type' => $request->get('type'),
            ]);
            $reaction->save();
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Biểu cảm bài viết thành công',
        ]);
    }
}
