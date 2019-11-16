@extends('emails.email')

@section('content')
<p>Hello, {{ $company->contactPerson->name }}</p>
<br>
<p>Your company, {{ $company->name }}, is registered in our system</p>
<p>
  Please confirm your company email address by clicking on the link below.
  We'll communicate with you from time to time via email so it's
  important that we have an up-to-date email address on file.
</p>
  To confirm your email address, follow this link: <br>
  <?php
  // TODO To add PHP variable that has site url in $url
    $url = $_SERVER['HTTP_HOST'];
  ?>
  <a href="{{ $url }}/confirm-company-email/{{ $company->user->email_token }}">
    {{ $url }}/confirm-email/{{ $company->user->email_token }}
  </a>
</p>
<br>
<!-- <p>Dacă nu solicitați o modificare sau nu a-ti adăugat o adresă, ignorați acest mesaj.</p> -->
<p>Do not reply to this message if you don't need any changes.</p>

@stop
