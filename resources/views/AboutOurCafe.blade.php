@extends('layouts.main')

@section('header')
<header class="header header_has-columns header_our-cafe">
            <div class="header__top-panel">
                <button class="burger header__burger"><span class="burger__line"></span><span class="burger__line"></span><span class="burger__line"></span>
                </button>
                <a class="header__logo" href="/">
                    <svg>
                        <use xlink:href="#logo"></use>
                    </svg>
                </a>
                <nav class="nav header__nav nav_main">
                @include('layouts.header_menu')
                </nav>
                <div class="header__lang-switcher lang lang_main">
                    <button class="lang__trigger">En
                        <svg>
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </button>
                    <ul class="lang__list">
                        <li class="lang__current">
                            <button class="lang__trigger">En
                                <svg>
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </button>
                        </li>
                        <li class="lang__option">
                            <a href="#">Hu</a>
                        </li>
                        <li class="lang__option">
                            <a href="#">En</a>
                        </li>
                    </ul>
                </div>
                <div class="header__cart">
                    <button class="cart-btn js-box-trigger cart-link_main" data-target-id="cartModal">
                        <svg class="cart-btn__icon">
                            <use xlink:href="#shopping-bag"></use>
                        </svg><span class="cart-btn__counter">2</span>
                    </button>
                </div>
                <div class="header__auth">
                    <a href="newsletter-subscription.html">Subscribe</a>
                    <button class="js-open-popup" data-popup-id="signin">Sign in</button>
                </div>
            </div>
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
                    <div class="banner banner_our-cafe">
                        <h1 class="title banner__title"> <span class="color-blue">About</span><br>Our Cafe</h1>
                            <svg class="banner__icon" width="65px" height="65px">
                                <use xlink:href="#coffee-bag"></use>
                            </svg>
                            <p class="banner__text"><span>Coffee is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain Coffea species.</span>
                            </p>
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
            <div class="about-us js-block-cnt">
                <div class="container">
                    <div class="about-us__row">
                        <div class="about-us__col about-us__col_basis-360">
                            <div class="about-us__image">
                                <picture>
                                    <source srcset="{{ url('assets/img/our-cafe/about-image.webp') }}" type="image/webp">
                                    <source srcset="{{ url('assets/img/our-cafe/about-image.jpg') }}" type="image/jpeg">
                                    <img src="{{ url('assets/img/our-cafe/about-image.jpg') }}" alt="Picture alt text">
                                </picture>
                            </div>
                        </div>
                        <div class="about-us__col about-us__col_pl-60">
                            <div class="about-us__text-content">
                                <p><strong>While in Gozsdu you can have a limitless fun, at Rumbach you can choose from 14 coffee beans (twelve SO and two Blend) to find the best for your taste. </strong>
                                </p>
                                <p>Dont be afraid if you can't choose, our baristas are here to help you. Their job is to make the best drink from the fresh coffee. We also seeks to serve alternative coffee lovers, so you can also have V60, Chemex, Frenchpress and Aeropress.</p>
                                <p>In our grinder we put always fresh and best quality beans. We are buying and roasting green coffee from certified high quality producers. As it is important to us to adapting to our guests high expectations, we do usually tastings after coffee roasting, so we can support the quality. We roast our coffee with great care and carefully experimented method to maximize the enjoyment of the different flavours from different areas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advantages">
                <div class="container">
                    <div class="advantages__list swiper-container js-init-slider" data-options="ourCafeAdvantages">
                        <div style="height: auto;" class="swiper-wrapper">
                            <div class="swiper-slide advantages__item">
                                <div class="advantages__icon-wrapper">
                                    <svg class="advantages__icon advantages__icon_coffeemaker">
                                        <use xlink:href="#coffeeMaker"></use>
                                    </svg>
                                </div>
                                <h3 class="advantages__title">COFFEEMAKER</h3>
                                <p class="advantages__text">Coffee is a brewed drink prepared from roasted coffee beans the seeds of berries</p>
                            </div>
                            <div class="swiper-slide advantages__item">
                                <div class="advantages__icon-wrapper">
                                    <svg class="advantages__icon advantages__icon_coffee-cups">
                                        <use xlink:href="#coffee-cup-2"></use>
                                    </svg>
                                </div>
                                <h3 class="advantages__title">COFFEE CUPS</h3>
                                <p class="advantages__text">Coffee is a brewed drink prepared from roasted coffee beans the seeds of berries</p>
                            </div>
                            <div class="swiper-slide advantages__item">
                                <div class="advantages__icon-wrapper">
                                    <svg class="advantages__icon advantages__icon_coffee-grinder">
                                        <use xlink:href="#coffeeGrinder"></use>
                                    </svg>
                                </div>
                                <h3 class="advantages__title">COFFEE GRINDER</h3>
                                <p class="advantages__text">Coffee is a brewed drink prepared from roasted coffee beans the seeds of berries</p>
                            </div>
                            <div class="swiper-slide advantages__item">
                                <div class="advantages__icon-wrapper">
                                    <svg class="advantages__icon advantages__icon_espresso-machine">
                                        <use xlink:href="#espressoMachine"></use>
                                    </svg>
                                </div>
                                <h3 class="advantages__title">ESPRESSO MACHINE</h3>
                                <p class="advantages__text">Coffee is a brewed drink prepared from roasted coffee beans the seeds of berries</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Advantages icons-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position: absolute; left: -10000px; top: -1px; width: 1px; height: 1px; overflow: hidden;">
                    <symbol id="coffeeMaker" width="79" height="91" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.856 48.473a36.62 36.62 0 0 0 2.752-8.836c.048-.283.094-.552.123-.81.432-3.993.548-8.013.347-12.024-.037-1.604-.077-3.204-.072-4.789a54.242 54.242 0 0 1 .478-7.98c.184-2.16.92-4.24 2.138-6.046.251-.393.654-.669 1.116-.765a1.767 1.767 0 0 1 1.335.256c.446.381.845.814 1.188 1.287a9.76 9.76 0 0 0 1.728 1.811 7.76 7.76 0 0 0 3.39 1.438l1.51 4.087a11.38 11.38 0 0 0-4.028-.936c-4.62 0-4.62 5.43-4.62 13.65 0 7.937-4.821 21.233-7.7 21.233a6.31 6.31 0 0 1-.326-.007 27.66 27.66 0 0 1 .64-1.569zm65.92-45.48l-10.23 21.283H26.179l-5.15-13.953zm-6.51 24.323l3.407 7.547c-.004.01-.018.02-.054.02h-.863l-44.276.015a1.433 1.433 0 0 0-.173 0h-.78l3.46-7.599zm-19.685 60.65c-22.366 0-32.34-6.725-32.34-21.81-.028-10.403 3.828-20.454 10.836-28.24h43.007c7.008 7.786 10.864 17.837 10.836 28.24 0 15.085-9.973 21.81-32.34 21.81zM3.54 53.084c6.484 0 10.78-17.269 10.78-24.267 0-5.696 0-10.617 1.54-10.617 1.982.258 3.879.951 5.55 2.029l1.559 4.218a3.09 3.09 0 0 0-1.853 1.643l-3.406 7.582a2.945 2.945 0 0 0 .233 2.847c.179.26.397.493.648.687-6.74 8.19-10.423 18.41-10.43 28.952C8.162 88.424 28.375 91 43.58 91 58.786 91 79 88.424 79 66.157c-.008-10.533-3.684-20.744-10.413-28.93a3.05 3.05 0 0 0 .677-.708c.563-.848.651-1.92.233-2.846l-3.405-7.583a3.13 3.13 0 0 0-2.87-1.824h-.269L72.58 4.25a2.997 2.997 0 0 0-.376-3.06A3.104 3.104 0 0 0 69.3.033L18.711 7.6a1.54 1.54 0 0 0-1.094.724 1.496 1.496 0 0 0-.085.257 4.547 4.547 0 0 1-.671-.413 7.272 7.272 0 0 1-1.175-1.271 9.905 9.905 0 0 0-1.728-1.817 4.824 4.824 0 0 0-3.572-.89 4.78 4.78 0 0 0-3.151 1.88 15.142 15.142 0 0 0-2.798 7.518 57.59 57.59 0 0 0-.51 8.413c-.005 1.616.034 3.242.073 4.873a74.532 74.532 0 0 1-.325 11.584c-.027.23-.064.446-.112.726a33.331 33.331 0 0 1-2.544 8.106c-.843 1.96-1.453 3.376-.628 4.602a3.575 3.575 0 0 0 3.15 1.19z" fill="#64b2db"></path>
                        <path d="M38.159 48.125c-.714-.327-1.547.01-1.863.754a45.64 45.64 0 0 0-3.285 12.467c-.046.389.058.78.289 1.088a1.398 1.398 0 0 0 1.112.566c.714 0 1.314-.557 1.4-1.296A42.643 42.643 0 0 1 38.88 50.07c.315-.745-.007-1.616-.72-1.946z" fill="#64b2db"></path>
                        <g>
                            <path d="M41.357 41.485s-.435.493-1.112 1.422c-.453.624-.26 1.461.43 1.87.69.41 1.618.237 2.07-.387.565-.778.934-1.203.955-1.228.487-.586.369-1.416-.267-1.87-.635-.455-1.557-.37-2.076.193z" fill="#64b2db"></path>
                        </g>
                    </symbol>
                    <symbol id="coffeeGrinder" width="79" height="91" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 59h39v15H14zm-1.5 18h42a1.5 1.5 0 0 0 1.5-1.5v-18a1.5 1.5 0 0 0-1.5-1.5h-42a1.5 1.5 0 0 0-1.5 1.5v18a1.5 1.5 0 0 0 1.5 1.5z" fill="#64b2db"></path>
                        <path d="M33 70a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-9a6 6 0 1 0 0 12 6 6 0 0 0 0-12z" fill="#64b2db"></path>
                        <g>
                            <path d="M72.923 12.123h-6.077a3.033 3.033 0 0 1-3.038-3.028 3.033 3.033 0 0 1 3.038-3.028h6.077a3.033 3.033 0 0 1 3.039 3.028 3.033 3.033 0 0 1-3.039 3.028zm-42.538.01V6.067a3.036 3.036 0 0 1 3.038-3.034 3.036 3.036 0 0 1 3.039 3.034v6.066zm18.145 13.64H18.325c.775-6.056 5.94-10.597 12.064-10.606h6.079c6.123.008 11.288 4.55 12.062 10.606zm9.19 6.077H15.192v3.033h42.082a10.647 10.647 0 0 1-10.185 7.584h-27.34A10.647 10.647 0 0 1 9.57 34.883h2.582V31.85H9.115v-3.033h48.606zm6.088 13.65v4.55H3.038V45.5zm-3.039 34.883H6.077v-27.3h54.692zm3.039 7.584H3.038v-4.55h60.77zm3.038-84.934a6.075 6.075 0 0 0-5.861 4.55H39.5V6.067C39.5 2.717 36.78 0 33.423 0a6.072 6.072 0 0 0-6.077 6.067v6.37A15.21 15.21 0 0 0 15.27 25.783H7.596c-.839 0-1.52.68-1.52 1.517v4.55a13.619 13.619 0 0 0 5.098 10.617H1.519C.68 42.467 0 43.146 0 43.983v7.584c0 .837.68 1.516 1.52 1.516h1.518v27.3H1.52C.68 80.383 0 81.063 0 81.9v7.583C0 90.321.68 91 1.52 91h63.807c.839 0 1.52-.679 1.52-1.517V81.9c0-.838-.681-1.517-1.52-1.517h-1.52v-27.3h1.52c.839 0 1.52-.679 1.52-1.516v-7.584c0-.837-.681-1.516-1.52-1.516h-9.655A13.619 13.619 0 0 0 60.77 31.85V27.3c0-.838-.68-1.517-1.519-1.517h-7.674A15.21 15.21 0 0 0 39.5 12.437v-1.82h21.485a6.075 6.075 0 0 0 5.861 4.55h6.077A6.072 6.072 0 0 0 79 9.1c0-3.35-2.72-6.067-6.077-6.067z" fill="#64b2db"></path>
                        </g>
                    </symbol>
                    <symbol id="espressoMachine" width="84" height="84" xmlns="http://www.w3.org/2000/svg">
                        <path d="M74.2 28H61.6a1.4 1.4 0 0 0-1.4 1.4h-2.8v-4.2h16.8zm7 8.4H63v-5.6h18.2zm-7 40.6H49.902a12.645 12.645 0 0 0 3.976-5.634A8.4 8.4 0 0 0 53.2 54.6H30.8a1.4 1.4 0 0 0-1.4 1.4v11.2c0 3.81 1.729 7.414 4.698 9.8H9.8V25.2h16.8V42a4.2 4.2 0 0 0 4.2 4.2h7v4.2a1.4 1.4 0 0 0 1.4 1.4h5.6a1.4 1.4 0 0 0 1.4-1.4v-4.2h7a4.2 4.2 0 0 0 4.2-4.2v-4.2h2.8a1.4 1.4 0 0 0 1.4 1.4h12.6zM51.8 60.318a17.554 17.554 0 0 0-2.1-.118 14.172 14.172 0 0 0-6.72 1.527A11.304 11.304 0 0 1 37.45 63a11.043 11.043 0 0 1-5.25-1.14V57.4h19.6zm7 2.682a5.6 5.6 0 0 1-4.262 5.42c.04-.401.062-.808.062-1.22v-9.601A5.6 5.6 0 0 1 58.8 63zm-26.6 1.898c1.675.637 3.458.943 5.25.902a14.13 14.13 0 0 0 6.699-1.526A11.34 11.34 0 0 1 49.7 63c.703 0 1.405.055 2.1.164V67.2c0 5.412-4.388 9.8-9.8 9.8-5.412 0-9.8-4.388-9.8-9.8zm49 16.302H2.8v-1.4h78.4zM29.4 29.4h11.2v7H29.4zm11.2 16.8h2.8V49h-2.8zm14-4.2a1.4 1.4 0 0 1-1.4 1.4H30.8a1.4 1.4 0 0 1-1.4-1.4v-2.8H42a1.4 1.4 0 0 0 1.4-1.4V28a1.4 1.4 0 0 0-1.4-1.4H29.4v-1.4h25.2zm5.6-7h-2.8v-2.8h2.8zM2.8 21V4.2a1.4 1.4 0 0 1 1.4-1.4h75.6a1.4 1.4 0 0 1 1.4 1.4V21a1.4 1.4 0 0 1-1.4 1.4H4.2A1.4 1.4 0 0 1 2.8 21zm77 4.2A4.2 4.2 0 0 0 84 21V4.2A4.2 4.2 0 0 0 79.8 0H4.2A4.2 4.2 0 0 0 0 4.2V21a4.2 4.2 0 0 0 4.2 4.2H7V77H1.4A1.4 1.4 0 0 0 0 78.4v4.2A1.4 1.4 0 0 0 1.4 84h81.2a1.4 1.4 0 0 0 1.4-1.4v-4.2a1.4 1.4 0 0 0-1.4-1.4H77V39.2h5.6a1.4 1.4 0 0 0 1.4-1.4v-8.4a1.4 1.4 0 0 0-1.4-1.4H77v-2.8z" fill="#64b2db"></path>
                        <path d="M42.505 6.833a5.672 5.672 0 1 1 0 11.344 5.672 5.672 0 0 1 0-11.344zM42.5 21a8.5 8.5 0 1 0-8.5-8.5 8.509 8.509 0 0 0 8.5 8.5z" fill="#64b2db"></path>
                        <g>
                            <path d="M26.296 15.25H12.714v-5.5h13.582zM29 16.625v-8.25C29 7.615 28.392 7 27.643 7H11.357C10.607 7 10 7.616 10 8.375v8.25c0 .76.608 1.375 1.357 1.375h16.286c.75 0 1.357-.616 1.357-1.375z" fill="#64b2db"></path>
                        </g>
                    </symbol>
                </svg>
            </div>
            <div class="our-cafe-subscribe">
                <div class="container">
                    <h2 class="title our-cafe-subscribe__title"><span class="font-light">Try </span><span class="color-blue">THE BEST coffee </span><span class="font-light">in the city</span>
                    </h2>
                    <a class="button button_blue our-cafe-subscribe__button" href="{{ url('/coffeesubscription') }}">Buy Subscribe</a>
                </div>
            </div>
        </main>
@endsection