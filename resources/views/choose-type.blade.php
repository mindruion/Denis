@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="heading">
        <h1 class="choose__q">I want an account of</h1>
        <div class="choose__type">
          <h1><a href="/register-candidate">CANDIDATE</a></h1>
          <span>/</span>
          <h1><a href="/register-company">COMPANY</a></h1>
        </div>
      </div>
      <div class="has__acc">
        <span><a href="/login">Do you have an account ?</a></span>
      </div>
    </div>
  </div>
</div>

@stop
