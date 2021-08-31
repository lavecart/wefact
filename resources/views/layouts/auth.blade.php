<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ruby Finance | Online Boekhouden</title>


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{ asset('theme/css/main.css') }}" rel="stylesheet">
    <style>
        body:before
        {
            background: url(https://i.imgur.com/zDzWxxQ.jpg);
            no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover; !important
        }

        .all-wrapper {
            box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1);
        }

        .wrapper {
            background: url(https://i.imgur.com/zDzWxxQ.jpg);
            no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .pl-md-2 {
            padding-left: 0.75rem!important;
        }

        @media screen and (max-width: 762px) {
            .pl-sm-0 {
                padding-left: 0!important;
            }
        }
    </style>

    @yield('styles')
</head>

<body class="auth-wrapper wrapper">
    <div class="all-wrapper menu-side">
        @yield('content')
    </div>
</body>

</html>
