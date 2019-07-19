@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/auth.css') }}">


@section('content')
    
    <div class="main-content">
		<div class="login-area">    
			<div class="login">
				<div class="header text-center"> 					
					<i class="fas fa-fw fa-stethoscope fa-3x mb-2"></i>
					<h1 class="mt-3 "> MTU Hospital <br> Management System </h1>
				</div>
				<div class="form-wrapper">
					<form method="POST" action="{{ route('login') }}" >  
						@csrf                  
						<div class="form-horizontal">
							{{-- Email Input Field --}}
							<div class="form-group">
								<input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required autocomplete="email" autofocus/>
								@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							{{-- Password Input Field --}}
							<div class="form-group">
								<input id="password" name="password" type="password" name="password"  class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password"/>
								@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							{{-- Remember Me Input Field --}}
							<div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
						</div>
						<button type="submit" class="btn btn-green btn-block">Sign In</button>
					</form>
					<div class="login-footer">
						<a href=""><p>Forgot your password?</p></a>
					<a href="{{ url('/signup') }}"><p>Don't have an account?</p></a>
					</div>
				</div>
			</div>
		</div>
		<div class="image-area">
		</div>
	</div>


@endsection