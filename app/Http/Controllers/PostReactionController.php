<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Post;
use App\Models\PostReaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            Post::where('id', $postId)
                ->update([
                    'reactions'=> DB::raw('reactions-1'),
                ]);
        } else {

            $reaction = PostReaction::create([
                'user_id' => Auth::id(),
                'post_id' => $postId,
                'type' => $request->get('type'),
            ]);
            $reaction->save();
            Post::where('id', $postId)
                ->update([
                    'reactions'=> DB::raw('reactions+1'),
                ]);

            // Thông báo tới người ta :3
            $notiUserId = Post::find($postId)->user->id;
            if (auth()->id() != $notiUserId) {
                $notification = Notification::create([
                    'from' => auth()->id(),
                    'to' => $notiUserId,
                    'type' => $request->get('type'),
                    'content' => 'đã bày tỏ cảm xúc với bài viết của bạn'
                ]);
                $notification->save();
            }
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Biểu cảm bài viết thành công',
        ]);
    }
}
