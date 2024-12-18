@extends('layouts.app')

@section('title', 'Восстановление')
@section('description', 'Если вы потеряли доступ')

@section('og:title', 'Восстановление')
@section('og:description', 'Если вы потеряли доступ')

@section('twitter:title', 'Восстановление')
@section('twitter:description', 'Если вы потеряли доступ')

@section('content')
<div class="main-info">
    <div class="div-block-42">
      <div class="feature-wrapper">
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection
