<?php $cart = cart()->getCart(); ?>

<header class="header header_inner">
            <div class="header__top-panel">
                <button class="burger header__burger"><span class="burger__line"></span><span class="burger__line"></span><span class="burger__line"></span>
                </button>
                <a class="header__logo" href="/">
                    <svg>
                        <use xlink:href="#logo"></use>
                    </svg>
                </a>
                <nav class="nav header__nav">
                    <ul class="nav__list">
                        <li class="nav__item nav__item">
                            <a href="catalog.html">Shop</a>
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
                                                <a href="about-us.html">About Us</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="about-bb-group.html">About BB Group</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="shipping.html">Payment &amp; Shipping</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="tutorials.html">Tutorial</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="faq.html">FAQ</a>
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
                                                <a href="coffee-subscription.html">Coffee Subscription</a>
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
                                                <a href="loyality-program.html">Loyalty Program</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav__item nav__item">
                            <a href="contact-us.html">Contacts</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__lang-switcher lang lang_inner">
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
                    <button class="cart-btn js-box-trigger" data-target-id="cartModal">
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
                            <img src="img/tmp/goods/green-sm.png" alt="Blue Bird Blend ">
                        </div>
                        <h3 class="cart-sm-product__title">Blue Bird Blend </h3><span class="cart-sm-product__price">2150 HUF</span>
                    </div>
                    <div class="cart-sm-product cart-modal__item">
                        <div class="cart-sm-product__image">
                            <img src="img/tmp/goods/coffee-machine.png" alt="Coffee Machine">
                        </div>
                        <h3 class="cart-sm-product__title">Coffee Machine</h3><span class="cart-sm-product__price">10 000 HUF</span>
                    </div>
                    <div class="cart-sm-product cart-modal__item">
                        <div class="cart-sm-product__image">
                            <img src="img/tmp/goods/cup.png" alt="Cup">
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
        </header>