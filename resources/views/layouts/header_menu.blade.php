<?php 

$cart = cart()->getCart(); 

$prodimg = DB::table('product_images')->get();


?>



    <div class="header__top-panel">
        <button class="burger header__burger"><span class="burger__line"></span><span class="burger__line"></span><span class="burger__line"></span>
        </button>
        <a class="header__logo" href="/">
            <svg>
                <use style="color: #64b2db;" xlink:href="#logo"></use>
            </svg>
        </a>
        <nav class="nav header__nav nav_main">
            <ul class="nav__list">
                <li class="nav__item nav__item">
                    <a href="{{ url('/categories/coffee') }}">Shop</a>
                </li>
                <li class="nav__item nav__item">
                    <a href="{{ url('/bluebox') }}">Blue Box</a>
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
                                        <a href="{{ url('/categories/coffee') }}">Online Shop</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/coffeebeans') }}">Coffee Beans</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/flavoredcoffee') }}">Flavored Coffee</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/coffeecapsules') }}">Coffee Capsules</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/turkishcoffee') }}">Turkish Coffee</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/aboutcafe') }}">Our Cafe (Rumbach)</a>
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
                                        <a href="{{ url('/faq') }}">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="submenu__category">
                                <h2 class="submenu__title">FOR CLIENTS</h2>
                                <ul class="submenu__list">
                                    <li class="submenu__item">
                                        <a href="{{ url('/bluebox') }}">Blue Box</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/coffeesubscription') }}">Coffee Subscription</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/services') }}">Services</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/baristatrainings') }}">Barista Trainings</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/forbusinesses') }}">For Businesses</a>
                                    </li>
                                    <li class="submenu__item">
                                        <a href="{{ url('/loyalty') }}">Loyalty Program</a>
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
            <button class="lang__trigger">
                @if (app()->getLocale() == "en")
                    En
                @elseif(app()->getLocale() == "hu")
                    Hu
                @endif
                <svg>
                    <use xlink:href="#arrow-down"></use>
                </svg>
            </button>
            
            <?php if (\Request::is('customer/*') || \Request::is('faq')) { ?>

            <ul style="background-color: #0e3d5e;" class="lang__list">
                <li class="lang__current">
                    <button class="lang__trigger">
                        
                    @if (app()->getLocale() == "en")
                        En
                    @elseif(app()->getLocale() == "hu")
                        Hu
                    @endif

                        <svg>
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </button>
                </li>
                @foreach (core()->getCurrentChannel()->locales as $locale)
                <li class="lang__option">
                    @if(isset($serachQuery))
                        <button style="
                        background: none;
                        color: inherit;
                        border: none;
                        padding: 0;
                        font: inherit;
                        cursor: pointer;
                        outline: inherit;" 
                        href="#" onclick="window.location.href = this.value" value="?{{ $serachQuery }}?locale={{ $locale->code }}">{{ $locale->name }}</button >
                    @else
                        <button style="
                        background: none;
                        color: inherit;
                        border: none;
                        padding: 0;
                        font: inherit;
                        cursor: pointer;
                        outline: inherit;" href="#" onclick="window.location.href = this.value" value="?locale={{ $locale->code }}">{{ $locale->name }}</button >
                    @endif
                </li>
                @endforeach

            </ul>


            <?php } else { ?>

            <ul class="lang__list">
                <li class="lang__current">
                    <button class="lang__trigger">
                        
                    @if (app()->getLocale() == "en")
                        En
                    @elseif(app()->getLocale() == "hu")
                        Hu
                    @endif

                        <svg>
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </button>
                </li>
                @foreach (core()->getCurrentChannel()->locales as $locale)
                <li class="lang__option">
                    @if(isset($serachQuery))
                        <button style="
                        background: none;
                        color: inherit;
                        border: none;
                        padding: 0;
                        font: inherit;
                        cursor: pointer;
                        outline: inherit;" 
                        href="#" onclick="window.location.href = this.value" value="?{{ $serachQuery }}?locale={{ $locale->code }}">{{ $locale->name }}</button >
                    @else
                        <button style="
                        background: none;
                        color: inherit;
                        border: none;
                        padding: 0;
                        font: inherit;
                        cursor: pointer;
                        outline: inherit;" href="#" onclick="window.location.href = this.value" value="?locale={{ $locale->code }}">{{ $locale->name }}</button >
                    @endif
                </li>
                @endforeach

            </ul>

            <?php } ?>

            
        </div>

        <div class="header__cart">
            <!-- <a href="{{ url('/checkout/cart') }}"> -->
                <button class="cart-btn js-box-trigger cart-link_main" data-target-id="cartModal">
                    <svg class="cart-btn__icon">
                        <use xlink:href="#shopping-bag"></use>
                    </svg>
            
                    @if ($cart)
                    <span class="cart-btn__counter">{{ $cart->items->count() }}</span>
                    @else
                    <span class="cart-btn__counter">{{ __('shop::app.minicart.zero') }}</span>
                    @endif

                </button>
            <!-- </a> -->
        </div>

        <!-- cart popup-->
            <div class="cart-modal" id="cartModal">
                <span class="cart-modal__close js-close-modal" type="button">
                    <svg>
                        <use xlink:href="#rounded-close"></use>
                    </svg>
                </span>

                    @if(!empty($cart->items))
                    <h2 class="cart-modal__header">Cart (<span id="cartItems">{{ $cart->items->count() }}</span>)</h2>
                    <div class="cart-modal__list">
                    <?php 
                    foreach ($cart->items as $item) { ?>

                    <div class="cart-sm-product cart-modal__item">
                        <div class="cart-sm-product__image">

                            @foreach($prodimg as $prod)
                                @if($prod->product_id == $item->product_id )
                                <img src="{{ url('/cache/large/' . $prod->path) }}" style="height: 52px; width: 39px;" alt="Blue Bird Blend ">
                                @endif
                            @endforeach

                        </div>
                        <h3 class="cart-sm-product__title cartprod">{{ $item->name }} ({{ $item->quantity }})</h3><span class="cart-sm-product__price">{{ core()->currency($item->price) }}</span>
                    </div>

                    <?php } ?>
                    
                    <div class="cart-modal__price">
                        <div class="cart-modal__row"><span class="cart-modal__label">Shipping:</span><span>Free</span>
                        </div>
                        <div class="cart-modal__row"><span class="cart-modal__label">Total:</span><span class="cart-modal__total">{{ core()->currency($cart->grand_total) }}</span>
                        </div>
                    </div>
                    @else
                    <h2 class="cart-modal__header">Cart (<span id="cartItems">0</span>)</h2>
                    <div class="cart-modal__list">
                    <div class="cart-sm-product cart-modal__item">
                        No Items In Cart
                    </div>

                    <div class="cart-modal__price">
                        <div class="cart-modal__row"><span class="cart-modal__label">Shipping:</span><span>Free</span>
                        </div>
                        <div class="cart-modal__row"><span class="cart-modal__label">Total:</span><span class="cart-modal__total">0 HUF</span>
                        </div>
                    </div>
                    @endif
                    <!-- <div class="cart-sm-product cart-modal__item">
                        <div class="cart-sm-product__image">
                            <img src="img/tmp/goods/coffee-machine.png" alt="Coffee Machine">
                        </div>
                        <h3 class="cart-sm-product__title">Coffee Machine</h3><span class="cart-sm-product__price">10 000 HUF</span>
                    </div> -->
                    <!-- <div class="cart-sm-product cart-modal__item">
                        <div class="cart-sm-product__image">
                            <img src="img/tmp/goods/cup.png" alt="Cup">
                        </div>
                        <h3 class="cart-sm-product__title">Cup</h3><span class="cart-sm-product__price">3 000 HUF</span>
                    </div> -->
                </div>
                <div class="cart-modal__buttons">
                    <a href="{{ url('/checkout/cart') }}"><input class="button button_blue cart-modal__submit" type="submit" value="Make a purchase"></a>
                    <a class="cart-modal__back" href="{{ url('categories/coffee') }}">Back to product list</a>
                </div>
            </div>

        <div class="header__auth">


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
                <a class="js-open-popup" data-popup-id="signin"">Subscribe</a>
                <button class="js-open-popup" data-popup-id="signin">Sign in</button>
            @endguest

            @auth('customer')
            <?php 
            
            $customer = auth()->guard('customer')->user();
            $sub = DB::table('coffee_subscription')->where('user_id', $customer->id)->first();
            
            ?>
                <!-- <a href="{{url('/customer/account/profile')}}"> Profile </a>
                <a href="{{ route('customer.session.destroy') }}">{{ __('shop::app.header.logout') }}</a> -->
                <div class="header__auth">
                <a href="{{url('/customer/account/subscription') }}">Subscribe</a>
                    <div class="auth-user">
                        <button class="auth-user__button js-box-trigger" data-target-id="userModal">
                            <svg class="auth-user__icon">
                                <use xlink:href="#person"></use>
                            </svg><span class="auth-user__btn-text">Hi, {{ $customer->name }}</span>
                            <svg class="auth-user__arrow">
                                <use xlink:href="#arrow-down"></use>
                            </svg>
                        </button>
                        <div class="auth-user__modal" id="userModal">
                            <div class="auth-user__row">
                                <div class="auth-user__col auth-user__col_main">
                                    <div class="auth-user__name">Hi, {{ $customer->name }}</div><span class="auth-user__s-header">Subscription</span>
                                    @if(!empty($sub->subscription_name ))
                                    <div class="auth-user__plan">{{ $sub->subscription_name }}</div>
                                    @else
                                    <div class="auth-user__plan">No Subscription</div>
                                    @endif

                                    <a href="{{ url('/coffeesubscription') }}"><button class="button button_blue">Change</button></a>
                                </div>
                                <div class="auth-user__col">
                                    <ul class="auth-user__links">
                                        <li>
                                            <a href="{{ url('customer/account/profile') }}">Personal Information</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('customer/account/changepassword') }}">Change Password</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('customer/account/subscription') }}">Newsletter Subscription</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('customer/account/addresses') }}">Billing</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('customer/account/orders') }}">Your Purchases</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('customer/account/refer') }}">Refer a Friend</a>
                                        </li>
                                    </ul>
                                    <a class="auth-user__logout" href="{{ url('/customer/logout') }}">Log out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endauth





        </div>
    </div>
