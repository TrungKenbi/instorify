<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Instorify</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/assets/img/logo3.png">
        <script src="https://kit.fontawesome.com/4702f02b2a.js" crossorigin="anonymous"></script>
        <!-- ============================================ CSS ============================================ -->
        <!--Header CSS-->
            <!-- google fonts -->
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="/assets/css/home/vendor/bootstrap.min.css">
            <!-- Icon Font CSS -->
            <link rel="stylesheet" href="/assets/css/home/vendor/bicon.min.css">
            <!-- audio & video player CSS -->
            <link rel="stylesheet" href="/assets/css/home/plugins/plyr.css">
            <!-- Slick CSS -->
            <link rel="stylesheet" href="/assets/css/home/plugins/slick.min.css">
            <!-- nice-select CSS -->
            <link rel="stylesheet" href="/assets/css/home/plugins/nice-select.css">
            <!-- perfect scrollbar css -->
            <link rel="stylesheet" href="/assets/css/home/plugins/perfect-scrollbar.css">
            <!-- light gallery css -->
            <link rel="stylesheet" href="/assets/css/home/plugins/lightgallery.min.css">
            <!-- Main Style CSS -->
            <link rel="stylesheet" href="/assets/css/home/style.css">
            <link rel="stylesheet" href="/assets/css/style_landing.css">

        <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">

    </head>

    <body>
        <header>
            <div class="header-top sticky bg-white d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="header-top-navigation">
                                <nav>
                                    <ul>
                                        <!-- Home -->
                                        <li class="active"><a href="/home"><i class="fas fa-home" style="font-size: 30px; color: #5271ff"></i></a></li>

                                        <!-- Message -->
                                        <li class="msg-trigger">
                                            <a href="#message" class="msg-trigger-btn"><i class="fab fa-facebook-messenger" style="font-size: 30px; color: #5271ff"></i></a>
                                            <div class="message-dropdown" id="message">
                                                <div class="dropdown-title">
                                                    <p class="recent-msg">Tin nhắn</p>
                                                    <div class="message-btn-group">
                                                        <button><i class="far fa-plus-square" style="font-size: 20px; color: #5271ff"></i></button>
                                                        <button><i class="fas fa-user-friends" style="font-size: 20px; color: #5271ff"></i></button>
                                                    </div>
                                                </div>
                                                <ul class="dropdown-msg-list">
                                                    <li class="msg-list-item d-flex justify-content-between">
                                                        <!-- profile picture -->
                                                        <div class="profile-thumb">
                                                            <figure class="profile-thumb-middle">
                                                                <img src="/assets/img/sample_ava1.jpg" alt="profile picture">
                                                            </figure>
                                                        </div>

                                                        <!-- message content -->
                                                        <div class="msg-content">
                                                            <h6 class="author"><a href="#" style="text-decoration: none">Dương Lê Phước Trung</a></h6>
                                                            <p class="msg-property">
                                                                Nói cái gì đó nhưng không biết nhưng ghi vô cho nó dài.
                                                            </p>
                                                        </div>

                                                        <!-- message time -->
                                                        <div class="msg-time">
                                                            <p>08 Jul 2021</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="dropdown-msg-list">
                                                    <li class="msg-list-item d-flex justify-content-between">
                                                        <!-- profile picture -->
                                                        <div class="profile-thumb">
                                                            <figure class="profile-thumb-middle">
                                                                <img src="/assets/img/sample_ava2.jpg" alt="profile picture">
                                                            </figure>
                                                        </div>

                                                        <!-- message content -->
                                                        <div class="msg-content">
                                                            <h6 class="author"><a href="#" style="text-decoration: none">Tài Trần</a></h6>
                                                            <p class="msg-property">
                                                                Nói cái gì đó nhưng không biết nhưng ghi vô cho nó dài.
                                                            </p>
                                                        </div>

                                                        <!-- message time -->
                                                        <div class="msg-time">
                                                            <p>08 Jul 2021</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul id="all-message">
                                                    <a href="#" style="text-decoration: none; font-size: 14px">Xem tất cả Tin Nhắn</a>
                                                </ul>
                                            </div>
                                        </li>

                                        <!-- Notification -->
                                        <li class="notification-trigger">
                                            <a href="#notification" class="msg-trigger-btn"><i class="fas fa-bell" style="font-size: 30px; color: #5271ff"></i></a>
                                            <div class="message-dropdown" id="notification">
                                                <div class="dropdown-title">
                                                    <p class="recent-msg">Thông báo</p>
                                                </div>
                                                <ul class="dropdown-msg-list">
                                                    <li class="msg-list-item d-flex justify-content-between">
                                                        <!-- profile picture -->
                                                        <div class="profile-thumb">
                                                            <figure class="profile-thumb-middle">
                                                                <img src="/assets/img/sample_ava1.jpg" alt="profile picture">
                                                            </figure>
                                                        </div>

                                                        <!-- message content -->
                                                        <div class="msg-content notification-content">
                                                            <a href="#" class="author" style="text-decoration: none">
                                                                <strong>Dương Lê Phước Trung</strong> và những người khác
                                                            </a>
                                                            <p class="msg-property">
                                                                Đã thích ảnh của bạn.
                                                            </p>
                                                        </div>

                                                        <!-- message time -->
                                                        <div class="msg-time">
                                                            <p>08 Jul 2021</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="dropdown-msg-list">
                                                    <li class="msg-list-item d-flex justify-content-between">
                                                        <!-- profile picture -->
                                                        <div class="profile-thumb">
                                                            <figure class="profile-thumb-middle">
                                                                <img src="/assets/img/sample_ava2.jpg" alt="profile picture">
                                                            </figure>
                                                        </div>

                                                        <!-- message content -->
                                                        <div class="msg-content notification-content">
                                                            <h6 class="author"><a href="#" style="text-decoration: none">Tài Trần</a></h6>
                                                            <p class="msg-property">
                                                                Đã bình luận vào bài viết của bạn.
                                                            </p>
                                                        </div>

                                                        <!-- message time -->
                                                        <div class="msg-time">
                                                            <p>08 Jul 2021</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul id="all-notification">
                                                    <a href="#" style="text-decoration: none; font-size: 14px">Xem tất cả Thông Báo</a>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="text-center navbar-brand">
                                <a href="/home">
                                    <img src="/assets/img/logo_text.png" alt="brand logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-top-right d-flex align-items-center justify-content-end">
                                <div class="header-top-search">
                                    <form class="top-search-box">
                                        <input type="text" placeholder="Tìm kiếm" class="top-search-field">
                                        <button class="top-search-btn"><i class="fas fa-search" style="color: #5271ff; font-size: 20px"></i></button>
                                    </form>
                                </div>
                                <div class="profile-setting-box">
                                    <div class="profile-thumb-small">
                                        <a href="javascript:void(0)" class="profile-triger">
                                            <figure>
                                                <img src="/assets/img/avartar.png" alt="profile picture">
                                            </figure>
                                        </a>
                                        <div class="profile-dropdown">
                                            <div class="profile-head">
                                                <h5 class="name"><a href="#">Minh Hiếu</a></h5>
                                                <a class="mail" href="#">hieutran@gmail.com</a>
                                            </div>
                                            <div class="profile-body">
                                                <ul>
                                                    <li><a href="/profile"><i class="fas fa-user" style="font-size: 16px; color: #5271ff"></i>Trang cá nhân</a></li>
                                                    <li><a href="#"><i class="fas fa-cog" style="font-size: 16px; color: #5271ff"></i>Cài đặt</a></li>
                                                    <li><a href="/"><i class="fas fa-sign-out-alt" style="font-size: 16px; color: #5271ff"></i>Đăng xuất</a></li>
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
        </header>

        <!-- ========== BODY ========== -->
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

        <div class="scroll-top not-visible">
            <i class="fas fa-arrow-alt-circle-up"></i>
        </div>

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
