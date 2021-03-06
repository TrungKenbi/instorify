@extends('layouts.app')

@section('content')
    <section style="padding-top: 60px">
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" id="page-content">
                            <div class="col-lg-3 left-bar">
                                <aside class="sidebar static">
                                    <div class="widget" style="padding-bottom: 40px">
                                        <h4 class="widget-title">Gợi ý kết bạn</h4>
                                        <ul class="followers" style="margin-top: -30px">
                                            <!--Gợi ý kết bạn-->
                                            @foreach($recommendFriends as $friend)
                                                <li style="margin-top: 20px">
                                                    <figure><img src="{{ $friend->avatar_url }}" alt=" " style="width: 100%; margin-left: -0px"></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="{{ route('profile.index', $friend->id) }}" title="">{{ $friend->fullname }}</a></h4>
                                                        <a href="#" title="" class="underline">{{ $friend->home_town }}</a>
                                                    </div>
                                                    <div style="margin-left: 200px; margin-top: -50px">
                                                        <a href="{{ route('profile.friends.add', $friend->id) }}">
                                                            <button>
                                                                <i class="fas fa-user-plus" style="color: #5271ff; font-size: 20px"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-lg-6 center-bar">
                                <!-- share box start -->
                                <div class="card card-small">
                                    <div class="share-box-inner">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    <img src="{{ Auth::user()->avatar_url }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <!-- share content box start -->
                                        <div class="share-content-box w-100">
                                            <form class="share-text-box">
                                        <textarea name="share" class="share-text-field" aria-disabled="true"
                                                  placeholder="Bạn đang nghĩ gì?" data-toggle="modal"
                                                  data-target="#textbox" id="email"></textarea>
                                            </form>
                                        </div>
                                        <!-- share content box end -->

                                        <!-- Modal start -->
                                        <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Tạo bài viết</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body custom-scroll">
                                                            <textarea name="content" class="share-field-big custom-scroll"
                                                              id="editor" placeholder="Bạn đang nghĩ gì?"></textarea>
                                                            <div class="attachments">
                                                                <ul>
                                                                    <li>
                                                                        <i class="fas fa-photo-video"
                                                                           style="color: #5271ff"></i>
                                                                        <label class="fileContainer">
                                                                            <input type="file" name="photos[]"
                                                                                   accept="image/png, image/jpg, image/jpeg, video/mp4">
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fas fa-music" style="color: #5271ff"></i>
                                                                        <label class="fileContainer">
                                                                            <input type="file" name="music[]" accept="audio/mp3, audio/m4a">
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="post-share-btn" data-dismiss="modal">Huỷ</button>
                                                            <button type="submit" class="post-share-btn">Đăng</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal end -->
                                    </div>
                                </div>
                                <!-- share box end -->
                                <!-- POST -->
                                <div class="loadMore">
                                    @foreach($posts as $post)
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <!-- POST INFO PART -->
                                                <figure>
                                                    <a href="{{ route('profile.index', $post->user->id) }}"><img src="{{ $post->user->avatar_url }}" alt="profile picture"
                                                                            style="width: 80%"></a>
                                                </figure>
                                                <div class="friend-name">
                                                    <ins><a href="{{ route('profile.index', $post->user->id) }}" title="">
                                                            {{ $post->user->fullname }}</a>
                                                        @if ($post->user->is_admin)
                                                            <span class="blue-tick-small"><i class="fas fa-check-circle"></i></span>
                                                        @endif
                                                    </ins>
                                                    <span>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>

                                                </div>
                                                <div class="option-post">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </div>

                                                <!-- POST CAPTION -->
                                                <div class="post-caption">
                                                    {{ $post->content }}
                                                </div>

                                                <!-- POST IMAGE -->
                                                <div class="post-meta">
                                                    @foreach($post->photos as $photo)
                                                        <img src="{{ asset($photo->url) }}" alt="">
                                                    @endforeach
                                                </div>

                                                <!-- MUSIC PART -->
                                                <div class="post-meta">
                                                    @if(count($post->photos) > 0)
                                                        @foreach($post->music as $music)
                                                            <iframe src="{{ route('music.show', $music->id) }}" frameBorder="0"></iframe>
                                                        @endforeach
                                                    @endif
                                                </div>

                                                <!-- LIKE, SHARE, COMMENT BUTTON PART -->
                                                <div class="we-video-info">
                                                    <ul>
                                                        <li>
                                                            @if ($post->isUserReactedPost())
                                                                @if ($post->reactions > 0)
                                                                    <span>{{ $post->reactions }}</span>
                                                                @endif
                                                                <span class="like liked" data-toggle="tooltip" data-id="{{ $post->id }}"
                                                                      title="Yêu thích">
                                                                    <i class="fas fa-heart" style="color: red"></i>
                                                                </span>
                                                            @else
                                                                @if ($post->reactions > 0)
                                                                    <span>{{ $post->reactions }}</span>
                                                                @endif
                                                                <span class="like" data-toggle="tooltip" data-id="{{ $post->id }}"
                                                                      title="Yêu thích">
                                                                    <i class="far fa-heart"></i>
                                                                </span>
                                                            @endif
                                                        </li>
                                                        <li>
															<span class="comment" data-toggle="tooltip"
                                                                  title="Bình luận">
																<i class="far fa-comment-alt"></i>
															</span>
                                                        </li>
                                                        <li>
															<span class="share" data-toggle="tooltip" title="Chia sẻ">
																<i class="fas fa-share-alt"></i>
															</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="we-video-info statistic">
                                                    <ul>
                                                        <li>{{ $post->comments()->count() }}</li>
                                                        <li style="margin-left: -40px">Bình luận</li>
                                                        <li style="margin-left: -40px">50</li>
                                                        <li style="margin-left: -40px">Lượt chia sẻ</li>
                                                    </ul>
                                                </div>

                                                <!-- COMMENT PART -->
                                                <div class="coment-area">
                                                    <hr style="margin-top: -10px; width: 96%">
                                                    <ul class="we-comet">
                                                        @foreach($post->comments() as $comment)
                                                            <li>
                                                                <div class="comet-avatar">
                                                                    <img src="{{ $comment->user->avatar_url }}" alt="">
                                                                </div>
                                                                <div class="we-comment">
                                                                    <div class="coment-head">
                                                                        <h5><a href="#" title="">{{ $comment->user->fullname }}</a></h5>
                                                                        <span>{{ Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span>
                                                                        <a class="we-reply" href="#" title="Like"><i
                                                                                class="far fa-heart"></i></a>
                                                                        <a class="we-reply" href="#" title="Reply"><i
                                                                                class="fa fa-reply"></i></a>
                                                                    </div>
                                                                    <p>{{ $comment->content }}</p>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                        <li style="display: none">
                                                            <a href="#" title="" class="showmore underline">Xem thêm bình luận
                                                                khác</a>
                                                        </li>
                                                        <hr style="width: 98%; margin-top: -10px; margin-left: 10px">
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="{{ auth()->user()->avatar_url }}" alt="" style="width: 90%">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form method="post">
                                                                    <textarea placeholder="Viết bình luận của bạn" data-id="{{ $post->id }}"></textarea>
                                                                    <div class="add-smiles">
                                                                <span class="em em-full_moon_with_face"
                                                                      title="add icon"></span>
                                                                    </div>
                                                                    <div class="smiles-bunch">
                                                                        <i class="em em---1"></i>
                                                                        <i class="em em-smiley"></i>
                                                                        <i class="em em-anguished"></i>
                                                                        <i class="em em-laughing"></i>
                                                                        <i class="em em-angry"></i>
                                                                        <i class="em em-astonished"></i>
                                                                        <i class="em em-blush"></i>
                                                                        <i class="em em-disappointed"></i>
                                                                        <i class="em em-worried"></i>
                                                                        <i class="em em-kissing_heart"></i>
                                                                        <i class="em em-rage"></i>
                                                                        <i class="em em-stuck_out_tongue"></i>
                                                                    </div>
                                                                    <button type="submit"></button>
                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                            </div>
                            <div class="col-lg-3 right-bar">
                                <aside class="sidebar static">
                                    <div class="widget friend-list stick-widget">
                                        <h4 class="widget-title">Người liên hệ</h4>
                                        <div id="searchDir">
                                        </div>
                                        <ul id="people-list" class="friendz-list">
                                            @foreach(auth()->user()->getFriends(5) as $friend)
                                            <li>
                                                <figure style="margin-left: -20px">
                                                    <img src="{{ $friend->avatar_url }}" alt="" style="width: 90%">
                                                    @if($friend->isOnline())
                                                        <span class="online"></span>
                                                    @else
                                                        <span class="offline"></span>
                                                    @endif
                                                </figure>
                                                <div class="friendz-meta" style="margin-left: 10px">
                                                    <a href="#" style="color: black; "><b>{{ $friend->fullname }}</b></a>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </aside>
                                <div class="chat-friendz">
                                    <div class="chat-box">
                                        <div class="chat-head">
                                            <span class="status f-online"></span>
                                            <h6>Dương Lê Phước Trung</h6>
                                            <div class="more">
                                                <span class="close-mesage"><i class="fas fa-times" style="color: lightgrey"></i></span>
                                            </div>
                                        </div>
                                        <div class="chat-list">
                                            <ul>
                                                <li class="me">
                                                    <div class="chat-thumb"><img src="/assets/img/sample_ava1.jpg" alt=""></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Hôm qua lúc 8:10pm</time></span>
                                                    </div>
                                                </li>
                                                <li class="you">
                                                    <div class="chat-thumb"><img src="/assets/img/avartar.png" alt=""></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Hôm qua lúc 8:10pm</time></span>
                                                    </div>
                                                </li>
                                                <li class="me">
                                                    <div class="chat-thumb"><img src="/assets/img/sample_ava1.jpg" alt=""></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Hôm qua lúc 8:10pm</time></span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <form class="text-box">
                                                <textarea placeholder="Nhập tin nhắn..."></textarea>
                                                <div class="add-smiles">
                                                    <span class="em em-full_moon_with_face" title="add icon"></span>
                                                </div>
                                                <div class="smiles-bunch" style="margin-top: 45px">
                                                    <i class="em em---1"></i>
                                                    <i class="em em-smiley"></i>
                                                    <i class="em em-anguished"></i>
                                                    <i class="em em-laughing"></i>
                                                    <i class="em em-angry"></i>
                                                    <i class="em em-astonished"></i>
                                                    <i class="em em-blush"></i>
                                                    <i class="em em-disappointed"></i>
                                                    <i class="em em-worried"></i>
                                                    <i class="em em-kissing_heart"></i>
                                                    <i class="em em-rage"></i>
                                                    <i class="em em-stuck_out_tongue"></i>
                                                </div>
                                            </form>
                                            <div class="send-message">
                                                <button type="submit"><i class="fas fa-paper-plane" style="color: #5271ff; font-size: 24px"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
