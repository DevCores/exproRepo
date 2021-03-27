@extends('layouts.app')

@section('title', 'ЭКСПРО ОФИЦИАЛЬНЫЕ НОВОСТИ КОМПАНИИ АКТУАЛЬНЫЕ СОБЫТИЯ')
@section('description', 'ЭКСПРО АКТАЛЬНЫЕ СОБЫТИ И НОВОСТИ КОМПАНИИ И ИНФОРМАЦИИ О ПРОДУКЦИИ JIN CHAN HOWO SINOTRUK')

@section('og:title', 'ЭКСПРО ОФИЦИАЛЬНЫЕ НОВОСТИ КОМПАНИИ АКТУАЛЬНЫЕ СОБЫТИЯ')
@section('og:description', 'ЭКСПРО АКТАЛЬНЫЕ СОБЫТИ И НОВОСТИ КОМПАНИИ И ИНФОРМАЦИИ О ПРОДУКЦИИ JIN CHAN HOWO SINOTRUK')

@section('twitter:title', 'ЭКСПРО ОФИЦИАЛЬНЫЕ НОВОСТИ КОМПАНИИ АКТУАЛЬНЫЕ СОБЫТИЯ')
@section('twitter:description', 'ЭКСПРО АКТАЛЬНЫЕ СОБЫТИ И НОВОСТИ КОМПАНИИ И ИНФОРМАЦИИ О ПРОДУКЦИИ JIN CHAN HOWO SINOTRUK')

@section('keywords', 'Москва, EXPRO, Благовещенск, компания, горно-обогатительный реагент, НОВОСТЬ')

@section('content')
<h3 class="heading-16">Новости и актуальные события</h3>
@foreach($posts as $post)
@if($post->status == 'PUBLISHED')
  <div class="newest-001">
    <div class="w-layout-grid grid-20">
      <div id="w-node-_7c61ba0d-dfc8-3336-76b1-e7dfcef5d94b-27153bdc">
        <div class="text-block-74">{{ strtoupper($post->category->name)}}</div>
        <div class="text-block-75"><strong>{{Date::parse($post->created_at)->format('j F Y года')}}</strong><br>{{ $post->title}}</div>
      </div>
      <div id="w-node-_7c61ba0d-dfc8-3336-76b1-e7dfcef5d953-27153bdc"><img src="/storage/{{$post->image}}" loading="lazy" sizes="(max-width: 479px) 94vw, 37vw" srcset="/storage/{{str_replace('.' , '-medium.' ,$post->image)}} 500w, /storage/{{str_replace('.' , '-cropped.' ,$post->image)}} 300w, /storage/{{str_replace('.' , '-small.' ,$post->image)}} 250w" alt="Expro" class="image-21"></div>
      <div id="w-node-_7c61ba0d-dfc8-3336-76b1-e7dfcef5d955-27153bdc">
        <div class="text-block-76">{!! $post->body!!}</div>
        @isset($post->meta_description)
        <a href="{{ $post->meta_keywords}}" class="button-15 w-button">{{ $post->meta_description}}</a>
        @endisset
        @if($post->seo_title)
        <a href="{{ $post->seo_title}}" class="link-20">Ссылка на статью</a>
        @endif
      </div>
    </div>
  </div>
@endif
@endforeach
@endsection
