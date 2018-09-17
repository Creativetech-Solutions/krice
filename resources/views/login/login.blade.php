@extends('layouts.entry')
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Krice</b></a>
  </div>
  @if(session('global') == 'Account not activated.')
  <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Account Inactive!</h4>
               Your Account has not yet been activated. Please contact the system administrator for further information.
              </div>
  @endif
  @if(session('global') == 'Suspicious Activity')
  <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Suspicious Activity!</h4>
               Suspicious activity has been seen. Operations have been stopped indefinitely. Please contact system administrator.
              </div>
  @endif
  @if(session('global') == 'Login failed')
    <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-warning"></i> Invalid Credentials!</h4>
                 You have entered invalid email or password. Please try again or contact the system administrator.
                </div>
  @endif
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="/login" method="POST">
        {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" value="Login" class="btn btn-primary btn-block btn-flat">
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="#">I forgot my password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
@endsection