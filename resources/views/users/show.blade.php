@extends('layouts.app')

@section('content')
    <section style="background-color: white">
        <div class="feature-photo">
            <figure><img src="{{ $user->cover_url }}" alt=""></figure>
            <form class="edit-phto" style="width: 200px">
                <i class="fa fa-camera-retro"></i>
                <label class="fileContainer">
                    Chỉnh sửa ảnh bìa
                    <input type="file" accept="image/png, image/jpeg, image/jpg"/>
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
                    <form class="edit-avatar" style="margin-top: -30px">
                        <label class="fileContainer">
                            <i class="fa fa-camera-retro" style="font-size: 30px"></i>
                            <input type="file" accept="image/png, image/jpeg, image/jpg"/>
                        </label>
                    </form>
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
                            <a class="active" href="/profile" title="" data-ripple="">Bài viết</a>
                            <a class="" href="/profile_friends" title="" data-ripple="">Bạn bè</a>
                            <a class="" href="/profile_photos" title="" data-ripple="">Ảnh</a>
                            <a class="" href="/profile_music" title="" data-ripple="">Bài hát</a>
                            <a class="" href="/profile_videos" title="" data-ripple="">Video</a>
                            @if (Auth::id() === $user->id)
                            <a name="edituser" class="edit-user" href="/edituser" title="" data-ripple="">
                                <button><i class="fas fa-user-edit"></i> Chỉnh sửa trang cá nhân</button>
                            </a>
                            @endif
                        </li>
                        @if (Auth::id() !== $user->id)
                        <li class="friend">
                            <a name="add_friend" href="#" ><button><i class="fas fa-user-plus"></i> Kết bạn</button></a>
                            <a name="friend" href="#" hidden><button><i class="fas fa-user-times" style="color: red"></i> Huỷ kết bạn</button></a>
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
                                            <li>
                                                <div class="row">
                                                    <div class="col-lg-2" style="margin-right: -10px">
                                                        <i class="fas fa-home" style="font-size: 24px"></i>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <a class="">Bình Dương</a>
                                                    </div>
                                                </div>
                                            </li>
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
                                                        <a class="">Độc thân</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-lg-2" style="margin-right: -10px">
                                                        <i class="fas fa-restroom" style="font-size: 24px"></i>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <a class="">Nam</a>
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
                                        <h4 class="widget-title">Ảnh</h4>
                                        <ul class="naves">
                                            <li>
                                                <div class="row" style="margin-top: -10px">
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <img src="/assets/img/avartar.png" style="width: 70px; height: 70px; border-radius: 10px">
                                                    </div>
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <img src="/assets/img/avartar.png" style="width: 70px; height: 70px; border-radius: 10px">
                                                    </div>
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <img src="/assets/img/avartar.png" style="width: 70px; height: 70px; border-radius: 10px">
                                                    </div>
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <img src="/assets/img/avartar.png" style="width: 70px; height: 70px; border-radius: 10px">
                                                    </div>
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <img src="/assets/img/avartar.png" style="width: 70px; height: 70px; border-radius: 10px">
                                                    </div>
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <img src="/assets/img/avartar.png" style="width: 70px; height: 70px; border-radius: 10px">
                                                    </div>
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <img src="/assets/img/avartar.png" style="width: 70px; height: 70px; border-radius: 10px">
                                                    </div>
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <img src="/assets/img/avartar.png" style="width: 70px; height: 70px; border-radius: 10px">
                                                    </div>
                                                    <div class="col-lg-4" style="margin-top: 10px">
                                                        <img src="/assets/img/avartar.png" style="width: 70px; height: 70px; border-radius: 10px">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div style="text-align: center; margin-bottom: 10px">
                                            <a href="#"><p class="see-all">Xem tất cả</p></a>
                                        </div>
                                    </div><!-- Shortcuts -->
                                </aside>
                                <aside class="sidebar static">
                                    <div class="widget">
                                        <h4 class="widget-title">Bạn bè</h4>
                                        <ul class="naves">
                                            <li style="margin-top: -10px">
                                                <div class="friend-img">
                                                    <img src="/assets/img/avartar.png">
                                                    <a href="" style="margin-left: 10px"><strong>Dương Lê Phước Trung</strong></a>
                                                </div>
                                            </li>
                                            <li style="margin-top: -10px">
                                                <div class="friend-img">
                                                    <img src="/assets/img/avartar.png">
                                                    <a href="" style="margin-left: 10px"><strong>Dương Lê Phước Trung</strong></a>
                                                </div>
                                            </li>
                                            <li style="margin-top: -10px">
                                                <div class="friend-img">
                                                    <img src="/assets/img/avartar.png">
                                                    <a href="" style="margin-left: 10px"><strong>Dương Lê Phước Trung</strong></a>
                                                </div>
                                            </li>
                                            <li style="margin-top: -10px">
                                                <div class="friend-img">
                                                    <img src="/assets/img/avartar.png">
                                                    <a href="" style="margin-left: 10px"><strong>Dương Lê Phước Trung</strong></a>
                                                </div>
                                            </li>
                                            <li style="margin-top: -10px">
                                                <div class="friend-img">
                                                    <img src="/assets/img/avartar.png">
                                                    <a href="" style="margin-left: 10px"><strong>Dương Lê Phước Trung</strong></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div style="text-align: center; margin-bottom: 10px">
                                            <a href="#"><p class="see-all">Xem tất cả</p></a>
                                        </div>
                                    </div><!-- Shortcuts -->
                                </aside>
                            </div>
                            <div class="col-lg-7">
                                <!-- share box start -->
                                <div class="card card-small">
                                    <div class="share-box-inner">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    <img src="{{ $user->avatar_url }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <!-- share content box start -->
                                        <div class="share-content-box w-100">
                                            <form class="share-text-box">
                                                <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Bạn đang nghĩ gì?" data-toggle="modal" data-target="#textbox" id="email"></textarea>
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
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body custom-scroll">
                                                            <textarea name="content" class="share-field-big custom-scroll" id="editor" placeholder="Bạn đang nghĩ gì?"></textarea>
                                                            <div class="attachments">
                                                                <ul>
                                                                    <li>
                                                                        <i class="fas fa-photo-video" style="color: #5271ff"></i>
                                                                        <label class="fileContainer">
                                                                            <input type="file" name="photos[]" accept="image/png, image/jpg, image/jpeg, video/mp4">
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
                                    @foreach($user->posts as $post)
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <!-- POST INFO PART -->
                                                <figure>
                                                    <a href="{{ route('users.show', $post->user->id) }}"><img src="{{ $post->user->avatar_url }}" alt="profile picture" style="width: 80%"></a>
                                                </figure>
                                                <div class="friend-name">
                                                    <ins>
                                                        <a href="{{ route('users.show', $post->user->id) }}" title="">{{ $post->user->fullname }}</a>
                                                        @if ($post->user->is_admin)
                                                            <span class="blue-tick-small"><i class="fas fa-check-circle"></i></span>
                                                        @endif
                                                    </ins>
                                                    <span>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</span>
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
                                                                <span class="like liked" data-toggle="tooltip" data-id="{{ $post->id }}"
                                                                      title="Yêu thích">
                                                                    <i class="fas fa-heart" style="color: red"></i>
                                                                </span>
                                                            @else
                                                                <span class="like" data-toggle="tooltip" data-id="{{ $post->id }}"
                                                                      title="Yêu thích">
                                                                    <i class="far fa-heart"></i>
                                                                </span>
                                                            @endif
                                                        </li>
                                                        <li>
                                                        <span class="comment" data-toggle="tooltip" title="Comments">
                                                            <i class="far fa-comment-alt"></i>
                                                        </span>
                                                        </li>
                                                        <li>
                                                        <span class="share" data-toggle="tooltip" title="Share">
                                                            <i class="fas fa-share-alt"></i>
                                                        </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="we-video-info statistic">
                                                    <ul>
                                                        <li>50</li>
                                                        <li style="margin-left: -40px">Bình luận</li>
                                                        <li style="margin-left: -40px">50</li>
                                                        <li style="margin-left: -40px">Lượt chia sẻ</li>
                                                    </ul>
                                                </div>


                                                <!-- COMMENT PART -->
                                                <div class="coment-area">
                                                    <hr style="width: 96%; margin-top: -10px">
                                                    <ul class="we-comet">
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="/assets/img/sample_ava1.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="#" title="">Dương Lê Phước Trung</a></h5>
                                                                    <span>1 phút trước</span>
                                                                    <a class="we-reply" href="#" title="Like"><i class="far fa-heart"></i></a>
                                                                    <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>Nhạc hay quá trời quá đất luôn á</p>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div class="comet-avatar">
                                                                        <img src="/assets/img/avartar.png" alt="">
                                                                    </div>
                                                                    <div class="we-comment">
                                                                        <div class="coment-head">
                                                                            <h5><a href="time-line.html" title="">Minh Hiếu</a></h5>
                                                                            <span>Vừa xong</span>
                                                                            <a class="we-reply" href="#" title="Like"><i class="far fa-heart"></i></a>
                                                                            <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                        </div>
                                                                        <p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">Xem thêm bình luận khác</a>
                                                        </li>
                                                        <hr style="width: 98%; margin-top: -10px; margin-left: 10px">
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="{{ $post->user->avatar_url }}" alt="" style="width: 90%">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form method="post">
                                                                    <textarea placeholder="Viết bình luận của bạn"></textarea>
                                                                    <div class="add-smiles">
                                                                        <span class="em em-full_moon_with_face" title="add icon"></span>
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
                                    <!-- POST VIDEO -->

{{--                                    <div class="central-meta item" style="margin-top: -10px">--}}
{{--                                        <div class="user-post">--}}
{{--                                            <div class="friend-info">--}}
{{--                                                <!-- POST INFO PART -->--}}
{{--                                                <figure>--}}
{{--                                                    <img src="/assets/img/sample_ava1.jpg" alt="profile picture" style="width: 80%">--}}
{{--                                                </figure>--}}
{{--                                                <div class="friend-name">--}}
{{--                                                    <ins><a href="#" title="">Dương Lê Phước Trung</a></ins>--}}
{{--                                                    <span>11 tháng 07 lúc 08:00 PM</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="option-post">--}}
{{--                                                    <i class="fas fa-ellipsis-v"></i>--}}
{{--                                                </div>--}}

{{--                                                <!-- POST CAPTION -->--}}
{{--                                                <div class="post-caption">--}}
{{--                                                    <p>Hôm nay trời nhẹ lên cao cao quá cao</p>--}}
{{--                                                </div>--}}

{{--                                                <!-- POST IMAGE -->--}}
{{--                                                <div class="post-meta">--}}
{{--                                                    <video id="VisaChipCardVideo" style="width: 685px" controls>--}}
{{--                                                        <source src="/assets/videos/sample.mp4" type="video/mp4">--}}
{{--                                                        <!--Browser does not support ok<video> tag -->--}}
{{--                                                    </video>--}}
{{--                                                </div>--}}

{{--                                                <!-- LIKE, SHARE, COMMENT BUTTON PART -->--}}
{{--                                                <div class="we-video-info">--}}
{{--                                                    <ul>--}}
{{--                                                        <li>--}}
{{--                                                        <span class="like" id="likePost" data-toggle="tooltip" title="Like">--}}
{{--                                                            <i class="far fa-heart"></i>--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                        <span class="comment" data-toggle="tooltip" title="Comments">--}}
{{--                                                            <i class="far fa-comment-alt"></i>--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                        <span class="share" data-toggle="tooltip" title="Share">--}}
{{--                                                            <i class="fas fa-share-alt"></i>--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="we-video-info statistic">--}}
{{--                                                    <ul>--}}
{{--                                                        <li>50</li>--}}
{{--                                                        <li style="margin-left: -40px">Bình luận</li>--}}
{{--                                                        <li style="margin-left: -40px">50</li>--}}
{{--                                                        <li style="margin-left: -40px">Lượt chia sẻ</li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}

{{--                                                <!-- COMMENT PART -->--}}
{{--                                                <div class="coment-area">--}}
{{--                                                    <hr style="margin-top: -10px; width: 96%">--}}
{{--                                                    <ul class="we-comet">--}}
{{--                                                        <li>--}}
{{--                                                            <div class="comet-avatar">--}}
{{--                                                                <img src="/assets/img/sample_ava1.jpg" alt="">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="we-comment">--}}
{{--                                                                <div class="coment-head">--}}
{{--                                                                    <h5><a href="#" title="">Dương Lê Phước Trung</a></h5>--}}
{{--                                                                    <span>1 phút trước</span>--}}
{{--                                                                    <a class="we-reply" href="#" title="Like"><i class="far fa-heart"></i></a>--}}
{{--                                                                    <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>--}}
{{--                                                                </div>--}}
{{--                                                                <p>Nhạc hay quá trời quá đất luôn á</p>--}}
{{--                                                            </div>--}}
{{--                                                            <ul>--}}
{{--                                                                <li>--}}
{{--                                                                    <div class="comet-avatar">--}}
{{--                                                                        <img src="/assets/img/avartar.png" alt="">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="we-comment">--}}
{{--                                                                        <div class="coment-head">--}}
{{--                                                                            <h5><a href="time-line.html" title="">Minh Hiếu</a></h5>--}}
{{--                                                                            <span>Vừa xong</span>--}}
{{--                                                                            <a class="we-reply" href="#" title="Like"><i class="far fa-heart"></i></a>--}}
{{--                                                                            <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>--}}
{{--                                                                    </div>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#" title="" class="showmore underline">Xem thêm bình luận khác</a>--}}
{{--                                                        </li>--}}
{{--                                                        <hr style="width: 98%; margin-top: -10px; margin-left: 10px">--}}
{{--                                                        <li class="post-comment">--}}

{{--                                                            <div class="comet-avatar">--}}
{{--                                                                <img src="/assets/img/avartar.png" alt="" style="width: 90%">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="post-comt-box">--}}
{{--                                                                <form method="post">--}}
{{--                                                                    <textarea placeholder="Viết bình luận của bạn"></textarea>--}}
{{--                                                                    <div class="add-smiles">--}}
{{--                                                                        <span class="em em-full_moon_with_face" title="add icon"></span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="smiles-bunch">--}}
{{--                                                                        <i class="em em---1"></i>--}}
{{--                                                                        <i class="em em-smiley"></i>--}}
{{--                                                                        <i class="em em-anguished"></i>--}}
{{--                                                                        <i class="em em-laughing"></i>--}}
{{--                                                                        <i class="em em-angry"></i>--}}
{{--                                                                        <i class="em em-astonished"></i>--}}
{{--                                                                        <i class="em em-blush"></i>--}}
{{--                                                                        <i class="em em-disappointed"></i>--}}
{{--                                                                        <i class="em em-worried"></i>--}}
{{--                                                                        <i class="em em-kissing_heart"></i>--}}
{{--                                                                        <i class="em em-rage"></i>--}}
{{--                                                                        <i class="em em-stuck_out_tongue"></i>--}}
{{--                                                                    </div>--}}
{{--                                                                    <button type="submit"></button>--}}
{{--                                                                </form>--}}
{{--                                                            </div>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="lodmore"><button class="btn-view btn-load-more"></button></div>--}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
