
<div>
    <div>
        <!DOCTYPE html>

        <html lang="vi">

        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <meta property="og:locale" content="vi_VN" />
            <meta http-equiv="content-language" content="vi" />
            <meta name="csrf-token" content="KQXwuq6RS65vwLtwDJsZ4NwQH4zkjqH4SXsA7zAK">
            <title> {{ $quiz->title }}</title>
            <meta name="robots" content="index, follow" />
            <meta name="description" content="Dịch vụ thi thử online miễn phí số 1 dành cho học sinh THPT, THCS." />
            <meta name="keywords" content="đề thi thử, thư viện đề thi, ngân hàng câu hỏi, bài kiểm tra, thi trắc nghiệm miễn phí, Toán, Lý, Hóa, Sinh, Tiếng Anh, Sử, Địa, GDCD" />
            <link rel="icon" href="https://vietjack.online/images/favicon.ico" />
            <link rel="canonical" href="https://vietjack.online/ket-qua-thi/1807157" reflang="vi-vn" />
            <meta property="og:title" content=" {{ $quiz->title }}" />


            <meta property="og:type" content="article" />
            <meta property="og:url" content="https://vietjack.online/ket-qua-thi/1807157" />
            <meta property="og:image" content="https://vietjack.online/images/banner_default.jpg" />
            <meta property="og:description" content="Dịch vụ thi thử online miễn phí số 1 dành cho học sinh THPT, THCS." />
            <meta property="og:site_name" content="Trang web thi online miễn phí nhiều người truy cập nhất Việt Nam" />
            <meta property="fb:app_id" content="142520407857771" />
            <!-- Styles -->
            <link rel="stylesheet" href="/css/web/main.css?id=014545b0b485faa7481c" type="text/css">
            <link rel="stylesheet" href="https://vietjack.online/libs/select2/dist/css/select2.min.css" />
            <link rel="stylesheet" href="/css/web/exam.css?id=edaca8563aedebc58e19" type="text/css">
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-65991607-4"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());
                gtag('config', 'UA-65991607-4');

                window.fbAsyncInit = function() {
                    FB.init({
                        appId: '142520407857771'
                        , autoLogAppEvents: true
                        , xfbml: true
                        , version: 'v6.0'
                    });
                };

            </script>
            <script async defer src="https://connect.facebook.net/vi_VN/sdk.js"></script>
        </head>

        <body>
            <div id="fb-root"></div>

            <header>
                <!-- Header desktop -->
                <div class="container-menu-desktop">
                    <div class="topbar">
                        <div class="content-topbar container h-100">
                            <div class="left-topbar">
                                <span class="left-topbar-item flex-wr-s-c">
                                    <span class="m-r-8">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span>
                                        {{ now()->translatedFormat('l, d/m/Y') }}
                                    </span>


                                </span>
                            </div>
                            <div class="right-topbar">
                                <div class="dropdown">
                                    <div class="dropdown">
                                        @auth
                                        <button class="dropdown-toggle right-topbar-item pr-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-user pr-1"></i> {{ Auth::user()->name }}
                                        </button>
                                        <div class="dropdown-menu right-topbar__dropdown" aria-labelledby="dropdownMenuButton">

                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="{{ route('logout') }}" class="left-topbar-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                                    <i class="fas fa-sign-out-alt pr-2"></i> Đăng xuất
                                                </a>
                                            </form>
                                        </div>
                                        @else
                                        <a href="{{ route('login') }}" class=" ">Đăng nhập</a>
                                        @endauth
                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Header Mobile -->
                    <div class="wrap-header-mobile">
                        <!-- Logo moblie -->
                        <div class="logo-mobile">
                            <a href="/"><img style="width: 80px;" src="{{asset('images/logo1.png')}}" alt="LOGO"></a>
                        </div>
                        <input id="search-mobile" type="checkbox" class="d-none">
                        <div class="form-search ml-auto form-search-mobile">
                            <form class="form-inline" method="get">
                                <a href="javascript:void(0)" class="btn-search"><i class="fas fa-search"></i></a>
                                <input autocomplete="off" class="form-control mr-sm-2" type="text" placeholder="Bạn muốn tìm gì?" name="keyword" aria-label="Search" value="">
                                <label class="cancel" for="search-mobile"><i class="fas fa-window-close"></i></label>
                            </form>
                        </div>
                        <label class="btn-search-mobile" for="search-mobile">
                            <i class="fas fa-search"></i>
                        </label>
                        <!-- Button show menu -->
                        <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </div>
                    </div>
                    <!-- Menu Mobile -->
                    <div class="menu-mobile">
                        <ul class="topbar-mobile">
                            <li class="left-topbar">
                                <span class="left-topbar-item flex-wr-s-c">
                                    <span class="m-r-8">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span>
                                        {{ now()->format('l, d/m/Y') }}
                                    </span>

                                </span>
                                @auth
    <div class="dropdown-toggle right-topbar-item pr-3" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <a href="#" class="left-topbar-item">
            <i class="fa fa-user"></i> {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu right-topbar__dropdown" aria-labelledby="dropdownMenuButton">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="#" class="left-topbar-item" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="fas fa-sign-out-alt pr-2"></i> Đăng xuất
                </a>
            </form>
        </div>
    </div>
@else
    <a href="{{ route('login') }}" class="">Đăng nhập</a>
@endauth

                            </li>
                           
                        </ul>
                        {{-- <ul class="main-menu-m">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a>Thi Online</a>
                            <ul class="sub-menu-m" id="grade-menu-m">
                                <li><a href="https://vietjack.online/thi-online/trac-nghiem-bang-lai">Trắc nghiệm
                                        bằng lái</a></li>
                                <li><a href="https://vietjack.online/thi-online/danh-gia-nang-luc">Đánh giá năng
                                        lực</a></li>
                                <li><a href="https://vietjack.online/thi-online/luyen-thi-thptqg-2022">Luyện Thi
                                        THPTQG 2022</a></li>
                                <li><a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia">Thi thử THPT
                                        Quốc gia</a></li>
                                <li><a href="https://vietjack.online/thi-online/lop-12">Lớp 12</a></li>
                                <li><a href="https://vietjack.online/thi-online/lop-11">Lớp 11</a></li>
                                <li><a href="https://vietjack.online/thi-online/lop-10">Lớp 10</a></li>
                                <li><a href="https://vietjack.online/thi-online/lop-9">Lớp 9</a></li>
                                <li><a href="https://vietjack.online/thi-online/lop-8">Lớp 8</a></li>
                                <li><a href="https://vietjack.online/thi-online/lop-7">Lớp 7</a></li>
                                <li><a href="https://vietjack.online/thi-online/lop-6">Lớp 6</a></li>
                                <li><a href="https://vietjack.online/thi-online/lop-5">Lớp 5</a></li>
                                <li><a href="https://vietjack.online/thi-online/lop-4">Lớp 4</a></li>
                                <li><a href="https://vietjack.online/thi-online/lop-3">Lớp 3</a></li>
                                <li><a href="https://vietjack.online/thi-online/lop-2">Lớp 2</a></li>
                                <li><a href="https://vietjack.online/thi-online/lop-1">Lớp 1</a></li>
                            </ul>
                            <span class="arrow-main-menu-m">
                                <i class="fas fa-caret-right"></i>
                            </span>
                        </li>
                        <li>
                            <a href="https://vietjack.online/cau-hoi">Thư Viện</a>
                        </li>
                    </ul> --}}
                    </div>
                    <!--  -->
                    <div class="wrap-logo container">
                        <!-- Logo desktop -->
                        <div class="logo">
                            <a href="/"><img style="width: 80px;" src="{{asset('images/logo1.png')}}" alt="LOGO"></a>
                        </div>
                        <div class="form-search ml-auto form-search-desktop">
                            <form class="form-inline" wire:submit.prevent="search">
                                <!-- Sử dụng hàm search() -->
                                <a href="javascript:void(0)" class="btn-search"><span class="fas fa-search"></span></a>
                                <input autocomplete="off" class="form-control mr-sm-2" type="text" placeholder="Bạn muốn tìm gì?" name="keyword" aria-label="Search" wire:model="searchTerm"> <!-- Liên kết với biến $searchTerm -->
                                <span class="cancel"><i class="fas fa-window-close"></i></span>
                            </form>
                        </div>
                    </div>
                    <!--  -->
                    <div class="wrap-main-nav">
                        <div class="main-nav">
                            <!-- Menu desktop -->
                            <nav class="menu-desktop">
                                <a class="logo-stick" href="/">
                                 </a>
                                <ul class="main-menu">
                                    <li>
                                        <a href="/"><i class="fas fa-home"></i></a>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="/">Thi Online</a>
                                        {{-- <div class="sub-mega-menu">
                                        <div class="nav flex-column nav-pills" role="tablist">
                                            <a class="nav-link active" data-toggle="pill" href="#grade-21"
                                                role="tab">Trắc nghiệm bằng lái</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-20"
                                                role="tab">Đánh giá năng lực</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-19"
                                                role="tab">Luyện Thi THPTQG 2022</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-13"
                                                role="tab">Thi thử THPT Quốc gia</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-12"
                                                role="tab">Lớp 12</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-11"
                                                role="tab">Lớp 11</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-10"
                                                role="tab">Lớp 10</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-9"
                                                role="tab">Lớp 9</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-8"
                                                role="tab">Lớp 8</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-7"
                                                role="tab">Lớp 7</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-6"
                                                role="tab">Lớp 6</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-5"
                                                role="tab">Lớp 5</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-4"
                                                role="tab">Lớp 4</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-3"
                                                role="tab">Lớp 3</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-2"
                                                role="tab">Lớp 2</a>
                                            <a class="nav-link " data-toggle="pill" href="#grade-1"
                                                role="tab">Lớp 1</a>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="grade-21" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/trac-nghiem-bang-lai/bang-lai-xe-a2"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-newspaper fs-13 m-r-5"></i>
                                                                    Bằng lái xe A2
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    20 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/trac-nghiem-bang-lai/bang-lai-xe-b2"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Bằng lái xe B2
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    18 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/trac-nghiem-bang-lai/bang-lai-xe-a1"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Bằng lái xe A1
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    10 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/trac-nghiem-bang-lai/bang-lai-xe"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i
                                                                        class="fas fa-balance-scale fs-13 m-r-5"></i>
                                                                    Bằng lái xe
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    48 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/trac-nghiem-bang-lai/english-test"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    English Test
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    294 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/trac-nghiem-bang-lai/it-test"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    IT Test
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    318 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/trac-nghiem-bang-lai/dai-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-flask fs-13 m-r-5"></i>
                                                                    Đại học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1243 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-20" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/danh-gia-nang-luc/on-thi-danh-gia-nang-luc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Ôn thi Đánh giá năng lực
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    2 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/danh-gia-nang-luc/dhqg-ho-chi-minh"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-newspaper fs-13 m-r-5"></i>
                                                                    ĐHQG Hồ Chí Minh
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    526 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/danh-gia-nang-luc/dh-bach-khoa"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-flask fs-13 m-r-5"></i>
                                                                    ĐH Bách Khoa
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    686 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/danh-gia-nang-luc/de-thi-dgnl"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Đề thi ĐGNL
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/danh-gia-nang-luc/dhqg-ha-noi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    ĐHQG Hà Nội
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    663 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/danh-gia-nang-luc/bo-cong-an"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i
                                                                        class="fas fa-balance-scale fs-13 m-r-5"></i>
                                                                    Bộ Công an
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    6 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-19" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/luyen-thi-thptqg-2022/dhqg-ho-chi-minh"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-newspaper fs-13 m-r-5"></i>
                                                                    ĐHQG Hồ Chí Minh
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    2 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-13" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/toan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Toán
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1289 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/van"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Văn
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    706 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/vat-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i
                                                                        class="fas fa-balance-scale fs-13 m-r-5"></i>
                                                                    Vật lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1596 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/hoa-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-flask fs-13 m-r-5"></i>
                                                                    Hóa học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    2161 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/tieng-anh-moi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Tiếng Anh (mới)
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1016 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/lich-su"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-history fs-13 m-r-5"></i>
                                                                    Lịch sử
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1016 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/dia-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-globe-asia fs-13 m-r-5"></i>
                                                                    Địa lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    924 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/sinh-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fab fa-pagelines fs-13 m-r-5"></i>
                                                                    Sinh học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1470 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/giao-duc-cong-dan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-users fs-13 m-r-5"></i>
                                                                    Giáo dục công dân
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    455 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/on-thi-khoa-hoc-xa-hoi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-book-open fs-13 m-r-5"></i>
                                                                    Ôn thi khoa học xã hội
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    94 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/on-thi-khoa-hoc-tu-nhien"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-atom fs-13 m-r-5"></i>
                                                                    Ôn thi Khoa học tự nhiên
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    16 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/tu-nhien-xa-hoi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Tự nhiên &amp; Xã hội
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    31 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/khoa-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-bong fs-13 m-r-5"></i>
                                                                    Khoa học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    4 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/lich-su-dia-li"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Lịch Sử &amp; Địa Lí
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    13 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/tieng-anh"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Tiếng Anh
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    858 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/thi-thu-thpt-quoc-gia/lich-su-dia-li-64953cba3c213"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Lịch sử &amp; Địa lí
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    4 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-12" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/toan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Toán
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1672 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/van"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Văn
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    262 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/vat-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i
                                                                        class="fas fa-balance-scale fs-13 m-r-5"></i>
                                                                    Vật lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1441 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/hoa-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-flask fs-13 m-r-5"></i>
                                                                    Hóa học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    2175 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/tieng-anh-moi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Tiếng Anh (mới)
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    266 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/lich-su"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-history fs-13 m-r-5"></i>
                                                                    Lịch sử
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    690 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/dia-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-globe-asia fs-13 m-r-5"></i>
                                                                    Địa lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    924 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/sinh-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fab fa-pagelines fs-13 m-r-5"></i>
                                                                    Sinh học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    941 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/cong-nghe"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-swatchbook fs-13 m-r-5"></i>
                                                                    Công nghệ
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    175 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/giao-duc-cong-dan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-users fs-13 m-r-5"></i>
                                                                    Giáo dục công dân
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    185 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/on-thi-khoa-hoc-xa-hoi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-book-open fs-13 m-r-5"></i>
                                                                    Ôn thi khoa học xã hội
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    293 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/tin-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Tin học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    297 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/tieng-anh"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Tiếng Anh
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1221 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/giao-duc-quoc-phong"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Giáo dục Quốc Phòng
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    19 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-12/giao-duc-kinh-te-va-phap-luat"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i
                                                                        class="fas fa-balance-scale fs-13 m-r-5"></i>
                                                                    Giáo dục Kinh tế và Pháp luật
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    178 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-11" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/toan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Toán
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1182 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/van"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Văn
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    351 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/vat-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i
                                                                        class="fas fa-balance-scale fs-13 m-r-5"></i>
                                                                    Vật lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1194 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/hoa-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-flask fs-13 m-r-5"></i>
                                                                    Hóa học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1590 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/tieng-anh-moi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Tiếng Anh (mới)
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    212 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/lich-su"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-history fs-13 m-r-5"></i>
                                                                    Lịch sử
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    391 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/dia-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-globe-asia fs-13 m-r-5"></i>
                                                                    Địa lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    586 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/sinh-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fab fa-pagelines fs-13 m-r-5"></i>
                                                                    Sinh học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    474 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/cong-nghe"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-swatchbook fs-13 m-r-5"></i>
                                                                    Công nghệ
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    156 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/giao-duc-cong-dan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-users fs-13 m-r-5"></i>
                                                                    Giáo dục công dân
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    187 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/tin-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Tin học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    154 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/tieng-anh"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Tiếng Anh
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    218 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/giao-duc-quoc-phong"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Giáo dục Quốc Phòng
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    69 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/khoa-hoc-tu-nhien"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-bong fs-13 m-r-5"></i>
                                                                    Khoa học tự nhiên
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    14 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-11/giao-duc-kinh-te-va-phap-luat"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i
                                                                        class="fas fa-balance-scale fs-13 m-r-5"></i>
                                                                    Giáo dục Kinh tế và Pháp luật
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    132 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-10" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/toan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Toán
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1427 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/van"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Văn
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    493 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/vat-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i
                                                                        class="fas fa-balance-scale fs-13 m-r-5"></i>
                                                                    Vật lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1095 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/hoa-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-flask fs-13 m-r-5"></i>
                                                                    Hóa học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    640 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/tieng-anh-moi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Tiếng Anh (mới)
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    184 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/lich-su"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-history fs-13 m-r-5"></i>
                                                                    Lịch sử
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    382 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/dia-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-globe-asia fs-13 m-r-5"></i>
                                                                    Địa lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    558 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/sinh-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fab fa-pagelines fs-13 m-r-5"></i>
                                                                    Sinh học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    290 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/cong-nghe"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-swatchbook fs-13 m-r-5"></i>
                                                                    Công nghệ
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    350 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/giao-duc-cong-dan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-users fs-13 m-r-5"></i>
                                                                    Giáo dục công dân
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    90 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/tin-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Tin học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    257 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/tieng-anh"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Tiếng Anh
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    405 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/giao-duc-quoc-phong"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Giáo dục Quốc Phòng
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    75 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/giao-duc-the-chat"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Giáo dục thể chất
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    196 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-10/giao-duc-kinh-te-va-phap-luat"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i
                                                                        class="fas fa-balance-scale fs-13 m-r-5"></i>
                                                                    Giáo dục Kinh tế và Pháp luật
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    186 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-9" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-9/toan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Toán
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1272 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-9/van"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Văn
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    724 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-9/vat-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i
                                                                        class="fas fa-balance-scale fs-13 m-r-5"></i>
                                                                    Vật lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    614 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-9/hoa-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-flask fs-13 m-r-5"></i>
                                                                    Hóa học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    664 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-9/tieng-anh-moi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Tiếng Anh (mới)
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    326 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-9/lich-su"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-history fs-13 m-r-5"></i>
                                                                    Lịch sử
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    226 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-9/dia-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-globe-asia fs-13 m-r-5"></i>
                                                                    Địa lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    246 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-9/sinh-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fab fa-pagelines fs-13 m-r-5"></i>
                                                                    Sinh học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    175 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-9/cong-nghe"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-swatchbook fs-13 m-r-5"></i>
                                                                    Công nghệ
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    151 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-9/giao-duc-cong-dan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-users fs-13 m-r-5"></i>
                                                                    Giáo dục công dân
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    86 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-9/tin-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Tin học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    106 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-9/tieng-anh"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Tiếng Anh
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    827 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-8" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-8/toan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Toán
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1653 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-8/van"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Văn
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    720 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-8/vat-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i
                                                                        class="fas fa-balance-scale fs-13 m-r-5"></i>
                                                                    Vật lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    457 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-8/hoa-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-flask fs-13 m-r-5"></i>
                                                                    Hóa học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    270 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-8/tieng-anh-moi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Tiếng Anh (mới)
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    196 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-8/lich-su"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-history fs-13 m-r-5"></i>
                                                                    Lịch sử
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    350 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-8/dia-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-globe-asia fs-13 m-r-5"></i>
                                                                    Địa lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    254 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-8/sinh-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fab fa-pagelines fs-13 m-r-5"></i>
                                                                    Sinh học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    304 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-8/cong-nghe"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-swatchbook fs-13 m-r-5"></i>
                                                                    Công nghệ
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    107 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-8/giao-duc-cong-dan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-users fs-13 m-r-5"></i>
                                                                    Giáo dục công dân
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    152 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-8/tin-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Tin học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    124 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-8/tieng-anh"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Tiếng Anh
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    251 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-8/khoa-hoc-tu-nhien"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-bong fs-13 m-r-5"></i>
                                                                    Khoa học tự nhiên
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    60 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-8/lich-su-dia-li-64953cba3c213"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Lịch sử &amp; Địa lí
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    6 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-7" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-7/toan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Toán
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1708 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-7/van"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Văn
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    656 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-7/vat-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i
                                                                        class="fas fa-balance-scale fs-13 m-r-5"></i>
                                                                    Vật lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    445 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-7/tieng-anh-moi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Tiếng Anh (mới)
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    218 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-7/lich-su"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-history fs-13 m-r-5"></i>
                                                                    Lịch sử
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    317 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-7/dia-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-globe-asia fs-13 m-r-5"></i>
                                                                    Địa lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    425 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-7/sinh-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fab fa-pagelines fs-13 m-r-5"></i>
                                                                    Sinh học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    245 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-7/cong-nghe"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-swatchbook fs-13 m-r-5"></i>
                                                                    Công nghệ
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    352 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-7/giao-duc-cong-dan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-users fs-13 m-r-5"></i>
                                                                    Giáo dục công dân
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    287 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-7/tin-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Tin học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    299 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-7/tieng-anh"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Tiếng Anh
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    410 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-7/khoa-hoc-tu-nhien"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-bong fs-13 m-r-5"></i>
                                                                    Khoa học tự nhiên
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    304 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-7/giao-duc-the-chat"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Giáo dục thể chất
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    138 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-6" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/toan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Toán
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1420 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/van"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Văn
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    882 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/vat-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i
                                                                        class="fas fa-balance-scale fs-13 m-r-5"></i>
                                                                    Vật lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    157 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/tieng-anh-moi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Tiếng Anh (mới)
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    261 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/lich-su"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-history fs-13 m-r-5"></i>
                                                                    Lịch sử
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    141 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/dia-ly"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-globe-asia fs-13 m-r-5"></i>
                                                                    Địa lý
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    407 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/sinh-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fab fa-pagelines fs-13 m-r-5"></i>
                                                                    Sinh học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    270 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/cong-nghe"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-swatchbook fs-13 m-r-5"></i>
                                                                    Công nghệ
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    219 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/giao-duc-cong-dan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-users fs-13 m-r-5"></i>
                                                                    Giáo dục công dân
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    181 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/tin-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Tin học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    178 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/khoa-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-bong fs-13 m-r-5"></i>
                                                                    Khoa học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    201 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/lich-su-dia-li"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Lịch Sử &amp; Địa Lí
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    283 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/tieng-anh"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Tiếng Anh
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    744 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/khoa-hoc-tu-nhien"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-bong fs-13 m-r-5"></i>
                                                                    Khoa học tự nhiên
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    609 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/tieng-anh-right-on"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Tiếng anh Right On
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    182 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/tieng-anh-english-discovery"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Tiếng anh English Discovery
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    173 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-6/tieng-anh-learn-smart-world"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pencil-alt fs-13 m-r-5"></i>
                                                                    Tiếng anh Learn Smart World
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    144 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-5" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-5/toan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Toán
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1383 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-5/tieng-anh-moi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Tiếng Anh (mới)
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    66 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-5/tieng-viet"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pen-nib fs-13 m-r-5"></i>
                                                                    Tiếng Việt
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    178 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-5/tin-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Tin học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    50 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-5/dao-duc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Đạo Đức
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    22 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-5/lich-su-dia-li"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Lịch Sử &amp; Địa Lí
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    22 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-4" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-4/toan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Toán
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    1345 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-4/tieng-anh-moi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Tiếng Anh (mới)
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    66 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-4/tieng-viet"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pen-nib fs-13 m-r-5"></i>
                                                                    Tiếng Việt
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    203 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-4/dao-duc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Đạo Đức
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    26 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-4/lich-su-dia-li"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Lịch Sử &amp; Địa Lí
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    22 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-4/dhqg-ho-chi-minh"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-newspaper fs-13 m-r-5"></i>
                                                                    ĐHQG Hồ Chí Minh
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    2 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-3" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-3/toan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Toán
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    2036 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-3/tieng-anh-moi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Tiếng Anh (mới)
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    24 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-3/tieng-viet"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pen-nib fs-13 m-r-5"></i>
                                                                    Tiếng Việt
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    409 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-3/tin-hoc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Tin học
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    201 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-3/dao-duc"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Đạo Đức
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    24 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-3/tieng-anh"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-map-marked fs-13 m-r-5"></i>
                                                                    Tiếng Anh
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    15 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-2/toan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Toán
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    454 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-2/tieng-viet"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pen-nib fs-13 m-r-5"></i>
                                                                    Tiếng Việt
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    324 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane show " id="grade-1" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-1/toan"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-calculator fs-13 m-r-5"></i>
                                                                    Toán
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    72 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-1/tieng-anh-moi"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-language fs-13 m-r-5"></i>
                                                                    Tiếng Anh (mới)
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    2 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-1/cong-nghe"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-swatchbook fs-13 m-r-5"></i>
                                                                    Công nghệ
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    2 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="https://vietjack.online/thi-online/lop-1/tieng-viet"
                                                                    class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <i class="fas fa-pen-nib fs-13 m-r-5"></i>
                                                                    Tiếng Việt
                                                                </a>
                                                            </h5>
                                                            <span class="cl8">
                                                                <a href="#"
                                                                    class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    2 đề
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Modal Comment -->
            <div class="modal fade modal-book-picker" id="modal-book-picker">
                <div class="modal-dialog" style="position: relative; top: 20%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                            <h4 class="modal-title">CHỌN BỘ SÁCH BẠN MUỐN XEM</h4>
                        </div>
                        <div class="modal-body">
                            <div class="js-loading text-center">
                                <i class="fa fa-spinner fa-spin"></i>
                            </div>
                            <div class="list-group books js-books"></div>
                        </div>
                        <div class="modal-footer-book">
                            <p class="text-center">
                                <i class="fa fa-angellist"></i> Hãy chọn chính xác nhé!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <main id="app">
                <div class="box-wrapper">
                    <div class="container">
                        <div class="headline bg0 flex-wr-sb-c m-tb-10">
                            <div class="f2-s-1 p-r-30 m-tb-6">
                                <a href="/" class="breadcrumb-item f1-s-3 cl-900">
                                    Trang chủ
                                </a>



                                <a href="#" class="breadcrumb-item f1-s-3 active">
                                    {{ $quiz->title }}
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="test-result">
                                    <div class="row">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="jumbotron text-center">
                                                    <h3 class="cl0 p-b-12 text-uppercase">
                                                        Điểm số của bạn
                                                    </h3>
                                                    <!-- Hiển thị điểm số -->
                                                    <p style="height: 70px; font-size: 70px;">
                                                        {{ $result["total_score"] }}/{{ $quiz->questions->count() }}
                                                        {{-- /{{ $quizAttempt->quiz->total_questions }} --}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div>
                                                    <!-- Hiển thị tiêu đề bài thi -->
                                                    <h2 class="name-exam f1-l-3 cl2 p-tb-10 respon2">
                                                        {{ $quiz->title }}
                                                    </h2>

                                                    <ul class="exam-infor">
                                                        <!-- Hiển thị số lượt thi (có thể cập nhật thành dynamic nếu có dữ liệu) -->
                                                        {{-- <li>
                                                            <p><i class="far fa-calendar-check"></i> {{ $quiz }} lượt thi</p>
                                                        </li> --}}
                                                        <!-- Hiển thị số câu hỏi -->
                                                        <li>
                                                            <p><i class="far fa-question-circle"></i> {{ $quiz->total_questions }} câu hỏi</p>
                                                        </li>
                                                        <!-- Hiển thị thời gian làm bài -->
                                                        <li>
                                                            <p><i class="far fa-clock"></i> {{ $quiz->duration }} phút</p>
                                                        </li>
                                                    </ul>

                                                    <a href="#" class="size-h-2 f1-m-1 cl8 hov-btn2 trans-03">
                                                        ({{ $quiz->title }})
                                                    </a>

                                                    <div class="row m-t-10">
                                                        <div class="col-md-6">
                                                            <!-- Nút "Thi lại" có thể cập nhật URL nếu cần -->
                                                            <a href="{{ route('quiz.take', $quiz->id) }}" class="btn-action">
                                                                Thi lại <i class="fas fa-undo-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 m-t-20">
                                            <hr>
                                            <div class="test-result-detail">

                                                <div class="test-result-detail">
                                                    @foreach($quiz->questions as $index => $question)
                                                    <div class="quiz-answer-item" id="question_{{ $question['id'] }}">
                                                        <div class="question-header">
                                                            <p class="number-question">Câu {{ $index + 1 }}:</p>
                                                        </div>
                                                        <div class="question-name">
                                                            <p>{!! $question['question_text'] !!}</p>
                                                        </div>
                                                        <div class="question-answer-list row">
                                                            @if($question['type'] === 'value')
                                                                {{-- Nếu type là value thì chỉ hiện đáp án đúng --}}
                                                                <div class="answer-item col-12 d-flex">
                                                                    <p>
                                                                        <strong>Đáp án đúng:</strong> {{ $question->correctOption->option_text }}
                                                                    </p>
                                                                </div>
                                                            @else
                                                                {{-- Nếu type không phải value thì hiện các đáp án A, B, C,... --}}
                                                                @foreach($question['options'] as $optionIndex => $option)
                                                                    <div class="answer-item col-12 d-flex {{ $option['is_correct'] ? 'correct' : '' }} {{ $option['text'] == $question['selected_option'] ? 'selected' : '' }}">
                                                                        <p>
                                                                            <strong>{{ chr(65 + $optionIndex) }}.</strong> {{ $option['option_text'] }}
                                                                        </p>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="f1-m-1 cl3 p-b-12 text-uppercase">
                                    Lịch sử làm bài
                                </h3>
                                <div class="number-container">
                                    @foreach ($quiz->questions as $index => $question)
                                    <div class="number-item  " data-toggle="scroll" data-target="#question_{{ $question["id"] }}">
                                        <span>{{ $index + 1 }}</span>
                                    </div>
                                    @endforeach
                                </div>
                                <h3 class="f1-m-1 cl3 p-b-12 text-uppercase mt-5">
                                    Top 10 Học Sinh Có Điểm Cao Nhất
                                </h3>


                                        <div class="card">
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    @foreach ($roomParticipantsResults as $index => $participantResult)
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            <!-- Phần nội dung -->
                                                            <div class="student-info d-flex align-items-center">
                                                                <img src="{{ $participantResult->roomParticipant->user->avatar ?? "https://w7.pngwing.com/pngs/205/731/png-transparent-default-avatar-thumbnail.png"}}" alt="Avatar" class="student-avatar">
                                                                <div class="ml-2">
                                                                    <span class="student-name">{{ $participantResult->roomParticipant->user->name }}</span> <!-- Tên học sinh -->
                                                                    <div class="score-info">
                                                                        <span class="badge badge-success badge-pill">{{ $participantResult->total_score }}</span> <!-- Điểm số -->
                                                                        <span class="total-questions">/ {{ $quiz->questions->count() }} câu</span> <!-- Tổng câu hỏi -->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Phần cúp -->
                                                            <div class="trophy">
                                                                @if ($index == 0) <!-- Cúp vàng cho học sinh đầu tiên -->
                                                                    <img src="{{asset('images/top1.png')}}" alt="Cúp vàng" class="trophy-icon">
                                                                @elseif ($index == 1) <!-- Cúp bạc cho học sinh thứ hai -->
                                                                    <img src="{{asset('images/top2.png')}}" alt="Cúp bạc" class="trophy-icon">
                                                                @elseif ($index == 2) <!-- Cúp đồng cho học sinh thứ ba -->
                                                                    <img src="{{asset('images/top3.png')}}" alt="Cúp đồng" class="trophy-icon">
                                                                @else <!-- Cúp gỗ cho các học sinh còn lại -->
                                                                    <img src="{{asset('images/other.png')}}" alt="Cúp gỗ" class="trophy-icon">
                                                                @endif
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <style>
                                        .list-group-item {
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Thêm hiệu ứng chuyển động mượt mà */
    cursor: pointer; /* Thay đổi con trỏ khi di chuột */
    border-radius: 5px; /* Thêm bo góc cho phần tử */
}

.list-group-item:hover {
    transform: scale(1.05); /* Tăng kích thước phần tử khi hover */
    background-color: #f8f9fa; /* Thay đổi màu nền khi hover */
}

                                        .card {
                                            border-radius: 10px;
                                            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                                            margin-top: 20px;
                                        }

                                        .list-group-flush {
                                            gap: .4rem;
                                        }
                                        .list-group-item {
                                            border: none;
                                            padding: 15px 20px;
                                            transition: background-color 0.3s;
                                        }

                                        .list-group-item:hover {
                                            background-color: #f8f9fa;
                                            cursor: pointer;
                                        }

                                        .student-info {
                                            flex: 1;
                                            display: flex;
                                            align-items: center;
                                        }

                                        .student-avatar {
                                            width: 40px; /* Kích thước hình đại diện */
                                            height: 40px; /* Kích thước hình đại diện */
                                            border-radius: 50%; /* Để hình tròn */
                                            margin-right: 10px; /* Khoảng cách giữa avatar và tên */
    max-width: 100%;
    border-radius: 50%;
    box-shadow: 0 0 0 5px #ebeef3, 0 0 0 11px #f3f4f6;
                                        }

                                        .student-name {
                                            font-weight: 500;
                                            font-size: 1.1rem;
                                        }

                                        .score-info {
                                            margin-top: 5px;
                                            font-size: 0.9rem; /* Kích thước nhỏ hơn cho thông tin điểm */
                                        }

                                        .badge {
                                            font-size: 1.1rem;
                                            padding: 5px 10px;
                                        }

                                        .trophy {
                                            display: flex;
                                            align-items: center;
                                        }

                                        .trophy-icon {
                                            width: 50px;
                                            object-fit: contain;
                                            height: 50px;
                                            margin-left: 10px; /* Khoảng cách giữa các cúp */
                                        }
                                    </style>


                            </div>
                        </div>

                    </div>
                </div>
            </main>

            <!-- Back to top -->
            <div class="btn-back-to-top" id="myBtn">
                <span class="symbol-btn-back-to-top">
                    <span class="fas fa-angle-up"></span>
                </span>
            </div>






            <script src="/js/web/main.js?id=a06dc5efa42755d0b912" type="text/javascript"></script>
            <script src="https://vietjack.online/libs/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
            <script src="/js/web/exam.js?id=c6a68b18c5acf2888818" type="text/javascript"></script>
            <script type="text/x-mathjax-config">
                MathJax.Hub.Config({
                showProcessingMessages: true,
                messageStyle: "none",
                showMathMenu: false,
                tex2jax: {
                  inlineMath: [ ['$','$'], ["\\(","\\)"], ["\\[","\\]"] ],
                  displayMath: [ ['$$','$$'] ],
                  processEscapes: true
                },
                "HTML-CSS": {
                    scale: 350
                }
            });
        </script>
            <script async src="https://vietjack.online/libs/MathJax-2.7.5/MathJax.js?config=TeX-MML-AM_CHTML"></script>
            <script>
            </script>

        </body>

        </html>

    </div>
</div>
