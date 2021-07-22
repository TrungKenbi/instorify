<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostCommentController extends Controller
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
            'content' => 'required'
        ]);

        $comment = PostComment::create([
            'user_id' => Auth::id(),
            'post_id' => $postId,
            'content' => $request->get('content'),
        ]);
        $comment->save();

        // Thông báo tới người ta :3
        $notiUserId = Post::find($postId)->user->id;
        if (auth()->id() != $notiUserId) {
            $notification = Notification::create([
                'from' => auth()->id(),
                'to' => $notiUserId,
                'type' => 'comment',
                'content' => 'đã bình luận tới bài viết của bạn'
            ]);
            $notification->save();
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Bình luận bài viết thành công',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostComment $postComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostComment  $postComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostComment $postComment)
    {
        //
    }
}
