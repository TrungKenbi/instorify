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
        <!-- CSS
	    ============================================ -->
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/css/home/vendor/bootstrap.min.css">
        <!-- Icon Font CSS -->
        <link rel="stylesheet" href="/assets/css/home/vendor/bicon.min.css">
        <!-- Flat Icon CSS -->
        <link rel="stylesheet" href="/assets/css/home/vendor/flaticon.css">
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
    </head>
    <body>
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
                                                <li><a href="#"><i class="fas fa-user" style="font-size: 16px; color: #5271ff"></i>Trang cá nhân</a></li>
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

        <!-- JS
    ============================================ -->

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
    </body>
</html>
