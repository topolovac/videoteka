<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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

            .navigation {
              padding-top:15px;
              padding-bottom:15px;
              float: right;
            }
          </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <div class="container">

            <div class="navigation">
            @yield('navigation')
            </div>

            @yield('content')
          </div>


        </div>
    </body>
</html>
