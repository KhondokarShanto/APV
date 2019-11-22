@extends('frontend.master')

@section('content')
  <div class="ps-page--my-account">
    <div class="ps-my-account">
      <div class="container">
        
        @if ($errors->any())
        <div>
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(Session::has('message'))
          <p class="alert alert-success">{{ Session::get('message') }}</p>
        @endif

        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="ps-tabs">
            <div class="ps-tab active" id="sign-in">
              <div class="ps-form__content">
                <div class="form-group" style="padding-top: 10px;">
                  <h2 class="ps-btn ps-btn--fullwidths">Login Your Account</h2>
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="form-group submtit">
                  <button class="ps-btn ps-btn--fullwidth">Login</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection