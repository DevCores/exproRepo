<!DOCTYPE html>
<html data-wf-page="5ee81b572b1078532ff21472" data-wf-site="5ed463338a31276b3975e2de" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>{{setting('site.title')}} | @yield('title')</title>
  <meta content="@yield('description')" name="description">
  <meta content="{{setting('site.title')}}  | @yield('og:title')" property="og:title">
  <meta content="@yield('og:description')" property="og:description">
  <meta content="{{setting('site.title')}}  | @yield('twitter:title')" property="twitter:title">
  <meta content=" @yield('twitter:description')" property="twitter:description">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="keywords" content="@yield('keywords')" />
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" >
  <link href="{{ asset('css/webflow.css') }}" rel="stylesheet" >
  <link href="{{ asset('css/expro.webflow.css') }}" rel="stylesheet" >
  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
  <link href="/images/webclip.png" rel="apple-touch-icon">
</head>
<body class="body">
  <div class="banner-bar">
    <div class="banner-wrap">
      <div class="div-block-41">
        <div>НОВОСТЬ</div>
      </div>
      <a href="{{setting('glavnaya.link')}}" target="_blank" class="cta-text">{{setting('glavnaya.banner')}}</a>
    </div>
  </div>
  <div class="navigation-wrap">
    <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navigation-3 w-nav">
      <div class="navigation-container">
        <div class="navigation-left">
          <a href="{{route('index')}}" class="brand w-nav-brand"><img src="/images/expro-logo-howo.svg" alt="Expro" class="flowbase-logo"></a>
        </div>
        <nav class="nav-menu w-nav-menu">
          <a href="{{route('index')}}" aria-current="page" class="navigation-link w-nav-link @if( request()->routeIs('index')) w--current @endif">Главная</a>
          <div data-hover="1" data-delay="0" class="dropdown-3 w-dropdown">
            <div class="dropdown-toggle w-dropdown-toggle">
              <div class="icon-4 w-icon-dropdown-toggle"></div>
              <a href="#" class="navigation-link w-nav-link @if( request()->routeIs('jin-chan') || request()->routeIs('ecolab') || request()->routeIs('howo') || request()->routeIs('sinotruk')) w--current @endif">Проекты</a>
            </div>
            <nav class="navigation-dropdown w-dropdown-list">
              <a href="{{route('howo')}}" class="dropdown-link-4 w-inline-block">
                <div class="icon-square"><img src="/images/sinotruk.svg" alt="Expro"></div>
                <div class="nav-content-wrap">
                  <div>Карьерные самосвалы HOWO SINOTRUK</div>
                  <div class="nav-link-details">От официального дистрибьютора</div>
                </div>
              </a>
              <a href="{{route('jin-chan')}}" class="dropdown-link-1 w-inline-block">
                <div class="icon-square"><img src="/images/sinotruk.svg" alt="Expro"></div>
                <div class="nav-content-wrap">
                  <div class="text-block-61">JIN CHAN «ЗОЛОТАЯ ЦИКАДА»</div>
                  <div class="nav-link-details">Экологически чистый реагент - замена цианида натрия</div>
                </div>
              </a>
              <a href="{{route('ecolab')}}" class="dropdown-link-4 w-inline-block">
                <div class="icon-square"><img src="/images/ecolab-logotype1.svg" alt="Expro"></div>
                <div class="nav-content-wrap">
                  <div>ECOLAB | ЭКОЛАБ</div>
                  <div class="nav-link-details">Инновационная лаборатория</div>
                </div>
              </a>
              <a href="{{route('sinotruk')}}" class="dropdown-link-4 w-inline-block">
                <div class="icon-square"><img src="/images/clutch-disc.svg" alt="Expro"></div>
                <div class="nav-content-wrap">
                  <div class="nav-link-title">Каталог запасных частей HOWO SINOTRUK</div>
                  <div class="nav-link-details">Официальный интернет - магазин запасных частей и агрегатов</div>
                </div>
              </a>
            </nav>
          </div>
          <div data-hover="1" data-delay="0" class="dropdown-3 w-dropdown">
            <div class="dropdown-toggle w-dropdown-toggle">
              <div class="icon-4 w-icon-dropdown-toggle"></div>
              <a href="{{route('about')}}" class="navigation-link w-nav-link @if( request()->routeIs('about') || request()->routeIs('documents') || request()->routeIs('info')) w--current @endif">О компании</a>
            </div>
            <nav class="navigation-dropdown-2 w-dropdown-list">
              <a href="{{route('contacts')}}" class="dropdown-link-1 w-inline-block">
                <div class="icon-square"><img src="/images/language.svg" alt="Expro"></div>
                <div class="nav-content-wrap">
                  <div class="text-block-61">Контактная информация</div>
                  <div class="nav-link-details">Расположение официальных представительств, телефоны и электронная коммуникация.</div>
                </div>
              </a>
              <a href="{{route('documents')}}" class="dropdown-link-2 w-inline-block">
                <div class="icon-square"><img src="/images/documents-1.svg" alt="Expro"></div>
                <div class="nav-content-wrap">
                  <div class="text-block-61">Документы</div>
                  <div class="nav-link-details">Юридическая и корпоративная информация.</div>
                </div>
              </a>
              <a href="{{route('info')}}" class="dropdown-link-3 w-inline-block">
                <div class="icon-square"><img src="/images/information.svg" alt="Expro"></div>
                <div class="nav-content-wrap">
                  <div class="text-block-61">Информация</div>
                  <div class="nav-link-details">Общая информация, часто задаваемые вопросы.</div>
                </div>
              </a>
            </nav>
          </div>
          <a href="{{route('news')}}" class="navigation-link w-nav-link @if( request()->routeIs('news')) w--current @endif">Новости</a>
          <a href="{{route('contacts')}}" class="navigation-link w-nav-link @if( request()->routeIs('contacts')) w--current @endif">Контакты</a>
        </nav>
        <div class="navigation-right">
          <a href="/documents/EXPRO-ПРЕЗЕНТАЦИЯ.pdf" target="_blank" class="button-menu w-button">ПРЕЗЕНТАЦИЯ КОМПАНИИ (PDF)</a>
        </div>
      </div>
    </div>
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease-out" data-easing2="ease-out" role="banner" class="navigation-mob w-nav">
      <div class="navigation-container-mob">
        <a href="{{route('index')}}" class="w-nav-brand"><img src="/images/expro-logo-howo.svg" alt="Expro" class="flowbase-logo"></a>
        <nav class="mobile-nav w-nav-menu">
          <a href="{{route('index')}}" aria-current="page" class="mobile-nav-link w-nav-link w--current">Главная</a>
          <div data-delay="0" class="mobile-dropdown w-dropdown">
            <div class="mobile-toggle w-dropdown-toggle">
              <div class="w-icon-dropdown-toggle"></div>
              <div class="mobile-nav-link">Проекты</div>
            </div>
            <nav class="dropdown-list w-dropdown-list">
              <a href="{{route('howo')}}" class="dropdown-link-mobile w-inline-block">
                <div class="icon-square"><img src="/images/sinotruk.svg" alt="Expro"></div>
                <div class="nav-content-wrap">
                  <div>Карьерные самосвалы HOWO SINOTRUK</div>
                  <div class="nav-link-details">Официальный дистрибьютор</div>
                </div>
              </a>
              <a href="{{route('jin-chan')}}" class="dropdown-link-mobile w-inline-block">
                <div class="icon-square"><img src="/images/jin.svg" alt="Expro"></div>
                <div class="nav-content-wrap">
                  <div class="text-block-61">JIN CHAN «ЗОЛОТАЯ ЦИКАДА»</div>
                  <div class="nav-link-details">Экологически чистый реагент - замена цианида натрия</div>
                </div>
              </a>
              <a href="{{route('ecolab')}}" class="dropdown-link-mobile w-inline-block">
                <div class="icon-square"><img src="/images/ecolab-logotype1.svg" alt="Expro"></div>
                <div class="nav-content-wrap">
                  <div>ECOLAB | ЭКОЛАБ</div>
                  <div class="nav-link-details">Инновационная лаборатория</div>
                </div>
              </a>
              <a href="{{route('sinotruk')}}" class="dropdown-link-mobile w-inline-block">
                <div class="icon-square"><img src="/images/clutch-disc.svg" alt="Expro"></div>
                <div class="nav-content-wrap">
                  <div class="nav-link-title">Каталог запасных частей HOWO SINOTRUK</div>
                  <div class="nav-link-details">Полный каталог для заказа запасных частей и агрегатов</div>
                </div>
              </a>
            </nav>
          </div>
          <div data-delay="0" class="mobile-dropdown w-dropdown">
            <div class="mobile-toggle w-dropdown-toggle">
              <div class="w-icon-dropdown-toggle"></div>
              <div class="mobile-nav-link">О компании</div>
            </div>
            <nav class="dropdown-list w-dropdown-list">
              <a href="{{route('contacts')}}" class="dropdown-link-mobile w-inline-block">
                <div class="icon-square"><img src="/images/language.svg" alt="Expro"></div>
                <div class="nav-content-wrap">
                  <div class="text-block-61">Контактная информация</div>
                  <div class="nav-link-details">Расположение официальных представительств, телефоны и электронная коммуникация.</div>
                </div>
              </a>
              <a href="{{route('documents')}}" class="dropdown-link-mobile w-inline-block">
                <div class="icon-square"><img src="/images/documents-1.svg" alt="Expro"></div>
                <div class="nav-content-wrap">
                  <div>Документы</div>
                  <div class="nav-link-details">Юридическая и корпоративная информация.</div>
                </div>
              </a>
              <a href="{{route('info')}}" class="dropdown-link-mobile w-inline-block">
                <div class="icon-square"><img src="/images/information.svg" alt="Expro"></div>
                <div class="nav-content-wrap">
                  <div>Информация</div>
                  <div class="nav-link-details">Общая информация, часто задаваемые вопросы.</div>
                </div>
              </a>
            </nav>
          </div>
          <a href="{{route('news')}}" class="mobile-nav-link w-nav-link">Новости</a>
          <a href="{{route('contacts')}}" class="mobile-nav-link w-nav-link">Контакты</a>
          <a href="tel:+74162553696" class="mobile-nav-link w-nav-link"><span class="text-span-9">Телефон в Благовещенске</span><br>+7 (4162) 55 36 96<br></a>
          <a href="tel:+79619555775" class="mobile-nav-link w-nav-link"><span class="text-span-9">Телефон в Москве</span><br>+7 (961) 955 57 75<br></a>
        </nav>
        <div class="menu-mob w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </div>
  @yield('content')
  <div class="footer">
    <div class="footer-wrap">
      <div class="row-footer w-row">
        <div class="footer-3-col w-col w-col-6">
          <h3 class="logo-text-2">{{setting('site.title')}}</h3>
          <div class="text-block-9">ExPro Co., ltd ООО &quot;ЭксПро&quot; - официальный дистрибьютор концернов<br>Guangxi Senhe High Technology Co., Ltd. и SINOTRUK international<br>на всей территории Российской Федерации.</div>
        </div>
        <div class="footer-3-col-2 w-col w-col-6">
          <div class="footer-3-links">
            <a href="{{route('index')}}" aria-current="page" class="footer-3-link w--current">Главная</a>
            <a href="{{route('about')}}" class="footer-3-link">О компании</a>
            <a href="{{route('news')}}" class="footer-3-link">Новости</a>
            <a href="{{route('contacts')}}" class="footer-3-link">Контакты</a>
          </div>
          <div class="footer-3-button">
                {!!setting('glavnaya.footer')!!}
          </div>
        </div>
      </div>
      <div class="footer-3-line"></div>
      <div class="footer-3-copywrite">© EXPRO 2020 - {{ date('Y') }}. Все права защищены.</div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" ></script>
  <script >WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Exo 2:100,200,300,regular,500,600,700,800:cyrillic,latin"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" ></script><![endif] -->
  <script >!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <script src="{{ asset('js/jquery-3.5.1.min.dc5e7f18c8.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/webflow.js') }}" ></script>
   {!!setting('javascripts.Javascripts')!!}
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>