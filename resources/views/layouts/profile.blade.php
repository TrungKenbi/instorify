@extends('layouts.app')

@section('content')
    <section style="background-color: white">
        <div class="feature-photo">
            <figure><img src="{{ $user->cover_url }}" alt=""></figure>
            <form class="edit-phto" style="width: 200px" id="edit-cover" action="{{ route('profile.updateCover') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <i class="fa fa-camera-retro"></i>
                <label class="fileContainer">
                    Chỉnh sửa ảnh bìa
                    <input type="file" name="cover" id="cover" accept="image/png, image/jpeg, image/jpg"/>
                </label>
            </form>
        </div>
        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img src="{{ $user->avatar_url }}" alt="">
                        </figure>
                    </div>
                    <form class="edit-avatar" id="edit-avatar" style="margin-top: -30px" action="{{ route('profile.updateAvatar') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="fileContainer">
                            <i class="fa fa-camera-retro" style="font-size: 30px"></i>
                            <input type="file" name="avatar" id="avatar" accept="image/png, image/jpeg, image/jpg"/>
                        </label>
                    </form>
                    <script>
                        document.getElementById("avatar").onchange = function() {
                            document.getElementById("edit-avatar").submit();
                        };
                        document.getElementById("cover").onchange = function() {
                            document.getElementById("edit-cover").submit();
                        };
                    </script>
                </div>
            </div>
            <div class="user-info">
                <h3>
                    {{ $user->fullname }}
                    @if ($user->is_admin)
                        <span class="blue-tick-big"><i class="fas fa-check-circle"></i></span>
                    @endif
                </h3>
                <p id="profile-story">{{ $user->bio }}</p>
            </div>
            <div class="col-lg-10 col-sm-9">
                <div class="timeline-info">
                    <ul>
                        <li>
                            <a {{url()->current() == route('profile.index', $user->id) ? 'class="active"' : ''}} href="{{ route('profile.index', $user->id) }}" title="" data-ripple="">Bài viết</a>
                            <a {{url()->current() == route('profile.friends', $user->id) ? 'class="active"' : ''}} href="{{ route('profile.friends', $user->id) }}" title="" data-ripple="">Bạn bè</a>
                            <a {{url()->current() == route('profile.photos', $user->id) ? 'class="active"' : ''}} href="{{ route('profile.photos', $user->id) }}" title="" data-ripple="">Ảnh</a>
                            <a {{url()->current() == route('profile.music', $user->id) ? 'class="active"' : ''}} href="{{ route('profile.music', $user->id) }}" title="" data-ripple="">Bài hát</a>
                            <a {{url()->current() == route('profile.videos', $user->id) ? 'class="active"' : ''}} href="{{ route('profile.videos', $user->id) }}" title="" data-ripple="">Video</a>
                            @if (Auth::id() === $user->id)
                                <a href="{{ route('profile.edit', auth()->id()) }}" class="edit-user" title="" data-ripple="">
                                    <button><i class="fas fa-user-edit"></i> Chỉnh sửa trang cá nhân</button>
                                </a>
                            @endif
                        </li>
                        @if (Auth::id() !== $user->id)
                            <li class="friend">
                                @if (auth()->user()->isFriendWith($user))
                                    <a name="friend" href="{{ route('profile.friends.remove', $user->id) }}">
                                        <button><i class="fas fa-user-times" style="color: red"></i> Huỷ kết bạn</button>
                                    </a>
                                @elseif (auth()->user()->hasSentFriendRequestTo($user))
                                    <a name="friend" href="{{ route('profile.friends.remove', $user->id) }}">
                                        <button><i class="fas fa-user-times" style="color: red"></i> Huỷ yêu cầu</button>
                                    </a>
                                @elseif (auth()->user()->hasFriendRequestFrom($user))
                                    <a name="add_friend" href="{{ route('profile.friends.accept', $user->id) }}" >
                                        <button><i class="fas fa-user-plus"></i> Đồng ý</button>
                                    </a>
                                    <a name="friend" href="{{ route('profile.friends.deny', $user->id) }}">
                                        <button><i class="fas fa-user-times" style="color: red"></i> Huỷ</button>
                                    </a>
                                @else
                                    <a name="add_friend" href="{{ route('profile.friends.add', $user->id) }}" >
                                        <button><i class="fas fa-user-plus"></i> Kết bạn</button>
                                    </a>
                                @endif

                                <a name="inbox" href="#" ><button><i class="fab fa-facebook-messenger"></i> Nhắn tin</button></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" id="page-contents" style="margin-left: 150px; margin-top: -40px">
                            <div class="col-lg-4" style="margin-right: -50px">
                                <aside class="sidebar static">
                                    <div class="widget">
                                        <h4 class="widget-title">Giới thiệu</h4>
                                        <ul class="naves">
                                            @if($user->home_town)
                                            <li>
                                                <div class="row">
                                                    <div class="col-lg-2" style="margin-right: -10px">
                                                        <i class="fas fa-home" style="font-size: 24px"></i>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <a class="">{{ $user->home_town }}</a>
                                                    </div>
                                                </div>
                                            </li>
                                            @endif
                                            <li>
                                                <div class="row">
                                                    <div class="col-lg-2" style="margin-right: -10px">
                                                        <i class="fas fa-school" style="font-size: 24px"></i>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <a class="">Đại học Thủ Dầu Một</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-lg-2" style="margin-right: -10px">
                                                        <i class="fas fa-heart" style="font-size: 24px"></i>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <a class="">{{ $user->r_status }}</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-lg-2" style="margin-right: -10px">
                                                        <i class="fas fa-restroom" style="font-size: 24px"></i>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <a class="">{{ $user->gender_text }}</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-lg-2" style="margin-right: -10px">
                                                        <i class="fas fa-globe" style="font-size: 24px"></i>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <a href="https://www.facebook.com/your.tranminhhieu/" target="_blank">
                                                            <i class="fab fa-facebook-square" style="color: #1778F2; font-size: 20px"></i>
                                                        </a>
                                                        <a href="https://www.instagram.com/hieu.khongcuoi/" target="_blank">
                                                            <i class="fab fa-instagram-square" style="color: #C13584; font-size: 20px"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- Shortcuts -->
                                </aside>
                                <aside class="sidebar static">
                                    <div class="widget">
                                        @php($photos = $user->posts()->with('photos')->get()->pluck('photos')->flatten())
                                        <h4 class="widget-title">Ảnh</h4>
                                        <ul class="naves">
                                            <li>
                                                <div class="row" style="margin-top: -10px">
                                                    @foreach($photos->slice(0, 9) as $photo)
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <img src="{{ asset($photo->url) }}" style="width: 70px; height: 70px; border-radius: 10px">
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                        @if (count($photos) > 9)
                                            <div style="text-align: center; margin-bottom: 10px">
                                                <a href="{{ route('profile.photos', $user->id) }}"><p class="see-all">Xem tất cả</p></a>
                                            </div>
                                        @endif
                                    </div><!-- Shortcuts -->
                                </aside>
                                <aside class="sidebar static">
                                    <div class="widget">
                                        <h4 class="widget-title">Bạn bè</h4>
                                        <ul class="naves">
                                            @foreach($user->getFriends(10) as $friend)
                                                <li style="margin-top: -10px">
                                                    <div class="friend-img">
                                                        <img src="{{ $friend->avatar_url }}">
                                                        <a href="" style="margin-left: 10px"><strong>{{ $friend->fullname }}</strong></a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        @if($user->getFriendsCount() > 5)
                                            <div style="text-align: center; margin-bottom: 10px">
                                                <a href="{{ route('profile.friends', $user->id) }}"><p class="see-all">Xem tất cả</p></a>
                                            </div>
                                        @endif
                                    </div><!-- Shortcuts -->
                                </aside>
                            </div>
                            @yield('profile_content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
