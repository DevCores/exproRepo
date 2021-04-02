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



    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Ваша корзина</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                @if($cart->count() == 0)
                    <b>Вы еще не выбрали ни одну еденицу товара. Ваша корзина пуста</b>
                @endif
                <ul class="minicart-product-list">
                    <form action="{{route('qty')}}" method="GET">
                    @isset($cart)
                    @foreach($cart as $item)
                    <li class="{{$item->rowId}}">
                        <a href="#" data-link-action="quickview" data-bs-toggle="modal" data-bs-target="#example{{$item->id}}" class="image"><img src="/storage/{{str_replace('.' , '-small.' ,$item->options->image)}}" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="#" data-link-action="quickview" data-bs-toggle="modal" data-bs-target="#example{{$item->id}}" class="title">{{$item->name}}</a>
                             <p>{{$item->options->namber_detail}}</p>
                            <p>
                              @csrf
                                <input class="cart-plus-minus-box" type="number" name="{{$item->rowId}}" max="300" value="{{$item->qty}}" style="width: 30%;">
                                <a href="#" rowId="{{$item->rowId}}" id="{{$item->options->id}}" onclick="isRemove($(this).attr('rowId'))" class="remove">×</a>
                            </p>
                                
                            
                        </div>
                    </li>
                    @endforeach
                    @endisset
                    <div class="buttons">
                    <button class="btn btn-dark btn-hover-primary mb-6" type="submit">Обновить корзину</button>
                </div>
                    </form>
                </ul>
            </div>
             @if($cart->count() > 0)
                <div class="buttons">
                    <form action="{{route('checkout')}}" method="POST">
                        @csrf
                    @isset($cart)
                    @foreach($cart as $item)
                    <input class="cart-plus-minus-box" type="text" name="{{$item->rowId}}" max="300" value="{{$item->options}}" hidden>
                    @endforeach
                    @endisset
                    <button class="btn btn-outline-dark current-btn" type="submit" style="margin-top: 20px;" required>Создать заказ</button>

                    </form>
                </div>
            @endif
                
                <br><br><br>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->



    <div class="offcanvas-overlay"></div>


    <!-- Shop Category pages -->
    <div class="shop-category-area pb-100px pt-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12  col-md-12">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <p>На странице {{$products->count()}} продуктов</p>
                        <div class="header-actions">
                            
                            
                            <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="icon-handbag"></i>
                                <span id="cartcount" class="header-action-num">{{$cart->count()}}</span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">

                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product mb-5">
                                    <div class="thumb">
                                        <a href="#" class="image">
                                           
                                            <div class="swiper-slide">
                                                <img class="img-responsive m-auto" src="/storage/{{str_replace('.' , '-small.' ,$product->hover_image)}}" alt="">
                                            </div>
                                            
                                          
                                        </a>
                                        @isset($product->badges)
                                        <span class="badges">
                                            <span class="{{$category->badges}}">{{$product->badges_name}}</span>
                                        </span>
                                        @endisset
                                        <div class="actions">
                                            
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#example{{$product->id}}"><i class="icon-size-fullscreen"></i></a>
                                            
                                        </div>
                                        <a href="#" data-link-action="quickview" data-bs-toggle="modal" data-bs-target="#example{{$product->id}}" >
                                            <button title="Add To Cart" class=" add-to-cart">Добавить в корзину</button>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="#" data-link-action="quickview" data-bs-toggle="modal" data-bs-target="#example{{$product->id}}">{{$product->name}}</a></h5>
                                        <!-- <span class="price">
                                            <span class="new">$38.50</span>
                                        </span> -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        <!--  Pagination Area Start -->
                        <div class="pro-pagination-style text-center mb-md-30px mb-lm-30px mt-6" data-aos="fade-up">
                            <ul>
                                <li>
                                    <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                                </li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li>
                                    <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>
    </div>



    <!-- Modal -->
    @foreach($products as $product)
    <div class="modal fade" id="example{{$product->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 mb-lm-30px mb-sm-30px">
                            <!-- Swiper -->
                            
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="fixed">
                            <div class="swiper-container gallery-top mb-4">
                                <div class="swiper-wrapper">
                                    @php $images = (array) json_decode($product->image, true) @endphp
                                    @foreach($images as $image)
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto loupe" src="/storage/{{$image}}" alt="">
                                    </div>
                                    @endforeach
                                    
                                    
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    @php $images = (array) json_decode($product->image, true) @endphp
                                    @foreach($images as $image)
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/storage/{{str_replace('.' , '-small.' ,$image)}}" alt="">
                                    </div>
                                    @endforeach
                                    
                                    
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                            </div>
                            <div class="product-details-content quickview-content">
                                <h2>1.01 Окрашенный корпус кабины карьерного самосвала 70</h2>
                                
                                <form  action="{{route('cart')}}" method="POST">
                                   @csrf
                                @foreach($product->SItems as $key => $item)
                                @php $color = ($key % 2 === 0) ? '#dedada' : '#fff'; @endphp
                                <div class="pro-details-quality" style="background:{{$color}}">
                                    <label for="qtybutton"><b>{{$item->namber}} </b>| {{$item->namber_detail}} | {{$item->russian_name}}</label>
                                    <div class="cart-plus-minus">
                                        <div class="dec qtybutton">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="{{$item->id}}" max="300" value="0" />
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                    <input type="text" name="item{{$item->id}}"  value="{{$item}}" hidden/>
                                </div>
                                @endforeach
                                
                                <div class="pro-details-cart btn-hover fixed-button">
                                    <button type="submit" class="add-cart btn btn-primary btn-hover-primary ml-4"> Добавить в корзину</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Modal end -->







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
    <script src="{{ asset('js/shop/jquery.loupe.min.js') }}"></script>
    <script>
    function isRemove($rowId){
        $.ajax({
                            url: '{{ route('remove.card') }}',
                            type: 'POST',
                            headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {
                                _token : $('meta[name="csrf-token"]').attr('content'), 
                                rowId: $rowId,
                            },
                            success: function(data) { 
                                 $('li.'+$rowId).fadeOut(500);
                                 var cartcount =  $('#cartcount').text();
                                 cartcount = cartcount - 1
                                 $('#cartcount').text(cartcount);
                                
                                
                            },
                            beforeSend: function(data) {
                                    
                                    
                            }
                        })
        
    }

       
         $('.loupe').loupe({
            width: 1200, // ширина лупы
            height: 500,
        });
    </script>
@endsection
