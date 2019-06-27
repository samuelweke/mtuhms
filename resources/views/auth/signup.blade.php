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
					<form method="POST" action="{{ route('register') }}">
						@csrf             
						<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<div class="form-horizontal">
							<!-- Email Input Form-->
							<div class="form-group">
								<input type="email" id="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" required />
								@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<!-- Password Input Form-->
							<div class="form-group">
								<div>
									<input id="password" type="password" name="password"  class="form-control l @error('password') is-invalid @enderror" placeholder="Create a Password" required />
									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>
							<!-- Confirm Password Input Form-->
							<div class="form-group">
								<div>
									<input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-green btn-block">Sign Up</button>
					</form>
					<div class="signup-footer">
						<a href=""><p>Already have an account? Sign In</p></a>
					</div>
				</div>
			</div>
		</div>
		<div class="image-area">
		</div>
	</div>


@endsection