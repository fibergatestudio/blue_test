@extends('layouts.main')

@section('header')

<header class="header header_has-columns header_about-us">
            <div class="header__top-panel">
                <button class="burger header__burger"><span class="burger__line"></span><span class="burger__line"></span><span class="burger__line"></span>
                </button>
                <a class="header__logo" href="/">
                    <svg>
                        <use xlink:href="#logo"></use>
                    </svg>
                </a>
                @include('layouts.header_menu')
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
                <a class="header__cart cart-link cart-link_main" href="shopping-cart.html">
                    <svg class="cart-link__icon">
                        <use xlink:href="#shopping-bag"></use>
                    </svg><span class="cart-link__counter">2</span>
                </a>
                <div class="header__auth">
                    <a href="newsletter-subscription.html">Subscribe</a>
                    <button class="js-open-popup" data-popup-id="signin">Sign in</button>
                </div>
            </div>
            <div class="header__row js-block-cnt">
                <div class="header__content">
                    <div class="banner banner_bbc">
                        <h1 class="title banner__title"> <span class="color-blue">About</span><br>Blue Bird Cafe</h1>
                            <svg class="banner__icon" width="62" height="66" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 5h7v2h-7z" fill="#fff"></path>
                                <path d="M33 5h4v2h-4z" fill="#fff"></path>
                                <path d="M59.796 22.188c0 .292-.117.573-.325.779l-1.107 1.1a1.14 1.14 0 0 1-1.566 0l-.19-.19a3.337 3.337 0 0 0-4.698 0l-.19.19a1.14 1.14 0 0 1-1.566 0l-.19-.19a3.337 3.337 0 0 0-4.698 0l-.19.19c-.433.43-1.133.43-1.566 0l-.19-.19a3.337 3.337 0 0 0-4.698 0l-.19.19a1.14 1.14 0 0 1-1.566 0l-.19-.19a3.337 3.337 0 0 0-4.698 0l-.19.19a1.14 1.14 0 0 1-1.566 0l-.19-.19a3.337 3.337 0 0 0-4.698 0l-.19.19a1.14 1.14 0 0 1-1.566 0l-.19-.19a3.337 3.337 0 0 0-4.698 0l-.19.19c-.433.43-1.133.43-1.566 0l-.19-.19a3.337 3.337 0 0 0-4.698 0l-.19.19a1.14 1.14 0 0 1-1.566 0l-.19-.19a3.337 3.337 0 0 0-4.698 0l-.19.19a1.14 1.14 0 0 1-1.566 0l-1.107-1.1a1.096 1.096 0 0 1-.325-.779V19.8h57.582zM49.813 63.8v-2.2h1.107c.611 0 1.107-.493 1.107-1.1 0-.607-.496-1.1-1.107-1.1H35.423c-.612 0-1.107.493-1.107 1.1 0 .607.495 1.1 1.107 1.1h1.107v2.2h-6.642V29.7c0-.607-.496-1.1-1.107-1.1H8.857c-.612 0-1.107.493-1.107 1.1v34.1H5.536V26.388c.467-.16.89-.424 1.24-.77l.19-.19a1.14 1.14 0 0 1 1.566 0l.19.19a3.336 3.336 0 0 0 4.696 0l.19-.19a1.111 1.111 0 0 1 1.566 0l.19.19a3.336 3.336 0 0 0 4.696 0l.19-.19a1.111 1.111 0 0 1 1.565 0l.19.19a3.417 3.417 0 0 0 4.696 0l.19-.19a1.111 1.111 0 0 1 1.566 0l.19.19a3.336 3.336 0 0 0 4.696 0l.19-.19a1.111 1.111 0 0 1 1.565 0l.19.19a3.336 3.336 0 0 0 4.696 0l.19-.19a1.111 1.111 0 0 1 1.566 0l.19.19a3.336 3.336 0 0 0 4.696 0l.19-.19a1.111 1.111 0 0 1 1.565 0l.19.19a3.336 3.336 0 0 0 4.697 0l.19-.19a1.14 1.14 0 0 1 1.565 0l.19.19c.35.346.775.61 1.241.77V63.8zm-11.063 0v-2.2h8.857v2.2zm-28.786 0v-33H27.69v33zM5.196 11h51.618l2.491 6.6h-56.6zm.34-8.8h50.918v6.6H5.536zm56.456 16.461a1.12 1.12 0 0 0-.062-.347L58.68 9.7V1.1c0-.607-.496-1.1-1.108-1.1H4.43C3.817 0 3.32.493 3.32 1.1v8.6L.07 18.314a1.12 1.12 0 0 0-.062.347c0 .014-.008.026-.008.039v3.488a3.266 3.266 0 0 0 .973 2.334l1.107 1.1c.35.347.775.61 1.241.77V64.9c0 .607.496 1.1 1.108 1.1H57.57c.612 0 1.108-.493 1.108-1.1V26.388c.467-.16.89-.424 1.24-.77l1.108-1.1a3.266 3.266 0 0 0 .973-2.33V18.7c0-.013-.008-.025-.008-.039z" fill="#fff"></path>
                                <path d="M22.8 48.75h-6.6v-13.5h6.6zM23.9 33h-8.8c-.607 0-1.1.504-1.1 1.125v15.75c0 .621.493 1.125 1.1 1.125h8.8c.607 0 1.1-.504 1.1-1.125v-15.75c0-.621-.493-1.125-1.1-1.125z" fill="#fff"></path>
                                <path d="M22.8 59.75h-6.6v-4.5h6.6zM23.9 53h-8.8c-.607 0-1.1.504-1.1 1.125v6.75c0 .621.493 1.125 1.1 1.125h8.8c.607 0 1.1-.504 1.1-1.125v-6.75c0-.621-.493-1.125-1.1-1.125z" fill="#fff"></path>
                                <g>
                                    <path d="M11 44h2v7h-2z" fill="#fff"></path>
                                </g>
                                <g>
                                    <path d="M34.2 40v-8.8h17.6V40zm17.6 8.8H34.2v-6.6h17.6zM52.9 29H33.1a1.1 1.1 0 0 0-1.1 1.1v19.8a1.1 1.1 0 0 0 1.1 1.1h19.8a1.1 1.1 0 0 0 1.1-1.1V30.1a1.1 1.1 0 0 0-1.1-1.1z" fill="#fff"></path>
                                </g>
                                <g>
                                    <path d="M36 44h7v2h-7z" fill="#fff"></path>
                                </g>
                                <g>
                                    <path d="M46 44h4v2h-4z" fill="#fff"></path>
                                </g>
                            </svg>
                            <p class="banner__text banner__text_about"><span>The Blue Bird Cafe and Roastery is waiting the coffee lovers <strong>since 2013, in Rumbach.</strong></span>
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
                        <div class="about-us__col about-us__col_basis-320">
                            <div class="about-us__box">
                                <svg class="about-us__icon" width="40" height="60" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <clippath id="a">
                                            <path d="M0 .11h39.912V60H0z"></path>
                                        </clippath>
                                    </defs>
                                    <g clip-path="url(#a)">
                                        <path d="M21.478.11c1.334.263 2.689.452 3.998.804 3.394.914 6.299 2.706 8.743 5.203 2.62 2.676 4.375 5.853 5.185 9.516.935 4.228.564 8.352-1.092 12.358-1.368 3.309-3.442 6.186-5.59 9.012-1.712 2.25-3.47 4.465-5.206 6.697-.09.117-.167.244-.273.4 1.26.277 2.476.525 3.682.816 2.154.519 4.252 1.215 6.063 2.519.81.582 1.581 1.296 2.161 2.1 1.162 1.607.955 3.55-.34 5.054-1.477 1.719-3.436 2.665-5.511 3.399-3.845 1.359-7.842 1.879-11.898 1.99-4.056.11-8.08-.186-12.03-1.166-2.336-.58-4.607-1.341-6.61-2.728-1.007-.697-1.897-1.518-2.387-2.666-.742-1.735-.328-3.43 1.155-4.888 1.438-1.414 3.194-2.313 5.087-2.9 1.966-.611 3.978-1.071 6.028-1.613-.1-.134-.24-.327-.385-.516-2.228-2.886-4.499-5.74-6.672-8.668-2.252-3.032-4.192-6.253-5.023-9.996-1.333-6-.326-11.57 3.321-16.57C6.88 4.163 10.935 1.622 15.898.525c.833-.185 1.686-.278 2.53-.414zm-1.34 49.417c3.42-4.456 6.848-8.906 10.254-13.372 2.093-2.744 4.165-5.508 5.553-8.699 1.802-4.14 2.132-8.394.767-12.706-1.388-4.382-4.127-7.744-8.14-10.01-3.839-2.166-7.962-2.794-12.274-1.874-4.467.953-8.057 3.316-10.69 7.038-2.84 4.013-3.749 8.492-2.963 13.319.484 2.973 1.682 5.688 3.424 8.108 2.663 3.702 5.468 7.303 8.22 10.942 1.869 2.472 3.75 4.936 5.664 7.455.085-.091.14-.142.185-.201zm9.519 7.058c2.242-.538 4.441-1.213 6.353-2.572 1.992-1.417 2.061-2.944.057-4.31-1.128-.77-2.388-1.45-3.689-1.844-2.135-.646-4.348-1.037-6.535-1.502-.173-.036-.47.14-.595.305-1.397 1.85-2.772 3.718-4.152 5.582-.744 1.004-1.555 1-2.3-.012-1.363-1.852-2.724-3.706-4.105-5.545-.127-.17-.404-.361-.585-.338-2.304.294-4.582.73-6.768 1.534-1.447.532-2.866 1.148-4.02 2.214-1.254 1.158-1.25 2.275.006 3.437 1.215 1.124 2.714 1.742 4.248 2.271 4.012 1.386 8.178 1.773 12.259 1.854 3.396-.05 6.642-.31 9.826-1.074z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M20.997 28c-4.436.002-8-3.577-7.997-8.034.002-4.407 3.571-7.96 8.003-7.966 4.431-.007 7.999 3.578 7.997 8.035-.002 4.4-3.582 7.963-8.003 7.965m.008-13.716c-3.076-.004-5.728 2.648-5.72 5.72.007 3.083 2.65 5.728 5.72 5.722 3.087-.005 5.728-2.647 5.72-5.72-.007-3.084-2.64-5.717-5.72-5.722" fill="#64b2db"></path>
                                    </g>
                                </svg>
                                <p>From the start we are focusing on speciality line. As the brand was getting bigger we also outgrew our place, so today you can find us in two different locations.</p>
                                <a class="button button_blue" href="#">Our locations</a>
                            </div>
                        </div>
                        <div class="about-us__col about-us__col_pl-100">
                            <div class="about-us__text-content">
                                <p><strong>While in Gozsdu you can have a limitless fun, at Rumbach you can choose from 14 coffee beans (twelve SO and two Blend) to find the best for your taste. </strong>
                                </p>
                                <p>Dont be afraid if you can't choose, our baristas are here to help you. Their job is to make the best drink from the fresh coffee. We also seeks to serve alternative coffee lovers, so you can also have V60, Chemex, Frenchpress and Aeropress.</p>
                                <p>In our grinder we put always fresh and best quality beans. We are buying and roasting green coffee from certified high quality producers. As it is important to us to adapting to our guests high expectations, we do usually tastings after coffee roasting, so we can support the quality. We roast our coffee with great care and carefully experimented method to maximize the enjoyment of the different flavours from different areas.</p>
                                <p><strong>The feedback from our guests is at least as important for us, as following the always changing trends in the world.</strong>
                                </p>
                                <p>Our company deals with coffee machines and coffee beans, we welcome our new partners with flexible terms and customized offers. After a longer partnership, we offer continuous discounts. We are also available for start-ups with assessment , installation and trainings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <article class="cafe-history js-block-cnt">
                <div class="container">
                    <h2 class="title cafe-history__title">A bit of <br><span class="color-blue">our history</span>
                    </h2>
                </div>
                <div class="cafe-history__slider-row">
                    <div class="container">
                        <div class="cafe-history__slider swiper-container js-init-slider" data-options="history">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="cafe-history__slide">
                                        <div class="cafe-history__image">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/history-slider/slider-image.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/history-slider/slider-image.jpg') }}" type="image/jpeg">
                                                <img src="{{ url('assets/img/tmp/history-slider/slider-image.jpg') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="cafe-history__text">
                                            <h3>We decided to roast the coffee by ourselves to deliver the freshest beans to you.</h3>
                                            <p>Our company deals with coffee machines and coffee beans, we welcome our new partners with flexible terms and customized offers. After a longer partnership, we offer continuous discounts. We are also available for start-ups with assessment , installation and trainings.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cafe-history__slide">
                                        <div class="cafe-history__image">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/history-slider/slider-image.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/history-slider/slider-image.jpg') }}" type="image/jpeg">
                                                <img src="{{ url('assets/img/tmp/history-slider/slider-image.jpg') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="cafe-history__text">
                                            <h3>Lorem ipsum dolor.</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi maxime fugiat natus quos quaerat recusandae aliquam itaque omnis, assumenda rerum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cafe-history__slide">
                                        <div class="cafe-history__image">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/history-slider/slider-image.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/history-slider/slider-image.jpg') }}" type="image/jpeg">
                                                <img src="{{ url('assets/img/tmp/history-slider/slider-image.jpg') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="cafe-history__text">
                                            <h3>We decided to roast the coffee by ourselves to deliver the freshest beans to you.</h3>
                                            <p>Our company deals with coffee machines and coffee beans, we welcome our new partners with flexible terms and customized offers. After a longer partnership, we offer continuous discounts. We are also available for start-ups with assessment , installation and trainings.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cafe-history__slide">
                                        <div class="cafe-history__image">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/history-slider/slider-image.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/history-slider/slider-image.jpg') }}" type="image/jpeg">
                                                <img src="{{ url('assets/img/tmp/history-slider/slider-image.jpg') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="cafe-history__text">
                                            <h3>Lorem ipsum dolor.</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione fugiat iste voluptatum autem eligendi rerum eius expedita perferendis laudantium nam!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cafe-history__slide">
                                        <div class="cafe-history__image">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/history-slider/slider-image.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/history-slider/slider-image.jpg') }}" type="image/jpeg">
                                                <img src="{{ url('assets/img/tmp/history-slider/slider-image.jpg') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="cafe-history__text">
                                            <h3>Lorem ipsum dolor.</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptate quod laudantium sed adipisci corrupti fuga optio architecto iusto numquam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cafe-history__pagination swiper-container js-init-slider" data-options="historyPagination">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cafe-history__bullet">2013</div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cafe-history__bullet">2014</div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cafe-history__bullet">2016</div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cafe-history__bullet">2018</div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cafe-history__bullet">2019</div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <div class="gallery js-block-cnt">
                <div class="container">
                    <h2 class="title gallery__title">Gallery</h2>
                    <div class="gallery__controls">
                        <button class="gallery__button gallery__button_active" data-show-cat="0">Blue Bird Cafe</button>
                        <button class="gallery__button" data-show-cat="1">Factory</button>
                    </div>
                </div>
                <div class="gallery__container swiper-container js-init-slider" data-options="gallery">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery__category">
                                <div class="gallery__item">
                                    <a href="img/tmp/gallery/gallery-img-1.jpg">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-1.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-1.jpg') }}" type="image/jpeg">
                                            <img src="{{ url('assets/img/tmp/gallery/gallery-img-1.jpg') }}" alt="Picture alt text">
                                        </picture>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a href="img/tmp/gallery/gallery-img-2.jpg">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-2.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-2.jpg') }}" type="image/jpeg">
                                            <img src="{{ url('assets/img/tmp/gallery/gallery-img-2.jpg') }}" alt="Picture alt text">
                                        </picture>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a href="img/tmp/gallery/gallery-img-3.jpg">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-3.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-3.jpg') }}" type="image/jpeg">
                                            <img src="{{ url('assets/img/tmp/gallery/gallery-img-3.jpg') }}" alt="Picture alt text">
                                        </picture>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a href="img/tmp/gallery/gallery-img-4.jpg">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-4.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-4.jpg') }}" type="image/jpeg">
                                            <img src="{{ url('assets/img/tmp/gallery/gallery-img-4.jpg') }}" alt="Picture alt text">
                                        </picture>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a href="img/tmp/gallery/gallery-img-5.jpg">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-5.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-5.jpg') }}" type="image/jpeg">
                                            <img src="{{ url('assets/img/tmp/gallery/gallery-img-5.jpg') }}" alt="Picture alt text">
                                        </picture>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a href="img/tmp/gallery/gallery-img-6.jpg">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-6.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-6.jpg') }}" type="image/jpeg">
                                            <img src="{{ url('assets/img/tmp/gallery/gallery-img-6.jpg') }}" alt="Picture alt text">
                                        </picture>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a href="img/tmp/gallery/gallery-img-7.jpg">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-7.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-7.jpg') }}" type="image/jpeg">
                                            <img src="{{ url('assets/img/tmp/gallery/gallery-img-7.jpg') }}" alt="Picture alt text">
                                        </picture>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a href="img/tmp/gallery/gallery-img-8.jpg">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-8.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-8.jpg') }}" type="image/jpeg">
                                            <img src="{{ url('assets/img/tmp/gallery/gallery-img-8.jpg') }}" alt="Picture alt text">
                                        </picture>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a href="img/tmp/gallery/gallery-img-9.jpg">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-9.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-9.jpg') }}" type="image/jpeg">
                                            <img src="{{ url('assets/img/tmp/gallery/gallery-img-9.jpg') }}" alt="Picture alt text">
                                        </picture>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a href="img/tmp/gallery/gallery-img-10.jpg">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-10.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-10.jpg') }}" type="image/jpeg">
                                            <img src="{{ url('assets/img/tmp/gallery/gallery-img-10.jpg') }}" alt="Picture alt text">
                                        </picture>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a href="img/tmp/gallery/gallery-img-11.jpg">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-11.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-11.jpg') }}" type="image/jpeg">
                                            <img src="{{ url('assets/img/tmp/gallery/gallery-img-11.jpg') }}" alt="Picture alt text">
                                        </picture>
                                    </a>
                                </div>
                                <div class="gallery__item">
                                    <a href="img/tmp/gallery/gallery-img-12.jpg">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-12.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/gallery/gallery-img-12.jpg') }}" type="image/jpeg">
                                            <img src="{{ url('assets/img/tmp/gallery/gallery-img-12.jpg') }}" alt="Picture alt text">
                                        </picture>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery__category">
                                <p>Images</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection