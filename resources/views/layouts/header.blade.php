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
                                            <a href="/messages" style="text-decoration: none; font-size: 14px">Xem tất cả Tin Nhắn</a>
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
                                        @forelse(auth()->user()->notificationsTo()->limit(5)->get() as $notification)
                                        <ul class="dropdown-msg-list">
                                            <li class="msg-list-item d-flex justify-content-between">
                                                <!-- profile picture -->
                                                <div class="profile-thumb">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="{{ $notification->fromUser->avatar_url }}" alt="profile picture">
                                                    </figure>
                                                </div>

                                                <!-- message content -->
                                                <div class="msg-content notification-content">
                                                    <a href="{{ route('profile.index', $notification->fromUser->id) }}" class="author" style="text-decoration: none">
                                                        <strong>{{ $notification->fromUser->full_name }}</strong>
                                                    </a>
                                                    <p class="msg-property">
                                                        {{ $notification->content }}
                                                    </p>
                                                </div>

                                                <!-- message time -->
                                                <div class="msg-time">
                                                    <p>{{ Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</p>
                                                </div>
                                            </li>
                                        </ul>
                                        @empty
                                            <p class="text-center">Không có thông báo nào</p>
                                        @endforelse
                                        <ul id="all-notification">
                                            <a href="/notifications" style="text-decoration: none; font-size: 14px">Xem tất cả Thông Báo</a>
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
                                        <img src="{{ Auth::user()->avatar_url }}" alt="profile picture">
                                    </figure>
                                </a>
                                <div class="profile-dropdown">
                                    <div class="profile-head">
                                        <h5 class="name"><a href="{{ route('profile.index', auth()->id()) }}">{{ Auth::user()->fullname }}</a></h5>
                                        <a class="mail" href="{{ route('profile.index', auth()->id()) }}">{{ Auth::user()->username }}</a>
                                    </div>
                                    <div class="profile-body">
                                        <ul>
                                            <li><a href="{{ route('profile.index', auth()->id()) }}"><i class="fas fa-user" style="font-size: 16px; color: #5271ff"></i>Trang cá nhân</a></li>
                                            <li><a href="#"><i class="fas fa-cog" style="font-size: 16px; color: #5271ff"></i>Đổi mật khẩu</a></li>
                                            <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt" style="font-size: 16px; color: #5271ff"></i>Đăng xuất</a></li>
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
