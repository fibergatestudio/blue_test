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
                                <a href="#">Change password</a>
                            </li>
                        </ul>
                        <a class="back-button page__back-button" href="#">
                            <svg>
                                <use xlink:href="#long-arrow"></use>
                            </svg>
                        </a>
                        <h1 class="page__title">Change password</h1>
                        <div class="cart">
                            <div class="cart__mob-btns">
                                <button class="cart__menu-trigger js-box-trigger" data-target-id="sidebar">Manage account</button>
                            </div>
            <form method="post" action="{{ route('customer.profile.edit') }}" @submit.prevent="onSubmit">
            @csrf
                            <div class="cart-settings__box cart-settings__box_password">
                                <div class="cart-settings__forms">
                                    <div class="cart-settings__form-item cart-settings__form-item_single">
                                        <div class="input-text">
                                            <label class="input-text__label" for="currentPassword">Current password</label>
                                            <input class="input-text__input" id="currentPassword" type="password" name="oldpassword" data-vv-as="&quot;{{ __('shop::app.customer.account.profile.opassword') }}&quot;" v-validate="'min:6'">
                                            <button class="input-text__show-hide" disable>
                                                <svg>
                                                    <use xlink:href="#eye"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item cart-settings__form-item_single">
                                        <div class="input-text">
                                            <label class="input-text__label" for="newPassword">New password</label>
                                            <input class="input-text__input" id="newPassword" type="password" name="password" data-vv-as="&quot;{{ __('shop::app.customer.account.profile.password') }}&quot;" v-validate="'min:6'">
                                            <button class="input-text__show-hide">
                                                <svg>
                                                    <use xlink:href="#eye"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item cart-settings__form-item_single">
                                        <div class="input-text">
                                            <label class="input-text__label" for="repeatPassword">Repeat new password</label>
                                            <input class="input-text__input" id="repeatPassword" type="password" name="password_confirmation" data-vv-as="&quot;{{ __('shop::app.customer.account.profile.cpassword') }}&quot;" v-validate="'min:6|confirmed:password'">
                                            <button class="input-text__show-hide">
                                                <svg>
                                                    <use xlink:href="#eye"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                </form>
                                    <input class="button button_blue cart-settings__pass-submit" type="submit" value="Change password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection
