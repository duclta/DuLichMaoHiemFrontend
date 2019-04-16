<base href="{{asset('public/frontend')}}/">
<header class="site-header">
    <div class="header-wrapper">
        <div class="header-top">
            <div class="header-menu">
                <nav class="navbar navbar-expand-md container">
                    <a class="navbar-brand logo-header" href="home.html"><img src="img/logo.png" alt="logo"
                            title="Company name"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false"
                        aria-label="Toggle navigation">
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