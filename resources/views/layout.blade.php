<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href=" {{ asset('css/sweetalert.css') }} ">

        <!-- Styles -->
        <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <style>

            h1, h2, h3, h4, h5 {
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
            }

            .homepage {
              text-align: center;
              margin-top: 50px;
            }
            .homepage a {
              font-size: 25px;
              padding: 8px;
              text-decoration: none;
              color: #636b6f;
            }
            #main-title {
              font-size: 50px;
              margin-bottom: 50px;
              text-align: center;
            }

            .navigation {
              padding: 15px;
              text-align:right;
            }

            .movie-table {
              margin-top: 350px;
            }

            .latest {
              display: grid;
              grid-template-columns: 1fr 1fr 1fr;
              grid-gap: 30px;
              align-items: center;
            }

            .latest-title {
              margin-top: 85px;
              margin-bottom: 35px;
              text-align: center;
            }

            .latest a {
              text-decoration: none;
            }

            .latest div {
              text-align: center;
            }

            .latest-element h3, h5 {
              color: #333;
              font-family: verdana;
              font-weight: bold;
            }

            .latest-element img {
              border-radius:8px;
              border: 1px solid silver;
            }

            img {
              border-radius:8px;
              border: 1px solid silver;
            }

            .center {
              text-align: center;
            }


          </style>
    </head>
    <body>

      <div class="container">
        <div class="navigation">
          @yield('nav')
        </div>

        <div>
          <h1 id="main-title">@yield('title')</h1>
        </div>

        <div class="main">
          @yield('content')
        </div>
      </div>


        @yield('script')

      <script src="{{ asset('js/sweetalert.js') }}"></script>
      <script src="{{ asset('js/restfulizer.js') }}"></script>
    </body>
</html>
