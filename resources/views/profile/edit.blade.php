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
                                        <form action="{{ route('profile.update', auth()->id()) }}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group half">
                                                <input type="text" name="last_name" required="required" value="{{ old('last_name') ?? $user->last_name }}"/>
                                                <label class="control-label" for="input">Họ</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group half">
                                                <input type="text" name="first_name" required="required" value="{{ old('first_name') ?? $user->first_name }}"/>
                                                <label class="control-label" for="input">Tên</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="email" required="required" value="{{ old('email') ?? $user->email }}"/>
                                                <label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="date"
                                                       name="dob"
                                                       value="{{ date("Y-m-d", strtotime(old('dob') ?? $user->dob)) }}"
                                                       min="1970-01-01"
                                                       max="2050-12-31"
                                                       style="border-bottom: 1px solid #ede9e9">
                                                <label class="control-label" for="input">Ngày sinh</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-radio">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender" {{ old('gender', $user->gender) == 'male' ? 'checked' : '' }} value="male" /><i class="check-box"></i>Nam
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="gender" {{ old('gender', $user->gender) == 'female' ? 'checked' : '' }} value="female" /><i class="check-box"></i>Nữ
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="required" name="home_town" value="{{ old('home_town') ?? $user->home_town }}"/>
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
                                                    <select name="relationship_status">
                                                        @foreach ($titles as $key => $value)
                                                            <option value="{{$value->id}}" {{(old('relationship_status', $user->relationship_status) == $value->id ? 'selected' : '')}} > {{$value->name}} </option>
                                                        @endforeach
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
                                                <textarea rows="4" name="bio" required="required">{{ old('bio') ?? $user->bio }}</textarea>
                                                <label class="control-label" for="textarea">Tiêu sử</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="submit-btns">
                                                <a href="{{ route('profile.index', auth()->id()) }}">
                                                    <button type="button" class="mtr-btn" id="cancel"><span>Hủy</span></button>
                                                </a>
                                                <button type="submit" class="mtr-btn" id="update"><span>Cập nhật</span></button>
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
