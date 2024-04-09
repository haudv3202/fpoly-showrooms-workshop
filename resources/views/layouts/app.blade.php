
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <meta name="author" content="Mannat Studio" />
    <meta
        name="description"
        content="Serenite is a Responsive HTML5 Template for SaaS, cryptocurrency, app and tech companies, as well as for digital studios."
    />
    <meta
        name="keywords"
        content="Serenite, themeforest template, app, app landing page, App Showcase, cryptocurrency, digital studio, saas, saas landing, saas theme, software, software company website, software startup, startup, startup landing page, startup wordpress, technology"
    />
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="{{asset('theme/client/assets/images/favicon.ico')}}"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&amp;display=swap"
        rel="stylesheet"
    />
    <link
        href="{{asset('bootstrap/css/bootstrap.min.css')}}"
        rel="stylesheet"
    />
    <link
        href="{{asset('theme/client/assets/css/styles.min.css')}}"
        rel="stylesheet"
    />
    <link
        href="{{asset('theme/client/assets/css/home-default.css')}}"
        rel="stylesheet"
    />
    <script src="{{asset('theme/client/assets/js/scripts.min.js')}}"></script>

    {{-- <!-- Scripts -->
    @vite(['resources/sass/app.scss','resources/css/styles.min.css','resources/css/home-default.css'])
    @vite(['resources/js/scripts.min.js']) --}}
</head>
<style>
    /* .home-default{
        background: #fff !important;
    } */
</style>
<body>
    <div id="pageloader">
        <div class="loader-item">
         <img src="{{asset('theme/client/assets/images/tail-spin.svg')}}" width="80" alt />
        </div>
    </div>
    <div class="home-default">
        <header>
            <div class="container">
                <div class="top-bar">
                    <div class="row align-items-center p-3" >
                        {{-- <div class="col-md-6 order-md-last">
                            <div class="social-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="javascript:"
                                            ><i class="bi bi-facebook"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="javascript:"
                                            ><i class="bi bi-twitter-x"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="javascript:"
                                            ><i class="bi bi-instagram"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="javascript:"
                                            ><i class="bi bi-linkedin"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="javascript:"
                                            ><i class="bi bi-youtube"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-bar-links">
                                <a href="/products">Products</a>
                                <a href="/careers">Careers</a>
                                <a href="/support">Support</a>
                                <a href="/login">Login</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg header-anim">
                <div class="container">
                    <a class="navbar-brand" href="/"
                        ><img src="{{asset('theme/client/assets/images/logo_purple.svg')}}" alt
                    /></a>
                    <form action="" method="POST" enctype="multipart/form"
                        class="d-flex order-lg-last ms-3 align-items-center"
                    >
                        <a href="#" id="search_home"
                            ><i class="srn-search"></i> </a
                        >
                        <a
                        href="login"
                            class="signup-btn btn btn-outline-primary text-nowrap"
                            data-trigger="#signup"
                            ><span class="d-none d-sm-inline-block"
                                ><span class="outer-wrap"
                                    ><span data-text="Sing In"
                                        >Sing In</span
                                    ></span
                                ></span
                            >
                            <span class="d-block d-sm-none"
                                ><i class="bi bi-door-closed"></i
                            ></span> </a
                        ><button
                            class="navbar-toggler x collapsed"
                            type="button"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#navbarCollapse"
                            aria-controls="navbarCollapse"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </form>
                    <div
                        class="navbar-collapse offcanvas offcanvas-start offcanvas-collapse"
                        id="navbarCollapse"
                    >
                        <div class="offcanvas-header">
                            <a class="navbar-brand" href="index.html"
                                ><img
                                    src="{{asset('theme/client/assets/images/logo_dark.svg')}}"
                                    alt /></a
                            ><button
                                class="navbar-toggler x collapsed"
                                type="button"
                                data-bs-toggle="offcanvas"
                                data-bs-target="#navbarCollapse"
                                aria-controls="navbarCollapse"
                                aria-expanded="false"
                                aria-label="Toggle navigation"
                            >
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="/">Trang chủ</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="/danhmuc">Danh mục</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="/ourteam">Our team</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="home-default-banner">
            <div class="container pos-rel">
                {{-- <div class="banner-abstract-shape"></div>
                <div class="matrix-vertical">
                    <img src="{{asset('theme/client/assets/images/matrix_vertical.svg')}}" alt />
                </div>
                <div class="rectangle-small">
                    <img src="{{asset('theme/client/assets/images/rectangle_small.svg')}}"
                    alt />
                </div> --}}

            @yield('content')
        </main>
    <div class="footer-wrap home-default">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4">
                    <div class="logo-footer">
                        <a href="index.html"
                            ><img src="{{asset('theme/client/assets/images/logo_light.svg')}}" alt
                        /></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="subscribe-form">
                        <div class="head">Subscribe Our Newsletter</div>
                        <div class="input-wrap">
                            <input
                                type="text"
                                name="subscribe"
                                placeholder="Enter your email address"
                                class="form-control bordered bottom-only"
                            />
                            <button type="submit" class="btn btn-primary">
                                <span class="outer-wrap"
                                    ><span data-text="Subscribe"
                                        >Subscribe</span
                                    ></span
                                >
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-widgets">
                <div class="fpoly-container">
                    <div class="row">
                        <div class="column col-md-4 footer">
                            <div class="widgets">
                                <div id="text-6" class="widget widget_text"> <div class="textwidget"><p><img decoding="async" src="//i.imgur.com/5EK1lFm.png"></p>
                                        <div style="clear: both; color: #f7941d; font-size: 20px; text-transform: uppercase; margin-top: 20px; display: block; padding-top: 15px;">THÔNG TIN LIÊN HỆ</div>
                                        <div class="hiden-xs">
                                            <p>Điện thoại: (024) 7300 1955</p>
                                            <p>Email: caodang@fpt.edu.vn</p>
                                        </div>
                                        <style>
                                            @media (max-width: 992px){<br />.footer-xs{<br /> padding-top:20px  !important;<br />margin: 0 !important;<br />}<br />}<br /></style>
                                    </div>
                                </div> </div>
                        </div>
                        @php
                            use App\Models\Layout;
                            $footer1 = Layout::where('col', '1')->get();
                            $footer2 = Layout::where('col', '2')->get();
                        @endphp
                        <div class="column col-md-4 footer-2">
                            <div class="widgets">
                                <div id="text-7" class="widget widget_text"> <div class="textwidget">
                                        <div style="color: #f7941d; margin-bottom: 10px; font-size: 20px;"><strong>HỆ THỐNG VĂN PHÒNG TUYỂN SINH</strong></div>
                                        @foreach($footer1 as $ft1)
                                            <div class="footer-xs" style="text-decoration: underline; padding-top: 10px;">{!! $ft1->name !!}</div>
                                            <p>{!! $ft1->address1 !!}<br>{!! $ft1->address2 !!}<br>{!! $ft1->numberPhone !!}</p>
                                            <br>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column col-md-4 footer-3">
                            <div class="widgets">
                                <div id="text-8" class="widget widget_text"> <div class="textwidget">
                                        @foreach($footer2 as $ft2)
                                            <div class="footer-xs" style="text-decoration: underline; padding-top: 40px;">{!! $ft2->name !!}</div>
                                            <p>T{!! $ft2->address1 !!}<br>
                                                {!! $ft2->address2 !!}<br>
                                                {!! $ft2->numberPhone !!}</p>
                                        @endforeach

                                    </div>
                                </div> </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <a id="back-to-top" href="javascript:" class="back-to-top"
        ><i class="bi bi-chevron-up"></i
    ></a>
    <div class="overlay overlay-hugeinc">
        <form action="{{route('search')}}" method="POST" enctype="multipart/form-data" class="form-inline mt-2 mt-md-0">
            @csrf
            <div class="form-inner">
                <div class="form-inner-div hstack">
                    <i class="srn-search"></i>
                    <div class="w-100">
                        <input
                            class="form-control form-light"
                            type="text"
                            name="search"
                            placeholder="Search"
                            aria-label="Search"
                        />
                    </div>
                    <a href="#" class="overlay-close link-oragne"
                        ><i class="bi bi-x"></i
                    ></a>
                </div>
            </div>
        </form>
    </div>
    {{-- <script data-cfasync="false" src="{{asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script> --}}

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
     integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
            data-cf-beacon='{"rayId":"85c6bfd12b229f68","version":"2024.2.1","r":1,"token":"64224fc8786846928480d180dfc466bd","b":1}'
            crossorigin="anonymous"></script>
            <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
