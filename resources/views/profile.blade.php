@extends('layouts.app')

@section('content')
<section style="background-color: white">
    <div class="feature-photo">
        <figure><img src="/assets/img/landing.png" alt=""></figure>
        <form class="edit-phto">
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
                <form class="edit-avatar">
                    <label class="fileContainer">
                        <i class="fa fa-camera-retro" style="font-size: 30px"></i>
                        <input type="file" accept="image/png, image/jpeg, image/jpg"/>
                    </label>
                </form>
            </div>
<<<<<<< HEAD
            <div class="container-fluid">
                <div class="row merged">
                    <div class="col-lg-2 col-sm-3">
                        <div class="user-avatar">
                            <figure>
                                <img src="/assets/img/avartar.png" alt="">
                            </figure>
                        </div>
                        <form class="edit-avatar">
                            <label class="fileContainer">
                                <i class="fa fa-camera-retro" style="font-size: 30px"></i>
                                <input type="file" accept="image/png, image/jpeg, image/jpg"/>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
            <div class="user-info">
                <h3>Minh Hiếu</h3>
            </div>
            <div class="col-lg-10 col-sm-9">
                <div class="timeline-info">
                    <ul>
                        <li>
                            <a class="active" href="#" title="" data-ripple="">Bài viết</a>
                            <a class="" href="#" title="" data-ripple="">Bạn bè</a>
                            <a class="" href="#" title="" data-ripple="">Ảnh</a>
                            <a class="" href="#" title="" data-ripple="">Video</a>
                            <a name="edituser" class="edit-user-btn" href="/edituser" title="" data-ripple=""><i class="fas fa-user-edit"></i> Chỉnh sửa trang cá nhân</a>

                            <!-- Modal start -->
                            <div class="modal fade" id="textbox-edit" aria-labelledby="textbox">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tạo bài viết</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body custom-scroll">
                                            <form>
                                                <textarea name="share" class="share-field-big custom-scroll" id="editor" placeholder="Bạn đang nghĩ gì?"></textarea>
                                                <div class="attachments">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-photo-video" style="color: #5271ff"></i>
                                                            <label class="fileContainer">
                                                                <input type="file" accept="image/png, image/jpg, image/jpeg, video/mp4">
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-music" style="color: #5271ff"></i>
                                                            <label class="fileContainer">
                                                                <input type="file" accept="audio/mp3">
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-video-camera"></i>
                                                            <label class="fileContainer">
                                                                <input type="file">
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-camera"></i>
                                                            <label class="fileContainer">
                                                                <input type="file">
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                                            <button type="button" class="post-share-btn">post</button>
                                        </div>
                                    </div>
=======
        </div>
    </div>
    <div class="user-info">
        <h3>Minh Hiếu</h3>
    </div>
    <div class="col-lg-10 col-sm-9">
        <div class="timeline-info">
            <ul>
                <li>
                    <a class="active" href="#" title="" data-ripple="">Bài viết</a>
                    <a class="" href="#" title="" data-ripple="">Bạn bè</a>
                    <a class="" href="#" title="" data-ripple="">Ảnh</a>
                    <a class="" href="#" title="" data-ripple="">Video</a>
                    <a class="edit-user-btn" href="#" title="" data-ripple=""><i class="fas fa-user-edit"></i> Chỉnh sửa trang cá nhân</a>
                    <!-- Modal start -->
                    <div class="modal fade" id="textbox-edit" aria-labelledby="textbox">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tạo bài viết</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
>>>>>>> e4f9ca04aec495cab7b4d4839a1e2926a22dc693
                                </div>
                                <div class="modal-body custom-scroll">
                                    <form>
                                        <textarea name="share" class="share-field-big custom-scroll" id="editor" placeholder="Bạn đang nghĩ gì?"></textarea>
                                        <div class="attachments">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-photo-video" style="color: #5271ff"></i>
                                                    <label class="fileContainer">
                                                        <input type="file" accept="image/png, image/jpg, image/jpeg, video/mp4">
                                                    </label>
                                                </li>
                                                <li>
                                                    <i class="fas fa-music" style="color: #5271ff"></i>
                                                    <label class="fileContainer">
                                                        <input type="file" accept="audio/mp3">
                                                    </label>
                                                </li>
                                                <li>
                                                    <i class="fa fa-video-camera"></i>
                                                    <label class="fileContainer">
                                                        <input type="file">
                                                    </label>
                                                </li>
                                                <li>
                                                    <i class="fa fa-camera"></i>
                                                    <label class="fileContainer">
                                                        <input type="file">
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                                    <button type="button" class="post-share-btn">post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->
                </li>
            </ul>
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
                                                <img src="/assets/img/avartar.png" alt="profile picture">
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
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Tạo bài viết</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body custom-scroll">
                                                    <form>
                                                        <textarea name="share" class="share-field-big custom-scroll" id="editor" placeholder="Bạn đang nghĩ gì?"></textarea>
                                                        <div class="attachments">
                                                            <ul>
                                                                <li>
                                                                    <i class="fas fa-photo-video" style="color: #5271ff"></i>
                                                                    <label class="fileContainer">
                                                                        <input type="file" accept="image/png, image/jpg, image/jpeg, video/mp4">
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-music" style="color: #5271ff"></i>
                                                                    <label class="fileContainer">
                                                                        <input type="file" accept="audio/mp3">
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-video-camera"></i>
                                                                    <label class="fileContainer">
                                                                        <input type="file">
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-camera"></i>
                                                                    <label class="fileContainer">
                                                                        <input type="file">
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                                                    <button type="button" class="post-share-btn">post</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end -->
                                </div>
                            </div>
                            <!-- share box end -->
                            <!-- POST -->
                            <div class="loadMore">
                                <div class="central-meta item">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <!-- POST INFO PART -->
                                            <figure>
                                                <a href="/profile"><img src="/assets/img/avartar.png" alt="profile picture" style="width: 80%"></a>
                                            </figure>
                                            <div class="friend-name">
                                                <ins><a href="/profile" title="">Minh Hiếu</a></ins>
                                                <span>11 tháng 07 lúc 08:00 PM</span>
                                            </div>
                                            <div class="option-post">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </div>

                                            <!-- POST CAPTION -->
                                            <div class="post-caption">
                                                <p>Hôm nay trời nhẹ lên cao cao quá cao</p>
                                            </div>

                                            <!-- POST IMAGE -->
                                            <div class="post-meta">
                                                <img src="/assets/img/landing.png" alt="">
                                            </div>

                                            <!-- MUSIC PART -->
                                            <div class="post-meta music">
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

                                            <!-- LIKE, SHARE, COMMENT BUTTON PART -->
                                            <div class="we-video-info">
                                                <ul>
                                                    <li>
															<span class="like" id="likePost" data-toggle="tooltip" title="Like">
																<i class="far fa-heart"></i>
															</span>
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
                                            <hr style="margin-top: 540px; width: 96%">

                                            <!-- COMMENT PART -->
                                            <div class="coment-area">
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
                                                            <img src="/assets/img/avartar.png" alt="" style="width: 90%">
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
                                <!-- POST VIDEO -->
                                <div class="central-meta item" style="margin-top: -10px">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <!-- POST INFO PART -->
                                            <figure>
                                                <img src="/assets/img/sample_ava1.jpg" alt="profile picture" style="width: 80%">
                                            </figure>
                                            <div class="friend-name">
                                                <ins><a href="#" title="">Dương Lê Phước Trung</a></ins>
                                                <span>11 tháng 07 lúc 08:00 PM</span>
                                            </div>
                                            <div class="option-post">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </div>

                                            <!-- POST CAPTION -->
                                            <div class="post-caption">
                                                <p>Hôm nay trời nhẹ lên cao cao quá cao</p>
                                            </div>

                                            <!-- POST IMAGE -->
                                            <div class="post-meta">
                                                <iframe width="900" height="400" src="https://www.youtube.com/embed/be5yMhqtdyQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>

                                            <!-- LIKE, SHARE, COMMENT BUTTON PART -->
                                            <div class="we-video-info">
                                                <ul>
                                                    <li>
															<span class="like" id="likePost" data-toggle="tooltip" title="Like">
																<i class="far fa-heart"></i>
															</span>
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
                                            <hr style="margin-top: 470px; width: 96%">

                                            <!-- COMMENT PART -->
                                            <div class="coment-area">
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
                                                            <img src="/assets/img/avartar.png" alt="" style="width: 90%">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget">
                            <div class="foot-logo">
                                <div class="logo">
                                    <a href="/home" title=""><img src="/assets/img/logo_text.png" style="width: 60%" alt=""></a>
                                </div>
                                <p>
                                    The trio took this simple idea and built it into the world’s leading carpooling platform.
                                </p>
                            </div>
                            <ul class="location">
                                <li>
                                    <i class="ti-map-alt"></i>
                                    <p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p>+1-56-346 345</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>follow</h4></div>
                            <ul class="list-style">
                                <li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
                                <li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
                                <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
                                <li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
                                <li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>Navigate</h4></div>
                            <ul class="list-style">
                                <li><a href="about.html" title="">about us</a></li>
                                <li><a href="contact.html" title="">contact us</a></li>
                                <li><a href="terms.html" title="">terms & Conditions</a></li>
                                <li><a href="#" title="">RSS syndication</a></li>
                                <li><a href="sitemap.html" title="">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>useful links</h4></div>
                            <ul class="list-style">
                                <li><a href="#" title="">leasing</a></li>
                                <li><a href="#" title="">submit route</a></li>
                                <li><a href="#" title="">how does it work?</a></li>
                                <li><a href="#" title="">agent listings</a></li>
                                <li><a href="#" title="">view All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>download apps</h4></div>
                            <ul class="colla-apps">
                                <li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
                                <li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i class="ti-apple"></i>iPhone</a></li>
                                <li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer -->

        <!-- ============================================ JS ============================================ -->
        <!-- Modernizer JS -->
        <script src="/assets/js/home/vendor/modernizr-3.6.0.min.js"></script>
        <!-- jQuery JS -->
        <script src="/assets/js/home/vendor/jquery-3.3.1.min.js"></script>
        <!-- Popper JS -->
        <script src="/assets/js/home/vendor/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="/assets/js/home/vendor/bootstrap.min.js"></script>
        <!-- Slick Slider JS -->
        <script src="/assets/js/home/plugins/slick.min.js"></script>
        <!-- nice select JS -->
        <script src="/assets/js/home/plugins/nice-select.min.js"></script>
        <!-- audio video player JS -->
        <script src="/assets/js/home/plugins/plyr.min.js"></script>
        <!-- perfect scrollbar js -->
        <script src="/assets/js/home/plugins/perfect-scrollbar.min.js"></script>
        <!-- light gallery js -->
        <script src="/assets/js/home/plugins/lightgallery-all.min.js"></script>
        <!-- image loaded js -->
        <script src="/assets/js/home/plugins/imagesloaded.pkgd.min.js"></script>
        <!-- isotope filter js -->
        <script src="/assets/js/home/plugins/isotope.pkgd.min.js"></script>
        <!-- Main JS -->
        <script src="/assets/js/home/main.js"></script>
        <script src="/assets/js/script.js"></script>
        <script src="/assets/js/music.js"></script>
    </body>
</html>
=======
    </div>
</section>
@endsection
>>>>>>> e4f9ca04aec495cab7b4d4839a1e2926a22dc693