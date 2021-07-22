<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return view('users.show', compact('user'));
    }


    public function friends(User $user) {
        return view('profile.friends', compact('user'));
    }


    public function addFriend($userId) {
        $user = User::find($userId);

        if (!$user)
            return redirect()->back()->with('error', 'Người dùng không tồn tại!');

        auth()->user()->befriend($user);

        return redirect()->back();
    }

    public function unfriend($userId) {
        $user = User::find($userId);

        if (!$user)
            return redirect()->back()->with('error', 'Người dùng không tồn tại!');

        auth()->user()->unfriend($user);

        return redirect()->back();
    }

    public function acceptFriend($userId) {
        $user = User::find($userId);

        if (!$user)
            return redirect()->back()->with('error', 'Người dùng không tồn tại!');

        auth()->user()->acceptFriendRequest($user);

        return redirect()->back();
    }

    public function denyFriend($userId) {
        $user = User::find($userId);

        if (!$user)
            return redirect()->back()->with('error', 'Người dùng không tồn tại!');

        auth()->user()->denyFriendRequest($user);

        return redirect()->back();
    }
}
