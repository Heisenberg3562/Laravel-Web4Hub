<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Web4Hub</title>
    <meta name="description" content="Event Management made easy ...">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
</head>

<body>


@include('navigation');


    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                    <p>Easy-to-use, powerful online event management.</p>
                </div>
{{--                <form action="" method=post>--}}
{{--                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" id="email" name="email"></div>--}}
{{--                    <div class="form-group"><label for="password">Password</label><input class="form-control" type="password" id="password" name="password">--}}
{{--                    <p>The password should contain at least one digit,one lower case,one upper case, 8 characters</p>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Remember me</label></div>--}}
{{--                    </div><button class="btn btn-primary btn-block" type="submit">Log In</button></form>--}}
                @yield('content');
            </div>
        </section>
    </main>

@include("footer");

</body>

</html>
