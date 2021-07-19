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

        <link rel="stylesheet" href="/assets/css/main.min.css">
        <link rel="stylesheet" href="/assets/css/style_landing.css">
        <link rel="stylesheet" href="/assets/css/color.css">
        <link rel="stylesheet" href="/assets/css/responsive.css">

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
        </header>

        <section style="margin-top: 30px">
            <div class="gap gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12" style="margin-left: 400px">
                            <div class="row" id="page-contents">
                                <div class="col-lg-6">
                                    <div class="central-meta">
                                        <div class="editing-info">
                                            <h5 class="f-title"><i class="fas fa-id-card" style="font-size: 26px"></i>Chỉnh sửa thông tin cá nhân</h5>
                                            <form method="post">
                                                <div class="form-group half">
                                                    <input type="text" id="lastname" required="required" value="Minh"/>
                                                    <label class="control-label" for="input">Họ</label><i class="mtrl-select"></i>
                                                </div>
                                                <div class="form-group half">
                                                    <input type="text" id="firstname" required="required" value="Hiếu"/>
                                                    <label class="control-label" for="input">Tên</label><i class="mtrl-select"></i>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" id="email" required="required" value="hieuleggo1280@gmail.com"/>
                                                    <label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
                                                </div>
                                                <div class="form-group">
                                                    <input type="date"
                                                           id="birthday"
                                                           value="2000-08-12"
                                                           min="1970-01-01"
                                                           max="2050-12-31"
                                                           style="border-bottom: 1px solid #ede9e9">
                                                    <label class="control-label" for="input">Ngày sinh</label><i class="mtrl-select"></i>
                                                </div>
                                                <div class="form-radio">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="radio" checked="checked"/><i class="check-box"></i>Nam
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="radio"/><i class="check-box"></i>Nữ
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required="required" id="city" value="Bình Dương"/>
                                                    <label class="control-label" for="input">Quê quán</label><i class="mtrl-select"></i>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required="required" id="study" value="Đại học Thủ Dầu Một"/>
                                                    <label class="control-label" for="input">Học vấn</label><i class="mtrl-select"></i>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group half">
                                                        <input type="text" required="required" id="relationship" value="Độc thân"/>
                                                        <label class="control-label" for="input">Tình trạng quan hệ</label><i class="mtrl-select"></i>
                                                    </div>
                                                    <div class="form-group half">
                                                        <select id="select_relationship" onchange="copyTextValue()">
                                                            <option value="1">Độc thân</option>
                                                            <option value="2">Đang hẹn hò</option>
                                                            <option value="3">Đã kết hôn</option>
                                                            <option value="0">-</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required="required" id="facebook" value="https://www.facebook.com/your.tranminhhieu/"/>
                                                    <label class="control-label" for="input">Facebook</label><i class="mtrl-select"></i>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required="required" id="instagram" value="https://www.instagram.com/ueihhnimnart/"/>
                                                    <label class="control-label" for="input">Instagram</label><i class="mtrl-select"></i>
                                                </div>
                                                <div class="form-group">
                                                    <textarea rows="4" id="textarea" required="required"></textarea>
                                                    <label class="control-label" for="textarea">Tiêu sử</label><i class="mtrl-select"></i>
                                                </div>
                                                <div class="submit-btns">
                                                    <button type="button" class="mtr-btn" id="cancel"><span>Huỷ</span></button>
                                                    <button type="button" class="mtr-btn" id="update"><span>Cập nhật</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <!--
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
        </footer>
        -->

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

        <script>
            function copyTextValue() {
                var val = document.getElementById("select_relationship").value;
                if(val == '1')
                    document.getElementById("relationship").value = "Độc thân";
                else if(val == '2')
                        document.getElementById("relationship").value = "Đang hẹn hò";
                    else if(val == '3')
                            document.getElementById("relationship").value = "Đã kết hôn";
                    else document.getElementById("relationship").value = "Không công khai";
            }
        </script>
    </body>
</html>
