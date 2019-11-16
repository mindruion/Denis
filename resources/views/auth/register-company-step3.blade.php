@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <div class="reg__steps">
                    <div class="step">
                      <div class="circle">
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
                      <div class="circle-active">
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
                    <form method="POST" action="/register-company/step3">
                        @csrf

                        <div class="form-group row">
                          <div class="col-md-6 offset-md-3">
                            <div class="sec__label">
                              <i class="fas fa-user"></i>
                              <h2>Contact person</h2>
                            </div>
                          </div>
                          <div class="company__det">
                              <div class="semi-input c__addr offset-md-3 col-md-6">
                                <div class="c__input">
                                  <input type="text" class="form-control" name="l_name" placeholder="Last Name" value="" title="Last name">
                                </div>
                                <div class="c__input">
                                  <input type="text" class="form-control" name="f_name" placeholder="First Name" value="" title="First Name">
                                </div>
                              </div>
                              <div class="offset-md-3 col-md-6">
                                <div class="c__input c__order">
                                  <input type="text" class="form-control" name="email" value="" placeholder="Email" title="Email">
                                </div>
                              </div>
                              <div class="offset-md-3 col-md-6">
                                <div class="c__input c__order">
                                  <input type="text" class="form-control" name="job" value="" placeholder="Job" title="job">
                                </div>
                              </div>
                              <div class="semi-input c__addr offset-md-3 col-md-6">
                                <div class="c__input">
                                  <input type="text" class="form-control" name="website" placeholder="Website" value="" title="Company Website">
                                </div>
                                <div class="c__input">
                                  <input type="text" class="form-control" name="phone" placeholder="Phone" value="" title="Phone">
                                </div>
                              </div>

                          </div>
                          <div class="col-md-6 offset-md-3">
                            <div class="sec__label">
                              <i class="fas fa-map-marker-alt"></i>
                              <h2>Mailing address</h2>
                            </div>
                          </div>
                          <div class="company__det">
                            <div class="offset-md-3 col-md-6">
                              <div class="c__input c__order">
                                <input type="text" class="form-control" name="m_street" value="" placeholder="Street" title="Street">
                              </div>
                            </div>
                            <div class="semi-input c__addr offset-md-3 col-md-6">
                              <div class="c__input">
                                <input type="text" class="form-control" name="m_city" placeholder="City" value="" title="City">
                              </div>
                              <div class="c__input">
                                <input type="text" class="form-control" name="m_country" placeholder="Country" value="" title="Country">
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register Company') }}
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
