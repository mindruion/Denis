@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <div class="reg__steps">
                    <div class="step">
                      <div class="circle-active">
                        <i class="fas fa-circle"></i>
                      </div>
                      <div class="step__label active">
                        <h4>Step 1</h4>
                        <span>Indentification</span>
                      </div>
                    </div>
                    <span class="divider"></span>
                    <div class="step">
                      <div class="circle">
                        <i class="fas fa-circle"></i>
                      </div>
                      <div class="step__label">
                        <h4>Step 2</h4>
                        <span>Activity</span>
                      </div>
                    </div>
                    <span class="divider"></span>
                    <div class="step">
                      <div class="circle">
                        <i class="fas fa-circle"></i>
                      </div>
                      <div class="step__label">
                        <h4>Step 3</h4>
                        <span>Contact</span>
                      </div>
                    </div>
                  </div>
                  <!-- {{ __('Register Company') }} -->
                </div>

                <div class="card-body">
                    <form method="POST" action="/register-company/step1">
                        @csrf

                        <div class="form-group row">
                          <div class="col-md-6 offset-md-3">
                            <div class="sec__label">
                              <i class="far fa-address-card"></i>
                              <h2>Company Details</h2>
                            </div>
                          </div>
                          <div class="company__det">
                              <div class="semi-input offset-md-3 col-md-6">
                                <div class="c__input">
                                  <input type="text" class="form-control" name="unique" placeholder="Unique registration code" title="Unique registration code" value="">
                                </div>
                              </div>
                              <div class="offset-md-3 col-md-6">
                                <div class="c__input c__order">
                                  <input type="text" class="form-control" name="company_name" value="" placeholder="Company name" title="Company name">
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6 offset-md-3">
                            <div class="sec__label">
                              <i class="fas fa-map-marker-alt"></i>
                              <h2>Office address</h2>
                            </div>
                          </div>
                          <div class="company__det">
                            <div class="offset-md-3 col-md-6">
                              <div class="c__input c__order">
                                <input type="text" class="form-control" name="l_street" value="" placeholder="Street" title="Street">
                              </div>
                            </div>
                            <div class="semi-input c__addr offset-md-3 col-md-6">
                              <div class="c__input">
                                <!-- <input type="text" class="form-control" name="city" placeholder="City" value="" title="City"> -->
                                <select class="form-control crs-country" data-value="name" data-region-id="one" data-default-option="Select country" name="l_country"></select>
                              </div>
                              <div class="c__input">
                                <!-- <input type="text" class="form-control" name="country" placeholder="Country" value="" title="Country"> -->
                                <select name="l_city" id="one" class="crs-cities form-control" data-default-option="Select City" value="Request::old('city')" name="l_city"></select>
                              </div>
                            </div>
                            <div class="semi-input c__addr offset-md-3 col-md-6">
                                <!-- <div class="crs-country country-selector" data-value="name" data-region-id="one" data-default-option="Select country" name="country"> -->
                                <!-- <div class="country"> -->
                                <!-- Appends countries JS -->
                                <!-- </div> -->
                                <!-- </div> -->
                            </div>
                          </div>

                          <div class="col-md-6 offset-md-3">
                            <div class="sec__label">
                              <i class="far fa-user-circle"></i>
                              <h2>Authentication Data</h2>
                            </div>
                          </div>
                          <div class="company__det">
                            <div class="offset-md-3 col-md-6">
                              <div class="c__input c__order">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="user_name" placeholder="User name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            <div class="offset-md-3 col-md-6">
                              <div class="c__input c__order">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            <div class="offset-md-3 col-md-6">
                              <div class="c__input c__order">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Step 2') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
