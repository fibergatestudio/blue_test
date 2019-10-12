@extends('layouts.main')

@section('header')
<header class="header header_has-columns header_giftbox">


        @include('layouts.header_menu')


    <div class="header__row js-block-cnt">
        <div class="header__content">
            <div class="banner banner_gift">
                <h1 class="title banner__title color-blue">Coffee <br>Subscription</h1>
                    <p class="banner__text">No matter what your taste, we’ve got the perfect subscription!</p>
                    <div class="banner__btn-group">
                        <a href="#changeOrder"><button class="button button_blue banner__button">subscribe</button></a>
                    </div>
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
    <section id="changeOrder" class="plan js-block-cnt">
        <div class="container">
            <h2 class="title title_center">Choose your subscription</h2>
            <ul class="plan__list">
                <li class="plan__item">
                    <form action="{{ url('/coffeesubscription/payment') }}" class="subscription-form" method="POST">
                    @csrf() 

                        @if(!empty($customer))
                        <input type="hidden" name="user_id" value="{{ $customer->id }}">
                        @else
                        @endif
                        <input type="hidden" name="subscription_name" value="Subscription 1">
                        <input type="hidden" name="price" value="17 150 HUF">

                        <div class="subscription-form__header">
                            <div class="subscription-form__plan">Subscription 1</div>

                            <div class="subscription-form__plan-desc">
                                <svg>
                                    <use xlink:href="#choco-cup"></use>
                                </svg><span>7 OZ | 14 CUPS</span>
                            </div>
                            <div class="subscription-form__plan-pricing">17 150 HUF</div>

                        </div>
                        <div class="subscription-form__options">
                            <h3 class="subscription-form__subt">Suscription term</h3>
                            <ul class="subscription-form__terms">
                                <li>
                                    <input class="subscription-form__realinput" id="subscription-1-0" type="radio" name="subscription_term" value="3 Month" checked> 
                                    <label class="subscription-form__label" for="subscription-1-0">3<span>months</span>
                                    </label>
                                </li>
                                <li>
                                    <input class="subscription-form__realinput" id="subscription-1-1" type="radio" name="subscription_term" value="6 Month">
                                    <label class="subscription-form__label" for="subscription-1-1">6<span>months</span>
                                    </label>
                                </li>
                                <li>
                                    <input class="subscription-form__realinput" id="subscription-1-2" type="radio" name="subscription_term" value="9 Month">
                                    <label class="subscription-form__label" for="subscription-1-2">9<span>months</span>
                                    </label>
                                </li>
                            </ul>
                            <h3 class="subscription-form__subt">Ships every</h3>
                            <div class="select subscription-form__select">
                                <select class="js-init-styleselect" name="ship_frequency">
                                    <option value="Week" selected>Week</option>
                                    <option value="Month">Month</option>
                                </select>
                                <div class="select__arrow">
                                    <svg>
                                        <use xlink:href="#arrow-down"></use>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="subscription-form__subt">quantity</h3>
                            <div class="select subscription-form__select">
                                <select class="js-init-styleselect" name="ship_quantity">
                                    <option value="4 Packages" selected>4 Packages / 32 Oz</option>
                                    <option value="8 Packages">8 Packages </option>
                                </select>
                                <div class="select__arrow">
                                    <svg>
                                        <use xlink:href="#arrow-down"></use>
                                    </svg>
                                </div>
                            </div>
                            
                            <input class="subscription-form__submit button button_blue" type="submit" value="subscribe">
                            
                            <!-- <a href="{{ url('customer/login') }}" class="subscription-form__submit button button_blue">Login</a> -->
                            
                        </div>
                        <div style="background-color:red" class="bg-warning">
                            @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                            @endif
                        </div>
                    </form>
                </li>
                <li class="plan__item">
                    <form action="{{ url('/coffeesubscription/payment') }}" class="subscription-form" method="POST">
                    @csrf()

                        @if(!empty($customer))
                        <input type="hidden" name="user_id" value="{{ $customer->id }}">
                        @else
                        @endif
                        <input type="hidden" name="subscription_name" value="Subscription 2">
                        <input type="hidden" name="price" value="20 150 HUF">

                        <div class="subscription-form__header">
                            <div class="subscription-form__plan">Subscription 2</div>
                            <div class="subscription-form__plan-desc">
                                <svg>
                                    <use xlink:href="#choco-cup"></use>
                                </svg><span>16 OZ | 32 CUPS</span>
                            </div>
                            <div class="subscription-form__plan-pricing">20 150 HUF</div>
                        </div>
                        <div class="subscription-form__options">
                            <h3 class="subscription-form__subt">Suscription term</h3>
                            <ul class="subscription-form__terms">
                                <li>
                                    <input class="subscription-form__realinput" id="subscription-2-0" type="radio" name="subscription_term" value="3 Month" checked>
                                    <label class="subscription-form__label" for="subscription-2-0">3<span>months</span>
                                    </label>
                                </li>
                                <li>
                                    <input class="subscription-form__realinput" id="subscription-2-1" type="radio" name="subscription_term" value="6 Month">
                                    <label class="subscription-form__label" for="subscription-2-1">6<span>months</span>
                                    </label>
                                </li>
                                <li>
                                    <input class="subscription-form__realinput" id="subscription-2-2" type="radio" name="subscription_term" value="9 Month">
                                    <label class="subscription-form__label" for="subscription-2-2">9<span>months</span>
                                    </label>
                                </li>
                            </ul>
                            <h3 class="subscription-form__subt">Ships every</h3>
                            <div class="select subscription-form__select">
                                <select class="js-init-styleselect" name="ship_frequency">
                                    <option value="Week" selected>Week</option>
                                    <option value="Month">Month</option>
                                </select>
                                <div class="select__arrow">
                                    <svg>
                                        <use xlink:href="#arrow-down"></use>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="subscription-form__subt">quantity</h3>
                            <div class="select subscription-form__select">
                                <select class="js-init-styleselect" name="ship_quantity">
                                    <option value="4 Packages" selected>4 Packages / 32 Oz</option>
                                    <option value="8 Packages">8 Packages </option>
                                </select>
                                <div class="select__arrow">
                                    <svg>
                                        <use xlink:href="#arrow-down"></use>
                                    </svg>
                                </div>
                            </div>
                         
                            <input class="subscription-form__submit button button_blue" type="submit" value="subscribe">
                            
                            <!-- <a href="{{ url('customer/login') }}" class="subscription-form__submit button button_blue">Login</a> -->
                           
                        </div>
                        <div style="background-color:red" class="bg-warning">
                            @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                            @endif
                        </div>
                    </form>
                </li>
                <li class="plan__item">
                    <form action="{{ url('/coffeesubscription/payment') }}" class="subscription-form" method="POST">
                    @csrf()

                        @if(!empty($customer))
                        <input type="hidden" name="user_id" value="{{ $customer->id }}">
                        @else
                        @endif
                        <input type="hidden" name="subscription_name" value="Subscription 3">
                        <input type="hidden" name="price" value="23 150 HUF">


                        <div class="subscription-form__header">
                            <div class="subscription-form__plan">Subscription 3</div>
                            <div class="subscription-form__plan-desc">
                                <svg>
                                    <use xlink:href="#choco-cup"></use>
                                </svg><span>32 OZ | 64 CUPS</span>
                            </div>
                            <div class="subscription-form__plan-pricing">23 150 HUF</div>
                        </div>
                        <div class="subscription-form__options">
                            <h3 class="subscription-form__subt">Suscription term</h3>
                            <ul class="subscription-form__terms">
                                <li>
                                    <input class="subscription-form__realinput" id="subscription-3-0" type="radio" name="subscription_term" value="3 Month" checked>
                                    <label class="subscription-form__label" for="subscription-3-0">3<span>months</span>
                                    </label>
                                </li>
                                <li>
                                    <input class="subscription-form__realinput" id="subscription-3-1" type="radio" name="subscription_term" value="6 Month">
                                    <label class="subscription-form__label" for="subscription-3-1">6<span>months</span>
                                    </label>
                                </li>
                                <li>
                                    <input class="subscription-form__realinput" id="subscription-3-2" type="radio" name="subscription_term" value="9 Month">
                                    <label class="subscription-form__label" for="subscription-3-2">9<span>months</span>
                                    </label>
                                </li>
                            </ul>
                            <h3 class="subscription-form__subt">Ships every</h3>
                            <div class="select subscription-form__select">
                                <select class="js-init-styleselect" name="ship_frequency">
                                    <option value="Week" selected>Week</option>
                                    <option value="Month">Month</option>
                                </select>
                                <div class="select__arrow">
                                    <svg>
                                        <use xlink:href="#arrow-down"></use>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="subscription-form__subt">quantity</h3>
                            <div class="select subscription-form__select">
                                <select class="js-init-styleselect" name="ship_quantity">
                                    <option value="4 Packages" selected>4 Packages / 32 Oz</option>
                                    <option value="8 Packages">8 Packages </option>
                                </select>
                                <div class="select__arrow">
                                    <svg>
                                        <use xlink:href="#arrow-down"></use>
                                    </svg>
                                </div>
                            </div>

                       
                        <input class="subscription-form__submit button button_blue" type="submit" value="subscribe">
                      
                        <!-- <a href="{{ url('customer/login') }}" class="subscription-form__submit button button_blue">Login</a> -->
                        
                            <!-- <input class="subscription-form__submit button button_blue" type="submit" value="subscribe">

                            <a href="{{ url('customer/login') }}"><button class="subscription-form__submit button button_blue">Login</button></a> -->

                        </div>
                        <div style="background-color:red" class="bg-warning">
                            @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                            @endif
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </section>
    <section class="business-offer business-offer_coffee-subs js-block-cnt">
        <div class="container">
            <ul class="business-offer__list">
                <li class="business-offer__card" style="background-image: url({{ url('assets/img/coffee-subscription/coffee-subs-1.jpg') }})">
                    <div class="business-offer__wrapper">
                        <p class="business-offer__text">We are an office, can we ask our own offer?</p>
                        <button class="button button_blue js-box-trigger" data-target-id="regModal1">Get an offer</button>
                    </div>
                </li>
                <li class="business-offer__card" style="background-image: url({{ url('assets/img/coffee-subscription/coffee-subs-2.jpg') }})">
                    <div class="business-offer__wrapper">
                        <p class="business-offer__text">We are a small cafe, can we ask our own offer?</p>
                        <button class="button button_blue js-box-trigger" data-target-id="regModal2">Get an offer</button>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="split split_darkblue js-block-cnt">
        <div class="split__row">
            <div class="split__col">
                <div class="box coffee-types">
                    <h2 class="title color-blue">Our coffee:</h2>
                    <ul class="coffee-types__list">
                        <li>
                            <a href="{{ url('/coffeebeans') }}">
                                <div class="coffee-types__icon-wrapper">
                                    <svg class="coffee-types__icon_beans">
                                        <use xlink:href="#coffee-beans-3"></use>
                                    </svg>
                                </div><span>Coffee beans</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/turkishcoffee') }}">
                                <div class="coffee-types__icon-wrapper">
                                    <svg class="coffee-types__icon_cezve">
                                        <use xlink:href="#cezve"></use>
                                    </svg>
                                </div><span>Turkish coffee</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/flavoredcoffee') }}">
                                <div class="coffee-types__icon-wrapper">
                                    <svg class="coffee-types__icon_cup">
                                        <use xlink:href="#cup"></use>
                                    </svg>
                                </div><span>Flavored coffee</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/coffeecapsules') }}">
                                <div class="coffee-types__icon-wrapper">
                                    <svg class="coffee-types__icon_capsule">
                                        <use xlink:href="#coffee-capsule"></use>
                                    </svg>
                                </div><span>Capsules</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="split__col split__col_picture">
                <picture class="split__img">
                    <source srcset="{{ url('assets/img/coffee-subscription/our-coffe-bg.webp') }}" type="image/webp">
                    <source srcset="{{ url('assets/img/coffee-subscription/our-coffe-bg.jpg') }}" type="image/jpeg">
                    <img src="{{ url('assets/img/coffee-subscription/our-coffe-bg.jpg') }}" alt="Image alt text">
                </picture>
            </div>
        </div>
    </section>
    <section class="subs-faq">
        <div class="container">
            <h2 class="subs-faq__title">Subscription FAQ</h2>
            <div class="faq-page__item">
                <div class="faq-page__question">
                    <label for="question1">How can I subscribe to fresh roasted coffee?</label>
                    <button class="button button_blue button_round faq-page__show-answer js-show-hidden-block" id="question1" data-selector="#answer1"><span>+</span><span>-</span>
                    </button>
                </div>
                <div class="faq-page__answer" id="answer1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum est ratione, minima accusamus consectetur voluptate velit, iure rerum iste similique?</p>
                </div>
            </div>
            <div class="faq-page__item">
                <div class="faq-page__question">
                    <label for="question2">Why is subscribing to fresh roasted coffee beneficial?</label>
                    <button class="button button_blue button_round faq-page__show-answer js-show-hidden-block" id="question2" data-selector="#answer2"><span>+</span><span>-</span>
                    </button>
                </div>
                <div class="faq-page__answer" id="answer2">
                    <p>If you are subscribed to any of our fresh roasted coffee blends made by Blue Bird Café, you get fresh roasted coffee delivered to your doorstep for a reasonable price each month. You can read more about subscription to fresh roasted coffee blends and the advantages of home delivery here.</p>
                </div>
            </div>
            <div class="faq-page__item">
                <div class="faq-page__question">
                    <label for="question1">How can I subscribe to fresh roasted coffee?</label>
                    <button class="button button_blue button_round faq-page__show-answer js-show-hidden-block" id="question1" data-selector="#answer1"><span>+</span><span>-</span>
                    </button>
                </div>
                <div class="faq-page__answer" id="answer1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum est ratione, minima accusamus consectetur voluptate velit, iure rerum iste similique?</p>
                </div>
            </div>
            <div class="faq-page__item">
                <div class="faq-page__question">
                    <label for="question1">How can I subscribe to fresh roasted coffee?</label>
                    <button class="button button_blue button_round faq-page__show-answer js-show-hidden-block" id="question1" data-selector="#answer1"><span>+</span><span>-</span>
                    </button>
                </div>
                <div class="faq-page__answer" id="answer1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum est ratione, minima accusamus consectetur voluptate velit, iure rerum iste similique?</p>
                </div>
            </div>
        </div>
    </section>
    <!-- page icons-->
    <svg style="position: absolute; left: -10000px; top: -1px; width: 1px; height: 1px; overflow: hidden;">
        <symbol id="choco-cup" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 13 15" fill="currentColor">
            <path d="M1.28 6.878h1.663c-.746 2.34.513 6.045.512 6.045C.735 10.705 1.28 6.878 1.28 6.878zm9.269 1.453c.932.23 1.099.719 1.088 1.351-.012.718-.207 1.204-1.48 1.372.23-.874.34-1.813.392-2.723zm-.776 3.837C12.007 12.072 13 10.986 13 9.656c0-1.155-.75-2.127-2.412-2.425.008-.43.008-.844.008-1.231H0c0 2.53.003 6.203 2.13 7.958-1.291.106-2.13.274-2.13.463 0 .32 2.372.579 5.298.579s5.298-.259 5.298-.58c0-.188-.839-.356-2.13-.462.578-.476 1-1.092 1.307-1.79zM6.587 3.696c.196-1.934 4.119-.967 3.301-3.478-.125-.384-.69-.218-.563.17.358 1.1-1.004 1.234-1.698 1.487-.833.303-1.522.81-1.625 1.821-.041.408.544.403.585 0z"></path>
            <path d="M8.753 2.934c-.781.223-1.496.628-1.74 1.62-.109.448.467.637.577.192.268-1.096 1.46-1.114 2.221-1.381.817-.287 1.285-.971 1.172-2.022-.048-.455-.646-.46-.597 0 .136 1.27-.83 1.363-1.633 1.591z"></path>
        </symbol>
        <symbol id="coffee-beans-3" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 63 68" fill="currentColor">
            <path d="M42.285 55.85c-4.918 6.033-11.668 9.78-17.616 9.78-2.68 0-5.066-.79-6.9-2.286-4.394-3.585-5.174-10.69-2.025-18.17 1.194-2.724 2.556-5.002 4.17-6.969.803-.992 1.493-1.777 2.143-2.436l.242-.24.04-.04.343-.336c1.118-1.084 2.182-1.988 3.245-2.758 2.868-2 6.145-3.454 8.997-3.99h.001a16.453 16.453 0 0 1 2.99-.288c2.7 0 4.98.744 6.777 2.211 6.096 4.975 5.017 16.424-2.407 25.522zM11.808 16.765c.666 1.68 2 3.033 4.017 5.08 1.357 1.377 3.046 3.09 5.105 5.472 1.18 1.364 2.057 2.569 2.759 3.799a32.396 32.396 0 0 0-1.942 1.66 21.988 21.988 0 0 0-2.039-2.486c-8.062-7.645-9.258-12.388-8.84-15.022a5.22 5.22 0 0 1 .477-1.509c-.038 1.075.09 2.066.463 3.006zM4.894 31.413C.194 20.65 2.234 9.333 9.441 6.185a9.883 9.883 0 0 1 3.98-.814c6.615 0 13.86 6.014 17.618 14.625.977 2.24 1.84 4.217 2.297 6.329-2.651.647-5.284 1.808-7.713 3.4-.755-1.29-1.682-2.552-2.9-3.96-2.11-2.439-3.828-4.182-5.21-5.584-3.87-3.927-4.465-4.53-3.29-9.516a1.186 1.186 0 0 0-1.648-1.35c-.138.064-3.389 1.598-4.04 5.526-.771 4.65 2.43 10.42 9.516 17.145.756.81 1.386 1.595 1.973 2.466a27.026 27.026 0 0 0-1.68 1.87 32.62 32.62 0 0 0-4.251 6.735c-3.78-2.654-7.09-6.826-9.199-11.644zm41.297-2.921c-2.2-1.797-5.06-2.746-8.276-2.746-.73 0-1.484.05-2.25.146-.506-2.378-1.455-4.557-2.453-6.843-2.049-4.695-5.028-8.71-8.614-11.611C21.01 4.534 17.145 3 13.421 3c-1.732 0-3.39.34-4.929 1.012-4.15 1.813-7.014 5.816-8.064 11.27-1.019 5.294-.205 11.36 2.294 17.081 2.355 5.38 6.121 10.034 10.426 12.92-3.063 8.105-1.896 15.803 3.123 19.897C18.532 67.025 21.437 68 24.67 68c6.643 0 14.097-4.082 19.453-10.652 3.947-4.837 6.363-10.46 6.804-15.833.454-5.535-1.228-10.16-4.736-13.023z"></path>
            <path d="M32.085 49.195l-.54 1.32c-2.45 5.969-5.737 9.124-9.509 9.124h-.026c2.029-1.315 4.476-3.86 6.259-8.788l.02-.061a44.373 44.373 0 0 1 1.813-4.957c1.558-3.636 3.39-6.356 5.444-8.083 1.76-1.484 3.683-2.284 5.717-2.38-4.39 2.127-5.874 5.754-9.178 13.825zm14.286-15.161C46.292 33.992 44.397 33 41.683 33c-2.781 0-5.373.996-7.702 2.959-2.34 1.968-4.392 4.982-6.095 8.956a46.603 46.603 0 0 0-1.894 5.177c-2.968 8.175-7.643 8.578-7.826 8.59-.533.009-.981.36-1.124.865-.142.505.086 1.04.54 1.317.075.046 1.89 1.136 4.454 1.136 3.371 0 8.144-1.84 11.738-10.602l.542-1.322c4.135-10.102 4.995-12.204 11.772-13.859.481-.117.84-.513.902-.996a1.174 1.174 0 0 0-.619-1.187zm5.54-17.868a1.072 1.072 0 0 0-.06-.037c-5.211-2.919-6.44-5.33-6.555-6.84a3.487 3.487 0 0 1-.006-.083c.574 1.41 1.814 2.31 4.135 3.885.732.497 1.56 1.06 2.537 1.753 2.407 1.711 3.704 3.387 3.752 4.849-.673-1.048-1.833-2.257-3.803-3.527zm1.355-3.237c-.996-.71-1.836-1.28-2.577-1.783-3.612-2.454-3.68-2.501-3.483-5.906a1.175 1.175 0 0 0-.599-1.1 1.12 1.12 0 0 0-1.226.093c-.106.082-2.588 2.022-2.367 5.2.21 3.042 2.803 5.981 7.707 8.738 3.62 2.345 3.759 3.884 3.58 4.282-.18.4-.05.97.337 1.318.484.436 1.215.146 1.438-.024.08-.061 1.963-1.523 1.923-4.038-.035-2.29-1.628-4.572-4.733-6.78z"></path>
            <path d="M57.495 23.357c-1.255.886-2.75 1.335-4.445 1.335-3.772 0-7.827-2.25-10.584-5.872-4.137-5.432-4.126-12.241.023-15.178 1.237-.873 2.773-1.335 4.444-1.335 3.77 0 7.825 2.25 10.582 5.875 2.041 2.678 3.139 5.761 3.09 8.682-.046 2.8-1.151 5.107-3.11 6.493zm1.95-16.541C56.245 2.61 51.452 0 46.933 0c-2.183 0-4.21.616-5.86 1.782-5.213 3.69-5.454 11.945-.537 18.404C43.736 24.389 48.53 27 53.049 27c2.184 0 4.21-.616 5.861-1.782 2.578-1.823 4.03-4.777 4.088-8.318.057-3.421-1.206-7.003-3.553-10.084z"></path>
        </symbol>
        <symbol id="coffee-capsule" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 77 46" fill="currentColor">
            <path d="M29.989 43.579H7.014L4.945 27.842h27.114zm2.068-37.526L29.99 21.789H7.014L4.945 6.053zm1.95-3.632c.327 0 .596.272.596.605a.603.603 0 0 1-.597.606H2.983a.603.603 0 0 1-.596-.606c0-.333.269-.605.597-.605zm0 21.79c.327 0 .596.272.596.605a.603.603 0 0 1-.597.605H2.983a.603.603 0 0 1-.596-.605c0-.333.269-.605.597-.605zM2.528 27.796L4.786 44.95c.009.063.038.114.056.173.02.066.033.129.061.19.038.08.09.146.142.215.038.048.07.1.115.143.07.065.15.11.23.157.047.027.086.063.136.082.138.057.286.091.442.091h25.066c.156 0 .305-.034.442-.09.05-.021.09-.056.136-.083.081-.047.162-.092.23-.157.046-.043.076-.095.115-.145a1.09 1.09 0 0 0 .142-.214c.029-.06.042-.124.061-.19.018-.058.048-.109.056-.172l2.257-17.154A3.009 3.009 0 0 0 37 24.815c0-1.669-1.338-3.026-2.984-3.026h-1.62l2.076-15.784a3.009 3.009 0 0 0 2.527-2.979C36.999 1.357 35.66 0 34.015 0H2.984C1.338 0 0 1.357 0 3.026a3.01 3.01 0 0 0 2.53 2.98L4.604 21.79h-1.62C1.338 21.79 0 23.146 0 24.816a3.01 3.01 0 0 0 2.53 2.98zm55.967 15.752c-8.882 0-16.108-7.423-16.108-16.548 0-9.125 7.226-16.548 16.108-16.548 8.882 0 16.108 7.423 16.108 16.548 0 9.125-7.226 16.548-16.108 16.548zM58.5 8C48.299 8 40 16.523 40 27s8.299 19 18.5 19S77 37.477 77 27 68.701 8 58.5 8z"></path>
            <path d="M58.5 38.575c-6.149 0-11.152-5.19-11.152-11.57s5.003-11.57 11.152-11.57c6.149 0 11.152 5.19 11.152 11.57S64.65 38.575 58.5 38.575zM58.5 13C51.056 13 45 19.28 45 27s6.056 14 13.5 14S72 34.72 72 27s-6.056-14-13.5-14z"></path>
            <path d="M59.45 26.268c-1.65-2.322-.94-4.016-.444-4.753 2.04.263 3.63 2.06 3.63 4.254v2.46a4.356 4.356 0 0 1-1.827 3.573c.322-1.524.123-3.45-1.359-5.534zm-5.086 1.964v-2.457l.002-.006c0-1.484.724-2.797 1.826-3.571-.323 1.524-.124 3.45 1.358 5.534 1.653 2.327.937 4.022.447 4.753-2.04-.262-3.632-2.058-3.633-4.253zm4.168-9.23l-.03-.002c-3.582 0-6.495 3.032-6.5 6.76v2.464L52 28.23c0 3.732 2.917 6.77 6.5 6.77s6.5-3.038 6.5-6.77v-2.461c0-3.714-2.888-6.738-6.448-6.767h-.02z"></path>
        </symbol>
        <symbol id="cezve" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 75 49" fill="currentColor">
            <path d="M71.547 7.824l-26.05 10.51-1.294-3.302c-.003-.003-.001-.007-.003-.01v-.002L70.247 4.508a1.72 1.72 0 0 1 1.345.02c.432.189.765.537.938.98.172.442.165.927-.02 1.365a1.762 1.762 0 0 1-.964.95zM27.085 23.215l15.367-6.21.432 1.105-15.513 6.268zm-2.47 23.406H7.032c-2.55 0-4.622-2.08-4.677-4.656L7.95 19.256h15.747l5.596 22.709c-.055 2.577-2.126 4.656-4.677 4.656zM7.832 16.877L6.426 13.31h18.8l-1.406 3.568zM72.52 2.342a4.028 4.028 0 0 0-3.14-.046L42.242 13.248a1.18 1.18 0 0 0-.643.635 1.188 1.188 0 0 0-.074.34c-.005.036-.022.07-.023.105 0 .027.014.055.015.082a1.171 1.171 0 0 0 .069.383L26.51 20.877l-.67-2.722 2.193-5.574.001-.002.008-.021c.029-.075.026-.15.04-.225.014-.072.044-.139.044-.216 0-.004-.003-.007-.003-.011a1.154 1.154 0 0 0-.068-.339c-.011-.038-.009-.08-.024-.118-.024-.05-.065-.09-.093-.139-.05-.08-.092-.17-.16-.237-.021-.022-.054-.032-.078-.053a1.142 1.142 0 0 0-.303-.202c-.004-.002-.006-.005-.01-.006-.078-.032-.159-.031-.239-.046-.065-.01-.124-.036-.194-.036H4.695c-.073 0-.136.028-.205.041-.077.014-.155.013-.23.043-.004.001-.006.005-.01.006-.113.048-.21.122-.303.202-.025.02-.057.031-.079.054-.065.066-.106.15-.154.23-.03.05-.074.092-.096.146-.016.034-.014.076-.025.114a1.217 1.217 0 0 0-.068.342l-.002.011c0 .076.028.143.042.215.014.075.012.153.04.226l.01.022v.001l2.193 5.57L.035 41.576c-.012.047-.001.094-.007.143-.006.05-.028.094-.028.145C0 45.799 3.154 49 7.031 49h17.585c3.877 0 7.031-3.201 7.031-7.137 0-.051-.023-.095-.028-.145-.006-.05.006-.096-.007-.143l-3.666-14.878 15.806-6.376a1.17 1.17 0 0 0 1.52.665l27.138-10.95a4.107 4.107 0 0 0 2.251-2.22 4.192 4.192 0 0 0 .047-3.188 4.114 4.114 0 0 0-2.188-2.286zM7.764 8.67a1 1 0 0 0 .735.33 1 1 0 0 0 .736-.33c.584-.63 1.281-2.324.196-4.673-.642-1.388-.216-2.04-.169-2.105.38-.442.37-1.132-.026-1.562a.985.985 0 0 0-1.471 0c-.585.63-1.281 2.324-.196 4.673.661 1.428.192 2.077.196 2.077a1.188 1.188 0 0 0-.001 1.59zm7 0a1 1 0 0 0 .735.33 1 1 0 0 0 .736-.33c.584-.63 1.281-2.324.196-4.673-.642-1.388-.216-2.04-.169-2.105.38-.442.37-1.132-.026-1.562a.985.985 0 0 0-1.471 0c-.584.631-1.281 2.324-.196 4.673.661 1.428.192 2.077.196 2.077a1.188 1.188 0 0 0-.001 1.59z"></path>
            <path d="M21.764 8.67a1 1 0 0 0 .735.33 1 1 0 0 0 .736-.33c.584-.63 1.281-2.324.196-4.673-.642-1.388-.216-2.04-.169-2.105.38-.442.37-1.132-.026-1.562a.985.985 0 0 0-1.471 0c-.584.631-1.281 2.324-.196 4.673.661 1.428.192 2.077.196 2.077a1.188 1.188 0 0 0-.001 1.59z"></path>
        </symbol>
    </svg>

    <div style="z-index: 999; padding-bottom: 0px; padding: 0px;" class="modal modal_reg" id="regModal1">
            <button class="modal__close js-close-modal">
                <svg>
                    <use xlink:href="#rounded-close"></use>
                </svg>
            </button>
        
                <form action="{{ url('/form_sumbit') }}" method="POST" class="lets-work__form form">
                    @csrf()
                    <input type="hidden" name="page_from" value="Coffee Subscribtion - Offices">
                    <p class="lets-work__note">Write to us what we can help</p>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_user">
                                <use xlink:href="#user"></use>
                            </svg>
                            <input class="field__input" type="text" name="name" placeholder="Name" required>
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_phone-call">
                                <use xlink:href="#phone-call"></use>
                            </svg>
                            <input class="field__input" type="tel" name="tel" placeholder="Phone" required>
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_envelope">
                                <use xlink:href="#envelope"></use>
                            </svg>
                            <input class="field__input" type="email" name="email" placeholder="Email" required>
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_comment">
                                <use xlink:href="#chat-comment"></use>
                            </svg>
                            <input class="field__input" type="text" name="symptom" placeholder="Comments" required>
                        </label>
                        <input class="button button_blue" type="submit" value="Send">
                    </form>
        </div>

         <!-- Office-Caffe -->
        <!-- Modal - modal-->
        <div style="z-index: 999; padding-bottom: 0px; padding: 0px;" class="modal modal_reg" id="regModal2">
            <button class="modal__close js-close-modal">
                <svg>
                    <use xlink:href="#rounded-close"></use>
                </svg>
            </button>
        
                <form action="{{ url('/form_sumbit') }}" method="POST" class="lets-work__form form">
                    @csrf()
                    <input type="hidden" name="page_from" value="Coffee Subscribtion - Small Cafe">
                    <p class="lets-work__note">Write to us what we can help</p>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_user">
                                <use xlink:href="#user"></use>
                            </svg>
                            <input class="field__input" type="text" name="name" placeholder="Name" required>
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_phone-call">
                                <use xlink:href="#phone-call"></use>
                            </svg>
                            <input class="field__input" type="tel" name="tel" placeholder="Phone" required>
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_envelope">
                                <use xlink:href="#envelope"></use>
                            </svg>
                            <input class="field__input" type="email" name="email" placeholder="Email" required>
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_comment">
                                <use xlink:href="#chat-comment"></use>
                            </svg>
                            <input class="field__input" type="text" name="symptom" placeholder="Comments" required>
                        </label>
                        <input class="button button_blue" type="submit" value="Send">
                    </form>
        </div>


</main>
@endsection