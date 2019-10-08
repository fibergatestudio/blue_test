@extends('layouts.main')

@section('header')

<header class="header header_has-columns header_beans">

                @include('layouts.header_menu')

            <!-- cart popup-->
            <form class="cart-modal" id="cartModal">
                <button class="cart-modal__close js-close-modal" type="button">
                    <svg>
                        <use xlink:href="#rounded-close"></use>
                    </svg>
                </button>
                <h2 class="cart-modal__header">Cart (<span id="cartItems">2</span>)</h2>
                <div class="cart-modal__list">
                    <div class="cart-sm-product cart-modal__item">
                        <div class="cart-sm-product__image">
                            <img src="{{ url('assets/img/tmp/goods/green-sm.png') }}" alt="Blue Bird Blend ">
                        </div>
                        <h3 class="cart-sm-product__title">Blue Bird Blend </h3><span class="cart-sm-product__price">2150 HUF</span>
                    </div>
                    <div class="cart-sm-product cart-modal__item">
                        <div class="cart-sm-product__image">
                            <img src="{{ url('assets/img/tmp/goods/coffee-machine.png') }}" alt="Coffee Machine">
                        </div>
                        <h3 class="cart-sm-product__title">Coffee Machine</h3><span class="cart-sm-product__price">10 000 HUF</span>
                    </div>
                    <div class="cart-sm-product cart-modal__item">
                        <div class="cart-sm-product__image">
                            <img src="{{ url('assets/img/tmp/goods/cup.png') }}" alt="Cup">
                        </div>
                        <h3 class="cart-sm-product__title">Cup</h3><span class="cart-sm-product__price">3 000 HUF</span>
                    </div>
                    <div class="cart-modal__price">
                        <div class="cart-modal__row"><span class="cart-modal__label">Shipping:</span><span>Free</span>
                        </div>
                        <div class="cart-modal__row"><span class="cart-modal__label">Total:</span><span class="cart-modal__total">19 300 HUF</span>
                        </div>
                    </div>
                </div>
                <div class="cart-modal__buttons">
                    <input class="button button_blue cart-modal__submit" type="submit" value="Make a purchase">
                    <a class="cart-modal__back" href="#">Back to product list</a>
                </div>
            </form>
            <div class="header__row js-block-cnt">
                <div class="header__content">
                    <div class="banner banner_gift banner_beans">
                        <h1 class="title banner__title color-blue">Coffee beans</h1>
                        <p class="banner__text">About our coffee beans</p>
                        <ul class="list banner__list">
                            <li>Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit, sed do eiusmod tempor.</li>
                            <li>Amet, consectetur adipiscing elit, sed do <br>eiusmod tempor.</li>
                        </ul>
                    </div>
                </div>
                <div class="header__picture"></div>
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

@section('content')

<main>
            <div class="goods goods_lightgray goods_scroll-panel js-block-cnt">
                <div class="container goods__container">
                    <h2 class="goods__title">Something Classic:</h2>
                    <div class="goods__slider swiper-container js-init-slider" data-options="goodsSlider">
                        <div class="swiper-wrapper">
                            @foreach ($all_prod as $prod)
                                <div class="swiper-slide">
                                    @include ('shop::products.list.maincard', ['product' => $prod])
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination goods__pagination"></div>
                    </div>
                    <button class="slider-control slider-control_prev goods__control goods__control_prev">
                        <svg>
                            <use xlink:href="#slider-arrow"></use>
                        </svg>
                    </button>
                    <button class="slider-control slider-control_next goods__control goods__control_next">
                        <svg>
                            <use xlink:href="#slider-arrow"></use>
                        </svg>
                    </button>
                </div>
                <div class="goods__load-more">
                    <a href="{{ url('/categories/coffee') }}">
                    <button class="button button_blue button_icon">
                        <svg>
                            <use xlink:href="#update-arrow"></use>
                        </svg><span>More classic</span>
                    </button>
                    </a>
                </div>
            </div>
            <div class="goods goods_scroll-panel js-block-cnt">
                <div class="container goods__container">
                    <h2 class="goods__title">Something Specialty:</h2>
                    <div class="goods__slider swiper-container js-init-slider" data-options="goodsSlider">
                        <div class="swiper-wrapper">
                        @foreach ($all_prod as $prod)
                            <div class="swiper-slide">
                                @include ('shop::products.list.maincard', ['product' => $prod])
                            </div>
                        @endforeach
                        </div>
                        <div class="swiper-pagination goods__pagination"></div>
                    </div>
                    <button class="slider-control slider-control_prev goods__control goods__control_prev">
                        <svg>
                            <use xlink:href="#slider-arrow"></use>
                        </svg>
                    </button>
                    <button class="slider-control slider-control_next goods__control goods__control_next">
                        <svg>
                            <use xlink:href="#slider-arrow"></use>
                        </svg>
                    </button>
                </div>
                <div class="goods__load-more">
                    <a href="{{ url('/categories/coffee') }}">
                    <button class="button button_blue button_icon">
                        <svg>
                            <use xlink:href="#update-arrow"></use>
                        </svg><span>More specialty</span>
                    </button>
                    </a>
                </div>
            </div>
        </main>

@endsection