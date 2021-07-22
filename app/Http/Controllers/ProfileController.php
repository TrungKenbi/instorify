<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

    public function photos(User $user) {
        return view('profile.photos', compact('user'));
    }

    public function music(User $user) {
        return view('profile.music', compact('user'));
    }

    public function videos(User $user)
    {
        return view('profile.videos', compact('user'));
    }

    public function edit(User $user)
    {
        if ($user->id != auth()->id())
            return redirect(route('profile.edit', auth()->id()));

        $titles = [
            (object)[
                'id' => 'single',
                'name' => 'Độc thân'
            ],
            (object)[
                'id' => 'in_relationship',
                'name' => 'Đang hẹn hò'
            ],
            (object)[
                'id' => 'married',
                'name' => 'Đã kết hôn'
            ],
        ];
        return view('profile.edit', compact('user', 'titles'));
    }

    public function update(User $user, Request $request)
    {
        $input = $request->all();
        $user->fill($input)->save();
        return redirect()->back();
    }

    public function updateAvatar(Request $request)
    {
        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');
            $path = Storage::disk('public')->putFile('avatars', $file, 'public');
            $user = auth()->user();
            $user->avatar = Storage::url($path);
            $user->save();
        }
        return redirect()->back();
    }

    public function updateCover(Request $request)
    {
        if ($request->hasfile('cover')) {
            $file = $request->file('cover');
            $path = Storage::disk('public')->putFile('covers', $file, 'public');
            $user = auth()->user();
            $user->cover = Storage::url($path);
            $user->save();
        }
        return redirect()->back();
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
