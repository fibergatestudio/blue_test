<!-- 

@section('page_title')
    {{ __('shop::app.customer.account.address.index.page-title') }}
@endsection

@section('content-wrapper')

<div class="account-content">

    @include('shop::customers.account.partials.sidemenu')

    <div class="account-layout">

        <div class="account-head">
            <span class="back-icon"><a href="{{ route('customer.account.index') }}"><i class="icon icon-menu-back"></i></a></span>
            <span class="account-heading">{{ __('shop::app.customer.account.address.index.title') }}</span>

            @if (! $addresses->isEmpty())
                <span class="account-action">
                    <a href="{{ route('customer.address.create') }}">{{ __('shop::app.customer.account.address.index.add') }}</a>
                </span>
            @else
                <span></span>
            @endif
            <div class="horizontal-rule"></div>
        </div>

        {!! view_render_event('bagisto.shop.customers.account.address.list.before', ['addresses' => $addresses]) !!}

        <div class="account-table-content">
            @if ($addresses->isEmpty())
                <div>{{ __('shop::app.customer.account.address.index.empty') }}</div>
                <br/>
                <a href="{{ route('customer.address.create') }}">{{ __('shop::app.customer.account.address.index.add') }}</a>
            @else
                <div class="address-holder">
                    @foreach ($addresses as $address)
                        <div class="address-card">
                            <div class="details">
                                <span class="bold">{{ auth()->guard('customer')->user()->name }}</span>
                                <ul class="address-card-list">
                                    <li class="mt-5">
                                        {{ $address->name }}
                                    </li>

                                    <li class="mt-5">
                                        {{ $address->address1 }},
                                    </li>

                                    <li class="mt-5">
                                        {{ $address->city }}
                                    </li>

                                    <li class="mt-5">
                                        {{ $address->state }}
                                    </li>

                                    <li class="mt-5">
                                        {{ core()->country_name($address->country) }} {{ $address->postcode }}
                                    </li>

                                    <li class="mt-10">
                                        {{ __('shop::app.customer.account.address.index.contact') }} : {{ $address->phone }}
                                    </li>
                                </ul>

                                <div class="control-links mt-20">
                                    <span>
                                        <a href="{{ route('customer.address.edit', $address->id) }}">
                                            {{ __('shop::app.customer.account.address.index.edit') }}
                                        </a>
                                    </span>

                                    <span>
                                        <a href="{{ route('address.delete', $address->id) }}" onclick="deleteAddress('{{ __('shop::app.customer.account.address.index.confirm-delete') }}')">
                                            {{ __('shop::app.customer.account.address.index.delete') }}
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        {!! view_render_event('bagisto.shop.customers.account.address.list.after', ['addresses' => $addresses]) !!}
    </div>
</div>
@endsection

@push('scripts')
    <script>
        function deleteAddress(message) {
            if (!confirm(message))
            event.preventDefault();
        }
    </script>
@endpush -->


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
                        <a href="#">Billing </a>
                    </li>
                </ul>
                <a class="back-button page__back-button" href="#">
                    <svg>
                        <use xlink:href="#long-arrow"></use>
                    </svg>
                </a>
                <h1 class="page__title">Billing information</h1>
                <div class="cart billing">
                    <div class="cart__mob-btns">
                        <button class="cart__menu-trigger js-box-trigger" data-target-id="sidebar">Manage account</button>
                    </div>
                    <form class="billing__box">
                        <div class="billing__col billing__col_forms">
                            <div class="input-text billing__input">
                                <label class="input-text__label" for="name">Name</label>
                                <input class="input-text__input input-text__input_has-icon" id="name" type="text" name="name" value="Victoria">
                                <svg class="input-text__icon">
                                    <use xlink:href="#pencil"></use>
                                </svg>
                            </div>
                            <div class="input-text billing__input">
                                <label class="input-text__label" for="billingAddress">Billing address</label>
                                <input class="input-text__input input-text__input_has-icon" id="billingAddress" type="text" name="billing-address" value="532 Ullrich Cliff Suite 854">
                                <svg class="input-text__icon">
                                    <use xlink:href="#pencil"></use>
                                </svg>
                            </div>
                            <div class="input-text billing__input">
                                <label class="input-text__label" for="city">City</label>
                                <input class="input-text__input input-text__input_has-icon" id="city" type="text" name="city" value="Budapest">
                                <svg class="input-text__icon">
                                    <use xlink:href="#pencil"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="billing__col">
                            <div class="billing__subscription subsciption-card">
                                <div class="subsciption-card__col"><span class="subsciption-card__label">Subscribtion</span><span class="subsciption-card__term">{{ $coffee->subscription_term }}</span>
                                    <a class="subsciption-card__button button button_blue" href="{{ url('/coffeesubscription') }}">Change</a>
                                </div>
                                <div class="subsciption-card__col"><span class="subsciption-card__label subsciption-card__label_transp">Valid until</span><span class="subsciption-card__text">{{ $coffee->subscription_term_ends }}</span><span class="subsciption-card__label subsciption-card__label_transp">Coffee type</span><span class="subsciption-card__text">Espresso</span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <h2 class="page__title billing__title">Card information </h2>
                    <div class="billing__box billing__box_cards">
                        <div class="billing__col">
                            <div class="bank-card bank-card_frontside">
                                <div class="input-text bank-card__input">
                                    <label class="input-text__label" for="cardType">Card Type</label>
                                    <input class="input-text__input" id="cardType" type="text" name="card-type">
                                </div>
                                <div class="input-text bank-card__input">
                                    <label class="input-text__label" for="cardNumber">Card Number</label>
                                    <input class="input-text__input js-validate" id="cardNumber" type="text" name="card-number" data-mask-options="bankCardNumber">
                                </div>
                                <div class="input-text bank-card__input bank-card__input_short">
                                    <label class="input-text__label" for="expiry">Expiry</label>
                                    <input class="input-text__input js-validate" id="expiry" type="text" name="expiry" data-mask-options="bankCardExpiry">
                                </div>
                            </div>
                        </div>
                        <div class="billing__col">
                            <div class="bank-card bank-card_backside">
                                <div class="bank-card__strip"></div>
                                <div class="bank-card__backinfo">
                                    <div class="bank-card__row">
                                        <div class="bank-card__sign">
                                            <picture>
                                                <source srcset="img/common/sign.webp" type="image/webp">
                                                <source srcset="img/common/sign.png" type="image/png">
                                                <img src="img/common/sign.png" alt="Picture alt text">
                                            </picture><span>3369</span>
                                        </div>
                                        <div class="bank-card__cvv-wrapper">
                                            <div class="bank-card__label">CVV</div>
                                            <input class="bank-card__cvv js-validate" type="text" data-mask-options="cvv">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="page__title billing__title">Billing history </h2>
                    <div class="table billing__table">
                        <div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Billing period</th>
                                        <th>Subscribtion</th>
                                        <th>Payment date</th>
                                        <th>21 600HUF</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mar 12 - Jun 11</td>
                                        <td>3 months</td>
                                        <td>12.04.2019</td>
                                        <td>21 600HUF</td>
                                    </tr>
                                    <tr>
                                        <td>Dec 12 - Mar 11</td>
                                        <td>3 months</td>
                                        <td>10.11.2018</td>
                                        <td>21 600HUF</td>
                                    </tr>
                                    <tr>
                                        <td>Sep 12 - Dec 11</td>
                                        <td>3 months</td>
                                        <td>09.08.2018</td>
                                        <td>21 600HUF</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- billing settings icons-->
                <svg style="position: absolute; width: 1px; height: 1px; overflow: hidden;">
                    <symbol id="pencil" viewbox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.767 4.221L8.78 1.232c.38-.313.853-.485 1.351-.485a2.117 2.117 0 0 1 2.122 2.122c0 .502-.172.973-.485 1.352zm-7.31 7.335l-1.22-1.224 6.788-6.798 1.222 1.223zm3.779-9.8l1.247 1.247-6.78 6.782-1.248-1.248zM12.158.84a2.867 2.867 0 0 0-4.058 0L.66 8.28a.372.372 0 0 0-.105.213l-.551 4.083a.371.371 0 0 0 .105.313c.07.07.166.111.263.111.017 0 .033 0 .05-.003l2.46-.332a.375.375 0 0 0-.1-.743l-1.972.266.385-2.847 2.997 2.997a.367.367 0 0 0 .526 0l7.44-7.438A2.852 2.852 0 0 0 13 2.87c0-.768-.3-1.488-.842-2.029z" fill="#64b2db"></path>
                    </symbol>
                </svg>
            </div>
        </div>
    </div>
</main>

@endsection
