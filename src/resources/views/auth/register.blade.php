@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-3-offset">
            <h1>Register</h1>
            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="name">Username:</label>
                    <input type="name" name="name" id="name" class="form-control" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">Pasword:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Pasword:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>    
@stop