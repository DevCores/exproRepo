@extends('layouts.app')

@section('title', 'КАТАЛОГ ЗАПАСНЫХ ЧАСТЕЙ И АГРЕГАТОВ HOWO SINOTRUK')
@section('description', 'КУПИТЬ ЗАПЧАСТи НА САМОСВАЛЫ HOWO SINOTRUK')

@section('og:title', 'КАТАЛОГ ЗАПАСНЫХ ЧАСТЕЙ И АГРЕГАТОВ HOWO SINOTRUK')
@section('og:description', 'КУПИТЬ ЗАПЧАСТи НА САМОСВАЛЫ HOWO SINOTRUK')

@section('twitter:title', 'КАТАЛОГ ЗАПАСНЫХ ЧАСТЕЙ И АГРЕГАТОВ HOWO SINOTRUK')
@section('twitter:description', 'КУПИТЬ ЗАПЧАСТи НА САМОСВАЛЫ HOWO SINOTRUK')

@section('keywords', 'Каталог запчастей')

@section('content')
<link rel="stylesheet" href="{{ asset('css/shop/vendor.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/shop/plugins.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/shop/style.min.css') }}">
 <!-- Shop Category pages -->
    <div class="shop-category-area pb-100px pt-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12  col-md-12">
                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">

                        <div class="row">
                            @foreach($categories as $category)
                            
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product mb-5">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                            <img src="/storage/{{str_replace('.' , '-small.' ,$category->image)}}" alt="Product" />
                                            <img class="hover-image" src="/storage/{{str_replace('.' , '-small.' ,$category->hover_image)}}" alt="Product" />
                                        </a>
                                        @isset($category->badges)
                                        <span class="badges">
                                            <span class="{{$category->badges}}">{{$category->badges_name}}</span>
                                        </span>
                                        @endisset
                                        
                                        <a href="/shop/category_{{$category->id}}"><button title="Add To Cart" class=" add-to-cart">Перейти в категорию</button></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="/shop/category_{{$category->id}}">{{$category->name}}</a></h5>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>
    </div>







    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <!-- <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/vendor/popper.min.js"></script>
    <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/vendor/bootstrap.min.js"></script>
    <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/vendor/modernizr-3.11.2.min.js"></script> -->

    <!--Plugins JS-->
    <!-- <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/plugins/jquery-ui.min.js"></script>
    <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/plugins/countdown.js"></script>
    <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/plugins/scrollup.js"></script>
    <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/plugins/jquery.waypoints.js"></script>
    <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/plugins/jquery.lineProgressbar.js"></script>
    <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/plugins/venobox.min.js"></script>
    <script src="https://htmldemo.hasthemes.com/furns/furns/assets/js/plugins/ajax-mail.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{ asset('js/shop/vendor.min.js') }}"></script>
    <script src="{{ asset('js/shop/plugins.min.js') }}"></script>

    <!-- Main Js -->
    <script src="{{ asset('js/shop/main.js') }}"></script>
@endsection
