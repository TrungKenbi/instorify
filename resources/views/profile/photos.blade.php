@extends('layouts.profile')

@section('profile_content')
    <div class="col-lg-7" style="margin-top: -20px">
        <div class="central-meta">
            <ul class="photos">
                @foreach($user->posts()->with('photos')->get()->pluck('photos')->flatten() as $photo)
                <li>
                    <div class="images strip">
                        <img src="{{ asset($photo->url) }}" alt="" style="width: 230px; height: 230px; border-radius: 10px; cursor: pointer; transition: 0.3s; margin-top: 10px">
                    </div>
                </li>
                @endforeach
                <div id="image-viewer">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="full-image">
                </div>
            </ul>
        </div><!-- photos -->
    </div>
@endsection
