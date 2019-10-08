
<!-- <div class="account-content">

    @include('shop::customers.account.partials.sidemenu')

    <div class="account-layout">
 
        <div class="account-head">

            <span class="back-icon"><a href="{{ route('customer.account.index') }}"><i class="icon icon-menu-back"></i></a></span>

            <span class="account-heading">{{ __('shop::app.customer.account.profile.index.title') }}</span>

            <span class="account-action">
                <a href="{{ route('customer.profile.edit') }}">{{ __('shop::app.customer.account.profile.index.edit') }}</a>
            </span>

            <div class="horizontal-rule"></div>
        </div>

         {!! view_render_event('bagisto.shop.customers.account.profile.view.before', ['customer' => $customer]) !!}

        <div class="account-table-content" style="width: 50%;">
            <table style="color: #5E5E5E;">
                <tbody>
                    <tr>
                        <td>{{ __('shop::app.customer.account.profile.fname') }}</td>
                        <td>{{ $customer->first_name }}</td>
                    </tr>

                    <tr>
                        <td>{{ __('shop::app.customer.account.profile.lname') }}</td>
                        <td>{{ $customer->last_name }}</td>
                    </tr>

                    <tr>
                        <td>{{ __('shop::app.customer.account.profile.gender') }}</td>
                        <td>{{ $customer->gender }}</td>
                    </tr>

                    <tr>
                        <td>{{ __('shop::app.customer.account.profile.dob') }}</td>
                        <td>{{ $customer->date_of_birth }}</td>
                    </tr>

                    <tr>
                        <td>{{ __('shop::app.customer.account.profile.email') }}</td>
                        <td>{{ $customer->email }}</td>
                    </tr>

                    
                    <tr>
                        <td>Loyality Points</td>
                        <td>{{ $customer->points }}</td>
                    </tr>

                    @if ($customer->subscribed_to_news_letter == 1)
                        <tr>
                            <td> {{ __('shop::app.footer.subscribe-newsletter') }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('shop.unsubscribe', $customer->email) }}">{{ __('shop::app.subscription.unsubscribe') }} </a>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

         {!! view_render_event('bagisto.shop.customers.account.profile.view.after', ['customer' => $customer]) !!}
    </div>
</div> -->

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
                                <a href="#">Personal information</a>
                            </li>
                        </ul>
                        <a class="back-button page__back-button" href="#">
                            <svg>
                                <use xlink:href="#long-arrow"></use>
                            </svg>
                        </a>
                        <h1 class="page__title">Personal information</h1>
                        <div class="cart">
                            <div class="cart__mob-btns">
                                <button class="cart__menu-trigger js-box-trigger" data-target-id="sidebar">Manage account</button>
                            </div>
                            <form class="cart-settings__box cart-settings__box_personal" method="post" action="{{ route('customer.profile.newedit') }}" @submit.prevent="onSubmit">
                            @csrf
                                <input type="hidden" name="user_id" value="{{ $customer->id }}">
                                <input type="hidden" name="date_of_birth" value="{{ $customer->date_of_birth }}">
                                <div class="cart-settings__forms">
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="firstName">First name</label>
                                            <input class="input-text__input input-text__input_has-icon" id="firstName" type="text" name="firstName" value="{{ $customer->first_name }}">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="lastName">Last name</label>
                                            <input class="input-text__input input-text__input_has-icon" id="lastName" type="text" name="lastName" value="{{ $customer->last_name }}">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="streetAddress">Street address</label>
                                            <input class="input-text__input input-text__input_has-icon" id="streetAddress" type="text" name="streetAddress" @if($address) value="{{ $address->address1 }} @endif">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="city">City</label>
                                            <input class="input-text__input input-text__input_has-icon" id="city" type="text" name="city" @if($address) value="{{ $address->city }} @endif" required>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="region">Region</label>
                                            <input class="input-text__input input-text__input_has-icon" id="region" type="text" name="region" @if($address) value="{{ $address->state }} @endif" required>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="zip">Postcode / ZIP</label>
                                            <input class="input-text__input input-text__input_has-icon" id="zip" type="text" name="zip" @if($address) value="{{ $address->postcode }} @endif" required>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="phone">Phone number</label>
                                            <input class="input-text__input input-text__input_has-icon" id="phone" type="tel" name="phone" @if($address) value="{{ $address->phone }} @endif" required>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div> 
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="email">Email address</label>
                                            <input class="input-text__input input-text__input_has-icon" id="email" type="email" name="email" value="{{ $customer->email }}" required>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="email">Gender</label>
                                            <input class="input-text__input input-text__input_has-icon" id="gender" type="text" name="gender" value="{{ $customer->gender }}">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="email">Loyalty Points</label>
                                            <input class="input-text__input input-text__input_has-icon" id="points" type="text" name="points" value="{{ $customer->points }}" disabled>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-settings__personal-btn">
                                    <input class="button button_blue" type="submit" value="Save">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @if($errors->any())

        <div class="modal modal_changes visible" id="changesModal">
            <button class="modal__close js-close-modal">
                <svg>
                    <use xlink:href="#rounded-close"></use>
                </svg>
            </button>
            <svg class="modal__icon" width="45" height="45" xmlns="http://www.w3.org/2000/svg">
                <path d="M42.141 18.695c-1.026 0-1.858.851-1.858 1.901v1.915c-.003 4.994-1.908 9.689-5.363 13.218-3.452 3.527-8.04 5.469-12.92 5.469h-.01c-10.082-.006-18.278-8.399-18.273-18.709C3.72 17.495 5.625 12.8 9.08 9.271 12.532 5.744 17.12 3.8 22 3.8h.01c2.577.002 5.077.547 7.431 1.62a1.842 1.842 0 0 0 2.454-.963c.418-.959-.003-2.083-.94-2.51A21.449 21.449 0 0 0 22.012 0H22C16.128 0 10.607 2.337 6.453 6.581 2.295 10.828.003 16.477 0 22.487c-.003 6.01 2.282 11.662 6.435 15.914 4.153 4.252 9.676 6.596 15.552 6.599H22c5.872 0 11.393-2.337 15.547-6.581 4.158-4.247 6.45-9.896 6.453-15.907v-1.916c0-1.05-.832-1.9-1.859-1.9z" fill="#64b2db"></path>
                <path d="M44.471 3.547a1.763 1.763 0 0 0-2.553 0L21.674 24.49l-4.592-4.75a1.763 1.763 0 0 0-2.553 0 1.914 1.914 0 0 0 0 2.64l5.869 6.073a1.77 1.77 0 0 0 1.277.547 1.77 1.77 0 0 0 1.276-.547l21.52-22.264a1.914 1.914 0 0 0 0-2.642z" fill="#64b2db"></path>
            </svg>
            <p class="modal__text">Your changes have been saved!</p>
        </div>
        @endif

@endsection
