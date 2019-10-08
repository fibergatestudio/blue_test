@extends('layouts.main')

@section('header')

<header class="header header_has-columns header_capsules">

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
                    <div class="banner banner_capsules">
                        <h1 class="title banner__title color-blue">Press me for <br>a coffee</h1>
                            <svg class="banner__icon" width="80" height="47" xmlns="http://www.w3.org/2000/svg">
                                <path d="M31.61 44.526H7.393l-2.18-16.079H33.79zm2.18-38.342l-2.18 16.08H7.393l-2.18-16.08zm2.055-3.71c.346 0 .629.278.629.618 0 .34-.283.619-.63.619H3.145a.626.626 0 0 1-.629-.619c0-.34.283-.618.63-.618zm0 22.263c.346 0 .629.276.629.613a.623.623 0 0 1-.63.614H3.145a.623.623 0 0 1-.629-.614c0-.337.283-.613.63-.613zM2.665 28.4l2.38 17.526c.009.065.04.117.06.177.02.067.033.131.063.193.04.082.095.15.15.22.04.05.074.103.12.146.074.067.158.114.244.161.049.027.09.064.143.084.145.058.3.093.466.093h26.421c.164 0 .32-.035.465-.093.053-.02.095-.057.144-.084.085-.048.171-.094.243-.16.048-.044.079-.097.12-.148.056-.07.11-.136.15-.219.03-.062.044-.127.064-.194.02-.06.05-.111.06-.176L36.337 28.4C37.84 28.17 39 26.9 39 25.355c0-1.705-1.41-3.092-3.145-3.092h-.002-1.706l2.188-16.127C37.84 5.906 39 4.636 39 3.092c0-1.705-1.41-3.092-3.146-3.092H3.144C1.41 0 0 1.387 0 3.092c0 1.545 1.16 2.815 2.666 3.045l2.188 16.126H3.145C1.41 22.263 0 23.65 0 25.355 0 26.9 1.16 28.17 2.666 28.4z" fill="#fff"></path>
                                <path d="M60.495 44.474c-9.362 0-16.979-7.617-16.979-16.979 0-9.362 7.617-16.979 16.979-16.979 9.362 0 16.979 7.617 16.979 16.979 0 9.362-7.617 16.979-16.979 16.979zM60.5 8C49.747 8 41 16.747 41 27.5S49.747 47 60.5 47 80 38.253 80 27.5 71.253 8 60.5 8z" fill="#fff"></path>
                                <path d="M60.5 38.575c-6.604 0-11.978-5.19-11.978-11.57s5.374-11.57 11.978-11.57 11.978 5.19 11.978 11.57-5.374 11.57-11.978 11.57zM60.5 13C52.505 13 46 19.28 46 27s6.505 14 14.5 14S75 34.72 75 27s-6.505-14-14.5-14z" fill="#fff"></path>
                                <path d="M61.023 27.268c-1.776-2.322-1.012-4.016-.478-4.753 2.198.263 3.91 2.06 3.91 4.254v2.46c0 1.487-.782 2.799-1.968 3.573.346-1.524.132-3.45-1.464-5.534zm-5.478 1.964l.002-.005v-2.452l.001-.006c0-1.484.78-2.797 1.966-3.571-.347 1.524-.133 3.45 1.463 5.534 1.78 2.327 1.009 4.022.48 4.753-2.196-.262-3.91-2.058-3.912-4.253zm4.49-9.23L60 20c-3.856 0-6.993 3.032-6.998 6.76L53 26.77v2.455L53 29.23c0 3.732 3.141 6.77 7 6.77s7-3.038 7-6.77v-2.461c0-3.714-3.11-6.738-6.944-6.767h-.022z" fill="#fff"></path>
                            </svg>
                            <ul class="list banner__list">
                                <li>Quickly</li>
                                <li>Simply</li>
                                <li>Specialty</li>
                            </ul>
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
            <section class="our-offers">
                <div class="container">
                    <h2 class="alt-title">Our offers:</h2>
                    <ul class="our-offers__list">
                        <li>
                            <a class="our-offers__card" href="{{ url('/products/home-10-capsules') }}">
                                <div class="our-offers__image">
                                    <picture>
                                        <source srcset="{{ url('assets/img/capsules/goods/pr-1.webp') }}" type="image/webp">
                                        <source srcset="{{ url('assets/img/capsules/goods/pr-1.jpg') }}" type="image/jpeg">
                                        <img src="{{ url('assets/img/capsules/goods/pr-1.jpg') }}" alt="Picture alt text">
                                    </picture>
                                </div>
                                <div class="our-offers__title">Home <br>10 capsules</div>
                                    <div class="our-offers__price">990 HUF</div>
                            </a>
                        </li>
                        <li>
                            <a class="our-offers__card" href="{{ url('/products/office-100-capsules') }}">
                                <div class="our-offers__image">
                                    <picture>
                                        <source srcset="{{ url('assets/img/capsules/goods/pr-2.webp') }}" type="image/webp">
                                        <source srcset="{{ url('assets/img/capsules/goods/pr-2.jpg') }}" type="image/jpeg">
                                        <img src="{{ url('assets/img/capsules/goods/pr-2.jpg') }}" alt="Picture alt text">
                                    </picture>
                                </div>
                                <div class="our-offers__title">Office<br>100 capsules </div>
                                    <div class="our-offers__price">990 HUF</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <article class="about-us about-us_bbg js-block-cnt">
                <div class="container">
                    <header class="about-us__bbg-header">
                        <h2 class="title color-blue">Blue Bird Coffee</h2>
                        <h3>description</h3>
                    </header>
                    <div class="about-us__row">
                        <div class="about-us__col about-us__col_basis-50-p about-us__col_pr-38">
                            <div class="about-us__text-content about-us__text-content_limited-text">
                                <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </strong>
                                </p>
                            </div>
                        </div>
                        <div class="about-us__col about-us__col_basis-50-p about-us__col_pl-38">
                            <div class="about-us__text-content about-us__text-content_limited-text">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <div class="goods goods_lightgray goods_scroll-panel js-block-cnt">
                <div class="container goods__container">
                    <h2 class="goods__title">Recommended products:</h2>
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
            </div>
        </main>

@endsection