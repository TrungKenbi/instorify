<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from', 'to', 'type', 'content'
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
    ];


    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from');
    }

    public function toUser()
    {
        return $this->belongsTo(User::class, 'to');
    }
}
