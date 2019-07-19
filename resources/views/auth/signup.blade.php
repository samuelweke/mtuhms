@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/auth.css') }}">


@section('content')
    
    <div class="main-content">
		<div class="login-area">    
			<div class="login signup">
				<div class="header sign-up text-center"> 					
					<i class="fas fa-fw fa-stethoscope fa-3x mb-2"></i>
					<h1 class="mt-3 "> MTU Hospital <br> Management System </h1>
				</div>
				<div class="form-wrapper">
					<form method="POST" action="{{ route('register') }}">
						@csrf             
						 {{-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div> --}}
						<div class="form-group row">
							<div class="col-md-6 col-sm-12">
								<div>
									<input type="text" name="firstname" class="form-control  @error('name') is-invalid @enderror" id="" placeholder="First Name" value="{{ old('firstname') }}" autocomplete="on" required >
									 @error('firstname')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div>
									<input type="text" name="lastname" class="form-control  @error('name') is-invalid @enderror" id="" placeholder="Last Name" value="{{ old('lastname') }}" autocomplete="on" required >
									 @error('lastname')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
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
									<input placeholder="Password" id="password" type="password" name="password"  class="form-control l @error('password') is-invalid @enderror" required />
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
							<div class="form-group">
								<div>
									<select class="custom-select" id="" >
										<option value="">Select Role</option>
										<option value="">Patient</option>
										<option value="">Nurse</option>
										<option value="">Doctor</option>
										<option value="">Record Officer</option>
										<option value="">Laboratorist</option>
										<option value="">Pharmacist</option>
									</select>
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-green btn-block">Sign Up</button>
					</form>
					<div class="signup-footer">
						<p>Already have an account? <a href="{{ url('/') }}">Sign In</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="image-area">
		</div>
	</div>


@endsection