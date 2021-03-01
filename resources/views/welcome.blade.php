<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Twitter. It's what's happening / Twitter</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: black;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
            }

            .position-ref {
                position: relative;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #text {
                font-weight: 900;
                font-style: normal;
            }

            .btn{
                border-radius: 17px;
                width: 250px;
                color: white; 
            }

            #loginBtn{
            background-color: white;
            color: blue;
            font-weight: bolder;
            }
            

        </style>
    </head>
    <body>

            <!--    <img src="images/twitter1.png" alt="twitter picture"> 

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}">Register</a>
                                            @endif
            -->

                
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/twitter1.png" alt="twitter picture" style="max-width: 185%; max-height: 90%">
                        </div>
                        <div class="col-md-5 ms-auto">
                            <br><br><br><br><br><br>
                            <img src="images/logo.png" alt="logo" style="max-width: 8%;">
                            <br><br><br><br>
                            <h1 id="text" class="display-1" style="color: white;">Happening now</h1>
                            <br>
                            <h2 id="text" style="color: white;">Join Twitter Today</h2>
                            <br>
                            <div class="position-ref">
                                 @if (Route::has('register'))
                                                <a href="{{ route('register') }}"><button class="btn btn-primary" style="background-color: #0ec6f0;">Sign up</button></a>
                                            @endif
                                @if (Route::has('login'))
                                        @auth
                                            <a href="{{ url('/home') }}">Home</a>
                                        @else
                                        <br></br>
                                        <div class="btn btn-primary" id="loginBtn">
                                            <a href="{{ route('login') }}">Log in</a>
                                        </div>
                                        @endauth
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="container">
            <div class="row">
                <div class="col-sm">
                About
                </div>
                <div class="col-sm">
                Help Center
                </div>
                <div class="col-sm">
                Term of Service
                </div>
                <div class="col-sm">
                Privacy Police
                </div>
                <div class="col-sm">
                Cookie Policy
                </div>
                <div class="col-sm">
                Ads Info
                </div>
                <div class="col-sm">
                Blog
                </div>
                <div class="col-sm">
                Status
                </div>
                <div class="col-sm">
                Careers
                </div>
                <div class="col-sm">
                Brand Resources
                </div>
                <div class="col-sm">
                Advertising
                </div>
                <div class="col-sm">
                Marketing
                </div>
                <div class="col-sm">
                Twitter for Business
                </div>
                <div class="col-sm">
                Developers
                </div>
                <div class="col-sm">
                Directory
                </div>
                <div class="col-sm">
                Settings
                </div>
                <div class="col-sm">
                One of three columns
                </div>
            </div>
        </div>



    </body>
</html>
