@extends('layouts.app')
@section('content')
<div style="background-color:#a64dff;margin-top:0px;margin-bottom:0px;">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card border-0"  style="margin-top:150px;margin-bottom:50px;">
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row p-0 m-0">
                                        <div class="col-4">
                                            <img src="https://images.unsplash.com/photo-1536510344784-b43e97721c1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="height: 400px; padding: 0px; margin-left: -35px;margin-top: -20px;margin-bottom: -20px;">
                                        </div>
                                        <div class="col-6" style="margin-left: 80px;margin-top: 80px;">
                                                <div class="form-group ">
                                                        <input style="margin-top: -15px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email ID" autofocus >
                            
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                            
                                                    <div class="form-group ">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">
                            
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                            
                                                    <div class="form-group row" style="margin-left: 4px;margin-top: 30px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            
                                                                <label class="form-check-label" for="remember">
                                                                    {{ __('Remember Me') }}
                                                                </label>
                                                            </div>
                                                    </div>
                            
                                                    <div class="form-group row mb-0" style="margin-left: 20px;">
                                                            <button type="submit" class="btn btn-info">
                                                                {{ __('Login') }}
                                                            </button>
                            
                                                            @if (Route::has('password.request'))
                                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                    {{ __('Forgot Your Password?') }}
                                                                </a>
                                                            @endif
                                                    </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

@endsection