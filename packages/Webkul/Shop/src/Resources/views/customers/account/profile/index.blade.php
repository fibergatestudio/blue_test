
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
                            <form class="cart-settings__box cart-settings__box_personal">
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
                                            <input class="input-text__input input-text__input_has-icon" id="streetAddress" type="text" name="streetAddress" value="{{ $address->address1 }}">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="city">City</label>
                                            <input class="input-text__input input-text__input_has-icon" id="city" type="text" name="city" value="{{ $address->city }}">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="region">Region</label>
                                            <input class="input-text__input input-text__input_has-icon" id="region" type="text" name="region" value="{{ $address->state }}">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="zip">Postcode / ZIP</label>
                                            <input class="input-text__input input-text__input_has-icon" id="zip" type="text" name="zip" value="{{ $address->postcode }}">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="phone">Phone number</label>
                                            <input class="input-text__input input-text__input_has-icon" id="phone" type="tel" name="phone" value="{{ $address->phone }}">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div> 
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="email">Email address</label>
                                            <input class="input-text__input input-text__input_has-icon" id="email" type="email" name="email" value="{{ $customer->email }}">
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
                                            <label class="input-text__label" for="email">Loyality Points</label>
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

@endsection
