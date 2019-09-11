@extends('layouts.main')

@section('page_title')
    {{ __('admin::app.error.404.page-title') }}
@stop

@section('content-wrapper')
<!-- 
    <div class="error-container" style="width: 100%; display: flex; justify-content: center;">

        <div class="wrapper" style="display: flex; height: 60vh; width: 100%;
            justify-content: start; align-items: center;">

            <div class="error-box"  style="width: 50%">

                <div class="error-title" style="font-size: 100px;color: #5E5E5E">
                    {{ __('admin::app.error.404.name') }}
                </div>

                <div class="error-messgae" style="font-size: 24px;color: #5E5E5E; margin-top: 40px">
                    {{ __('admin::app.error.404.title') }}
                </div>

                <div class="error-description" style="margin-top: 20px;margin-bottom: 20px;color: #242424">
                    {{ __('admin::app.error.404.message') }}
                </div>

                <a href="{{ route('shop.home.index') }}">
                    {{ __('admin::app.error.go-to-home') }}
                </a>

            </div>

            <div class="error-graphic icon-404" style="margin-left: 10% ;"></div>

        </div>

    </div> -->

@endsection


@section('header')
<header class="header header_has-columns header_404">
@include('layouts.header_menu')
            <div class="header__row js-block-cnt">
                <div class="header__content header__content_about">
                    <div class="page-404">
                        <div class="page-404__code">4
                            <picture>
                                <source srcset="{{ url('assets/img/404/zero-been.webp') }}" type="image/webp">
                                <source srcset="{{ url('assets/img/404/zero-been.png') }}" type="image/png">
                                <img src="{{ url('assets/img/404/zero-been.png') }}" alt="Picture alt text">
                            </picture>4
                        </div>
                        <div class="page-404__text">Oops! Page doesn’t found</div>
                    </div>
                    <div class="header__text header__text_404">Try one of our services and get nice bonuses for the loyalty program!</div>
                    <div class="header__btn-group">
                        <a class="button button_blue header__button header__button_404" href="catalog.html">Shop</a>
                        <a class="button button_blue header__button header__button_404" href="bluebox.html">Blue Box</a>
                        <a class="button button_blue header__button header__button_404" href="newsletter-subscription.html">subscription</a>
                    </div>
                </div>
                <div class="header__picture header__picture_keep"></div>
            </div>
        </header>
            <div class="scroll-panel">
            <a class="scroll-panel__logo" href="/">
                <svg>
                    <use xlink:href="#logo"></use>
                </svg>
            </a>
            <div class="scroll-panel__indicator">
                <div class="scroll-panel__num">1/9</div>
                <div class="scroll-panel__track">
                    <div class="scroll-panel__thumb"></div>
                </div>
            </div>
            <button class="scroll-panel__slide-to slide-btn"><span class="slide-btn__text">Scroll down</span><span class="slide-btn__down">
            <svg>
              <use xlink:href="#arrow-down"></use>
            </svg></span><span class="slide-btn__up">
            <svg>
              <use xlink:href="#long-arrow"></use>
            </svg></span>
            </button>
        </div>
@endsection 
