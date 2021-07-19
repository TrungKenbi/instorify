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
@endsection
