<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    {{-- <img src="assets/images/logo.svg" class="footer-logo" alt="" /> --}}
                   <h1>INDONESIA</h1>
                    <h5 class="font-weight-normal mt-4 mb-5">
                        Sebagai negara yang memegang teguh prinsip keagamaan yang terdapat dalam dasar negara Pancasila, Indonesia, mengakui terdapat 5 agama dalam wilayah administrasinya.
                    </h5>
                    <ul class="social-media mb-3">
                        <li>
                            <a href="#">
                                <i class="mdi mdi-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>

                    @foreach ($beritaNews as $item)

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="footer-border-bottom pb-2">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{asset('assets/images/'. $item->image)}}" alt="thumb" class="img-fluid" />
                                        {{-- <img src="assets/images/dashboard/home_1.jpg" alt="thumb" class="img-fluid" /> --}}
                                    </div>
                                    <div class="col-9">
                                        <h5 class="font-weight-600" >
                                            <a href="/page/{{ $item->slug }}" class="text-white">{{ $item->title }}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
                <div class="col-sm-3">
                    <h3 class="font-weight-bold mb-3">CATEGORIES</h3>
                    <div class="footer-border-bottom pb-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 font-weight-600">ISLAM</h5>
                            {{-- <div class="count">1</div> --}}
                        </div>
                    </div>
                    <div class="footer-border-bottom pb-2 pt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 font-weight-600">HINDU</h5>
                            {{-- <div class="count">1</div> --}}
                        </div>
                    </div>
                    <div class="footer-border-bottom pb-2 pt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 font-weight-600">BUDHA</h5>
                            {{-- <div class="count">1</div> --}}
                        </div>
                    </div>
                    <div class="footer-border-bottom pb-2 pt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 font-weight-600">KRISTEN</h5>
                            {{-- <div class="count">1</div> --}}
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 font-weight-600">KHONGHUCU</h5>
                            {{-- <div class="count">1</div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <div class="fs-14 font-weight-600">
                            © 2020 @ <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">
                                BootstrapDash</a>. All rights reserved.
                        </div>
                        <div class="fs-14 font-weight-600">
                            Handcrafted by <a href="https://www.bootstrapdash.com/" target="_blank"
                                class="text-white">BootstrapDash</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
