<div>
    <div>


        <html lang="vi">

        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <meta property="og:locale" content="vi_VN" />
            <meta http-equiv="content-language" content="vi" />
            <meta name="csrf-token" content="KQXwuq6RS65vwLtwDJsZ4NwQH4zkjqH4SXsA7zAK">
            <title>Trang web thi online miễn phí nhiều người truy cập nhất Việt Nam</title>
            <meta name="robots" content="index, follow" />
            <meta name="description"
                content="Hệ thống bài kiểm tra, đề thi trắc nghiệm được thiết kế bám theo cấu trúc chương trình trong sách giáo khoa hiện hành giúp học sinh rèn luyện, kiểm tra kiến thức của mình theo mỗi bài, chương, .." />
            <meta name="keywords"
                content="đề thi thử, thư viện đề thi, ngân hàng câu hỏi, bài kiểm tra, thi trắc nghiệm miễn phí, Toán, Lý, Hóa, Sinh, Tiếng Anh, Sử, Địa, GDCD" />
            <link rel="icon" href="https://vietjack.online/images/favicon.ico" />
            <link rel="canonical" href="/" reflang="vi-vn" />
            <meta property="og:title" content="" />
            <meta property="og:type" content="website" />
            <meta property="og:url" content="/" />
            <meta property="og:image" content="https://vietjack.online/images/banner_default.jpg" />
            <meta property="og:description" content="" />
            <meta property="og:site_name" content="Trang web thi online miễn phí nhiều người truy cập nhất Việt Nam" />
            <meta property="fb:app_id" content="142520407857771" />
            <!-- Styles -->
            <link rel="stylesheet" href="./css/web/main.css?id=014545b0b485faa7481c" type="text/css">
            <link rel="stylesheet" href="https://vietjack.online/libs/select2/dist/css/select2.min.css" />
            <link rel="stylesheet" href="./css/web/exam.css?id=edaca8563aedebc58e19" type="text/css">
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
                        appId: '142520407857771',
                        autoLogAppEvents: true,
                        xfbml: true,
                        version: 'v6.0'
                    });
                };
            </script>
            <script async defer src="https://connect.facebook.net/vi_VN/sdk.js"></script>
        </head>

        <body>
            <div id="fb-root"></div>
            <div>





                <script>



                    window.addEventListener('swal:modal', event => {

                        new  Swal({

                          title: event.detail.message,

                          text: event.detail.text,

                          icon: event.detail.type,

                        });

                    });



                    window.addEventListener('swal:confirm', event => {

                      new  Swal({

                          title: event.detail.message,

                          text: event.detail.text,

                          icon: event.detail.type,

                          buttons: true,

                          dangerMode: true,

                        })

                        .then((willDelete) => {

                          if (willDelete) {

                            window.livewire.emit('remove');

                          }

                        });

                    });

                     </script>






            </div>

            @push('scripts')
            <script type="text/javascript">
                document.addEventListener('DOMContentLoaded', function () {
                    @this.on('triggerDelete', contactId => {
                        Swal.fire({
                            title: 'Are you sure?',
                            text: 'This record will be deleted!',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#aaa',
                            confirmButtonText: 'Delete!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                @this.call('destroy', contactId);

                                Swal.fire({
                                    title: 'Deleted!',
                                    text: 'The record has been deleted.',
                                    icon: 'success'
                                });
                            } else {
                                Swal.fire({
                                    title: 'Cancelled',
                                    text: 'Your data is safe.',
                                    icon: 'error'
                                });
                            }
                        });
                    });
                })
            </script>
            @endpush
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
                                            <button class="dropdown-toggle right-topbar-item pr-3" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                <i class="fa fa-user pr-1"></i> {{ Auth::user()->name }}
                                            </button>
                                            <div class="dropdown-menu right-topbar__dropdown" aria-labelledby="dropdownMenuButton">

                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a href="{{ route('logout') }}" class="left-topbar-item"
                                                       onclick="event.preventDefault(); this.closest('form').submit();">
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
                            <a href="/"><img style="width: 80px;" src="{{asset('images/logo1.png')}}"
                                alt="LOGO"></a>
                        </div>
                        <input id="search-mobile" type="checkbox" class="d-none">
                        <div class="form-search ml-auto form-search-mobile">
                            <form class="form-inline" wire:submit.prevent>
                                <a href="javascript:void(0)" class="btn-search"><i class="fas fa-search"></i></a>
                                <input autocomplete="off" class="form-control mr-sm-2" type="text"
                                       placeholder="Bạn muốn tìm gì?" name="keyword" aria-label="Search"
                                       wire:model.live="searchTerm"> <!-- Liên kết đến biến searchTerm -->
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
                            <a href="/"><img style="width: 80px;" src="{{asset('images/logo1.png')}}"
                                alt="LOGO"></a>
                        </div>
                        <div class="form-search ml-auto form-search-desktop">
                            <form class="form-inline" wire:submit.prevent>
                                <a href="javascript:void(0)" class="btn-search"><i class="fas fa-search"></i></a>
                                <input autocomplete="off" class="form-control mr-sm-2" type="text"
                                       placeholder="Bạn muốn tìm gì?" name="keyword" aria-label="Search"
                                       wire:model.live="searchTerm"> <!-- Liên kết đến biến searchTerm -->
                                <label class="cancel" for="search-mobile"><i class="fas fa-window-close"></i></label>
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
                <div class="main-page">
                    <div class="container">
                        <div class="flex-wr-sb-c p-rl-20 p-t-20 f2-s-1">
                            <span class="text-uppercase cl2 p-r-8">
                                Bài thi Hot:
                            </span>
                            <marquee id="exam-trending" class="trending" width="80%" direction="left"
                                onmouseover="this.stop();" onmouseout="this.start();">
                                <span class="trending-item">
                                    <span class="dis-inline-block">
                                        <a href="#"
                                            class="f1-s-2 cl3 hov-cl10 trans-03">
                                            <i class="far fa-newspaper"></i>&nbsp;&nbsp;
                                            <span class="exam-title">
                                                30 đề thi thử đề thi thử THPTQG môn Tiếng Anh có lời giải chi tiết (Đề
                                                số 1)
                                                - Môn Tiếng Anh (mới)
                                                - Thi thử THPT Quốc gia
                                            </span>
                                            <span class="d-none exam-view">127201</span>
                                        </a>
                                    </span>
                                    <span class="cl9">&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</span>
                                </span>
                                <span class="trending-item">
                                    <span class="dis-inline-block">
                                        <a href="https://vietjack.online/kiem-tra-thi-thu/30-de-thi-thu-de-thi-thu-thptqg-mon-tieng-anh-co-loi-giai-chi-tiet-de-so-2/17440"
                                            class="f1-s-2 cl3 hov-cl10 trans-03">
                                            <i class="far fa-newspaper"></i>&nbsp;&nbsp;
                                            <span class="exam-title">
                                                30 đề thi thử đề thi thử THPTQG môn Tiếng Anh có lời giải chi tiết (Đề
                                                số 2)
                                                - Môn Tiếng Anh (mới)
                                                - Thi thử THPT Quốc gia
                                            </span>
                                            <span class="d-none exam-view">118703</span>
                                        </a>
                                    </span>
                                    <span class="cl9">&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</span>
                                </span>
                                <span class="trending-item">
                                    <span class="dis-inline-block">
                                        <a href="https://vietjack.online/kiem-tra-thi-thu/30-de-thi-thu-de-thi-thu-thptqg-mon-tieng-anh-co-loi-giai-chi-tiet-de-so-12/18928"
                                            class="f1-s-2 cl3 hov-cl10 trans-03">
                                            <i class="far fa-newspaper"></i>&nbsp;&nbsp;
                                            <span class="exam-title">
                                                30 đề thi thử đề thi thử THPTQG môn Tiếng Anh có lời giải chi tiết (Đề
                                                số 12)
                                                - Môn Tiếng Anh (mới)
                                                - Thi thử THPT Quốc gia
                                            </span>
                                            <span class="d-none exam-view">118047</span>
                                        </a>
                                    </span>
                                    <span class="cl9">&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</span>
                                </span>
                                <span class="trending-item">
                                    <span class="dis-inline-block">
                                        <a href="https://vietjack.online/kiem-tra-thi-thu/30-de-thi-thu-de-thi-thu-thptqg-mon-tieng-anh-co-loi-giai-chi-tiet-de-so-15/19971"
                                            class="f1-s-2 cl3 hov-cl10 trans-03">
                                            <i class="far fa-newspaper"></i>&nbsp;&nbsp;
                                            <span class="exam-title">
                                                30 đề thi thử đề thi thử THPTQG môn Tiếng Anh có lời giải chi tiết (Đề
                                                số 15)
                                                - Môn Tiếng Anh (mới)
                                                - Thi thử THPT Quốc gia
                                            </span>
                                            <span class="d-none exam-view">117961</span>
                                        </a>
                                    </span>
                                    <span class="cl9">&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</span>
                                </span>
                                <span class="trending-item">
                                    <span class="dis-inline-block">
                                        <a href="https://vietjack.online/kiem-tra-thi-thu/30-de-thi-thu-de-thi-thu-thptqg-mon-tieng-anh-co-loi-giai-chi-tiet-de-so-4/17668"
                                            class="f1-s-2 cl3 hov-cl10 trans-03">
                                            <i class="far fa-newspaper"></i>&nbsp;&nbsp;
                                            <span class="exam-title">
                                                30 đề thi thử đề thi thử THPTQG môn Tiếng Anh có lời giải chi tiết (Đề
                                                số 4)
                                                - Môn Tiếng Anh (mới)
                                                - Thi thử THPT Quốc gia
                                            </span>
                                            <span class="d-none exam-view">117925</span>
                                        </a>
                                    </span>
                                    <span class="cl9">&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</span>
                                </span>
                                <span class="trending-item">
                                    <span class="dis-inline-block">
                                        <a href="https://vietjack.online/kiem-tra-thi-thu/30-de-thi-thu-de-thi-thu-thptqg-mon-tieng-anh-co-loi-giai-chi-tiet-de-so-9/18285"
                                            class="f1-s-2 cl3 hov-cl10 trans-03">
                                            <i class="far fa-newspaper"></i>&nbsp;&nbsp;
                                            <span class="exam-title">
                                                30 đề thi thử đề thi thử THPTQG môn Tiếng Anh có lời giải chi tiết (Đề
                                                số 9)
                                                - Môn Tiếng Anh (mới)
                                                - Thi thử THPT Quốc gia
                                            </span>
                                            <span class="d-none exam-view">117832</span>
                                        </a>
                                    </span>
                                    <span class="cl9">&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</span>
                                </span>
                                <span class="trending-item">
                                    <span class="dis-inline-block">
                                        <a href="https://vietjack.online/kiem-tra-thi-thu/30-de-thi-thu-de-thi-thu-thptqg-mon-tieng-anh-co-loi-giai-chi-tiet-de-so-10/18366"
                                            class="f1-s-2 cl3 hov-cl10 trans-03">
                                            <i class="far fa-newspaper"></i>&nbsp;&nbsp;
                                            <span class="exam-title">
                                                30 đề thi thử đề thi thử THPTQG môn Tiếng Anh có lời giải chi tiết (Đề
                                                số 10)
                                                - Môn Tiếng Anh (mới)
                                                - Thi thử THPT Quốc gia
                                            </span>
                                            <span class="d-none exam-view">117808</span>
                                        </a>
                                    </span>
                                    <span class="cl9">&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</span>
                                </span>
                                <span class="trending-item">
                                    <span class="dis-inline-block">
                                        <a href="https://vietjack.online/kiem-tra-thi-thu/30-de-thi-thu-de-thi-thu-thptqg-mon-tieng-anh-co-loi-giai-chi-tiet-de-so-3/17489"
                                            class="f1-s-2 cl3 hov-cl10 trans-03">
                                            <i class="far fa-newspaper"></i>&nbsp;&nbsp;
                                            <span class="exam-title">
                                                30 đề thi thử đề thi thử THPTQG môn Tiếng Anh có lời giải chi tiết (Đề
                                                số 3)
                                                - Môn Tiếng Anh (mới)
                                                - Thi thử THPT Quốc gia
                                            </span>
                                            <span class="d-none exam-view">117782</span>
                                        </a>
                                    </span>
                                    <span class="cl9">&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</span>
                                </span>
                                <span class="trending-item">
                                    <span class="dis-inline-block">
                                        <a href="https://vietjack.online/kiem-tra-thi-thu/30-de-thi-thu-de-thi-thu-thptqg-mon-tieng-anh-co-loi-giai-chi-tiet-de-so-16/20008"
                                            class="f1-s-2 cl3 hov-cl10 trans-03">
                                            <i class="far fa-newspaper"></i>&nbsp;&nbsp;
                                            <span class="exam-title">
                                                30 đề thi thử đề thi thử THPTQG môn Tiếng Anh có lời giải chi tiết (Đề
                                                số 16)
                                                - Môn Tiếng Anh (mới)
                                                - Thi thử THPT Quốc gia
                                            </span>
                                            <span class="d-none exam-view">117742</span>
                                        </a>
                                    </span>
                                    <span class="cl9">&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</span>
                                </span>
                                <span class="trending-item">
                                    <span class="dis-inline-block">
                                        <a href="https://vietjack.online/kiem-tra-thi-thu/30-de-thi-thu-de-thi-thu-thptqg-mon-tieng-anh-co-loi-giai-chi-tiet-de-so-5/17792"
                                            class="f1-s-2 cl3 hov-cl10 trans-03">
                                            <i class="far fa-newspaper"></i>&nbsp;&nbsp;
                                            <span class="exam-title">
                                                30 đề thi thử đề thi thử THPTQG môn Tiếng Anh có lời giải chi tiết (Đề
                                                số 5)
                                                - Môn Tiếng Anh (mới)
                                                - Thi thử THPT Quốc gia
                                            </span>
                                            <span class="d-none exam-view">117700</span>
                                        </a>
                                    </span>
                                </span>
                            </marquee>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bg0 filter-exam m-tb-20">
                                    <div>
                                        @if (session()->has('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif

                                        <form wire:submit.prevent="joinRoom" class="form-join-room">
                                            <label for="room_code">Nhập mã phòng thi:</label>
                                            <input type="text" id="room_code" wire:model="room_code" required placeholder="Nhập mã phòng thi">
                                            <button type="submit" class="btn-submit">Tham gia</button>
                                        </form>
                                        <style>
                                            .form-join-room {
    margin: 20px auto; /* Căn giữa form theo chiều ngang */
    padding: 20px; /* Thêm padding cho form */
    background-color: #ffffff; /* Màu nền trắng */
    border-radius: 8px; /* Bo tròn góc */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Đổ bóng cho form */
    display: flex; /* Sử dụng Flexbox cho bố cục */
    flex-direction: column; /* Căn chỉnh theo chiều dọc */
}

.form-join-room label {
    font-size: 1.1rem; /* Kích thước chữ cho label */
    margin-bottom: 10px; /* Khoảng cách dưới label */
    color: #333; /* Màu chữ */
}

.form-join-room input[type="text"] {
    padding: 10px; /* Thêm padding cho input */
    font-size: 1rem; /* Kích thước chữ cho input */
    border: 1px solid #ced4da; /* Viền cho input */
    border-radius: 4px; /* Bo tròn góc cho input */
    margin-bottom: 20px; /* Khoảng cách dưới input */
    transition: border-color 0.3s; /* Hiệu ứng chuyển màu viền */
}

.form-join-room input[type="text"]:focus {
    border-color: #007bff; /* Màu viền khi input được chọn */
    outline: none; /* Bỏ viền mặc định */
}

.btn-submit {
    padding: 10px; /* Thêm padding cho nút */
    background-color: #fd7e14; /* Màu nền cho nút */
    color: #ffffff; /* Màu chữ trắng */
    border: none; /* Không có viền */
    border-radius: 4px; /* Bo tròn góc cho nút */
    font-size: 1rem; /* Kích thước chữ cho nút */
    cursor: pointer; /* Đổi con trỏ khi hover */
    transition: background-color 0.3s; /* Hiệu ứng chuyển màu nền */
}

.btn-submit:hover {
    background-color: #0056b3; /* Màu nền khi hover */
}

                                        </style>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="row m-t-15">
                                    @foreach($quizzes as $quiz) <!-- Vòng lặp qua danh sách bài thi -->
                                    <div class="col-lg-6 col-md-12">
                                        <div class="info-box">
                                            <a href="{{ route('quiz.detail', ['quizId' => $quiz->id]) }}" title="{{ $quiz->description }}">
                                                <div class="info-box-body">

                                                    <div class="info-box-icon" style="background-image: url('{{ asset('storage/' . $quiz->image) }}'); background-size: cover; background-position: center;">
                                                    </div>
                                                    <div class="info-box-content">
                                                        <span class="info-box-text">{{ $quiz->title }}</span> <!-- Hiển thị tiêu đề bài thi -->
                                                        <style>
                                                            .info-box-text {
    display: inline-block;
    width: 380px;
    white-space: nowrap;
    overflow: hidden !important;
    text-overflow: ellipsis;
}

/* Media query cho màn hình nhỏ hơn 768px (hoặc kích thước bạn muốn) */
@media (max-width: 768px) {
    .info-box-text {
        width: 100%; /* Đặt chiều rộng là 100% trên màn hình di động */
        max-width: 300px; /* Hoặc bạn có thể đặt giá trị cụ thể nếu cần */
    }
}


                                                        </style>
                                                        <p class="info-box-des">{{ $quiz->description }}</p> <!-- Hiển thị mô tả bài thi -->
                                                        <span class="info-box-number">{{ $quiz->total_questions }} Câu hỏi</span> <!-- Hiển thị số lượng câu hỏi -->
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach

                                </div>

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

            <script async src="https://vietjack.online/libs/MathJax-2.7.5/MathJax.js?config=TeX-MML-AM_CHTML"></script>
            <script></script>

        </body>

        </html>

    </div>
</div>
