<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rochester&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 80vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                top: 100px;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            div h1{
                font-family: 'Rochester', cursive;
                color: black;
                margin-bottom: 0;
            }
            .red {
                color: red;
            }
            #home, #register,
            #login{
                padding: 6px 10px;
                border-radius: 30px;
            }
            #home:hover,
            #login:hover{
                background: red;
                color: white;
            }
            #register:hover{
                background: #6e6e6e;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title">
                <h1><span class="red">W</span>isataku</h1>
            </div>
            <p>Temukan dan beli tiket wisata dengan mudah</p>   
        </div> 
        <div class="flex-center position-ref">
        @if (Route::has('login'))
            <div class="text-center links">
                @auth
                    <a href="{{ url('/home') }}" id="home">Home</a>
                @else
                    <a href="{{ route('login') }}" id="login">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" id="register">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        </div>
    </body>
</html>
