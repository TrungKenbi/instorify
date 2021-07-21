<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instorify</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Instorify') }}</title>
    <link rel="icon" href="/assets/img/logo3.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="/assets/css/main.min.css">
    <link rel="stylesheet" href="/assets/css/style_landing.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

</head>
<body>
<div class="theme-layout">
    <div class="container-fluid pdng0">
        <div class="row merged">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="land-featurearea">
                    <div class="land-meta">
                        <span style="padding-top: 10px"><a href="/"><img src="/assets/img/logo_text.png" alt="Logo Text" style="width: 30%"></a></span>
                        <p></p>
                        <div class="friend-logo">
                            <span><img src="/assets/img/logo3.png" alt="Logo" style="width: 50%"></span>
                        </div>
                        <p style="color: black">Made by TrungKenbi && xxTMHxx with &#10084;&#65039;</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="login-reg-bg">
                    <div class="log-reg-area sign">
                        <span><img src="/assets/img/login_text.png" alt="Login" style="width: 50%"></span>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            @if($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-warning">{{ $error }}</div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                <input type="text" name="username" value="{{ old('username') }}" required="required"/>
                                <label class="control-label" for="input">Tên đăng nhập</label><i class="mtrl-select"></i>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" required="required"/>
                                <label class="control-label" for="input">Mật khẩu</label><i class="mtrl-select"></i>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}/>
                                    <i class="check-box"></i>Nhớ mật khẩu
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="forgot-pwd" style="color: #5271ff">
                                    {{ __('Quên mật khẩu?') }}
                                </a>
                            @endif
                            <div class="submit-btns">
                                <button class="mtr-btn" type="submit" style="color: #5271ff; width: 194px"><span>ĐĂNG NHẬP</span></button>
                                <button class="mtr-btn signup" type="button" style="color: #5271ff; width: 194px"><span>ĐĂNG KÝ</span></button>
                            </div>
                        </form>
                    </div>
                    <div class="log-reg-area reg">
                        <span><img src="/assets/img/register_text.png" alt="Register" style="width: 50%"></span>

                        <form method="post">
                            <div class="form-group">
                                <input type="text" id="email" required="required"/>
                                <label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" id="lastname" required="required"/>
                                    <label class="control-label" for="input">Họ</label><i class="mtrl-select"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" id="firstname" required="required"/>
                                    <label class="control-label" for="input">Tên</label><i class="mtrl-select"></i>
                                </div>
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
                                <input type="date"
                                       id="birthday"
                                       value="2000-08-12"
                                       min="1970-01-01"
                                       max="2050-12-31"
                                       style="border-bottom: 1px solid #ede9e9">
                            </div>
                            <div class="form-group">
                                <input type="text" id="username" required="required"/>
                                <label class="control-label" for="input">Tên đăng nhập</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" id="passwordRegis" required="required"/>
                                <label class="control-label" for="input">Mật khẩu</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" id="retypePassword" required="required"/>
                                <label class="control-label" for="input">Nhập lại mật khẩu</label><i class="mtrl-select"></i>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="showPassword2"/><i class="check-box"></i>Hiện mật khẩu
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" checked="checked"/><i class="check-box"></i>Chấp nhận điều khoản?
                                </label>
                            </div>
                            <a href="#" title="" class="already-have">Đăng nhập ngay!</a>
                            <div class="submit-btns">
                                <button class="mtr-btn signup" type="button" style="color: #5271ff; width: 194px">
                                    <span>ĐĂNG KÝ</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="/assets/js/main.min.js"></script>
<script src="/assets/js/script.js"></script>

</body>

</html>
