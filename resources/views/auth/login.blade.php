@extends('layouts.app')

@section('content')
  <div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);">Arvind<b> KYF</b></a>
        <small>Arvind Based - Know Your Factory App</small>
    </div>
    <div class="card">
      <div class="body">
        <form method="POST" action="{{ route('login') }}" id="sign_in">
          @csrf
          <h3 class="msg">Login</h3>
          <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">person</i>
            </span>
            <div class="form-line">
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
              @if ($errors->has('email'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">lock</i>
            </span>
            <div class="form-line">
              <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

              @if ($errors->has('password'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-xs-8 p-t-5">
              <input type="checkbox" name="remember" id="rememberme" {{ old('remember') ? 'checked' : '' }} class="filled-in chk-col-red">
                <label for="rememberme">
                     Remember Me
                </label>
            </div>
            <div class="col-xs-4">
                <button class="btn btn-block bg-red waves-effect" type="submit">Login In</button>
            </div>
          </div>
          <div class="row m-t-15 m-b--20">
              <div class="col-xs-6">
                  <a href="{{route('register')}}">Register Now!</a>
              </div>
              <div class="col-xs-6 align-right">
                  <a href="{{ route('password.request') }}">
                      Forgot Your Password?
                  </a>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
