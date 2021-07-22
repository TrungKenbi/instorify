<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
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
