@extends('layouts.app')

@section('content')
    <section style="margin-top: 30px">
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" style="margin-left: 400px">
                        <div class="row" id="page-contents">
                            <div class="col-lg-6">
                                <div class="central-meta">
                                    <div class="editing-info">
                                        <h5 class="f-title"><i class="fas fa-unlock-alt" style="font-size: 26px"></i>Đổi mật khẩu</h5>
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" id="email" required="required" value="hieuleggo1280@gmail.com"/>
                                                <label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" id="oldPassword" required="required" value=""/>
                                                <label class="control-label" for="input">Mật khẩu cũ</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" id="newPassword" required="required" value=""/>
                                                <label class="control-label" for="input">Mật khẩu mới</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" id="retypePassword" required="required" value=""/>
                                                <label class="control-label" for="input">Nhập lại mật khẩu mới</label><i class="mtrl-select"></i>
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
@endsection
