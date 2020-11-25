
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Wali Kelas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iniloggg/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iniloggg/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iniloggg/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iniloggg/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('iniloggg/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iniloggg/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iniloggg/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('iniloggg/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iniloggg/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('iniloggg/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
    
    <div class="limiter" >
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                        @csrf
                    
                <!-- <form class="login100-form validate-form" style="margin-top:-5%;"> -->
                <!-- <form method="POST" action="{{ route('login') }}" > -->
                    <span class="login100-form-title p-b-43">
                        Login
                    </span>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="focus-input100"></span>
                        <span class="label-input100">{{ __('email') }}</span>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                        <span class="focus-input100"></span>
                        <span class="label-input100">{{ __('Password') }}</span>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <!-- <div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div> -->
                        
                        @if (Route::has('password.request'))
                            <a class="txt1 btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                    
            

                    <div class="container-login100-form-btn">
                        <!-- <button class="login100-form-btn">
                            Login
                        </button> -->
                        <button type="submit" class="login100-form-btn">
                                    {{ __('Login') }}
                        </button>
                    </div>
                    
                </form>

                <div class="login100-more" style="background-image: url('iniloggg/loginwalas.jpg');">
                </div>
            </div>
        </div>
    </div>


</body>
</html>
