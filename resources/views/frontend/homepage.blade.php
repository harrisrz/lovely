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
                        <a href="/shop" class="primary-btn">SHOP NOW</a>
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
                        @foreach($menu_categories as $menu_category)
                        <div class="col-lg-3">
                            <div
                                class="categories__item set-bg"
                                data-setbg="{{ $menu_category->photo->getUrl() }}"
                            >
                                <h5><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a></h5>
                            </div>
                        </div>
                        @endforeach
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
                <div class="row featured__filter" id="product-list">

                </div>
            </div>
        </section>
        <!-- Featured Section End -->


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
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

