@extends('emails.email')

@section('content')
<p>Hi, {{ $user }}</p>
<br>
<p>Thanks for using CDA Cargo!</p>
<p>
  Please confirm your email address by clicking on the link below.
  We'll communicate with you from time to time via email so it's
  important that we have an up-to-date email address on file.
</p>
<p>Don't reply to this message</p>
<br>
  <?php
  // TODO To add PHP variable that has site url in $url
    $url = $_SERVER['HTTP_HOST'];
  ?>
  <a href="{{ $url }}/confirm-employee-email/{{ $id }}/{{ $code }}">
    {{ $url }}/confirm-employee-email/{{ $id }}/{{ $code }}
  </a>
<br>
<br>
@stop
