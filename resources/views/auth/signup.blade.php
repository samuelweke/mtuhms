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
					<form>                    
						<div class="form-horizontal">
							<div class="form-group">
							<input type="email" class="form-control" placeholder="Email" required />
							</div>
							<div class="form-group">
							<div>
									<input type="password" name="password"  class="form-control" placeholder="Create a Password" required />
							</div>
							</div>
							<div class="form-group">
							<div>
									<input type="password" name="password"  class="form-control" placeholder="Confirm Password" required />
							</div>
							</div>
						</div>
						<button type="submit" class="btn btn-green btn-block">Register</button>
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