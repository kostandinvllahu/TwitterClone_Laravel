<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link rel="icon" type="image/png" href="images/foto.png"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<div class="header">
<p>
<a href="{{ route('home') }}"><img src="images/twitter1.png" alt="twitter picture"></a>
</p>
</div>
</head>
<style>
.email_input{
    text-align = center;
}

#email{
    width: 400px;
    border-radius: 50px;
}

#searchBtn {
            background-color: #26a3c9;
            border-radius: 24px;
            width: 80px;
            margin-left: -15px;
        }

.header {
  overflow: hidden;
  height: 50px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  width: auto;
  height: 50px;
}



</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <!-- <div class="card">-->
               <!-- <div class="card-header">{{ __('Reset Password') }}</div>-->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 
                    <br></br>
<h3><strong>Find your Twitter account</strong></h3>
<br></br>
<p>Enter your email, phone number, or username.</p>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <!--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->

                            <div class="email_input">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      <p></p>
                      <p></p>
                        <div class="btnn">
                            <div class="btn">
                            <button id="searchBtn" type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
