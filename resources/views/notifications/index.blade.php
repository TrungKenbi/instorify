@extends('layouts.app')

@section('content')
    <section style="padding-top: 30px">
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" id="page-contents">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6" style="margin-left: 10px">
                                <div class="central-meta">
                                    <div class="editing-interest">
                                        <div class="f-title">
                                            <i class="fas fa-bell" style="font-size: 26px; color: #5271ff"></i>
                                            <h4 style="margin-left: 40px; margin-top: -30px"><strong> Thông báo </strong></h4>
                                        </div>
                                        <div class="notification-box">
                                            <ul>
                                                @forelse(auth()->user()->notificationsTo as $notification)
                                                    <li>
                                                        <figure><img src="{{ $notification->fromUser->avatar_url }}" alt="" style="width: 100%; margin-left: 0px"></figure>
                                                        <div class="notifi-meta">
                                                            <p class="text-lowercase">
                                                                <strong class="text-capitalize">{{ $notification->fromUser->full_name }}</strong>
                                                                {{ $notification->content }}
                                                            </p>
                                                            <span>{{ Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</span>
                                                        </div>
                                                        <i class="del fa fa-close" style="color: red"></i>
                                                    </li>
                                                @empty
                                                    <p class="text-center">Không có thông báo nào</p>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
