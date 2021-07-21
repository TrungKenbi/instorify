<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'content', 'likes', 'comments', 'shares'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // nothing
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'likes' => 'integer',
        'comments' => 'integer',
        'shares' => 'integer',
    ];

    /**
     * Get the user that owns the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the photos for the post
     */
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    /**
     * Get the photos for the post
     */
    public function music()
    {
        return $this->hasMany(Music::class);
    }

    /**
     * Get the reactions for the post
     */
    public function reactions()
    {
        return $this->hasMany(PostReaction::class);
    }

    public function isUserReactedPost()
    {
        return $this->reactions()->where('user_id', auth()->id())->exists();
    }

    /**
     * Get the comments for the post
     */
    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }
}
