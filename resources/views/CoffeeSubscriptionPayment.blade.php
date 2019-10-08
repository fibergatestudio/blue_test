@extends('layouts.main')

@section('header')
        <header class="header header_inner">

                    @include('layouts.header_menu')
              
        </header>
@endsection

@section('content')
<main>
            <div class="page page_has-filter">
        <form action="{{ url('/coffeesubscription/subscribe') }}" method="POST" @submit.prevent="onSubmit">
            @csrf()

                @if(!empty($customer))
                    <input type="hidden" name="user_id" value="{{ $customer->id }}">
                @else
                    <input type="hidden" name="user_id" value="null">
                @endif

                <aside class="sidebar" id="sidebar">
                    <div class="sidebar-form">
                        <h2 class="sidebar-form__title">Order summary</h2>
                        <div class="sidebar-form__content">
                            <div class="sidebar-order">
                                <div class="sidebar-order__image"> 
                                    <picture>
                                        <source srcset="{{ url('assets/img/tmp/goods/box.webp') }}" type="image/webp">
                                        <source srcset="{{ url('assets/img/tmp/goods/box.jpg') }}" type="image/jpeg">
                                        <img src="{{ url('assets/img/tmp/goods/box.jpg') }}" alt="Picture alt text">
                                    </picture>
                                </div>
                                <ul class="sidebar-order__list">
                                    <li class="sidebar-order__list-item"><span class="sidebar-order__key">Subscription</span><span class="sidebar-order__val">{{ $subscription_name }}</span>
                                        <input type="hidden" name="subscription_name" value="{{ $subscription_name }}">
                                    </li>
                                    <li class="sidebar-order__list-item"><span class="sidebar-order__key">Term</span><span class="sidebar-order__val">{{ $subscription_term }}</span>
                                        <input type="hidden" name="subscription_term" value="{{ $subscription_term }}">
                                    </li>
                                    <li class="sidebar-order__list-item"><span class="sidebar-order__key">Grind</span><span class="sidebar-order__val">Whole Bean</span>
                                    </li>
                                    <li class="sidebar-order__list-item"><span class="sidebar-order__key">Roast</span><span class="sidebar-order__val">Light</span>
                                    </li>
                                    <li class="sidebar-order__list-item"><span class="sidebar-order__key">Type</span><span class="sidebar-order__val">Espresso</span>
                                    </li>
                                    <li class="sidebar-order__list-item"><span class="sidebar-order__key">Ships every</span><span class="sidebar-order__val">{{ $ship_frequency }}</span>
                                    </li>
                                    <li class="sidebar-order__list-item"><span class="sidebar-order__key">Ships quantity</span><span class="sidebar-order__val">{{ $ship_quantity }}</span>
                                    </li>
                                </ul>
                                <ul class="sidebar-order__list">
                                    <li class="sidebar-order__list-item"><span class="sidebar-order__key">Price</span><span class="sidebar-order__val">{{ $price }}</span>
                                    </li>
                                    <li class="sidebar-order__list-item"><span class="sidebar-order__key">Shipping</span><span class="sidebar-order__val">500 HUF</span>
                                    </li>
                                </ul>
                                <button class="sidebar-order__coupon">Have a Coupon Code?</button>
                                <a class="sidebar-order__change button button_blue" href="{{ url('coffeesubscription/#changeOrder') }}">Change order</a>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="page__content">
                    <div class="container page__container">
                        <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="{{ url('/coffeesubscription') }}">Coffee subscription</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="{{ url('/coffeesubscription/payment') }}">Payment information</a>
                            </li>
                        </ul>
                        <a class="back-button page__back-button" href="#">
                            <svg>
                                <use xlink:href="#long-arrow"></use>
                            </svg>
                        </a>
                        <h1 class="page__title">Shipping information</h1>
                        <div class="cart-settings">
                            <div class="cart__mob-btns">
                                <button class="cart__menu-trigger js-box-trigger" data-target-id="sidebar">Order summary</button>
                            </div>
                            <div class="cart-settings__box cart-settings__box_personal">
                                <div class="cart-settings__forms">
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="firstName">First name</label>

                                            
                                            @if(!empty($customer))
                                            <input class="input-text__input" id="firstName" type="text" name="first_name" value="{{ $customer->first_name }}">
                                            @else
                                            <input class="input-text__input" id="firstName" type="text" name="first_name" value="" required>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="lastName">Last name</label>

                                           
                                            @if(!empty($customer))
                                            <input class="input-text__input" id="lastName" type="text" name="last_name" value="{{ $customer->last_name }}" >
                                            @else
                                            <input class="input-text__input" id="lastName" type="text" name="last_name" value="" required>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="address1">Adress 1</label>
                                            
                                            @if(!empty($customer))
                                            <input class="input-text__input" id="address1" type="text" name="address1" value="{{ $address->address1 }}" >
                                            @else
                                            <input class="input-text__input" id="address1" type="text" name="address1" value="" required>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="address2">Adress 2</label>
                                            
                                            @if(!empty($customer))
                                            <input class="input-text__input" id="address2" type="text" name="address2" value="{{ $address->address2 }}" >
                                            @else
                                            <input class="input-text__input" id="address2" type="text" name="address2" value="" required>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="city">City</label>
                                            
                                            @if(!empty($customer))
                                            <input class="input-text__input" id="city" type="text" name="city" value="{{ $address->city }}" >
                                            @else
                                            <input class="input-text__input" id="city" type="text" name="city" value="" required>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="country">Country</label>
                                            
                                            @if(!empty($customer))
                                            <input class="input-text__input" id="country" type="text" name="country" value="{{ $address->country }}" >
                                            @else
                                            <input class="input-text__input" id="country" type="text" name="country" value="" required>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="zip">Zip</label>
                                            
                                            @if(!empty($customer))
                                            <input class="input-text__input" id="zip" type="text" name="zip" value="{{ $address->postcode }}" >
                                            @else
                                            <input class="input-text__input" id="zip" type="text" name="zip" value="" required>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="phone">Phone</label>
                                          
                                            @if(!empty($customer))
                                                <input class="input-text__input" id="phone" type="tel" name="phone" value="{{ $address->phone }}" >
                                            @else
                                                <input class="input-text__input" id="phone" type="tel" name="phone" value="" required>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="page__title">Payment Details:</h2>
                            <div class="cart-settings__box cart-settings__box_p-100">
                                <h3 class="cart-settings__label">Choose card</h3>
                                <ul class="pay-systems">
                                    <li>
                                        <input class="pay-systems__input" id="visa" type="radio" name="pay-system" checked>
                                        <label class="pay-systems__icon pay-systems__icon_visa" for="visa"></label>
                                    </li>
                                    <li>
                                        <input class="pay-systems__input" id="mastercard" type="radio" name="pay-system">
                                        <label class="pay-systems__icon pay-systems__icon_mastercard" for="mastercard"></label>
                                    </li>
                                    <li>
                                        <input class="pay-systems__input" id="paypal" type="radio" name="pay-system">
                                        <label class="pay-systems__icon pay-systems__icon_paypal" for="paypal"></label>
                                    </li>
                                </ul>
                                <div class="card-details">
                                    <div class="input-text card-details__item card-details__item_num">
                                        <label class="input-text__label" for="cardNumber">Card Number</label>
                                        <input class="input-text__input js-validate" id="cardNumber" type="text" name="card-number" value="5678984648380990" data-mask-options="bankCardNumber">
                                    </div>
                                    <div class="input-text card-details__item card-details__item_expiry">
                                        <label class="input-text__label" for="expiry">MM/YY</label>
                                        <input class="input-text__input js-validate" id="expiry" type="text" name="expiry" value="07/22" data-mask-options="bankCardExpiry">
                                    </div>
                                    <div class="input-text card-details__item card-details__item_cvv">
                                        <label class="input-text__label" for="cvv">CVV</label>
                                        <input class="input-text__input js-validate" id="cvv" type="text" name="cvv" value="728" data-mask-options="cvv">
                                    </div>
                                </div>
                            </div>
                            @if(empty($customer))
                            <h2 class="page__title">Create your account</h2>

                            <div class="cart-settings__box cart-settings__box_p-100">
                                <div class="cart-settings__forms">
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="email">Email</label>
                                            <input class="input-text__input" id="email" type="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="password">Password</label>
                                            <input class="input-text__input" id="password" type="password" name="password" required>
                                        </div>
                                    </div>
                                    <div class="input-checkbox cart-settings__create-acc">
                                        <input class="input-checkbox__real" id="autoRegister" type="checkbox" name="auto-register" required>
                                        <label class="input-checkbox__label" for="autoRegister">Making a purchase you automatically register in our system and take part in our loyalty program</label>
                                    </div>
                                    <div class="cart-settings__send">
                                        <button type="submit" class="button button_blue">Complete checkout</button>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="cart-settings__forms">
                                    <div class="cart-settings__send">
                                        <button type="submit" class="button button_blue">Complete checkout</button>
                                    </div>
                                </div>
                            @endif

                            <!-- <div class="cart-settings__box cart-settings__box_p-100">
                                <div class="cart-settings__forms">
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="email">Email</label>
                                            <input class="input-text__input" id="email" type="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="password">Password</label>
                                            <input class="input-text__input" id="password" type="password" name="password" required>
                                        </div>
                                    </div>
                                    <div class="input-checkbox cart-settings__create-acc">
                                        <input class="input-checkbox__real" id="autoRegister" type="checkbox" name="auto-register">
                                        <label class="input-checkbox__label" for="autoRegister">Making a purchase you automatically register in our system and take part in our loyalty program</label>
                                    </div>
                                    <div class="cart-settings__send">
                                        <button type="submit" class="button button_blue">Complete checkout</button>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </main>
@endsection