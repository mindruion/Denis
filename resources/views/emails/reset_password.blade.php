@extends('emails.email')

@section('content')
<p>Hi,</p>
<p>Click the link below to reset your password</p>
<br>
<p>
  Get new password
  <?php
  // TODO To add PHP variable that has site url in $url
    $url = $_SERVER['HTTP_HOST'];
  ?>
  <a href="{{ $url }}/get-password/{{$code}}">
    {{ $url }}/get-password/{{$code}}
  </a>
</p>
<br>
<p>If you did not sign up for a CDA Cargo account please disregard this email.</p>

@stop
