<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TrialEnd</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-xs-12 links">
                    <div class="pull-right">
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    </div>
                </div>
            </div>
            <div class="row row2">
                <div class="col-md-6 col-md-offset-2 content">
                    <div class="title">
                        <h1>TrialEnd</h1>
                        <p>Tired of getting billed after your free trials expire?<br>
                            You now can manage all your trial accounts and get notified whenever they expire. It's never been easier.<br>
                            Just enter the details of every account you have and we'll make sure to send you an email a day before the expiry day, so that you may cancel it in time.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
