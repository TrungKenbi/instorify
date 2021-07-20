@extends('layouts.app')

@section('content')
    <section style="background-color: white">
        <div class="feature-photo">
            <figure><img src="/assets/img/landing.png" alt=""></figure>
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
                            <img src="/assets/img/avartar.png" alt="">
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
                <h3>Minh Hiếu</h3>
                <p id="profile-story">Rảnh rỗi sinh nông nổi</p>
            </div>
            <div class="col-lg-10 col-sm-9">
                <div class="timeline-info">
                    <ul>
                        <li>
                            <a class="" href="/profile" title="" data-ripple="">Bài viết</a>
                            <a class="" href="/profile_friends" title="" data-ripple="">Bạn bè</a>
                            <a class="" href="/profile_photos" title="" data-ripple="">Ảnh</a>
                            <a class="active" href="/profile_music" title="" data-ripple="">Bài hát</a>
                            <a class="" href="/profile_videos" title="" data-ripple="">Video</a>
                            <a name="edituser" class="edit-user" href="/edituser" title="" data-ripple=""><button><i class="fas fa-user-edit"></i> Chỉnh sửa trang cá nhân</button></a>
                        </li>
                        <li class="friend">
                            <a name="add_friend" href="#" ><button><i class="fas fa-user-plus"></i> Kết bạn</button></a>
                            <a name="friend" href="#" hidden><button><i class="fas fa-user-times" style="color: red"></i> Huỷ kết bạn</button></a>
                            <a name="inbox" href="#" ><button><i class="fab fa-facebook-messenger"></i> Nhắn tin</button></a>
                        </li>
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
                            <div class="col-lg-7" style="margin-top: -20px">
                                <div class="central-meta">
                                    <div class="musics">
                                        <!--Music here-->
                                        <div class="post-meta music" style="width: 684px; margin-bottom: 20px; margin-top: 30px">
                                            <div id="player-content">
                                                <div id="album-art">
                                                    <img src="https://avatar-ex-swe.nixcdn.com/song/2020/05/29/a/7/1/5/1590735141658_640.jpg"
                                                         class="active" id="_1">
                                                    <div id="buffer-box">Buffering ...</div>
                                                </div>
                                            </div>
                                            <div class="player-controls">
                                                <div class="control">
                                                    <div class="button" id="play-pause-button">
                                                        <i class="fas fa-play"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="player-track">
                                                <div id="album-name"></div>
                                                <div id="track-name"></div>
                                                <div id="s-area">
                                                    <div id="ins-time"></div>
                                                    <div id="s-hover"></div>
                                                    <div id="seek-bar"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Music here-->
                                        <div class="post-meta music" style="width: 684px; margin-bottom: 20px; margin-top: 30px">
                                            <div id="player-content">
                                                <div id="album-art">
                                                    <img src="https://avatar-ex-swe.nixcdn.com/song/2020/05/29/a/7/1/5/1590735141658_640.jpg"
                                                         class="active" id="_1">
                                                    <div id="buffer-box">Buffering ...</div>
                                                </div>
                                            </div>
                                            <div class="player-controls">
                                                <div class="control">
                                                    <div class="button" id="play-pause-button">
                                                        <i class="fas fa-play"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="player-track">
                                                <div id="album-name"></div>
                                                <div id="track-name"></div>
                                                <div id="s-area">
                                                    <div id="ins-time"></div>
                                                    <div id="s-hover"></div>
                                                    <div id="seek-bar"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Music here-->
                                        <div class="post-meta music" style="width: 684px; margin-bottom: 20px; margin-top: 30px">
                                            <div id="player-content">
                                                <div id="album-art">
                                                    <img src="https://avatar-ex-swe.nixcdn.com/song/2020/05/29/a/7/1/5/1590735141658_640.jpg"
                                                         class="active" id="_1">
                                                    <div id="buffer-box">Buffering ...</div>
                                                </div>
                                            </div>
                                            <div class="player-controls">
                                                <div class="control">
                                                    <div class="button" id="play-pause-button">
                                                        <i class="fas fa-play"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="player-track">
                                                <div id="album-name"></div>
                                                <div id="track-name"></div>
                                                <div id="s-area">
                                                    <div id="ins-time"></div>
                                                    <div id="s-hover"></div>
                                                    <div id="seek-bar"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Music here-->
                                        <div class="post-meta music" style="width: 684px; margin-bottom: 20px; margin-top: 30px">
                                            <div id="player-content">
                                                <div id="album-art">
                                                    <img src="https://avatar-ex-swe.nixcdn.com/song/2020/05/29/a/7/1/5/1590735141658_640.jpg"
                                                         class="active" id="_1">
                                                    <div id="buffer-box">Buffering ...</div>
                                                </div>
                                            </div>
                                            <div class="player-controls">
                                                <div class="control">
                                                    <div class="button" id="play-pause-button">
                                                        <i class="fas fa-play"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="player-track">
                                                <div id="album-name"></div>
                                                <div id="track-name"></div>
                                                <div id="s-area">
                                                    <div id="ins-time"></div>
                                                    <div id="s-hover"></div>
                                                    <div id="seek-bar"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Music here-->
                                        <div class="post-meta music" style="width: 684px; margin-bottom: 20px; margin-top: 30px">
                                            <div id="player-content">
                                                <div id="album-art">
                                                    <img src="https://avatar-ex-swe.nixcdn.com/song/2020/05/29/a/7/1/5/1590735141658_640.jpg"
                                                         class="active" id="_1">
                                                    <div id="buffer-box">Buffering ...</div>
                                                </div>
                                            </div>
                                            <div class="player-controls">
                                                <div class="control">
                                                    <div class="button" id="play-pause-button">
                                                        <i class="fas fa-play"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="player-track">
                                                <div id="album-name"></div>
                                                <div id="track-name"></div>
                                                <div id="s-area">
                                                    <div id="ins-time"></div>
                                                    <div id="s-hover"></div>
                                                    <div id="seek-bar"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Music here-->
                                        <div class="post-meta music" style="width: 684px; margin-bottom: 20px; margin-top: 30px">
                                            <div id="player-content">
                                                <div id="album-art">
                                                    <img src="https://avatar-ex-swe.nixcdn.com/song/2020/05/29/a/7/1/5/1590735141658_640.jpg"
                                                         class="active" id="_1">
                                                    <div id="buffer-box">Buffering ...</div>
                                                </div>
                                            </div>
                                            <div class="player-controls">
                                                <div class="control">
                                                    <div class="button" id="play-pause-button">
                                                        <i class="fas fa-play"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="player-track">
                                                <div id="album-name"></div>
                                                <div id="track-name"></div>
                                                <div id="s-area">
                                                    <div id="ins-time"></div>
                                                    <div id="s-hover"></div>
                                                    <div id="seek-bar"></div>
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
        </div>
    </section>
@endsection
