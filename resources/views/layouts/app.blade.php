<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{env('APP_NAME')}}</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/aos/dist/aos.css/aos.css')}}" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <!-- partial:partials/_navbar.html -->
@include('layouts.navbar')
            <!-- partial -->
            {{-- <div class="flash-news-banner">
                <div class="container">
                    <div class="d-lg-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <span class="badge badge-dark mr-3">Flash news</span>
                            <p class="mb-0">
                                Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s.
                            </p>
                        </div>
                        <div class="d-flex">
                            <span class="mr-3 text-danger">Wed, March 4, 2020</span>
                            <span class="text-danger">30°C,London</span>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="content-wrapper">
                <div class="container">
                        @yield('newsBerita')
{{-- include kategori --}}
<div class="row" data-aos="fade-up">
    @include('layouts.category')

    @yield('content')
</div>
{{-- end-include kategori --}}
                    {{-- <div class="row" data-aos="fade-up">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card-title">
                                                Sport light
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-8 col-sm-6">
                                                    <div class="rotate-img">
                                                        <img src="assets/images/dashboard/home_16.jpg" alt="thumb"
                                                            class="img-fluid" />
                                                    </div>
                                                    <h2 class="mt-3 text-primary mb-2">
                                                        Newsrooms exercise..
                                                    </h2>
                                                    <p class="fs-13 mb-1 text-muted">
                                                        <span class="mr-2">Photo </span>10 Minutes ago
                                                    </p>
                                                    <p class="my-3 fs-15">
                                                        Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer
                                                        took
                                                    </p>
                                                    <a href="#" class="font-weight-600 fs-16 text-dark">Read more</a>
                                                </div>
                                                <div class="col-xl-6 col-lg-4 col-sm-6">
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <h3 class="font-weight-600 mb-0">
                                                            Social distancing is ..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <h3 class="font-weight-600 mb-0">
                                                            Panic buying is forcing..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <h3 class="font-weight-600 mb-0">
                                                            Businesses ask hundreds..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <h3 class="font-weight-600 mb-0">
                                                            Tesla's California factory..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="card-title">
                                                        Sport light
                                                    </div>
                                                    <div class="border-bottom pb-3">
                                                        <div class="rotate-img">
                                                            <img src="assets/images/dashboard/home_17.jpg" alt="thumb"
                                                                class="img-fluid" />
                                                        </div>
                                                        <p class="fs-16 font-weight-600 mb-0 mt-3">
                                                            Kaine: Trump Jr. may have
                                                        </p>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                    </div>
                                                    <div class="pt-3 pb-3">
                                                        <div class="rotate-img">
                                                            <img src="assets/images/dashboard/home_18.jpg" alt="thumb"
                                                                class="img-fluid" />
                                                        </div>
                                                        <p class="fs-16 font-weight-600 mb-0 mt-3">
                                                            Kaine: Trump Jr. may have
                                                        </p>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card-title">
                                                        Celebrity news
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="border-bottom pb-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="assets/images/dashboard/home_19.jpg"
                                                                                alt="thumb" class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="border-bottom pb-3 pt-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="assets/images/dashboard/home_20.jpg"
                                                                                alt="thumb" class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="border-bottom pb-3 pt-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="assets/images/dashboard/home_21.jpg"
                                                                                alt="thumb" class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="pt-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="assets/images/dashboard/home_22.jpg"
                                                                                alt="thumb" class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- main-panel ends -->
            <!-- container-scroller ends -->

            <!-- partial:partials/_footer.html -->
@include('layouts.footer')

            <!-- partial -->
        </div>
    </div>
    <!-- inject:js -->
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{asset('assets/vendors/aos/dist/aos.js/aos.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{asset('assets/js/demo.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easeScroll.js')}}"></script>
    <!-- End custom js for this page-->
</body>

</html>