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
            <form method="post" action="{{ url('/change_password') }}" @submit.prevent="onSubmit">
            @csrf
                            <div class="cart-settings__box cart-settings__box_password">
                                <div class="cart-settings__forms">
                                    <div class="cart-settings__form-item cart-settings__form-item_single">
                                        <div class="input-text">
                                            <label class="input-text__label" for="currentPassword">Current password</label>
                                            <input class="input-text__input" id="currentPassword" type="password" name="current_password" data-vv-as="&quot;{{ __('shop::app.customer.account.profile.opassword') }}&quot;" v-validate="'min:6'">
                                            <span class="input-text__show-hide" disable>
                                                <svg>
                                                    <use xlink:href="#eye"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item cart-settings__form-item_single">
                                        <div class="input-text">
                                            <label class="input-text__label" for="newPassword">New password</label>
                                            <input class="input-text__input" id="newPassword" type="password" name="password" data-vv-as="&quot;{{ __('shop::app.customer.account.profile.password') }}&quot;" v-validate="'min:6'">
                                            <span class="input-text__show-hide">
                                                <svg>
                                                    <use xlink:href="#eye"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item cart-settings__form-item_single">
                                        <div class="input-text">
                                            <label class="input-text__label" for="repeatPassword">Repeat new password</label>
                                            <input class="input-text__input" id="repeatPassword" type="password" name="password_confirmation" data-vv-as="&quot;{{ __('shop::app.customer.account.profile.cpassword') }}&quot;" v-validate="'min:6|confirmed:password'">
                                            <span class="input-text__show-hide">
                                                <svg>
                                                    <use xlink:href="#eye"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    @if (\Session::has('paserror'))

                                    <span class="control-error">Please Check Your Credentials And Try Again</span>

                                    @endif
                </form>
                                    <input class="button button_blue cart-settings__pass-submit" type="submit" value="Change password">
                                    @if (\Session::has('password'))

                                    <div class="modal modal_changes visible" id="changesModal">
                                        <span class="modal__close js-close-modal">
                                            <svg>
                                                <use xlink:href="#rounded-close"></use>
                                            </svg>
                                        </span>
                                        <svg class="modal__icon" width="45" height="45" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M42.141 18.695c-1.026 0-1.858.851-1.858 1.901v1.915c-.003 4.994-1.908 9.689-5.363 13.218-3.452 3.527-8.04 5.469-12.92 5.469h-.01c-10.082-.006-18.278-8.399-18.273-18.709C3.72 17.495 5.625 12.8 9.08 9.271 12.532 5.744 17.12 3.8 22 3.8h.01c2.577.002 5.077.547 7.431 1.62a1.842 1.842 0 0 0 2.454-.963c.418-.959-.003-2.083-.94-2.51A21.449 21.449 0 0 0 22.012 0H22C16.128 0 10.607 2.337 6.453 6.581 2.295 10.828.003 16.477 0 22.487c-.003 6.01 2.282 11.662 6.435 15.914 4.153 4.252 9.676 6.596 15.552 6.599H22c5.872 0 11.393-2.337 15.547-6.581 4.158-4.247 6.45-9.896 6.453-15.907v-1.916c0-1.05-.832-1.9-1.859-1.9z" fill="#64b2db"></path>
                                            <path d="M44.471 3.547a1.763 1.763 0 0 0-2.553 0L21.674 24.49l-4.592-4.75a1.763 1.763 0 0 0-2.553 0 1.914 1.914 0 0 0 0 2.64l5.869 6.073a1.77 1.77 0 0 0 1.277.547 1.77 1.77 0 0 0 1.276-.547l21.52-22.264a1.914 1.914 0 0 0 0-2.642z" fill="#64b2db"></path>
                                        </svg>
                                        <p class="modal__text">Your changes have been saved!</p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection
