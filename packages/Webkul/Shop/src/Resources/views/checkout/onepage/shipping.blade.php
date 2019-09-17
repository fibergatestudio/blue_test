<form data-vv-scope="shipping-form">
<?php 

$customer = auth()->guard('customer')->user();
$address = DB::table('customer_addresses')->where('customer_id', $customer->id)->first();

?>
<div class="page">
                <div class="">
                    <div class="container">
                        <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="shopping-cart.html">Shopping cart</a>
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
                                <li class="cart-step"><span class="cart-step__num">3<span>.</span>
                                    </span><span class="cart-step__text">Payment method</span>
                                </li>
                                <li class="cart-step"><span class="cart-step__num">4<span>.</span>
                                    </span><span class="cart-step__text">Review</span>
                                </li>
                                <li class="cart-step"><span class="cart-step__num">5<span>.</span>
                                    </span><span class="cart-step__text">Confirmation of an order</span>
                                </li>
                            </ul>
                            <h2 class="cart-settings__title">Shipping information</h2>
                            <div class="cart-settings__box">
                                <div class="cart-settings__forms">
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="shippingFirstName">First name</label>
                                            <input class="input-text__input input-text__input_has-icon" id="shippingFirstName" type="text" name="shipping-first-name" value="{{ $customer->first_name }}">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="shippingLastName">Last name</label>
                                            <input class="input-text__input input-text__input_has-icon" id="shippingLastName" type="text" name="shipping_last_name" value="{{ $customer->first_name }}">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="shippingCompany">Company</label>
                                            <input class="input-text__input input-text__input_has-icon" id="shippingCompany" type="text" name="shipping_company" >
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="shippingAddress">Address</label>
                                            <input class="input-text__input input-text__input_has-icon" id="shippingAddress" type="text" name="shipping_address" value="{{ $address->address1 }}"> 
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="shippingApt">Apt or Suite</label>
                                            <input class="input-text__input input-text__input_has-icon" id="shippingApt" type="text" name="shipping_apt">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="shippingCity">City</label>
                                            <input class="input-text__input input-text__input_has-icon" id="shippingCity" type="text" name="shipping_city" value="{{ $address->city }}">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="shippingPhone">Phone number</label>
                                            <input class="input-text__input input-text__input_has-icon" id="shippingPhone" type="tel" name="shipping_phone" value="{{ $address->phone }}">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
 <div class="cart-settings__form-item">
 @foreach ($shippingRateGroups as $rateGroup)
 <div class="cart-settings__shipping-radios">
    @foreach ($rateGroup['rates'] as $rate)

    <div class="input-radio">
        <input class="input-radio__real" v-validate="'required'" type="radio" id="{{ $rate->method }}" name="shipping_method" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.shipping-method') }}&quot;" value="{{ $rate->method }}" v-model="selected_shipping_method" @change="methodSelected()">
        <label class="input-radio__label" for="{{ $rate->method }}">USPS {{ core()->currency($rate->base_price) }} ({{ $rate->method_title }}</b> - {{ $rate->method_description }})</label>
    </div>

    @endforeach
</div>
@endforeach

<span style="color:red;" class="control-error" v-if="errors.has('shipping-form.shipping_method')">
                    @{{ errors.first('shipping-form.shipping_method') }}
                </span>
</div>

                                    <!-- <div class="cart-settings__form-item">
                                        <h3 class="cart-settings__label">Shipping method</h3>
                                        <div class="cart-settings__shipping-radios">
                                            <div class="input-radio">
                                                <input class="input-radio__real" id="from2to5" type="radio" name="shipingMethod">
                                                <label class="input-radio__label" for="from2to5">USPS (2-5 DAYS)</label>
                                            </div>
                                            <div class="input-radio">
                                                <input class="input-radio__real" id="ten" type="radio" name="shipingMethod" checked>
                                                <label class="input-radio__label" for="ten">USPS (10 DAYS)</label>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="cart-settongs__use-billing-address">
                                    <div class="input-checkbox">
                                        <input class="input-checkbox__real" id="useBillingAddres" type="checkbox" name="useBillingAddress">
                                        <label class="input-checkbox__label" for="useBillingAddres">Use Billing Address</label>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-settings__confirm">
                                <div class="input-checkbox">
                                    <input class="input-checkbox__real" id="confirmRegister" type="checkbox" name="confirm-register">
                                    <label class="input-checkbox__label" for="confirmRegister">Making a purchase you automatically register in our system and take part in our loyalty program</label>
                                </div>
                            </div>
                            <!-- <div class="cart-settings__send">

                                <a class="button button_blue" href="shopping-cart-step-2.html">Continue</a>
                            </div> -->
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
            <span class="checkout-step-heading">{{ __('shop::app.checkout.onepage.shipping-method') }}</span>
        </div>

        <div class="shipping-methods">

            <div class="control-group" :class="[errors.has('shipping-form.shipping_method') ? 'has-error' : '']">

                @foreach ($shippingRateGroups as $rateGroup)
                    {!! view_render_event('bagisto.shop.checkout.shipping-method.before', ['rateGroup' => $rateGroup]) !!}

                    <span class="carrier-title" id="carrier-title" style="font-size:18px; font-weight: bold;">
                        {{ $rateGroup['carrier_title'] }}
                    </span>

                    @foreach ($rateGroup['rates'] as $rate)
                        <div class="checkout-method-group mb-20">
                            <div class="line-one">
                                <label class="radio-container">
                                    <input v-validate="'required'" type="radio" id="{{ $rate->method }}" name="shipping_method" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.shipping-method') }}&quot;" value="{{ $rate->method }}" v-model="selected_shipping_method" @change="methodSelected()">
                                    <span class="checkmark"></span>
                                </label>
                                {{-- <label class="radio-view" for="{{ $rate->method }}"></label> --}}
                                <b class="ship-rate method-label">{{ core()->currency($rate->base_price) }}</b>
                            </div>

                            <div class="line-two mt-5">
                                <div class="method-summary">
                                    <b>{{ $rate->method_title }}</b> - {{ $rate->method_description }}
                                </div>
                            </div>
                        </div>

                    @endforeach

                    {!! view_render_event('bagisto.shop.checkout.shipping-method.after', ['rateGroup' => $rateGroup]) !!}

                @endforeach 

                <span class="control-error" v-if="errors.has('shipping-form.shipping_method')">
                    @{{ errors.first('shipping-form.shipping_method') }}
                </span>
            </div>
        </div>
    </div> -->
</form>