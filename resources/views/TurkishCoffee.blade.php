@extends('layouts.main')

@section('header')
<header class="header header_has-columns header_turkish">

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
                    <div class="banner banner_gift banner_flavored">
                        <h1 class="title banner__title color-blue">Turkish coffee</h1>
                        <p class="banner__text">With our collection of over 20 types of flavored coffee, we're sure you'll find something to fit your coffee needs. </p>
                    </div>
                </div>
                <div class="header__picture header__picture_keep header__picture_center">
                    <div class="btn-media" role="button" tabindex="0" aria-label="watch the video">
                        <div class="btn-media__outer"></div>
                        <div class="btn-media__button">
                            <svg width="60" height="60" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42.772 30.621l-19.408 11.2a.13.13 0 0 1-.146 0c-.073-.041-.073-.098-.073-.126v-22.4c0-.028 0-.085.073-.127a.148.148 0 0 1 .075-.022c.033 0 .057.014.071.022l19.408 11.2a.13.13 0 0 1 .073.127c0 .084-.05.113-.073.126zm1.583-2.97L24.937 16.446a3.26 3.26 0 0 0-3.291 0A3.256 3.256 0 0 0 20 19.295v22.41c0 1.19.615 2.254 1.646 2.85.515.296 1.08.445 1.645.445s1.13-.149 1.646-.446l19.418-11.205A3.256 3.256 0 0 0 46 30.499c0-1.188-.615-2.253-1.645-2.848z"></path>
                                <path d="M55.959 36.96c-1.858 6.932-6.304 12.726-12.52 16.315-6.215 3.588-13.456 4.541-20.388 2.684-6.933-1.858-12.727-6.304-16.316-12.52-3.588-6.215-4.542-13.456-2.684-20.388 1.858-6.933 6.304-12.727 12.52-16.315 4.14-2.39 8.734-3.612 13.39-3.612 2.334 0 4.684.307 6.998.927 6.932 1.858 12.727 6.304 16.315 12.52 3.589 6.215 4.542 13.456 2.685 20.388zm.01-21.954C51.965 8.07 45.5 3.108 37.761 1.035 30.024-1.038 21.943.025 15.006 4.03 8.07 8.036 3.108 14.502 1.035 22.239-1.038 29.976.025 38.057 4.03 44.994 8.035 51.93 14.502 56.892 22.24 58.965A30.15 30.15 0 0 0 30.049 60c5.196 0 10.324-1.363 14.945-4.03 6.936-4.005 11.898-10.472 13.971-18.209 2.073-7.737 1.01-15.818-2.996-22.755z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
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
            <article class="turkich-products js-block-cnt">
                <div class="container">
                    <h2 class="alt-title">You might also like:</h2>
                    <ul class="turkich-products__list">
                        <li class="alt-product-tile">
                            <div class="alt-product-tile__image">
                                <picture>
                                    <source srcset="{{ url('assets/img/tmp/goods/Cezve.webp') }}" type="image/webp">
                                    <source srcset="{{ url('assets/img/tmp/goods/Cezve.png') }}" type="image/png">
                                    <img src="{{ url('assets/img/tmp/goods/Cezve.png') }}" alt="Picture alt text">
                                </picture>
                            </div>
                            <div class="alt-product-tile__text">
                                <h3 class="alt-product-tile__title">Cezve</h3><span class="alt-product-tile__info">300 ml</span><span class="alt-product-tile__price">1000 HUF</span>
                                <a href="{{ url('/categories/coffee') }}"><button class="button button_blue alt-product-tile__button">Buy</button></a>
                            </div>
                        </li>
                        <li class="alt-product-tile">
                            <div class="alt-product-tile__image">
                                <picture>
                                    <source srcset="{{ url('assets/img/tmp/goods/blue.webp') }}" type="image/webp">
                                    <source srcset="{{ url('assets/img/tmp/goods/blue.png') }}" type="image/png">
                                    <img src="{{ url('assets/img/tmp/goods/blue.png') }}" alt="Picture alt text">
                                </picture>
                            </div>
                            <div class="alt-product-tile__text">
                                <h3 class="alt-product-tile__title">Coffee</h3><span class="alt-product-tile__info">300 ml</span><span class="alt-product-tile__price">1000 HUF</span>
                                <a href="{{ url('/categories/coffee') }}"><button class="button button_blue alt-product-tile__button">Buy</button></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </article>
            <div class="choose-your-box js-block-cnt">
                <div class="container">
                    <h2 class="alt-title">Gift box</h2>
                    <div class="choose-your-box__items swiper-container js-init-slider" data-options="blue-box-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product-tile product-tile_has-shadow product-tile_full-img choose-your-box__product">
                                    <div class="product-tile__content">
                                        <div class="product-tile__image">
                                            <a href="{{ url('/products/4x250g-coffee-beans') }}">
                                                <picture>
                                                    <source srcset="{{ url('assets/img/tmp/goods/box.webp') }}" type="image/webp">
                                                    <source srcset="{{ url('assets/img/tmp/goods/box.jpg') }}" type="image/jpeg">
                                                    <img src="{{ url('assets/img/tmp/goods/box.jpg') }}" alt="product image">
                                                </picture>
                                            </a>
                                        </div>
                                        <h3 class="product-tile__name">
                                            <a href="{{ url('/products/4x250g-coffee-beans') }}">4x250g Coffee beans</a>
                                        </h3>
                                        <div class="product-tile__price">9 150 HUF</div>
                                    </div>
                                    <div class="product-tile__hidden">
                                        <a href="{{ url('/products/4x250g-coffee-beans') }}">
                                            <div class="product-tile__buttons">
                                                <button class="button button_transparent">Add to cart</button>
                                                <button class="button button_blue">Add to Blue box</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-tile product-tile_has-shadow product-tile_full-img choose-your-box__product">
                                    <div class="product-tile__content">
                                        <div class="product-tile__image">
                                            <a href="{{ url('/products/4x250g-coffee-beans') }}">
                                                <picture>
                                                    <source srcset="{{ url('assets/img/tmp/goods/box.webp') }}" type="image/webp">
                                                    <source srcset="{{ url('assets/img/tmp/goods/box.jpg') }}" type="image/jpeg">
                                                    <img src="{{ url('assets/img/tmp/goods/box.jpg') }}" alt="product image">
                                                </picture>
                                            </a>
                                        </div>
                                        <h3 class="product-tile__name">
                                            <a href="{{ url('/products/4x250g-coffee-beans') }}">4x250g Coffee beans</a>
                                        </h3>
                                        <div class="product-tile__price">9 150 HUF</div>
                                    </div>
                                    <div class="product-tile__hidden">
                                        <a href="{{ url('/products/4x250g-coffee-beans') }}">
                                            <div class="product-tile__buttons">
                                                <button class="button button_transparent">Add to cart</button>
                                                <button class="button button_blue">Add to Blue box</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-tile product-tile_has-shadow product-tile_full-img choose-your-box__product">
                                    <div class="product-tile__content">
                                        <div class="product-tile__image">
                                            <a href="{{ url('/products/4x250g-coffee-beans') }}">
                                                <picture>
                                                    <source srcset="{{ url('assets/img/tmp/goods/box.webp') }}" type="image/webp">
                                                    <source srcset="{{ url('assets/img/tmp/goods/box.jpg') }}" type="image/jpeg">
                                                    <img src="{{ url('assets/img/tmp/goods/box.jpg') }}" alt="product image">
                                                </picture>
                                            </a>
                                        </div>
                                        <h3 class="product-tile__name">
                                            <a href="{{ url('/products/4x250g-coffee-beans') }}">4x250g Coffee beans</a>
                                        </h3>
                                        <div class="product-tile__price">9 150 HUF</div>
                                    </div>
                                    <div class="product-tile__hidden">
                                        <a href="{{ url('/products/4x250g-coffee-beans') }}">
                                            <div class="product-tile__buttons">
                                                <button class="button button_transparent">Add to cart</button>
                                                <button class="button button_blue">Add to Blue box</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="choose-your-box__show-more">
                        <a href="{{ url('/categories/coffee') }}">
                        <button class="button button_blue button_icon">
                            <svg>
                                <use xlink:href="#update-arrow"></use>
                            </svg><span>More classic</span>
                        </button>
                        </a>
                    </div>
                </div>
            </div>
        </main>

@endsection
