@extends('frontend.master')

@section('content')
  <div class="ps-page--my-account">
    <div class="ps-my-account">
      <div class="container">
        <form method="POST" action="{{ route('registration') }}">
          @csrf
          <div class="ps-tabs">
            <div class="ps-tab active" id="sign-in">
              <div class="ps-form__content">
                <div class="form-group" style="padding-top: 10px;">
                  <h2 class="ps-btn ps-btn--fullwidths">Create Your Account</h2>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                      <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}"  placeholder="First Name" autofocus>

                      @if ($errors->has('first_name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('first_name') }}</strong>
                      </span>
                      @endif
                  </div>
                  <div class="col-md-6">
                      <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" autofocus>

                      @if ($errors->has('last_name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('last_name') }}</strong>
                      </span>
                      @endif
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                      <input id="user_name" type="text" class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" name="user_name" value="{{ old('user_name') }}"  placeholder="Username" autofocus>

                      @if ($errors->has('user_name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('user_name') }}</strong>
                      </span>
                      @endif
                  </div>
                  <div class="col-md-6">
                      <input id="phone_no" type="text" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" name="phone_no" value="{{ old('phone_no') }}" placeholder="Phone Number" autofocus>

                      @if ($errors->has('phone_no'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('phone_no') }}</strong>
                      </span>
                      @endif
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                      <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="Email" autofocus>

                      @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                  </div>
                  <div class="col-md-6">
                      <input id="nid" type="text" class="form-control{{ $errors->has('nid') ? ' is-invalid' : '' }}" name="nid" value="{{ old('nid') }}" placeholder="NID" autofocus>

                      @if ($errors->has('nid'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('nid') }}</strong>
                      </span>
                      @endif
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                      <input id="birth_date" type="text" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date" value="{{ old('birth_date') }}"  placeholder="Birth Date" autofocus>

                      @if ($errors->has('birth_date'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('birth_date') }}</strong>
                      </span>
                      @endif
                  </div>
                  <div class="col-md-6">
                      <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="Address" autofocus>

                      @if ($errors->has('address'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('address') }}</strong>
                      </span>
                      @endif
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                      <input id="guardian_name" type="text" class="form-control{{ $errors->has('guardian_name') ? ' is-invalid' : '' }}" name="guardian_name" value="{{ old('guardian_name') }}"  placeholder="Guardian Name" autofocus>

                      @if ($errors->has('guardian_name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('guardian_name') }}</strong>
                      </span>
                      @endif
                  </div>
                  <div class="col-md-6">
                      <input id="guardian_phone" type="text" class="form-control{{ $errors->has('guardian_phone') ? ' is-invalid' : '' }}" name="guardian_phone" value="{{ old('guardian_phone') }}" placeholder="Guardian Phone" autofocus>

                      @if ($errors->has('guardian_phone'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('guardian_phone') }}</strong>
                      </span>
                      @endif
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                      <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" placeholder="Password" autofocus>

                      @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                      @endif
                  </div>
                  <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <select class="form-control" id="type" name="type" >
                      <option value="">Select User Type</option>
                      @foreach( $roles as $role)
                      <option value="{{ $role->name}}">{{ $role->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group submtit">
                  <button class="ps-btn ps-btn--fullwidth">REGISTER</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection