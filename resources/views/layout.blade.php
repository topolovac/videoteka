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
        <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <style>

            h1, h2, h3, h4, h5 {
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
              margin-bottom:60px;
              text-align:right;
            }
          </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <div class="container">

            <div class="navigation">
              @yield('nav')
            </div>

            <div class="main">
              @yield('content')
            </div>
          </div>


        </div>

        @yield('script')
    </body>
</html>
