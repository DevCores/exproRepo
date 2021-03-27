@extends('layouts.app')

@section('title', 'ЭКСПРО ОФИЦИАЛЬНЫЙ ДИСТРИБЬЮТОР')
@section('description', 'Личный кабинет')

@section('og:title', 'ЭКСПРО ОФИЦИАЛЬНЫЙ ДИСТРИБЬЮТОР')
@section('og:description', 'Личный кабинет')

@section('twitter:title', 'ЭКСПРО ОФИЦИАЛЬНЫЙ ДИСТРИБЬЮТОР')
@section('twitter:description', 'Личный кабинет')

@section('content')
<div class="main-info">
    <div class="div-block-42">
      <div class="feature-wrapper">
<center>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Вы успешно вошли!') }}
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    |||<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>
                                    |||
                                    <a class="dropdown-item" href="/admin">
                                        {{ __('Админ Панель') }}
                                    </a> 
                                    |||

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    
                    </div>
                </div>
                </center>
      </div>
    </div>
  </div>

@endsection
