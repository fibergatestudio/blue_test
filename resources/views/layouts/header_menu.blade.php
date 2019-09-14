<?php $cart = cart()->getCart(); ?>



    <div class="header__top-panel">
        <button class="burger header__burger"><span class="burger__line"></span><span class="burger__line"></span><span class="burger__line"></span>
        </button>
        <a class="header__logo" href="/">
            <svg>
                <use xlink:href="#logo"></use>
            </svg>
        </a>
        <nav class="nav header__nav nav_main">
            <ul class="nav__list">
                <li class="nav__item nav__item">
                    <a href="{{ url('/') }}">Shop</a>
                </li>
                <li class="nav__item nav__item">
                    <a href="box-creator.html">Blue Box</a>
                </li>
                <li class="nav__item nav__item nav__item_has-submenu"><span>Learn</span>
                    <svg>
                        <use xlink:href="#arrow-down"></use>
                    </svg>
                    <div class="nav__submenu submenu">
                        <div class="submenu__wrapper">
                            <div class="submenu__category">
                                <h2 class="submenu__title">COFFEE</h2>
                                <ul class="submenu__list">
                                    <li class="submenu__item">
                                        <a href="catalog.html">Online Shop</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="coffee-beans.html">Coffee Beans</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="flavored-coffee.html">Flavored Coffee</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="capsules.html">Coffee Capsules</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="turkish-coffee.html">Turkish Coffee</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="about-our-cafe.html">Our Cafe (Rumbach)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="submenu__category">
                                <h2 class="submenu__title">LEARN</h2>
                                <ul class="submenu__list">
                                    <li class="submenu__item">
                                        <a href="{{ url('/aboutus') }}">About Us</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/aboutbb') }}">About BB Group</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/shipping') }}">Payment &amp; Shipping</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/tutorials') }}">Tutorial</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="#">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="submenu__category">
                                <h2 class="submenu__title">FOR CLIENTS</h2>
                                <ul class="submenu__list">
                                    <li class="submenu__item">
                                        <a href="box-creator.html">Blue Box</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/coffeesubscription') }}">Coffee Subscription</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="services.html">Services</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="barista-trainings.html">Barista Trainings</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="for-businesses.html">For Businesses</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/loyality') }}">Loyalty Program</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav__item nav__item">
                    <a href="{{ url('/contacts') }}">Contacts</a>
                </li>
            </ul>
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
            <a href="{{ url('/checkout/cart') }}"><button class="cart-btn js-box-trigger cart-link_main" data-target-id="cartModal">
                <svg class="cart-btn__icon">
                    <use xlink:href="#shopping-bag"></use>
                </svg>
        
                @if ($cart)
                <span class="cart-btn__counter">{{ $cart->items->count() }}</span>
                @else
                <span class="cart-btn__counter">{{ __('shop::app.minicart.zero') }}</span>
                @endif

            </button></a>
        </div>

        <div class="header__auth">
            <a href="{{url('/customer/account/subscription') }}">Subscribe</a>


<!-- <a href="{{ route('customer.session.index') }}" ><button class="js-open-popup" data-popup-id="signin">Sign in</button></a> -->
<!-- <button class="js-open-popup" data-popup-id="signin">Sign in</button> -->

            @guest('customer')
                <!-- <div style="">
                    <a class="btn btn-primary btn-md" href="{{ route('customer.session.index') }}" style="color: #ffffff">
                        {{ __('shop::app.header.sign-in') }}
                    </a>

                    <a class="btn btn-primary btn-md" href="{{ route('customer.register.index') }}" style="float: right; color: #ffffff">
                        {{ __('shop::app.header.sign-up') }}
                    </a>
                </div> -->
                <button class="js-open-popup" data-popup-id="signin">Sign in</button>
            @endguest

            @auth('customer')
                <a href="{{ route('customer.session.destroy') }}">{{ __('shop::app.header.logout') }}</a>

            @endauth



        </div>
    </div>