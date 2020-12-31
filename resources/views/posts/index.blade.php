@extends('layouts.app')

@section('content')
<div class="container">
  @foreach ($posts as $post)
  <div class="shadow-lg mb-5">
    <div class="row">

        <div class="d-flex align-items-center offset-2 mb-4 mt-3">
          <div class="pr-3">
            <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width: 50px">
          </div>

            <div class="font-weight-bold">
              <a href="/profile/{{$post->user->id}}">
                <span class="text-dark">{{$post->user->username}}</span>
              </a>
            </div>
        </div>

        <div class="col-8 offset-2">

          <a href="/profile/{{ $post->user_id}}">
              <img src="/storage/{{ $post->image }}" class="w-100">
          </a>
        </div>
    </div>
      <div class="row pt-2 pb-4">
            <div class="col-8 offset-2">
                <p>
                  <span class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}">
                      <span class="text-dark">{{$post->user->username}}</span>
                    </a>
                  </span><span class="pl-2">{{$post->caption}} </span>
                </p>
          </div>
      </div>
  </div>
  @endforeach

</div>
@endsection
