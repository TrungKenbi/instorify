@extends('layouts.profile')

@section('profile_content')
    <div class="col-lg-7" style="margin-top: -20px">
        <div class="central-meta">
            <div class="musics">
                <!--Music here-->
                @forelse($user->posts()->with('music')->get()->pluck('music')->flatten() as $_music)
                    <iframe src="{{ route('music.show', $_music->id) }}" frameBorder="0"></iframe>
                @empty
                    <p class="text-center">{{ $user->full_name }} chưa đăng bài hát nào !</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
