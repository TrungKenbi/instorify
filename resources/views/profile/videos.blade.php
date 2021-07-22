@extends('layouts.profile')

@section('profile_content')
    <div class="col-lg-7" style="margin-top: -20px">
        <div class="central-meta">
            <ul class="photos">
                <li>
                    <a href="#" onclick="lightbox_open();"><img src="/assets/img/landing.png" style="width: 230px; height: 230px; border-radius: 10px"></a>
                </li>
                <li>
                    <a href="#" onclick="lightbox_open();"><img src="/assets/img/landing2.png" style="width: 230px; height: 230px; border-radius: 10px"></a>
                </li>
                <li>
                    <a href="#" onclick="lightbox_open();"><img src="/assets/img/avartar.png" style="width: 230px; height: 230px; border-radius: 10px"></a>
                </li>
                <li>
                    <a href="#" onclick="lightbox_open();"><img src="/assets/img/landing.png" style="width: 230px; height: 230px; border-radius: 10px"></a>
                </li>
                <li>
                    <a href="#" onclick="lightbox_open();"><img src="/assets/img/landing2.png" style="width: 230px; height: 230px; border-radius: 10px"></a>
                </li>
                <li>
                    <a href="#" onclick="lightbox_open();"><img src="/assets/img/avartar.png" style="width: 230px; height: 230px; border-radius: 10px"></a>
                </li>
            </ul>
            <div id="light">
                <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
                <video id="VisaChipCardVideo" width="1000" controls>
                    <source src="/assets/videos/sample.mp4" type="video/mp4">
                    <!--Browser does not support ok<video> tag -->
                </video>
            </div>
            <div id="fade" onClick="lightbox_close();"></div>
        </div>
    </div>
@endsection
