<form data-vv-scope="payment-form">
<?php 

$customer = auth()->guard('customer')->user();

if($customer){

    $address = DB::table('customer_addresses')->where('customer_id', $customer->id)->first();

} else {
    
}

?>
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
                                <li class="cart-step"><span class="cart-step__num">4<span>.</span>
                                    </span><span class="cart-step__text">Review</span>
                                </li>
                                <li class="cart-step"><span class="cart-step__num">5<span>.</span>
                                    </span><span class="cart-step__text">Confirmation of an order</span>
                                </li>
                            </ul>

                            <h2 class="cart-settings__title">Select Payment Method</h2>
                            <div class="cart-settings__box">
                                <div class="cart-settings__billing-radios">

                                @foreach ($paymentMethods as $payment)


                                    <div>
                                        <div class="input-radio">
                                            <!-- <input class="input-radio__real" id="billingThisAddress" type="radio" name="billAddress" checked> -->
                                            <input class="input-radio__real" v-validate="'required'" type="radio" id="{{ $payment['method'] }}" name="payment[method]" value="{{ $payment['method'] }}" v-model="payment.method" @change="methodSelected()" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.payment-method') }}&quot;">
                                            <label class="input-radio__label" for="{{ $payment['method'] }}">{{ $payment['method_title'] }} ({{ $payment['description'] }})</label>
                                        </div>
                                    </div>



                                @endforeach
                                <span style="color:red;" class="control-error" v-if="errors.has('payment-form.payment[method]')">
                                    @{{ errors.first('payment-form.payment[method]') }}
                                </span>

                                    <!-- <div>
                                        <div class="input-radio">
                                            <input class="input-radio__real" id="billingThisAddress" type="radio" name="billAddress" checked>
                                            <label class="input-radio__label" for="billingThisAddress">Ship to this address</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="input-radio">
                                            <input class="input-radio__real" id="billingDiffAddress" type="radio" name="billAddress">
                                            <label class="input-radio__label" for="billingDiffAddress">Ship to different address</label>
                                        </div>
                                    </div> -->

                                </div>
                            </div>
                        <!-- Cart settings icons-->
                        <svg style="position: absolute; width: 1px; height: 1px; overflow: hidden;">
                            <symbol id="pencil" viewbox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.767 4.221L8.78 1.232c.38-.313.853-.485 1.351-.485a2.117 2.117 0 0 1 2.122 2.122c0 .502-.172.973-.485 1.352zm-7.31 7.335l-1.22-1.224 6.788-6.798 1.222 1.223zm3.779-9.8l1.247 1.247-6.78 6.782-1.248-1.248zM12.158.84a2.867 2.867 0 0 0-4.058 0L.66 8.28a.372.372 0 0 0-.105.213l-.551 4.083a.371.371 0 0 0 .105.313c.07.07.166.111.263.111.017 0 .033 0 .05-.003l2.46-.332a.375.375 0 0 0-.1-.743l-1.972.266.385-2.847 2.997 2.997a.367.367 0 0 0 .526 0l7.44-7.438A2.852 2.852 0 0 0 13 2.87c0-.768-.3-1.488-.842-2.029z" fill="#64b2db"></path>
                            </symbol>
                        </svg>
                    </div>
                </div>
            </div>




    <!-- <div class="form-container">
        <div class="form-header mb-30">
            <span class="checkout-step-heading">{{ __('shop::app.checkout.onepage.payment-methods') }}</span>
        </div>

        <div class="payment-methods">

            <div class="control-group" :class="[errors.has('payment-form.payment[method]') ? 'has-error' : '']">

                @foreach ($paymentMethods as $payment)

                    {!! view_render_event('bagisto.shop.checkout.payment-method.before', ['payment' => $payment]) !!}

                    <div class="checkout-method-group mb-20">
                        <div class="line-one">
                            <label class="radio-container">
                                <input v-validate="'required'" type="radio" id="{{ $payment['method'] }}" name="payment[method]" value="{{ $payment['method'] }}" v-model="payment.method" @change="methodSelected()" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.payment-method') }}&quot;">

                                <span class="checkmark"></span>

                                {{-- <label class="radio-view" for="{{ $payment['method'] }}"></label> --}}
                            </label>

                            <span class="payment-method method-label">
                                <b>{{ $payment['method_title'] }}</b>
                            </span>
                        </div>

                        <div class="line-two mt-5">
                            <span class="method-summary">{{ $payment['description'] }}</span>
                        </div>
                    </div>

                    {!! view_render_event('bagisto.shop.checkout.payment-method.after', ['payment' => $payment]) !!}

                @endforeach

                <span class="control-error" v-if="errors.has('payment-form.payment[method]')">
                    @{{ errors.first('payment-form.payment[method]') }}
                </span>

            </div>
        </div>
    </div> -->
</form>
