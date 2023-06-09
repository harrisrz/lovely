@extends('layouts.frontend')

@section('content')
        <!-- Breadcrumb Section Begin -->
        <section class="mb-5">
            <div class="container">
                <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/hero/banner2.jpg') }}">
                    <div class="hero__text">
                        <span>Lovely Accessories</span>
                        <h2>100% <br /> Handmade</h2>
                        <p>#KeindahanLovelyPesonaTrendy</p>
                        <a href="#" class="primary-btn">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Categories Section Begin -->
        <section class="categories mt-5">
            <div class="container">
                <div class="row">
                    <div class="categories__slider owl-carousel">
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/cincin.jpg') }}"
                            >
                                <h5><a href="#">Cincin</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/gelang.jpg') }}"
                            >
                                <h5><a href="#">Gelang</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/ganci.jpg') }}"
                            >
                                <h5><a href="#">Gantungan Kunci</a></h5>
                            </div>
                        </div>
                        {{-- <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/cat-4.jpg') }}"
                            >
                                <h5><a href="#">drink fruits</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ asset('frontend/img/categories/cat-5.jpg') }}"
                            >
                                <h5><a href="#">drink fruits</a></h5>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Categories Section End -->

        <!-- Featured Section Begin -->
        <section class="featured spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Featured Product</h2>
                        </div>
                    </div>
                </div>
                <div class="row featured__filter">
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-1.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-2.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-3.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-4.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-5.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-6.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-7.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/featured/feature-8.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Section End -->

        <!-- Banner Begin -->
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="{{ asset('frontend/img/banner/banner-1.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="{{ asset('frontend/img/banner/banner-2.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        {{-- <!-- Footer Section Begin -->
        <footer class="footer spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__about__logo">
                                <a href="./index.html"
                                    ><img src="{{ asset('frontend/img/logo.png') }}" alt=""
                                /></a>
                            </div>
                            <ul>
                                <li>Address: 60-49 Road 11378 New York</li>
                                <li>Phone: +65 11.188.888</li>
                                <li>Email: hello@colorlib.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                        <div class="footer__widget">
                            <h6>Useful Links</h6>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">About Our Shop</a></li>
                                <li><a href="#">Secure Shopping</a></li>
                                <li><a href="#">Delivery infomation</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Who We Are</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Innovation</a></li>
                                <li><a href="#">Testimonials</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__widget">
                            <h6>Join Our Newsletter Now</h6>
                            <p>
                                Get E-mail updates about our latest shop and
                                special offers.
                            </p>
                            <form action="#">
                                <input
                                    type="text"
                                    placeholder="Enter your mail"
                                />
                                <button type="submit" class="site-btn">
                                    Subscribe
                                </button>
                            </form>
                            <div class="footer__widget__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__copyright">
                            <div class="footer__copyright__text">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(
                                            new Date().getFullYear()
                                        );
                                    </script>
                                    All rights reserved | This template is made
                                    with
                                    <i
                                        class="fa fa-heart"
                                        aria-hidden="true"
                                    ></i>
                                    by
                                    <a
                                        href="https://colorlib.com"
                                        target="_blank"
                                        >Colorlib</a
                                    >
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                            <div class="footer__copyright__payment">
                                <img src="{{ asset('frontend/img/payment-item.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End --> --}}

        @endsection

        <!-- Js Plugins -->
        <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>
</html>

