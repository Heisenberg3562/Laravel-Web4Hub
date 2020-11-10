<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>About Us - Web4Hub</title>
    <meta name="description" content="Event Management made easy ...">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
</head>

<body>
@include('navigation')
    <main class="page">
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">About Us</h2>
                    <p>We are group of students of third year of branch computer engineering. We study in Anjuman-I-Islam'<s></s> Kalsekar Technical Campus. </p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" height="253px" src="assets/img/avatars/Omkar.jpeg">
                            <div class="card-body info">
                                <h4 class="card-title">Omkar Babrekar</h4>
                                <p class="card-text">A computer engineering enthusiast eager to learn new skills.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" height="253px" src="assets/img/avatars/Adeeba.jpeg">
                            <div class="card-body info">
                                <h4 class="card-title">Adeeba Ansari</h4>
                                <p class="card-text">A computer enthusiast looking forward for self-improvement every day.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block"  src="assets/img/avatars/Aman.jpeg">
                            <div class="card-body info">
                                <h4 class="card-title">Aman Kazi</h4>
                                <p class="card-text">I am learning Engineering for fun and love to learn new things .</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/Ibrahim.jpeg">
                            <div class="card-body info">
                                <h4 class="card-title">Ibrahim Sarguroh</h4>
                                <p class="card-text">Eager to learn new things and future game developer with big ambitions.</p>
                                <div class="icons"><a href="https://m.facebook.com/profile.php?id=100011520938820&ref=content_filter"><i class="icon-social-facebook"></i></a><a href="https://instagram.com/_ibrahimsarguroh_?igshid=1h56k08lbezpt"><i class="icon-social-instagram"></i></a><a href="https://twitter.com/blaze_ibrahim?s=09"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@include('footer')

</body>

</html>
