@extends('layouts.master')

@section('content')
  @include('partials.navigation')
  @include('partials.alert')
  <div class="row">
    <div class="col-lg-6 col-md-offset-3">
      <div class="well bs-component">
        <form class="form-horizontal" method="POST" action="/register">
          {{ csrf_field() }}
          <fieldset>
            <legend>Register</legend>
            <div class="form-group">
              <label for="username" class="col-lg-2 control-label">Username</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" placeholder="username" name="username" value="{{ old('username') }}" required>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input type="email" class="form-control" placeholder="a@b.com" name="email" value="{{ old('email') }}" required>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
                <input type="password" class="form-control" placeholder="password" name="password">
              </div>
            </div>
            <div class="form-group">
              <label for="password_confirmation" class="col-lg-2 control-label">Confirm</label>
              <div class="col-lg-10">
                <input type="password" class="form-control" name="password_confirmation">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Register</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
      @include('partials.social')
    </div>
  </div>

  @include('partials.footer')
@endsection
