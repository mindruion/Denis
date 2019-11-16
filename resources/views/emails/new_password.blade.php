@extends('emails.email')

@section('content')
<p>Hi,</p>
<p>Password successfull reset</p>
<br>
<p><b>Your credentials to CDA Cargo:</b></p>
<p>
  Email: {{ $email }} <br>
  Password: {{ $password }}
</p>
<br>
<p>If you did not sign up for a CDA Cargo account please disregard this email.</p>

@stop
