@extends('emails.email')

@section('content')
<p>From {{ $name }}</p>
<br>
<p>Message: <br>{{ $msg }}</p>

@stop
