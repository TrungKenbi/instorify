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
                            <a class="" href="#" title="" data-ripple="">Bạn bè</a>
                            <a class="" href="/profile_photos" title="" data-ripple="">Ảnh</a>
                            <a class="" href="#" title="" data-ripple="">Bài hát</a>
                            <a class="active" href="/profile_videos" title="" data-ripple="">Video</a>
                            <a name="edituser" class="edit-user-btn" href="/edituser" title="" data-ripple=""><i class="fas fa-user-edit"></i> Chỉnh sửa trang cá nhân</a>
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
                                    <ul class="photos">
                                        <li>
                                            <a href="https://www.youtube.com/watch?v=_EEo-iE5u_A" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="/assets/img/landing.png" style="border-radius: 10px; width: 230px; height: 230px" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
                                                         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                        <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/watch?v=b6li05zh3Kg" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="/assets/img/landing.png" style="border-radius: 10px; width: 230px; height: 230px" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
                                                         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
													  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                        <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
														</svg>
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/watch?v=1QD0FeZyDtQ" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="/assets/img/landing.png" style="border-radius: 10px; width: 230px; height: 230px" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
                                                         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                        <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/watch?v=LFxjwBfFIiY" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="/assets/img/landing.png" style="border-radius: 10px; width: 230px; height: 230px" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
                                                         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                        <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/watch?v=zTSWX8vsEz8" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="/assets/img/landing.png" style="border-radius: 10px; width: 230px; height: 230px" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
                                                         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                        <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/watch?v=fE2h3lGlOsk" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="/assets/img/landing.png" style="border-radius: 10px; width: 230px; height: 230px" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
                                                         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
													  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
														C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                        <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
														</svg>
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/watch?v=4TWR90KJl84" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="/assets/img/landing.png" style="border-radius: 10px; width: 230px; height: 230px" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
                                                         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                        <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/watch?v=Z8j_XEn9b_8" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="/assets/img/landing.png" style="border-radius: 10px; width: 230px; height: 230px" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
                                                         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                        <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/watch?v=b09U0KLv6I4" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="/assets/img/landing.png" style="border-radius: 10px; width: 230px; height: 230px" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
                                                         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                        <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/watch?v=JSAfPh1A25E" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="/assets/img/landing.png" style="border-radius: 10px; width: 230px; height: 230px" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
                                                         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                        <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/watch?v=SAdmzjsFVQo" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="/assets/img/landing.png" style="border-radius: 10px; width: 230px; height: 230px" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
                                                         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                        <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/watch?v=Z3RA7bi5FUM" title="" data-strip-group="mygroup" class="strip" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }"><img src="/assets/img/landing.png" style="border-radius: 10px; width: 230px; height: 230px" alt="">
                                                <i>
                                                    <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" width="40px"
                                                         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
												  <path class="stroke-solid" fill="none" stroke=""  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
													C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                        <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
													</svg>
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
