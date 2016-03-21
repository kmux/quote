<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title', 'Quote')</title>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    @include('partials.flash')

                    @yield('content')

                    @include('partials.form')

                    <hr>
                    <footer class="text-center">
                        <p>&copy; {{ date('Y') }} <a href="https://github.com/kmux" target="_blank">kmux</a></p>
                    </footer>
                </div>
            </div>
        </div>

        <script src="js/app.js"></script>
    </body>
</html>