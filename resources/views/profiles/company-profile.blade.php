@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="header col-4 ">
      <div class="c__cont">
        <h3>{{ $company->name }}</h3>
        <div class="logo">
          <img src="storage/{{ $company->logo }}" alt="">
        </div>
        <form class="add__logo" action="/add-logo" method="post">
          @csrf
          <input type="file" name="company_logo" value="">
          <button class="btn btn-info" type="submit" title="Add Logo">+</button>
        </form>
      </div>
      <br>
      <div class="c__cont col-4">
        <h4>Branches</h4>
        <?php
          $branches = $company->cities;
          $branches = explode(' ', $branches);
        ?>
        @foreach ($branches as $branch)
          @if ( !empty($branch) )
            <p>{{ $branch }}</p>
          @endif
        @endforeach
      </div>
    </div>
    <br>
    @if ( !empty($company->contactPerson) )
      <div class="c__cont col-4">
        <h4>Contact Person</h4>
        <?php $person = $company->contactPerson;?>
        <p>{{ $person->last_name }}, {{ $person->first_name }}</p>
        <p>Email: {{ $person->email }}</p>
        <p>Job: {{ $person->job }}</p>
        <p>Phone: {{ $person->phone }}</p>
      </div>
    @endif
    <div class="c__cont  col-4">
      <h4>Mailing Address</h4>
      <p>{{ $person->m_country }}, {{ $person->m_city }}, {{ $person->m_street }} </p>
    </div>
    <div class="c__cont col-4">
      <h4>Active Jobs  {{ $jobs->count() }}</h4>
      <div class="c__j__cont">
        @if ( !empty($jobs))
          @foreach ( $jobs->get() as $job )
            <div class="j__cont">
              <div class="label">
                <span>{{ $job->title }}</span>
                <br>
                <span>{{ $job->location }}</span>
                <br>
                <span>{{ $job->job }}</span>
                <br>
                <p>{{ $job->description }}</p>
                <br>
                <p>{{ $job->price }}</p>
              </div>
            </div>
          @endforeach
        @endif
      </div>
      <button class="btn btn-info add_jobs" type="button" name="button">+ Jobs</button>
    </div>
    <div class="c__cont col-4">
      <h4>Received CV {{ __(0) }}</h4>
    </div>
  </div>
</div>

@stop
