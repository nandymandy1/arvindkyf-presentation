@extends('layouts.app')

@section('content')
  <div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);">Arvind<b> KYF</b></a>
        <small>Arvind Based - Know Your Factory App</small>
    </div>
    <div class="card">
      <div class="body">
        <form method="POST" action="{{ route('register') }}" id="sign_up">
          @csrf
          <h3 class="msg">Register</h3>
          <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">person</i>
            </span>
            <div class="form-line">
              <input id="name" placeholder="Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

              @if ($errors->has('name'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="input-group">
            <span class="input-group-addon">
              <i class="material-icons">account_circle</i>
            </span>
            <div class="form-line">
              <input id="username" placeholder="Username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

              @if ($errors->has('username'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('username') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="input-group">
            <span class="input-group-addon">
              @
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
              <input placeholder="Password" id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

              @if ($errors->has('password'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
          </div>
          <div class="input-group">
            <span class="input-group-addon">
              <i class="material-icons">lock</i>
            </span>
            <div class="form-line">
              <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
          </div>
          <div class="input-group">
            <span class="input-group-addon">
                <i class="fas fa fa-industry"></i>
            </span>
            <div class="form-line">
              <select class="form-control {{ $errors->has('factory') ? ' is-invalid' : '' }}" name="factory" id="factory" placeholder="Choose Your Factory" required>
                <!-- Populate the factory item with jquery -->
                <option value="">Choose Your Factory Here</option>
              </select>
              @if ($errors->has('factory'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('factory') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="input-group">
            <span class="input-group-addon">
                <i class="fas fa fa-wrench"></i>
            </span>
            <div class="form-line">
              <select class="form-control {{ $errors->has('job') ? ' is-invalid' : '' }}" name="job" id="job" placeholder="Choose Your Job" required>
                <option value="">Choose Your Job Here</option>
                <option value="cutting">Cutting</option>
                <option value="sewing">Sewing</option>
                <option value="finishing">Finishing</option>
                <option value="quality">Quality</option>
                <option value="general">General</option>
                <option value="master">Master</option>
              </select>
              @if ($errors->has('job'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('job') }}</strong>
                  </span>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
                <a href="{{route('login')}}">Already have an Account?</a>
            </div>
            <div class="col-xs-6 pull-right">
                <button class="btn btn-block btn-lg bg-red waves-effect" type="submit">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
