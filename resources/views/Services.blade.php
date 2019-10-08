@extends('layouts.main')

@section('header')
<header class="header header_has-columns header_services">

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
            <div class="header__row js-block-cnt">
                <div class="header__content">
                    <div class="banner banner_gift banner_flavored">
                        <h1 class="title banner__title color-blue">Services</h1>
                        <p class="banner__text">Our company also undertakes the repair, commissioning and maintenance of espresso machines in its own service center. </p>
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
            <section class="lets-work js-block-cnt">
                <div class="container">
                    <form action="{{ url('/form_sumbit') }}" method="POST" class="lets-work__form form">
                    @csrf()
                    <input type="hidden" name="page_from" value="Services">
                    <p class="lets-work__note">Write to us what we can help</p>
                    @if($errors->any())
                    <h4>{{$errors->first()}}</h4>
                    @endif
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
            </section>
        </main>

@endsection