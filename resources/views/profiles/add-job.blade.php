@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row job__cont">
    <h3>Add Job</h3>
    <br>
    <section class="add__job">
      <form action="/add-job" method="post">
        @csrf

        <div class="j__cont">
          <label for="">Title</label>
          <input type="text" name="title" value="">
        </div>
        <div class="j__cont">
          <label for="">Description</label>
          <textarea name="description" rows="8" cols="80"></textarea>
        </div>
        <div class="j__cont">
          <label for="">Salary</label>
          <input type="number" name="price" value="">
        </div>
        <div class="j__cont">
          <label for="">Location</label>
          <input type="text" name="location" value="">
        </div>
        <div class="j__cont">
          <label for="">Job</label>
          <input type="text" name="job" value="">
        </div>
        <button class="btn btn-info" type="submit">Create Job</button>
        <input type="hidden" name="id" value="{{ Auth::user()->company[0]->id }}">
      </form>
    </section>
  </div>
</div>

@stop
