<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <!-- Menyisipkan Bootstrap -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" /> <!-- https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans -->
        <link href="style/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
        <link href="style/slick/slick.css" rel="stylesheet" /> <!-- https://kenwheeler.github.io/slick/ -->
        <link href="style/slick/slick-theme.css" rel="stylesheet" />
        <link href="style/css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com -->
        <link href="style/css/templatemo-new-vision.css" rel="stylesheet" />     
    </head>
    <body>
        <div class="row">
            <div class="col-12">
                @include('blog.header')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
        <footer>
            <div class="row">
                <div class="col-12">
                    @include('blog.footer')
                </div>
            </div>
        </footer>
        <!-- Menyisipkan Javascript -->
        <script src="public/js/jquery-3.4.1.min.js"></script>
        <script src="public/slick/slick.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/templatemo-script.js"></script>
    </body>
</html>