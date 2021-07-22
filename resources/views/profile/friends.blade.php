@extends('layouts.profile')

@section('profile_content')
    <div class="col-lg-7" style="margin-top: -20px">
        <div class="central-meta">
            <div class="friends">
                <div class="frnds">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">Bạn bè</a> <span>{{ $user->getFriendsCount() }}</span></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active fade show " id="frends" >
                            <ul class="nearby-contct">
                                <!--Friend's info here-->
                                @foreach($user->getFriends() as $friend)
                                <li>
                                    <div class="nearly-pepls">
                                        <figure>
                                            <a href="{{ route('profile.index', $friend->id) }}" title=""><img src="{{ $friend->avatar_url }}" alt="" style="width: 90%; margin-left: -0px"></a>
                                        </figure>
                                        <div class="pepl-info">
                                            <h4><a href="{{ route('profile.index', $friend->id) }}" title="">{{ $friend->fullname }}</a></h4>
                                            <span>{{ $friend->home_town }}</span>
                                        </div>
                                        @if($user->id === auth()->id())
                                            <div class="unfriend">
                                                <a href="{{ route('profile.friends.remove', $friend->id) }}" title="" class="more-action" data-ripple="">
                                                    <button><i class="fas fa-user-times" style="color: red"></i> Huỷ kết bạn</button>
                                                </a>
                                            </div>
                                        @else
                                            @if (auth()->id() != $friend->id)
                                                <div class="unfriend">
                                                    @if (auth()->user()->isFriendWith($friend))
                                                        <a name="friend" href="{{ route('profile.friends.remove', $friend->id) }}">
                                                            <button><i class="fas fa-user-times" style="color: red"></i> Huỷ kết bạn</button>
                                                        </a>
                                                    @elseif (auth()->user()->hasSentFriendRequestTo($friend))
                                                        <a name="friend" href="{{ route('profile.friends.remove', $friend->id) }}">
                                                            <button><i class="fas fa-user-times" style="color: red"></i> Huỷ yêu cầu</button>
                                                        </a>
                                                    @elseif (auth()->user()->hasFriendRequestFrom($friend))
                                                        <a name="add_friend" href="{{ route('profile.friends.accept', $friend->id) }}">
                                                            <button><i class="fas fa-user-plus"></i> Đồng ý</button>
                                                        </a>
                                                        <a name="friend" href="{{ route('profile.friends.deny', $friend->id) }}">
                                                            <button><i class="fas fa-user-times" style="color: red"></i> Huỷ</button>
                                                        </a>
                                                    @else
                                                        <a class="more-action" href="{{ route('profile.friends.add', $friend->id) }}">
                                                            <button><i class="fas fa-user-plus"></i> Kết bạn</button>
                                                        </a>
                                                    @endif
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
