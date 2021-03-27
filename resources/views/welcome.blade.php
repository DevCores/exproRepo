@extends('layouts.app')

@section('title', 'ЭКСПРО JIN CHAN HOWO ECOLAB ОФИЦИАЛЬНЫЙ ДИСТРИБЬЮТОР')
@section('description', 'ЭКСПРО ОФИЦИАЛЬНЫЙ ПОСТАВЩИК САМОСВАЛОВ HOWO SINOTRUK РЕАГЕНТА ЗОЛОТАЯ ЦИКАДА JIN CHAN')

@section('og:title', 'ЭКСПРО JIN CHAN HOWO ECOLAB ОФИЦИАЛЬНЫЙ ДИСТРИБЬЮТОР')
@section('og:description', 'ЭКСПРО ОФИЦИАЛЬНЫЙ ПОСТАВЩИК САМОСВАЛОВ HOWO SINOTRUK РЕАГЕНТА ЗОЛОТАЯ ЦИКАДА JIN CHAN')

@section('twitter:title', 'ЭКСПРО JIN CHAN HOWO ECOLAB ОФИЦИАЛЬНЫЙ ДИСТРИБЬЮТОР')
@section('twitter:description', 'ЭКСПРО ОФИЦИАЛЬНЫЙ ПОСТАВЩИК САМОСВАЛОВ HOWO SINOTRUK РЕАГЕНТА ЗОЛОТАЯ ЦИКАДА JIN CHAN')

@section('keywords', 'EXPRO, HOWO, SINOTRUK')

@section('content')
<div class="main-section">
    <div class="flex-container">
      <p class="paragraph-2">PERFECT FUTURE</p>
      <p class="paragraph-3">Компания «ExPro» «ЭКСПРО» более 12 лет специализируется на внешнеэкономической деятельности с предприятиями Китая. За эти годы у нас сформировался внушительный пул проверенных партнеров на территории КНР, обладающих всеми необходимыми ресурсами для решения любых задач. На сегодняшний день «ExPro» развивает несколько направлений своей деятельности...</p>
      <a href="{{route('about')}}">ПОДРОБНЕЕ О КОМПАНИИ</a>
      <div class="w-layout-grid service-grid">
        <div id="w-node-_53c1cd07-283a-8bd4-aa6b-cd12e36d9892-2ff21472" class="card-main card-1-main"><img src="/images/jin.svg" width="60" alt="Expro" class="image-problem">
          <div class="tagline tagline-promo-40"><span class="text-span-8">GOLD</span><br>JIN CHAN ЗОЛОТАЯ ЦИКАДА</div>
          <h4 class="card-headline">Безопасный, экологичный реагент для обогащения золотой руды</h4>
          <a href="{{route('jin-chan')}}" class="button-7 w-button">Перейти</a>
        </div>
        <div class="card-main card-2-main"><img src="/images/sinotruk.svg" width="60" alt="Expro" class="image-problem">
          <div class="tagline tagline-promo-40"><span class="text-span-8">TECH</span><br>КАРЬЕРНЫЕ САМОСВАЛЫ HOWO SINOTRUK</div>
          <h4 class="card-headline">Карьерные самосвалы HOWO 50/70/80 от официального дистрибьютора</h4>
          <a href="{{route('howo')}}" class="button-7 w-button">Перейти</a>
        </div>
        <div id="w-node-_11e54ea0-9187-e2ab-87a0-56eef32df8fd-2ff21472" class="card-main card-3-main"><img src="/images/ecolab-logotype1.svg" width="40" alt="Expro" class="image-problem">
          <div class="tagline tagline-promo-40"><span class="text-span-8">ECOLAB</span><br>ИННОВАЦИОННАЯ ЛАБОРАТОРИЯ</div>
          <h4 class="card-headline">Бесцианидные технологии<br>извлечения золота и серебра</h4>
          <a href="{{route('ecolab')}}" class="button-7 w-button">Перейти</a>
        </div>
        <div id="w-node-_2871c5e7-5d12-df73-9c70-26ff831bd706-2ff21472" class="card-main card-4"><img src="/images/support-1.svg" width="60" alt="Expro" class="image-menu">
          <h4 class="card-headline">Полный каталог запасных частей и агрегатов для карьерных самосвалов HOWO SINOTRUK 50/70/80</h4>
          <a href="{{route('sinotruk')}}" class="button-8 w-button">Перейти в каталог</a>
        </div>
        <div class="card-main-2 card-4"><img src="/images/question.svg" width="60" alt="Expro" class="image-menu">
          <h4 class="card-headline">Информация<br>(общая информация, F.A.Q.)<br></h4>
          <a href="{{route('contacts')}}" class="button-8 w-button">Перейти</a>
        </div>
      </div>
    </div>
  </div>
  <div class="main-info">
    <div class="div-block-42">
      <div class="feature-wrapper">
        <div class="feature_col"><img src="/images/strategy.svg" alt="Expro" class="feature_icon">
          <h4 class="h4">Лидерство<br></h4>
          <p class="feature_text">Успешная работа более 12 лет на международном рынке и первые позиции в сегменте на всей территории СНГ.<br></p>
        </div>
        <div class="feature_col"><img src="/images/idea.svg" alt="Expro" class="feature_icon">
          <h4 class="h4">Инновационость<br></h4>
          <p class="feature_text">Мы представляем крупнейшие мировые концерны, выпускающие инновационные и технологичные продукты для требование современного рынка.<br></p>
        </div>
        <div class="feature_col"><img src="/images/agreement-1.svg" alt="Expro" class="feature_icon">
          <h4 class="h4">Прозрачность<br></h4>
          <p class="feature_text">Выстраиваем исключительно долгосрочные отношения, мы - надежный партнер с понятными, честными и открытыми условиями.<br></p>
        </div>
        <div class="feature_col"><img src="/images/task.svg" alt="Expro" class="feature_icon">
          <h4 class="h4">Ответственность<br></h4>
          <p class="feature_text">Несем финансовую ответственность за весь перечень предоставляемых услуг и отвечаем за качество продукции.<br></p>
        </div>
      </div>
    </div>
  </div>
  <div class="div-block-61">
    <h1 class="heading-21">Быстрая консультация</h1>
    <div class="text-block-70">Вы можете задать интересующие вас вопросы,<br>написав нам в WhatsApp или Telegram,<br>а так же позвонив по телефону.<br>Мы оказываем квалифицированную техническую<br>поддержку и консультируем по общим вопросам.</div>
    <div class="w-layout-grid grid-21">
      <div class="div-block-62">
        <div class="div-block-57">
          <h2 class="heading-17">+7 (4162) 55 36 96<br></h2>
          <div class="text-block-69"><span class="text-span-14">Связаться с центральным офисом<br>(г. Благовещенск)</span></div>
          <div id="w-node-_3418255f-5dc6-5cab-4e6d-9db4d0003d23-2ff21472" class="div-block-58">
            <a href="https://api.whatsapp.com/send?phone=79622853696&amp;text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C%2C%20%D0%BD%D1%83%D0%B6%D0%BD%D0%B0%20%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8F%20%D0%BF%D0%BE%20%D0%BF%D1%80%D0%BE%D0%B4%D1%83%D0%BA%D1%86%D0%B8%D0%B8%20JIN%20CHAN%20%D0%97%D0%BE%D0%BB%D0%BE%D1%82%D0%B0%D1%8F%20%D0%A6%D0%B8%D0%BA%D0%B0%D0%B4%D0%B0" class="button-whatsapp-contact w-button">WhatsApp</a>
            <a href="https://tg.telepult.pro/Proximay" class="button-telegram-contact w-button">Telegram</a>
          </div>
        </div>
      </div>
      <div>
        <div class="div-block-57">
          <h2 class="heading-17">+7 (961) 955 57 75</h2>
          <div class="text-block-69"><span class="text-span-14">Связаться с дополнительным офисом<br>(г. Москва)</span></div>
          <div class="div-block-58">
            <a href="https://api.whatsapp.com/send?phone=79619555775&amp;text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C%2C%20%D0%BD%D1%83%D0%B6%D0%BD%D0%B0%20%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8F%20%D0%BF%D0%BE%20%D0%BF%D1%80%D0%BE%D0%B4%D1%83%D0%BA%D1%86%D0%B8%D0%B8%20JIN%20CHAN%20%D0%97%D0%BE%D0%BB%D0%BE%D1%82%D0%B0%D1%8F%20%D0%A6%D0%B8%D0%BA%D0%B0%D0%B4%D0%B0" class="button-whatsapp-contact w-button">WhatsApp</a>
            <a href="https://tg.telepult.pro/AlexNovoselov" class="button-telegram-contact w-button">Telegram</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="div-block-60">
    <div class="w-row">
      <div class="column-11 w-col w-col-3"><img src="/images/information_1.svg" loading="lazy" width="60" alt="Expro">
        <h2 class="heading-20">Общая информация<br>о деятельности компании EXPRO</h2>
      </div>
      <div class="column-12 w-col w-col-9">
        <p class="paragraph-9"><strong>КОМПАНИЯ EXPRO</strong> (ЭксПро) - официальный поставщик и дистрибьютор технологичной продукции из <strong>КНР</strong>. Карьерные самосвалы <strong>HOWO 50 HOWO 50 HOWO 50 SINOTRUK КНЯЗЬ РУДНИКОВ</strong>. Реагент <strong>JIN CHAN ЗОЛОТАЯ ЦИКАДА</strong> безопасный <strong>ЗАМЕНИТЕЛЬ ЦИАНИДА НАТРИЯ</strong>. Агрегаты и <strong>ЗАПАСНЫЕ ЧАСТИ</strong> для карьерных самосвалов <strong>HOWO SINOTRUK</strong> производства <strong>КИТАЯ</strong>. Лаборатория <strong>ECOLAB</strong> технологии <strong>БЕСЦИАНИДНОГО</strong> извлечения <strong>ЗОЛОТА И СЕРЕБРА</strong>.</p>
      </div>
    </div>
  </div>
@endsection