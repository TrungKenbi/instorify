<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'first_name', 'last_name', 'dob', 'gender', 'avatar', 'cover',
        'home_town', 'relationship_status', 'bio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'is_admin'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'dob' => 'date',
        'is_admin' => 'boolean',
    ];

    /**
     * Get the posts for the user
     */
    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('id', 'DESC');
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Get avatar url
     *
     * @return string
     */
    public function getAvatarUrlAttribute()
    {
        return $this->avatar ?? '/assets/img/sample_ava.png';
    }

    /**
     * Get cover url
     *
     * @return string
     */
    public function getCoverUrlAttribute()
    {
        return $this->cover ?? '/assets/img/landing.png';
    }

    /**
     * Get gender text
     *
     * @return string
     */
    public function getGenderTextAttribute()
    {
        $genders = [
            'male' => 'Nam',
            'female' => 'Nữ',
            'unisex' => 'Khác'
        ];
        return $genders[$this->gender];
    }
}
