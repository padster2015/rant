@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading">Login</div>

        <div class="panel-body">
          <form role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            @if(! $errors->isEmpty())
              <div class="alert alert-danger">
                Account details are incorrect
              </div>
            @endif

            <div class="form-group">
              <label class="control-label">Email</label>

              <input type="text" class="form-control" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
              <label class="control-label">Password</label>

              <input type="password" class="form-control" name="password" value="{{ old('password') }}">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i>Login
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
