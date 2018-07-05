<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .homepage {
              text-align: center;
            }
            .homepage a {
              font-size: 25px;
              padding: 8px;
              text-decoration: none;
              color: #636b6f;
            }
            #main-title {
              font-size: 50px;
              padding: 50px;
            }
          </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content homepage">
              <h1 id="main-title">Dashboard</h1>

              <div class="container">
                @php
                $alphabet = array(
                  'A','B','C','D',
                  'E','F','G','H',
                  'I','J','K','L',
                  'M','N','O','P',
                  'Q','R','S','T',
                  'U','V','W','X',
                  'Y','Z');
                @endphp
                <ul>
                  @foreach ($alphabet as $key)
                    <a href="{{$key}}">{{$key}}</a>
                  @endforeach
                </ul>

                <ul>

                </ul>
              </div>

            </div>
        </div>
    </body>
</html>
