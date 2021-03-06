<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/png" href="images/foto.png" />
</head>
<style>
.body{
    background-color: black;
}

.card-header{
    color: white;
}

input{
  background-color: black;
  width: 300px;
 height: 60px;
}

.password{
    margin: auto;
  width: 50%;
  padding: 10px;
}

.button{
    margin: auto;
  width: 50%;
  padding: 10px;
}

.card{
  margin: auto;
  width: 50%;
  padding: 10px;
}
</style>

<body class="body">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="text-align: center;">
                <img src="images/logo.png" alt="logo" style="max-width: 3%;">
                </div>
                <div class="card-header" style="text-align: center;">{{ __('Log in to Twitter') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                              
                                <div class="username" style="text-align: center;">
                <input id="login" type="text"
                class="form-control{{ $errors->has('name') || $errors->has('email') ? ' is-invalid' : '' }}"
                name="login" value="{{ old('name') ?: old('email') }}" required autofocus>
                                <!-- @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        
                                    @enderror
                                    -->
                                </div>
                            </div>

                            <div class="form-group row">
                                
                                <div class="password" style="text-align: center;">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="button" style="text-align: center;">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <div class="reset" style="text-align: center;">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>


