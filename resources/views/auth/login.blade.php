@extends('layouts.app')

@section('content')
<div class="container">

	<div class="my-account">

		<ul class="tabs-nav">
			<li class=""><a href="#tab1">Login</a></li>
			<li><a href="#tab2">Register</a></li>
		</ul>

		<div class="tabs-container">
			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
                <form method="post" class="login" action="{{ route('login') }}">
                      @csrf

					<p class="form-row form-row-wide">
						<label for="username">{{ __('E-Mail Address') }}:
							<i class="ln ln-icon-Male"></i>
                            <input type="text" class="input-text @error('email') is-invalid @enderror"   value=""  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                            
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</label>
					</p>

					<p class="form-row form-row-wide">
						<label for="password">{{ __('Password') }}:
							<i class="ln ln-icon-Lock-2"></i>
                            <input class="input-text @error('password') is-invalid @enderror" type="password" name="password" id="password" required autocomplete="current-password"/>
                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</label>
					</p>

					<p class="form-row">
						<input type="submit" class="button border fw margin-top-10" name="login" value="Login" />

						<label for="rememberme" class="rememberme">
						<input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/> Remember Me</label>
					</p>

					<p class="lost_password">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
					</p>
					
				</form>
			</div>

			<!-- Register -->
			<div class="tab-content" id="tab2" style="display: none;">

                <form method="post" class="register" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
					
				<p class="form-row form-row-wide">
					<label for="username2">{{ __('Name') }}
						<i class="ln ln-icon-Male"></i>
                        <input type="text" class="input-text @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                         @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
					</label>
				</p>
					
				<p class="form-row form-row-wide">
					<label for="email2">{{ __('E-Mail Address') }}
						<i class="ln ln-icon-Mail"></i>
                        <input type="text" class="input-text @error('email') is-invalid @enderror" name="email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="password1">{{ __('Password') }} :
						<i class="ln ln-icon-Lock-2"></i>
                        <input class="input-text @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password"/>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="password2">{{ __('Confirm Password') }}
						<i class="ln ln-icon-Lock-2"></i>
						<input class="input-text" type="password" name="password_confirmation" required autocomplete="new-password"/>
					</label>
				</p>


			<div class="form-group form-row row">
				<label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar (optional)') }} 
				<div class="col-md-6 n">
					<input id="avatar" type="file" class="form-control upload change-photo-btn" name="avatar">
				</div></label>
				<br>

				
			</div>

				{{-- <div class="switch-field">
					<input type="radio" id="radio-one" name="volunteer" value="volunteer" checked/>
					<label for="radio-one" class="button border">Volunteer</label>
					<input type="radio" id="radio-two" name="organisation" value="organisation" />
					<label for="radio-two" class="button border">Organisation</label>
				</div> --}}
				<select data-placeholder="Register As" name="account-type" class="chosen-select">
                                
									<option value="volunteer">Volunteer</option>
									<option value="organisation">Organisation</option>
									
				</select>

				<p class="form-row">
					<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
				</p>

				</form>
			</div>
		</div>
	</div>
</div>

@endsection
