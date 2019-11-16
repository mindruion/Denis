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
                      <div class="circle-active">
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

                </div>

                <div class="card-body">
                    <form id="step_2" method="POST" action="/register-company/step2">
                        @csrf

                        <div class="form-group row">
                          <div class="col-md-6 offset-md-3">
                            <div class="sec__label">
                              <i class="fas fa-users"></i>
                              <h2>Number of Employees</h2>
                            </div>
                          </div>
                          <div class="company__det">
                              <div class="offset-md-3 col-md-6">
                                <div class="c__input c__order">
                                  <select class="employees form-control" name="employees">
                                    <option value="10">10</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="500">500</option>
                                    <option value="1000">1000</option>
                                    <option value="1000">1000+</option>
                                  </select>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6 offset-md-3">
                            <div class="sec__label">
                              <i class="fas fa-map-marker-alt"></i>
                              <h2>Department</h2>
                            </div>
                          </div>
                          <div class="company__det">
                            <div class="offset-md-3 col-md-6">
                              <div class="c__input c__order">
                                <div class="c__input c__order">
                                  <select class="department form-control" name="department">
                                    <option value="Logistics">Logistics</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Security">Security</option>
                                    <option value="Human Resources">Human Resources</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 offset-md-3">
                            <div class="sec__label">
                              <i class="far fa-user-circle"></i>
                              <h2>Industry</h2>
                            </div>
                          </div>
                          <div class="company__det">
                            <div class="offset-md-3 col-md-6">
                              <div class="c__input c__order">
                                <div class="c__input c__order">
                                  <select class="industry form-control" name="industry">
                                    <option value="Food">Food</option>
                                    <option value="IT / Web">IT / Web</option>
                                    <option value="IT / security">IT / security</option>
                                    <option value="Law">Law</option>
                                    <option value="Other">Other</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6 offset-md-3">
                            <div class="sec__label">
                              <i class="far fa-user-circle"></i>
                              <h2>Cities</h2>
                            </div>
                          </div>
                          <div class="company__det">
                            <div class="offset-md-3 col-md-6">
                              <div class="c__input c__order">
                                <div class="country-selector">
                                  <!-- <div class="country"> -->
                                    <!-- Appends countries JS -->
                                  <!-- </div> -->
                                </div>
                                <div class="selected__cities">
                                  <span>You selected:</span>
                                  <!-- Appends selecteed countries -->
                                  <!-- <div class="s__city"> -->
                                    <!-- <i class="fas fa-check"></i><span></span> -->
                                  <!-- </div> -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <input type="hidden" name="type" value="1">

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Step 3') }}
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
