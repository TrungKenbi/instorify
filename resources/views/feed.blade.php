@extends('layouts.app')

@section('content')
<section style="padding-top: 100px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="page-content">
                    <div class="col-lg-3">
                        <aside class="sidebar static">
                            <div class="widget">
                                <h4 class="widget-title">Shortcuts</h4>

                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-6">
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
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tạo bài viết</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body custom-scroll">
                                                <form>
                                                    <textarea name="share" class="share-field-big custom-scroll"
                                                              id="editor" placeholder="Bạn đang nghĩ gì?"></textarea>
                                                    <div class="attachments">
                                                        <ul>
                                                            <li>
                                                                <i class="fas fa-photo-video"
                                                                   style="color: #5271ff"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file"
                                                                           accept="image/png, image/jpg, image/jpeg, video/mp4">
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
                                                <button type="button" class="post-share-btn" data-dismiss="modal">
                                                    cancel
                                                </button>
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
                                            <a href="/profile"><img src="/assets/img/avartar.png" alt="profile picture"
                                                                    style="width: 80%"></a>
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
                                                    <img
                                                        src="https://avatar-ex-swe.nixcdn.com/song/2020/05/29/a/7/1/5/1590735141658_640.jpg"
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
															<span class="like" id="likePost" data-toggle="tooltip"
                                                                  title="Like">
																<i class="far fa-heart"></i>
															</span>
                                                </li>
                                                <li>
															<span class="comment" data-toggle="tooltip"
                                                                  title="Comments">
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
                                        <hr style="margin-top: 515px; width: 96%">

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
                                                            <a class="we-reply" href="#" title="Like"><i
                                                                    class="far fa-heart"></i></a>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
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
                                                                    <h5><a href="time-line.html" title="">Minh Hiếu</a>
                                                                    </h5>
                                                                    <span>Vừa xong</span>
                                                                    <a class="we-reply" href="#" title="Like"><i
                                                                            class="far fa-heart"></i></a>
                                                                    <a class="we-reply" href="#" title="Reply"><i
                                                                            class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>yes, really very awesome car i see the features of
                                                                    this car in the official website of <a href="#"
                                                                                                           title="">#Mercedes-Benz</a>
                                                                    and really impressed :-)</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#" title="" class="showmore underline">Xem thêm bình luận
                                                        khác</a>
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
                            <!-- POST VIDEO -->
                            <div class="central-meta item" style="margin-top: -10px">
                                <div class="user-post">
                                    <div class="friend-info">
                                        <!-- POST INFO PART -->
                                        <figure>
                                            <img src="/assets/img/sample_ava1.jpg" alt="profile picture"
                                                 style="width: 80%">
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
                                            <iframe width="900" height="400"
                                                    src="https://www.youtube.com/embed/be5yMhqtdyQ"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                        </div>

                                        <!-- LIKE, SHARE, COMMENT BUTTON PART -->
                                        <div class="we-video-info">
                                            <ul>
                                                <li>
															<span class="like" id="likePost" data-toggle="tooltip"
                                                                  title="Like">
																<i class="far fa-heart"></i>
															</span>
                                                </li>
                                                <li>
															<span class="comment" data-toggle="tooltip"
                                                                  title="Comments">
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
                                                            <a class="we-reply" href="#" title="Like"><i
                                                                    class="far fa-heart"></i></a>
                                                            <a class="we-reply" href="#" title="Reply"><i
                                                                    class="fa fa-reply"></i></a>
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
                                                                    <h5><a href="time-line.html" title="">Minh Hiếu</a>
                                                                    </h5>
                                                                    <span>Vừa xong</span>
                                                                    <a class="we-reply" href="#" title="Like"><i
                                                                            class="far fa-heart"></i></a>
                                                                    <a class="we-reply" href="#" title="Reply"><i
                                                                            class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>yes, really very awesome car i see the features of
                                                                    this car in the official website of <a href="#"
                                                                                                           title="">#Mercedes-Benz</a>
                                                                    and really impressed :-)</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#" title="" class="showmore underline">Xem thêm bình luận
                                                        khác</a>
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
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <aside class="sidebar static">
                            <div class="widget friend-list stick-widget">
                                <h4 class="widget-title">Người liên hệ</h4>
                                <div id="searchDir">
                                </div>
                                <ul id="people-list" class="friendz-list">
                                    <li>
                                        <figure style="margin-left: -20px">
                                            <img src="/assets/img/sample_ava1.jpg" alt="" style="width: 90%">
                                            <span class="online"></span>
                                        </figure>
                                        <div class="friendz-meta" style="margin-left: 10px">
                                            <a href="#" style="color: black; "><b>Dương Lê Phước Trung</b></a>
                                        </div>
                                    </li>
                                    <li>
                                        <figure style="margin-left: -20px">
                                            <img src="/assets/img/sample_ava2.jpg" alt="" style="width: 90%">
                                            <span class="online"></span>
                                        </figure>
                                        <div class="friendz-meta" style="margin-left: 10px">
                                            <a href="#" style="color: black; "><b>Tài Trần</b></a>
                                        </div>
                                    </li>
                                    <li>
                                        <figure style="margin-left: -20px">
                                            <img src="/assets/img/sample_ava3.jpg" alt="" style="width: 90%">
                                            <span class="offline"></span>
                                        </figure>
                                        <div class="friendz-meta" style="margin-left: 10px">
                                            <a href="#" style="color: black; "><b>Minh Nghĩa</b></a>
                                        </div>
                                    </li>
                                    <li>
                                        <figure style="margin-left: -20px">
                                            <img src="/assets/img/sample_ava4.jpg" alt="" style="width: 90%">
                                            <span class="offline"></span>
                                        </figure>
                                        <div class="friendz-meta" style="margin-left: 10px">
                                            <a href="#" style="color: black; "><b>Nguyễn Ngọc Minh</b></a>
                                        </div>
                                    </li>
                                    <li>
                                        <figure style="margin-left: -20px">
                                            <img src="/assets/img/sample_ava5.jpg" alt="" style="width: 90%">
                                            <span class="offline"></span>
                                        </figure>
                                        <div class="friendz-meta" style="margin-left: 10px">
                                            <a href="#" style="color: black; "><b>Đạt</b></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
