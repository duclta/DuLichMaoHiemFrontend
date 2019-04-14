<!DOCTYPE html>
<html lang="vi">
<head>
    <base href="{{asset('public/fronted')}}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Du lịch mạo hiểm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/home.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--Font Awesome's CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!--Font Roboto-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../js/home.js"></script>
</head>
<body>
    <div class="container-full">
        <!--header-->
        <header class="site-header">
            <div class="header-wrapper">
                <div class="header-top">
                    <div class="header-menu">
                        <nav class="navbar navbar-expand-md container">
                            <a class="navbar-brand logo-header" href="home.html"><img src="../img/logo.png" alt="logo" title="Company name"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar-menu">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item"><a class="nav-link" href="alltour.html">TIN TỨC</a></li>
                                    <li class="nav-item"><a class="nav-link" href="loaitour.html">FAQ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="loaitour.html">TÌM KIẾM</a></li>
                                    <li class="nav-item"><a class="nav-link" href="loaitour.html">LIÊN HỆ</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                {{-- header-slideshow --}}
                @yield('header-slideshow')
            </div>
        </header>
        <!--header end-->

        <!--main content-->
        @yield('main')
         <!--footer-->
         <footer class="footer-distributed row">
            <div class="footer-left col-md-3">
                <h3>Company<span>logo</span></h3>       
                <p class="footer-links">
                    <a href="#">Home</a>
                    ·
                    <a href="#">Blog</a>
                    ·
                    <a href="#">Pricing</a>
                    ·
                    <a href="#">About</a>
                    ·
                    <a href="#">Faq</a>
                    ·
                    <a href="#">Contact</a>
                </p>
                <p class="footer-company-name">Company Name &copy; 2019</p>
            </div>     
            <div class="footer-center col-md-5">
                <div class="item">
                    <i class="fa fa-map-marker"></i>
                    <div>Sông Ray Cẩm Mỹ Đồng Nai</div>
                </div>
                <div class="item">
                    <i class="fa fa-phone"></i>
                    <div>+84 968 775 364</div>
                </div>
                <div class="item">
                    <i class="fa fa-envelope"></i>
                    <div><a href="mailto:support@company.com">support@company.com</a></div>
                </div>      
            </div>
            <div class="footer-right col-md-4">
                <p class="footer-company-about">
                    <span>About the company</span>
                    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>
                <div class="footer-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </footer>
        <!--footer end-->
    </div>
</body>
</html>