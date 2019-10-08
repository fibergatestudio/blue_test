@extends('layouts.main')

@section('header')
<header class="header header_inner">

            @include('layouts.header_menu')
</header>
@endsection

@section('content')

<main>
            <div class="page page_has-filter">
            @include('shop::customers.account.partials.new_sidemenu')
                <div class="page__content">
                    <div class="container page__container">
                        <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="#">Manage Account</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="#">Newsletter Subscription</a>
                            </li>
                        </ul>
                        <a class="back-button page__back-button" href="#">
                            <svg>
                                <use xlink:href="#long-arrow"></use>
                            </svg>
                        </a>
                        <h1 class="page__title">Newsletter Subscription</h1>
                        <div class="cart">
                            <div class="cart__mob-btns">
                                <button class="cart__menu-trigger js-box-trigger" data-target-id="sidebar">Manage account</button>
                            </div>

    <!-- <form action="http://localhost/blue_bird/public/subscribe">
        <div class="control-group">
            <input type="email" name="subscriber_email" placeholder="Email Address" required="required" class="control subscribe-field"><br> 
            <button class="btn btn-md btn-primary">Subscribe</button>
        </div>
    </form> -->

                        <!-- <form action="{{ route('shop.subscribe') }}">
                            <div class="control-group" :class="[errors.has('subscriber_email') ? 'has-error' : '']">
                                <input type="email" class="control subscribe-field" name="subscriber_email" placeholder="Email Address" required><br/>

                                <button class="btn btn-md btn-primary">{{ __('shop::app.subscription.subscribe') }}</button>
                            </div>
                        </form> -->
                            <div class="cart-settings__box subscription-settings">
                                <h2 class="subscription-settings__title">For those who love coffee</h2>
                                <p class="subscription-settings__desc">Join our community of coffee addicts as we learn more about the drink we love.</p>
                                @if($errors->any())
                                <h4>{{$errors->first()}}</h4>
                                @endif
                                <form action="{{ url('/subscribe') }}" class="subscription-settings__form" method=GET>
                                @csrf()
                                    <div class="field subscription-settings__field">
                                        <svg class="field__icon field__icon_envelope">
                                            <use xlink:href="#envelope"></use>
                                        </svg>
                                        <input class="field__input" type="email" name="subscriber_email" placeholder="Email" required="required">
                                    </div>
                                    <div class="radio-group subscription-settings__radio-group">
                                        <div class="radio-group__row">
                                            <label class="radio-group__label" for="periodOnce">Once a week</label>
                                            <div class="radio-switch">
                                                <input class="radio-switch__input" id="periodOnce" type="radio" name="period">
                                                <label class="radio-switch__track" for="periodOnce">
                                                    <div class="radio-switch__thumb"></div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="radio-group__row">
                                            <label class="radio-group__label" for="periodTwice">Twice a week</label>
                                            <div class="radio-switch">
                                                <input class="radio-switch__input" id="periodTwice" type="radio" name="period" checked>
                                                <label class="radio-switch__track" for="periodTwice">
                                                    <div class="radio-switch__thumb"></div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input class="subscription-settings__subscribe button button_blue" type="submit" value="Subscribe">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection