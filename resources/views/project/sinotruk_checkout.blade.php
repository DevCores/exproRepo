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



<div class="checkout-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">    
                    <div class="billing-info-wrap">
                        <h3>Подтверждение заказа</h3>
                        <form action="{{route('mail.cart')}}" method="POST">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Имя</label>
                                    <input name="name" type="text" placeholder="Введите Имя" value="{{ old('name') }}">
                                    @if($errors->first('name')) <img src="{{ asset('assets/images/icons/policy.png') }}" alt=""><span style="color: red;">{{ $errors->first('name') }}</span> @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Фамилия</label>
                                    <input name="family" type="text" placeholder="Введите Фамилию"  value="{{ old('family') }}">
                                    @if($errors->first('family')) <img src="{{ asset('assets/images/icons/policy.png') }}" alt=""><span style="color: red;">{{ $errors->first('family') }}</span> @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Отчество</label>
                                    <input name="last_family" type="text" placeholder="Введите Отчество"  value="{{ old('last_family') }}">
                                    @if($errors->first('last_family')) <img src="{{ asset('assets/images/icons/policy.png') }}" alt=""><span style="color: red;">{{ $errors->first('last_family') }}</span> @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Наименование организации</label>
                                    <input name="organization" type="text" placeholder="Введите название организации"  value="{{ old('organization') }}">
                                    @if($errors->first('organization')) <img src="{{ asset('assets/images/icons/policy.png') }}" alt=""><span style="color: red;">{{ $errors->first('organization') }}</span> @endif
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Телефон</label>
                                    <input name="phone" type="phone" placeholder="Введите телефон"  value="{{ old('phone') }}">
                                    @if($errors->first('phone')) <img src="{{ asset('assets/images/icons/policy.png') }}" alt=""><span style="color: red;">{{ $errors->first('phone') }}</span> @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Email адрес</label>
                                    <input name="email" type="text" placeholder="Введите email адрес"  value="{{ old('email') }}">
                                    @if($errors->first('email')) <img src="{{ asset('assets/images/icons/policy.png') }}" alt=""><span style="color: red;">{{ $errors->first('email') }}</span> @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Модель самосвала по форме:</label>
                                    <input name="model" type="text" placeholder="(пример: Z Z 5 7 0 7 S 3 8 4 0 A J)"  value="{{ old('model') }}">
                                    @if($errors->first('model')) <img src="{{ asset('assets/images/icons/policy.png') }}" alt=""><span style="color: red;">{{ $errors->first('model') }}</span> @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>VIN номер самосвала по форме:</label>
                                    <input name="vin" type="text" placeholder="(пример: L Z Z  5 E M S D 2 7 D 7 2 9  5 9 9)"  value="{{ old('vin') }}">
                                    @if($errors->first('vin')) <img src="{{ asset('assets/images/icons/policy.png') }}" alt=""><span style="color: red;">{{ $errors->first('vin') }}</span> @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Год выпуска самосвала:</label>
                                    <input name="years" type="text" placeholder="(пример: 2010)"  value="{{ old('years') }}">
                                    @if($errors->first('years')) <img src="{{ asset('assets/images/icons/policy.png') }}" alt=""><span style="color: red;">{{ $errors->first('years') }}</span> @endif
                                </div>
                            </div>
                        </div>
                        <div class="additional-info-wrap">
                            <h4>Дополнительная информация</h4>
                            <div class="additional-info">
                                <label>Детали заказа</label>
                                <textarea placeholder="Укажите произвольные детали заказа, если необходимо" name="info"  value="{{ old('info') }}"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                    <div class="your-order-area">
                        <h3>Ваш заказ</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <ul class="minicart-product-list">
                                @isset($cart)
                                @foreach($cart as $item)
                                <li class="{{$item->rowId}}">
                                    <a href="#" data-link-action="quickview" data-bs-toggle="modal" data-bs-target="#example{{$item->id}}" class="image"><img src="/storage/{{str_replace('.' , '-small.' ,$item->options->image)}}" alt="Cart product Image"></a>
                                    <div class="content">
                                        <a href="#" data-link-action="quickview" data-bs-toggle="modal" data-bs-target="#example{{$item->id}}" class="title">{{$item->name}}</a>
                                         <p>{{$item->options->namber_detail}} x <b>{{$item->qty}}</b></p>
                                            
                                        
                                    </div>
                                </li>
                                @endforeach
                                @endisset
                            </ul>
                            
                        </div>
                        @if($cart->count() > 0)
                            <div class="buttons">
                                
                                    @csrf
                                @isset($cart)
                                @foreach($cart as $item)
                                <input class="cart-plus-minus-box" type="text" name="{{$item->rowId}}" max="300" value="{{$item->options}}" hidden>
                                @endforeach
                                @endisset
                                <button class="btn btn-outline-dark current-btn" type="submit" style="margin-top: 20px; width: 100%;" required>Создать заказ</button>
                                <div class="Place-order mt-25">
                                    <a class="btn-hover" href="{{ URL::previous() }}">Вернуться назад</a>
                                </div>
                                </form>
                            </div>
                        @endif
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
    <script src="{{ asset('js/shop/jquery.loupe.min.js') }}"></script>
@endsection
