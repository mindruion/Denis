@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="main_det">
      <p>
        <h3>{{ $user->name }}</h3>
        <img class="profile__img" src="/icons/1-logo.png" alt="">
        <input id="FileUpload1" class="d-none" onchange="readURL(this)" type="file" name="profile-img" value="">
        <!-- <span id="spnFilePath"></span> -->
        <input class="n__u__email" type="user_email" name="email" value="">
      </p>
      <p>
        Email <span class="user_email">{{ $user->email }}</span>
      </p>
      <p>
        Phone <span class="user_phone">{{ $user->phone }}</span>
      </p>
      <p>
        <h5>Number of applications: {{ $applications->count() }}</h5>
        @if ( !empty($applications) )
          <ul>
            @foreach ( $applications as $app )
              <li>{{ $app->job->title }} | {{ $app->job->job }}</li>
            @endforeach
          </ul>
        @endif
      </p>
    </div>
  </div>
</div>

@stop
