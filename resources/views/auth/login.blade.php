@extends('layouts.backend')
@section('title','Login')

@section('content')
    <!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login form -->
				<form class="login-form" action="{{ route('login') }}" method="POST">
                    @csrf
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Login to your account</h5>
								<span class="d-block text-muted">Your credentials</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left input-group group-indicator">
								<input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
								<span class="input-group-append">
									<span class="input-group-text"><button type="button" class="btn btn-link text-muted"
											onclick="show()"><i class="icon-eye2"></button></i></span>
								</span>
							</div>

							<div class="form-group d-flex align-items-center">
								<div class="form-check mb-0">
									<label class="form-check-label">
										<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
										Remember
									</label>
								</div>
                                @if (Route::has('password.request'))
								<a href="{{ route('password.request') }}" class="ml-auto">Forgot password?</a>
                                @endif
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
							</div>

							<div class="form-group text-center text-muted content-divider">
								<span class="px-2">Don't have an account?</span>
							</div>

							<div class="form-group">
								<a href="{{ route('register') }}" class="btn btn-light btn-block">Sign up</a>
							</div>

							<span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
						</div>
					</div>
				</form>
				<!-- /login form -->

			</div>
			<!-- /content area -->
			<script>
				function show() {
				var x = document.getElementById("password");
				if (x.type === "password") {
					x.type = "text";
					$('.icon-eye2').addClass('icon-eye-blocked2');
				} else {
					x.type = "password";
					$('.icon-eye-blocked2').removeClass().addClass('icon-eye2');
				}
				}
			</script>
@endsection