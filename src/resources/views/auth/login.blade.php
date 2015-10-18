@extends('layout.layout')

@section('content')
     <div class="row">
        <div class="col-md-6 col-md-3-offset">
            <h1>Login</h1>
            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">Pasword:</label>
                    <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
                </div>
                <div class="form-group">
                    <input type="checkbox" name="remember"> Remember Me
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
@stop