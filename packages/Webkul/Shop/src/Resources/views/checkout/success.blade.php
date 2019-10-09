@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.checkout.success.title') }}
@stop

@section('content-wrapper')

            <div class="page">
                <div class="page__content">
                    <div class="container">
                        <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="{{ url('/checkout/cart') }}">Shopping cart</a>
                            </li>
                        </ul>
                        <a class="back-button page__back-button" href="#">
                            <svg>
                                <use xlink:href="#long-arrow"></use>
                            </svg>
                        </a>
                        <h1 class="page__title">Check out</h1>
                        <div class="cart-settings">
                            <ul class="cart-settings__steps">
                            <li class="cart-step cart-step_active"><span class="cart-step__num">1<span>.</span>
                                    </span><span class="cart-step__text">Customer info</span>
                                </li>
                                <li class="cart-step cart-step_active"><span class="cart-step__num">2<span>.</span>
                                    </span><span class="cart-step__text">Shipping method</span>
                                </li>
                                <li class="cart-step cart-step_active"><span class="cart-step__num">3<span>.</span>
                                    </span><span class="cart-step__text">Payment method</span>
                                </li>
                                <li class="cart-step cart-step_active"><span class="cart-step__num">4<span>.</span>
                                    </span><span class="cart-step__text">Review</span>
                                </li>
                                <li class="cart-step cart-step_active"><span class="cart-step__num">5<span>.</span>
                                    </span><span class="cart-step__text">Confirmation of an order</span>
                                </li>
                            </ul>
                            <div class="cart-settings__confirmation confirmation">
                                <div class="confirmation__box">
                                    <h2 class="confirmation__title">Thank you for your order!</h2>
                                    <div class="confirmation__row"><span>{{ __('shop::app.checkout.success.order-id-info', ['order_id' => $order->id]) }}</span><span>Number of your order</span>
                                    </div>
                                    <div class="confirmation__row"><span>{{ $order->customer_email }}</span><span>Email, which will receive information about your order</span>
                                    </div>
                                    <div class="confirmation__row confirmation__row_history">
                                        <h3>You can view information about your order in your account</h3>
                                        <a style="font-weight: 600; color: #64b2db; white-space: nowrap;" class="confirmation__link" href="{{ url('customer/account/orders') }}">Payment history</a>
                                    </div>
                                    <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
                                    
                                    <a style="display: inline-block" href="{{ route('shop.home.index') }}">
                                        <button class="button button_blue">
                                            {{ __('shop::app.checkout.cart.continue-shopping') }}
                                        </button>
                                    </a>

                                    <a href="{{ url('/coffeesubscription') }}">
                                        <button type="button" class="button button_blue">
                                            Get Coffee Subscription
                                        </button>
                                    </a>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    <div style="display:none;" class="order-success-content" style="min-height: 300px;">
        <h1>{{ __('shop::app.checkout.success.thanks') }}</h1>

        <p>{{ __('shop::app.checkout.success.order-id-info', ['order_id' => $order->id]) }}</p>

        <p>{{ __('shop::app.checkout.success.info') }}</p>

        <div class="misc-controls">
            <a style="display: inline-block" href="{{ route('shop.home.index') }}" class="btn btn-lg btn-primary">
                {{ __('shop::app.checkout.cart.continue-shopping') }}
            </a>
        </div>
    </div>
@endsection