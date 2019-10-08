<form data-vv-scope="address-form">
<?php 

$customer = auth()->guard('customer')->user();

if($customer){

    $address = DB::table('customer_addresses')->where('customer_id', $customer->id)->first();

} else {

    //echo 'test';

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
                        <div style="padding-bottom: 0px;" class="cart-settings">
                            <ul class="cart-settings__steps">
                            <li class="cart-step cart-step_active"><span class="cart-step__num">1<span>.</span>
                                    </span><span class="cart-step__text">Customer info</span>
                                </li>
                                <li class="cart-step"><span class="cart-step__num">2<span>.</span>
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
                        
                                    @if(Auth::check())
                                    <h2 class="cart-settings__title">Sign in or check out like guest</h2>
                                    <form class="cart-settings__box cart-settings__box_flex cart-settings__box_softblue">
                                <div class="cart-settings__user-check">
                                    <h3>NEW USERS</h3>
                                    <h4>CHECKOUT AS GUEST OR REGISTER</h4>
                                    <div>
                                        <div class="input-radio">
                                            <input class="input-radio__real" id="register" type="radio" name="check">
                                            <label class="input-radio__label" for="register">Register For Better Checkout</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="input-radio">
                                            <input class="input-radio__real" id="guest" type="radio" name="check" checked>
                                            <label class="input-radio__label" for="guest">Checkout as Guest</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-settings__sign-in">
                                    <h3>EXISTING USERS </h3>
                                    <h4>LOGIN TO YOUR ACCOUNT</h4>
                                    <div class="input-text">
                                        <label class="input-text__label" for="userEmail">Email address</label>
                                        <input class="input-text__input input-text__input_has-icon" id="userEmail" type="email" name="user-email">
                                        <svg class="input-text__icon">
                                            <use xlink:href="#pencil"></use>
                                        </svg>
                                    </div>
                                    <div class="input-text">
                                        <label class="input-text__label" for="userPassword">Password</label>
                                        <input class="input-text__input input-text__input_has-icon" id="userPassword" type="Password" name="user-password">
                                        <svg class="input-text__icon">
                                            <use xlink:href="#pencil"></use>
                                        </svg>
                                    </div>
                                    <button class="cart-settings__pass-recovery js-open-popup" type="button" data-popup-id="recovery">Forget your password?</button>
                                    <div class="cart-settings__sign-submit">
                                        <input class="button button_blue" type="submit" value="Log In">
                                    </div>
                                </div>
                                    @else
                                        @if(!empty($customer))
                                    <!-- <h2 class="cart-settings__title">Sign in or check out like guest</h2> -->
                                    <!-- <form class="cart-settings__box cart-settings__box_flex cart-settings__box_softblue"> -->
                                    <!-- <div class="cart-settings__user-check">
                                        
                                    </div>
                                    <div class="cart-settings__sign-in">
                                        <h3>SIGNED IN AS</h3>
                                        <h4>{{ $customer->email }}</h4>
                                        <button class="cart-settings__pass-recovery js-open-popup" type="button" data-popup-id="recovery">Change Account?</button>
                                        <div class="cart-settings__sign-submit">
                                            <a href="{{ url('/customer/logout') }}"><input class="button button_blue" type="submit" value="Log Out"></a>
                                        </div>
                                    </div> -->
                                        @else
                                        <h2 class="cart-settings__title">Sign in or check out like guest</h2>
                                    <form class="cart-settings__box cart-settings__box_flex cart-settings__box_softblue">
                                <div class="cart-settings__user-check">
                                    <h3>NEW USERS</h3>
                                    <h4>CHECKOUT AS GUEST OR REGISTER</h4>
                                    <div>
                                        <div class="input-radio">
                                            <input class="input-radio__real" id="register" type="radio" name="check">
                                            <label class="input-radio__label" for="register">Register For Better Checkout</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="input-radio">
                                            <input class="input-radio__real" id="guest" type="radio" name="check" checked>
                                            <label class="input-radio__label" for="guest">Checkout as Guest</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-settings__sign-in">
                                    <h3>EXISTING USERS </h3>
                                    <h4>LOGIN TO YOUR ACCOUNT</h4>
                                    <form method="POST" action="{{ route('customer.session.create') }}" class="account-popup__form form" >
                                        {{ csrf_field() }}
                                            <label class="form__field field">
                                                <svg class="field__icon field__icon_envelope">
                                                    <use xlink:href="#envelope"></use>
                                                </svg>
                                                <!-- <input class="field__input" type="email" name="email" placeholder="Email" required> -->
                                                <input type="text" class="field__input" name="email" v-validate="'required|email'" value="{{ old('email') }}" data-vv-as="&quot;{{ __('shop::app.customer.login-form.email') }}&quot;">

                                                <!-- Error Email -->
                                                <!-- <span class="control-error" v-if="errors.has('email')">@{{ errors.first('email') }}</span> -->
                                            </label>
                                            <label class="form__field field">
                                                <svg class="field__icon field__icon_padlock">
                                                    <use xlink:href="#padlock"></use>
                                                </svg>
                                                <!-- <input class="field__input" type="password" name="password" placeholder="Password" required> -->
                                                <input type="password" class="field__input" name="password" v-validate="'required'" value="{{ old('password') }}" data-vv-as="&quot;{{ __('shop::app.customer.login-form.password') }}&quot;">
                                                <!-- Error Password -->
                                            </label>
                                            <div>
                                                <button class="account-popup__recovery js-open-popup" data-popup-id="recovery" type="button">Forgot your password?</button>
                                            </div>
                                            <input class="button button_blue" type="submit" value="Log In">
                                        </form>
                                    <!-- <div class="input-text">
                                        <label class="input-text__label" for="userEmail">Email address</label>
                                        <input class="input-text__input input-text__input_has-icon" id="userEmail" type="email" name="user-email">
                                        <svg class="input-text__icon">
                                            <use xlink:href="#pencil"></use>
                                        </svg>
                                    </div>
                                    <div class="input-text">
                                        <label class="input-text__label" for="userPassword">Password</label>
                                        <input class="input-text__input input-text__input_has-icon" id="userPassword" type="Password" name="user-password">
                                        <svg class="input-text__icon">
                                            <use xlink:href="#pencil"></use>
                                        </svg>
                                    </div>
                                    <button class="cart-settings__pass-recovery js-open-popup" type="button" data-popup-id="recovery">Forget your password?</button>
                                    <div class="cart-settings__sign-submit">
                                        <input class="button button_blue" type="submit" value="Log In">
                                    </div> -->
                                </div>
                                </form>
                                        @endif
                                    @endif
                                
                            <h2 class="cart-settings__title">Billing information</h2>
                            <div class="cart-settings__box">
                                <div class="cart-settings__forms">
                                @if(!empty($customer))
                                <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company">Company</label>
                                            <input class="input-text__input input-text__input_has-icon" id="company" type="text" name="company">
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="companyEmail">Email Address</label>
                                            <input class="input-text__input input-text__input_has-icon" id="companyEmail" type="email" name="company-email" 
                                            @if(empty($customer))
                                            value=""
                                            @else
                                            value="{{ $customer->email }}"
                                            @endif
                                            >
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="address">Address</label>
                                            <input class="input-text__input input-text__input_has-icon" id="address" type="text" name="address" 
                                            @if(empty($customer))
                                            value=""
                                            @elseif(empty($address))
                                            value=""
                                            @else
                                            value="{{ $address->address1 }}"
                                            @endif
                                            >
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                            
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="apt">Apt or Suite</label>
                                            <input class="input-text__input input-text__input_has-icon" id="apt" type="text" name="apt" 
                                            @if(empty($customer))
                                            value=""
                                            @elseif(empty($address))
                                            value=""
                                            @else
                                            value="{{ $address->address2 }}"
                                            @endif
                                            >
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="city">City</label>
                                            <input class="input-text__input input-text__input_has-icon" id="city" type="text" name="city" 
                                            @if(empty($customer))
                                            value=""
                                            @elseif(empty($address))
                                            value=""
                                            @else
                                            value="{{ $address->city }}"
                                            @endif
                                            >
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="zipCode">Postcode / ZIP</label>
                                            <input class="input-text__input input-text__input_has-icon" id="zipCode" type="text" name="zip-code" 
                                            @if(empty($customer))
                                            value=""
                                            @elseif(empty($address))
                                            value=""
                                            @else
                                            value="{{ $address->postcode }}"
                                            @endif
                                            >
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="phone">Phone number</label>
                                            <input class="input-text__input input-text__input_has-icon" id="phone" type="tel" name="phone" 
                                            @if(empty($customer))
                                            value=""
                                            @elseif(empty($address))
                                            value=""
                                            @else
                                            value="{{ $address->phone }}"
                                            @endif
                                            >
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                        </div>
                                    </div>
                                @else
                                <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="billing[first_name]">{{ __('shop::app.checkout.onepage.first-name') }}</label>
                                            <input type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[first_name]" name="billing[first_name]" v-model="address.billing.first_name" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.first-name') }}&quot;"/>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <span class="control-error" v-if="errors.has('address-form.billing[first_name]')">
                                                @{{ errors.first('address-form.billing[first_name]') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company">{{ __('shop::app.checkout.onepage.last-name') }}</label>
                                            <input type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[last_name]" name="billing[last_name]" v-model="address.billing.last_name" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.last-name') }}&quot;"/>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <span class="control-error" v-if="errors.has('address-form.billing[last_name]')">
                                                @{{ errors.first('address-form.billing[last_name]') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company">{{ __('shop::app.checkout.onepage.email') }}</label>
                                            <input type="text" v-validate="'required|email'" class="control input-text__input input-text__input_has-icon" id="billing[email]" name="billing[email]" v-model="address.billing.email" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.email') }}&quot;"/>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <span class="control-error" v-if="errors.has('address-form.billing[email]')">
                                                @{{ errors.first('address-form.billing[email]') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company"> {{ __('shop::app.checkout.onepage.address1') }}</label>
                                            <input type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing_address_0" name="billing[address1][]" v-model="address.billing.address1[0]" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.address1') }}&quot;"/>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <span class="control-error" v-if="errors.has('address-form.billing[address1][]')">
                                                @{{ errors.first('address-form.billing[address1][]') }}
                                            </span>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company">{{ __('shop::app.checkout.onepage.city') }}</label>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <input type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[city]" name="billing[city]" v-model="address.billing.city" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.city') }}&quot;"/>

                                            <span class="control-error" v-if="errors.has('address-form.billing[city]')">
                                                @{{ errors.first('address-form.billing[city]') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company">{{ __('shop::app.checkout.onepage.state') }}</label>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <input type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[state]" name="billing[state]" v-model="address.billing.state" v-if="!haveStates('billing')" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.state') }}&quot;"/>

                                            <select v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[state]" name="billing[state]" v-model="address.billing.state" v-if="haveStates('billing')" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.state') }}&quot;">

                                                <option value="">{{ __('shop::app.checkout.onepage.select-state') }}</option>

                                                <option v-for='(state, index) in countryStates[address.billing.country]' :value="state.code">
                                                    @{{ state.default_name }}
                                                </option>

                                            </select>

                                            <span class="control-error" v-if="errors.has('address-form.billing[state]')">
                                                @{{ errors.first('address-form.billing[state]') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company"> {{ __('shop::app.checkout.onepage.postcode') }}</label>
                                            <input type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[postcode]" name="billing[postcode]" v-model="address.billing.postcode" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.postcode') }}&quot;"/>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <span class="control-error" v-if="errors.has('address-form.billing[postcode]')">
                                                @{{ errors.first('address-form.billing[postcode]') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company"> {{ __('shop::app.checkout.onepage.country') }}</label>                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <select type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[country]" name="billing[country]" v-model="address.billing.country" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.country') }}&quot;">
                                                <option value=""></option>

                                                @foreach (core()->countries() as $country)

                                                    <option value="{{ $country->code }}">{{ $country->name }}</option>

                                                @endforeach
                                            </select>

                                            <span class="control-error" v-if="errors.has('address-form.billing[country]')">
                                                @{{ errors.first('address-form.billing[country]') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company"> {{ __('shop::app.checkout.onepage.phone') }}</label>
                                            <input type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[phone]" name="billing[phone]" v-model="address.billing.phone" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.phone') }}&quot;"/>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <span class="control-error" v-if="errors.has('address-form.billing[phone]')">
                                                @{{ errors.first('address-form.billing[phone]') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="checkbox-view" for="billing[use_for_shipping]"></label>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                            {{ __('shop::app.checkout.onepage.use_for_shipping') }}
                                            <input type="checkbox" id="billing[use_for_shipping]" name="billing[use_for_shipping]" v-model="address.billing.use_for_shipping"/>

                                        </div>
                                    </div>
                                @endif
                                    
                                </div>
                                <!-- <div class="cart-settings__billing-radios">
                                    <div>
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
                                    </div>
                                </div> -->

    <div class="form-container" v-if="!this.new_billing_address">
        <div class="form-header mb-30">
            <span class="checkout-step-heading">{{ __('shop::app.checkout.onepage.billing-address') }}</span>

            <a class="button button_blue" @click = newBillingAddress()>
                {{ __('shop::app.checkout.onepage.new-address') }}
            </a>
        </div>

        <div class="address-holder">
            <div class="address-card" v-for='(addresses, index) in this.allAddress'>
                <div class="checkout-address-content" style="display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
                    <!-- <label class="radio-container" style="float: right; width: 10%;">
                        Use this address
                        <input type="radio" v-validate="'required'" id="billing[address_id]" name="billing[address_id]" :value="addresses.id" v-model="address.billing.address_id" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.billing-address') }}&quot;" checked>
                        <span class="checkmark"></span>
                    </label> -->

                    <div class="cart-settings__billing-radios">
                        <div>
                            <div class="input-radio">
                                <input class="input-radio__real" id="billing[address_id]" type="radio" v-validate="'required'" name="billing[address_id]" :value="addresses.id" v-model="address.billing.address_id" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.billing-address') }}&quot;" checked>
                                <label class="input-radio__label" for="billing[address_id]">Ship to this address</label>
                            </div>
                        </div>
                    </div>

                    <!-- <ul class="address-card-list" style="float: right; width: 85%;">
                        <li class="mb-10">
                            <b>@{{ allAddress.first_name }} @{{ allAddress.last_name }},</b>
                        </li>

                        <li class="mb-5">
                            @{{ addresses.address1 }},
                        </li>

                        <li class="mb-5">
                            @{{ addresses.city }},
                        </li>

                        <li class="mb-5">
                            @{{ addresses.state }},
                        </li>

                        <li class="mb-15">
                            @{{ addresses.country }}.
                        </li>

                        <li>
                            <b>{{ __('shop::app.customer.account.address.index.contact') }}</b> : @{{ addresses.phone }}
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="control-group" :class="[errors.has('address-form.billing[address_id]') ? 'has-error' : '']">
                <span class="control-error" v-if="errors.has('address-form.billing[address_id]')">
                    @{{ errors.first('address-form.billing[address_id]') }}
                </span>
            </div>
        </div>
        <!-- <div class="control-group mt-5">
            <span class="checkbox">
                <input type="checkbox" id="billing[use_for_shipping]" name="billing[use_for_shipping]" v-model="address.billing.use_for_shipping"/>
                    <label class="checkbox-view" for="billing[use_for_shipping]"></label>
                    {{ __('shop::app.checkout.onepage.use_for_shipping') }}
            </span>
        </div> -->
    </div>
    
    <div class="form-container" v-if="this.new_billing_address">

                            <!-- <div class="cart-settings__box">
                                <div class="cart-settings__forms">
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="billing[first_name]">{{ __('shop::app.checkout.onepage.first-name') }}</label>
                                            <input type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[first_name]" name="billing[first_name]" v-model="address.billing.first_name" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.first-name') }}&quot;"/>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <span class="control-error" v-if="errors.has('address-form.billing[first_name]')">
                                                @{{ errors.first('address-form.billing[first_name]') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company">{{ __('shop::app.checkout.onepage.last-name') }}</label>
                                            <input type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[last_name]" name="billing[last_name]" v-model="address.billing.last_name" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.last-name') }}&quot;"/>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <span class="control-error" v-if="errors.has('address-form.billing[last_name]')">
                                                @{{ errors.first('address-form.billing[last_name]') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company">{{ __('shop::app.checkout.onepage.email') }}</label>
                                            <input type="text" v-validate="'required|email'" class="control input-text__input input-text__input_has-icon" id="billing[email]" name="billing[email]" v-model="address.billing.email" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.email') }}&quot;"/>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <span class="control-error" v-if="errors.has('address-form.billing[email]')">
                                                @{{ errors.first('address-form.billing[email]') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company"> {{ __('shop::app.checkout.onepage.address1') }}</label>
                                            <input type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing_address_0" name="billing[address1][]" v-model="address.billing.address1[0]" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.address1') }}&quot;"/>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <span class="control-error" v-if="errors.has('address-form.billing[address1][]')">
                                                @{{ errors.first('address-form.billing[address1][]') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company">{{ __('shop::app.checkout.onepage.city') }}</label>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <input type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[city]" name="billing[city]" v-model="address.billing.city" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.city') }}&quot;"/>

                                            <span class="control-error" v-if="errors.has('address-form.billing[city]')">
                                                @{{ errors.first('address-form.billing[city]') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company">{{ __('shop::app.checkout.onepage.state') }}</label>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <input type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[state]" name="billing[state]" v-model="address.billing.state" v-if="!haveStates('billing')" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.state') }}&quot;"/>

                                            <select v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[state]" name="billing[state]" v-model="address.billing.state" v-if="haveStates('billing')" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.state') }}&quot;">

                                                <option value="">{{ __('shop::app.checkout.onepage.select-state') }}</option>

                                                <option v-for='(state, index) in countryStates[address.billing.country]' :value="state.code">
                                                    @{{ state.default_name }}
                                                </option>

                                            </select>

                                            <span class="control-error" v-if="errors.has('address-form.billing[state]')">
                                                @{{ errors.first('address-form.billing[state]') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company"> {{ __('shop::app.checkout.onepage.postcode') }}</label>
                                            <input type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[postcode]" name="billing[postcode]" v-model="address.billing.postcode" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.postcode') }}&quot;"/>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <span class="control-error" v-if="errors.has('address-form.billing[postcode]')">
                                                @{{ errors.first('address-form.billing[postcode]') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company"> {{ __('shop::app.checkout.onepage.country') }}</label>                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <select type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[country]" name="billing[country]" v-model="address.billing.country" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.country') }}&quot;">
                                                <option value=""></option>

                                                @foreach (core()->countries() as $country)

                                                    <option value="{{ $country->code }}">{{ $country->name }}</option>

                                                @endforeach
                                            </select>

                                            <span class="control-error" v-if="errors.has('address-form.billing[country]')">
                                                @{{ errors.first('address-form.billing[country]') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="input-text__label" for="company"> {{ __('shop::app.checkout.onepage.phone') }}</label>
                                            <input type="text" v-validate="'required'" class="control input-text__input input-text__input_has-icon" id="billing[phone]" name="billing[phone]" v-model="address.billing.phone" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.phone') }}&quot;"/>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>

                                            <span class="control-error" v-if="errors.has('address-form.billing[phone]')">
                                                @{{ errors.first('address-form.billing[phone]') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="cart-settings__form-item">
                                        <div class="input-text">
                                            <label class="checkbox-view" for="billing[use_for_shipping]"></label>
                                            <svg class="input-text__icon">
                                                <use xlink:href="#pencil"></use>
                                            </svg>
                                            {{ __('shop::app.checkout.onepage.use_for_shipping') }}
                                            <input type="checkbox" id="billing[use_for_shipping]" name="billing[use_for_shipping]" v-model="address.billing.use_for_shipping"/>

                                        </div>
                                    </div>
                                </div>
                            </div> -->


        <!-- <div class="form-header">
            <h1>{{ __('shop::app.checkout.onepage.billing-address') }}</h1>

            @guest('customer')
                <a class="btn btn-lg btn-primary" href="{{ route('customer.session.index') }}">
                    {{ __('shop::app.checkout.onepage.sign-in') }}
                </a>
            @endguest

            @auth('customer')
                <a class="button button_blue" @click = backToSavedBillingAddress()>
                    {{ __('shop::app.checkout.onepage.back') }}
                </a>
            @endauth
        </div> -->

        <!-- <div class="control-group" :class="[errors.has('address-form.billing[first_name]') ? 'has-error' : '']">
            <label for="billing[first_name]" class="required">
                {{ __('shop::app.checkout.onepage.first-name') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="billing[first_name]" name="billing[first_name]" v-model="address.billing.first_name" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.first-name') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[first_name]')">
                @{{ errors.first('address-form.billing[first_name]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[last_name]') ? 'has-error' : '']">
            <label for="billing[last_name]" class="required">
                {{ __('shop::app.checkout.onepage.last-name') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="billing[last_name]" name="billing[last_name]" v-model="address.billing.last_name" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.last-name') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[last_name]')">
                @{{ errors.first('address-form.billing[last_name]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[email]') ? 'has-error' : '']">
            <label for="billing[email]" class="required">
                {{ __('shop::app.checkout.onepage.email') }}
            </label>

            <input type="text" v-validate="'required|email'" class="control" id="billing[email]" name="billing[email]" v-model="address.billing.email" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.email') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[email]')">
                @{{ errors.first('address-form.billing[email]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[address1][]') ? 'has-error' : '']">
            <label for="billing_address_0" class="required">
                {{ __('shop::app.checkout.onepage.address1') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="billing_address_0" name="billing[address1][]" v-model="address.billing.address1[0]" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.address1') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[address1][]')">
                @{{ errors.first('address-form.billing[address1][]') }}
            </span>
        </div>

        @if (core()->getConfigData('customer.settings.address.street_lines') && core()->getConfigData('customer.settings.address.street_lines') > 1)
            <div class="control-group" style="margin-top: -25px;">
                @for ($i = 1; $i < core()->getConfigData('customer.settings.address.street_lines'); $i++)
                    <input type="text" class="control" name="billing[address1][{{ $i }}]" id="billing_address_{{ $i }}" v-model="address.billing.address1[{{$i}}]">
                @endfor
            </div>
        @endif

        <div class="control-group" :class="[errors.has('address-form.billing[city]') ? 'has-error' : '']">
            <label for="billing[city]" class="required">
                {{ __('shop::app.checkout.onepage.city') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="billing[city]" name="billing[city]" v-model="address.billing.city" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.city') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[city]')">
                @{{ errors.first('address-form.billing[city]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[state]') ? 'has-error' : '']">
            <label for="billing[state]" class="required">
                {{ __('shop::app.checkout.onepage.state') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="billing[state]" name="billing[state]" v-model="address.billing.state" v-if="!haveStates('billing')" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.state') }}&quot;"/>

            <select v-validate="'required'" class="control" id="billing[state]" name="billing[state]" v-model="address.billing.state" v-if="haveStates('billing')" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.state') }}&quot;">

                <option value="">{{ __('shop::app.checkout.onepage.select-state') }}</option>

                <option v-for='(state, index) in countryStates[address.billing.country]' :value="state.code">
                    @{{ state.default_name }}
                </option>

            </select>

            <span class="control-error" v-if="errors.has('address-form.billing[state]')">
                @{{ errors.first('address-form.billing[state]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[postcode]') ? 'has-error' : '']">
            <label for="billing[postcode]" class="required">
                {{ __('shop::app.checkout.onepage.postcode') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="billing[postcode]" name="billing[postcode]" v-model="address.billing.postcode" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.postcode') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[postcode]')">
                @{{ errors.first('address-form.billing[postcode]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[country]') ? 'has-error' : '']">
            <label for="billing[country]" class="required">
                {{ __('shop::app.checkout.onepage.country') }}
            </label>

            <select type="text" v-validate="'required'" class="control" id="billing[country]" name="billing[country]" v-model="address.billing.country" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.country') }}&quot;">
                <option value=""></option>

                @foreach (core()->countries() as $country)

                    <option value="{{ $country->code }}">{{ $country->name }}</option>

                @endforeach
            </select>

            <span class="control-error" v-if="errors.has('address-form.billing[country]')">
                @{{ errors.first('address-form.billing[country]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[phone]') ? 'has-error' : '']">
            <label for="billing[phone]" class="required">
                {{ __('shop::app.checkout.onepage.phone') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="billing[phone]" name="billing[phone]" v-model="address.billing.phone" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.phone') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[phone]')">
                @{{ errors.first('address-form.billing[phone]') }}
            </span>
        </div>

        <div class="control-group">
            <span class="checkbox">
                <input type="checkbox" id="billing[use_for_shipping]" name="billing[use_for_shipping]" v-model="address.billing.use_for_shipping"/>
                <label class="checkbox-view" for="billing[use_for_shipping]"></label>
                {{ __('shop::app.checkout.onepage.use_for_shipping') }}
            </span>

        </div>

        @auth('customer')
            <div class="control-group">
                <span class="checkbox">
                    <input type="checkbox" id="billing[save_as_address]" name="billing[save_as_address]" v-model="address.billing.save_as_address"/>
                    <label class="checkbox-view" for="billing[save_as_address]"></label>
                    {{ __('shop::app.checkout.onepage.save_as_address') }}
                </span>
            </div>
        @endauth -->

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


    <!-- <div class="form-container" v-if="!this.new_billing_address">
        <div class="form-header mb-30">
            <span class="checkout-step-heading">{{ __('shop::app.checkout.onepage.billing-address') }}</span>

            <a class="btn btn-lg btn-primary" @click = newBillingAddress()>
                {{ __('shop::app.checkout.onepage.new-address') }}
            </a>
        </div>
        <div class="address-holder">
            <div class="address-card" v-for='(addresses, index) in this.allAddress'>
                <div class="checkout-address-content" style="display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
                    <label class="radio-container" style="float: right; width: 10%;">
                        <input type="radio" v-validate="'required'" id="billing[address_id]" name="billing[address_id]" :value="addresses.id" v-model="address.billing.address_id" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.billing-address') }}&quot;" checked>
                        <span class="checkmark"></span>
                    </label>

                    <ul class="address-card-list" style="float: right; width: 85%;">
                        <li class="mb-10">
                            <b>@{{ allAddress.first_name }} @{{ allAddress.last_name }},</b>
                        </li>

                        <li class="mb-5">
                            @{{ addresses.address1 }},
                        </li>

                        <li class="mb-5">
                            @{{ addresses.city }},
                        </li>

                        <li class="mb-5">
                            @{{ addresses.state }},
                        </li>

                        <li class="mb-15">
                            @{{ addresses.country }}.
                        </li>

                        <li>
                            <b>{{ __('shop::app.customer.account.address.index.contact') }}</b> : @{{ addresses.phone }}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="control-group" :class="[errors.has('address-form.billing[address_id]') ? 'has-error' : '']">
                <span class="control-error" v-if="errors.has('address-form.billing[address_id]')">
                    @{{ errors.first('address-form.billing[address_id]') }}
                </span>
            </div>
        </div>
        <div class="control-group mt-5">
            <span class="checkbox">
                <input type="checkbox" id="billing[use_for_shipping]" name="billing[use_for_shipping]" v-model="address.billing.use_for_shipping"/>
                    <label class="checkbox-view" for="billing[use_for_shipping]"></label>
                    {{ __('shop::app.checkout.onepage.use_for_shipping') }}
            </span>

        </div>
    </div> -->

    <!-- <div class="form-container" v-if="this.new_billing_address">

        <div class="form-header">
            <h1>{{ __('shop::app.checkout.onepage.billing-address') }}</h1>

            @guest('customer')
                <a class="btn btn-lg btn-primary" href="{{ route('customer.session.index') }}">
                    {{ __('shop::app.checkout.onepage.sign-in') }}
                </a>
            @endguest

            @auth('customer')
                <a class="btn btn-lg btn-primary" @click = backToSavedBillingAddress()>
                    {{ __('shop::app.checkout.onepage.back') }}
                </a>
            @endauth
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[first_name]') ? 'has-error' : '']">
            <label for="billing[first_name]" class="required">
                {{ __('shop::app.checkout.onepage.first-name') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="billing[first_name]" name="billing[first_name]" v-model="address.billing.first_name" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.first-name') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[first_name]')">
                @{{ errors.first('address-form.billing[first_name]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[last_name]') ? 'has-error' : '']">
            <label for="billing[last_name]" class="required">
                {{ __('shop::app.checkout.onepage.last-name') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="billing[last_name]" name="billing[last_name]" v-model="address.billing.last_name" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.last-name') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[last_name]')">
                @{{ errors.first('address-form.billing[last_name]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[email]') ? 'has-error' : '']">
            <label for="billing[email]" class="required">
                {{ __('shop::app.checkout.onepage.email') }}
            </label>

            <input type="text" v-validate="'required|email'" class="control" id="billing[email]" name="billing[email]" v-model="address.billing.email" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.email') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[email]')">
                @{{ errors.first('address-form.billing[email]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[address1][]') ? 'has-error' : '']">
            <label for="billing_address_0" class="required">
                {{ __('shop::app.checkout.onepage.address1') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="billing_address_0" name="billing[address1][]" v-model="address.billing.address1[0]" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.address1') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[address1][]')">
                @{{ errors.first('address-form.billing[address1][]') }}
            </span>
        </div>

        @if (core()->getConfigData('customer.settings.address.street_lines') && core()->getConfigData('customer.settings.address.street_lines') > 1)
            <div class="control-group" style="margin-top: -25px;">
                @for ($i = 1; $i < core()->getConfigData('customer.settings.address.street_lines'); $i++)
                    <input type="text" class="control" name="billing[address1][{{ $i }}]" id="billing_address_{{ $i }}" v-model="address.billing.address1[{{$i}}]">
                @endfor
            </div>
        @endif

        <div class="control-group" :class="[errors.has('address-form.billing[city]') ? 'has-error' : '']">
            <label for="billing[city]" class="required">
                {{ __('shop::app.checkout.onepage.city') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="billing[city]" name="billing[city]" v-model="address.billing.city" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.city') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[city]')">
                @{{ errors.first('address-form.billing[city]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[state]') ? 'has-error' : '']">
            <label for="billing[state]" class="required">
                {{ __('shop::app.checkout.onepage.state') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="billing[state]" name="billing[state]" v-model="address.billing.state" v-if="!haveStates('billing')" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.state') }}&quot;"/>

            <select v-validate="'required'" class="control" id="billing[state]" name="billing[state]" v-model="address.billing.state" v-if="haveStates('billing')" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.state') }}&quot;">

                <option value="">{{ __('shop::app.checkout.onepage.select-state') }}</option>

                <option v-for='(state, index) in countryStates[address.billing.country]' :value="state.code">
                    @{{ state.default_name }}
                </option>

            </select>

            <span class="control-error" v-if="errors.has('address-form.billing[state]')">
                @{{ errors.first('address-form.billing[state]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[postcode]') ? 'has-error' : '']">
            <label for="billing[postcode]" class="required">
                {{ __('shop::app.checkout.onepage.postcode') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="billing[postcode]" name="billing[postcode]" v-model="address.billing.postcode" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.postcode') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[postcode]')">
                @{{ errors.first('address-form.billing[postcode]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[country]') ? 'has-error' : '']">
            <label for="billing[country]" class="required">
                {{ __('shop::app.checkout.onepage.country') }}
            </label>

            <select type="text" v-validate="'required'" class="control" id="billing[country]" name="billing[country]" v-model="address.billing.country" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.country') }}&quot;">
                <option value=""></option>

                @foreach (core()->countries() as $country)

                    <option value="{{ $country->code }}">{{ $country->name }}</option>

                @endforeach
            </select>

            <span class="control-error" v-if="errors.has('address-form.billing[country]')">
                @{{ errors.first('address-form.billing[country]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.billing[phone]') ? 'has-error' : '']">
            <label for="billing[phone]" class="required">
                {{ __('shop::app.checkout.onepage.phone') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="billing[phone]" name="billing[phone]" v-model="address.billing.phone" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.phone') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.billing[phone]')">
                @{{ errors.first('address-form.billing[phone]') }}
            </span>
        </div>

        <div class="control-group">
            <span class="checkbox">
                <input type="checkbox" id="billing[use_for_shipping]" name="billing[use_for_shipping]" v-model="address.billing.use_for_shipping"/>
                <label class="checkbox-view" for="billing[use_for_shipping]"></label>
                {{ __('shop::app.checkout.onepage.use_for_shipping') }}
            </span>

        </div>

        @auth('customer')
            <div class="control-group">
                <span class="checkbox">
                    <input type="checkbox" id="billing[save_as_address]" name="billing[save_as_address]" v-model="address.billing.save_as_address"/>
                    <label class="checkbox-view" for="billing[save_as_address]"></label>
                    {{ __('shop::app.checkout.onepage.save_as_address') }}
                </span>
            </div>
        @endauth

    </div> -->

    <!-- <div class="form-container" v-if="!address.billing.use_for_shipping && !this.new_shipping_address">
        <div class="form-header mb-30">
            <span class="checkout-step-heading">{{ __('shop::app.checkout.onepage.shipping-address') }}</span>

            <a class="btn btn-lg btn-primary" @click=newShippingAddress()>
                {{ __('shop::app.checkout.onepage.new-address') }}
            </a>
        </div>

        <div class="address-holder">
            <div class="address-card" v-for='(addresses, index) in this.allAddress'>
                <div class="checkout-address-content" style="display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
                    <label class="radio-container" style="float: right; width: 10%;">
                        <input v-validate="'required'" type="radio" id="shipping[address_id]" name="shipping[address_id]" v-model="address.shipping.address_id" :value="addresses.id"
                        data-vv-as="&quot;{{ __('shop::app.checkout.onepage.shipping-address') }}&quot;">
                        <span class="checkmark"></span>
                    </label>

                    <ul class="address-card-list" style="float: right; width: 85%;">
                        <li class="mb-10">
                            <b>@{{ allAddress.first_name }} @{{ allAddress.last_name }},</b>
                        </li>

                        <li class="mb-5">
                            @{{ addresses.address1 }},
                        </li>

                        <li class="mb-5">
                            @{{ addresses.city }},
                        </li>

                        <li class="mb-5">
                            @{{ addresses.state }},
                        </li>

                        <li class="mb-15">
                            @{{ addresses.country }}.
                        </li>

                        <li>
                            <b>{{ __('shop::app.customer.account.address.index.contact') }}</b> : @{{ addresses.phone }}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="control-group" :class="[errors.has('address-form.shipping[address_id]') ? 'has-error' : '']">
                <span class="control-error" v-if="errors.has('address-form.shipping[address_id]')">
                    @{{ errors.first('address-form.shipping[address_id]') }}
                </span>
            </div>

        </div>
    </div> -->

    <!-- <div class="form-container" v-if="!address.billing.use_for_shipping && this.new_shipping_address">

        <div class="form-header">
            <h1>{{ __('shop::app.checkout.onepage.shipping-address') }}</h1>

            @auth('customer')
                <a class="btn btn-lg btn-primary" @click = backToSavedShippingAddress()>
                    {{ __('shop::app.checkout.onepage.back') }}
                </a>
            @endauth
        </div>

        <div class="control-group" :class="[errors.has('address-form.shipping[first_name]') ? 'has-error' : '']">
            <label for="shipping[first_name]" class="required">
                {{ __('shop::app.checkout.onepage.first-name') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="shipping[first_name]" name="shipping[first_name]" v-model="address.shipping.first_name" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.first-name') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.shipping[first_name]')">
                @{{ errors.first('address-form.shipping[first_name]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.shipping[last_name]') ? 'has-error' : '']">
            <label for="shipping[last_name]" class="required">
                {{ __('shop::app.checkout.onepage.last-name') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="shipping[last_name]" name="shipping[last_name]" v-model="address.shipping.last_name" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.last-name') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.shipping[last_name]')">
                @{{ errors.first('address-form.shipping[last_name]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.shipping[email]') ? 'has-error' : '']">
            <label for="shipping[email]" class="required">
                {{ __('shop::app.checkout.onepage.email') }}
            </label>

            <input type="text" v-validate="'required|email'" class="control" id="shipping[email]" name="shipping[email]" v-model="address.shipping.email" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.email') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.shipping[email]')">
                @{{ errors.first('address-form.shipping[email]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.shipping[address1][]') ? 'has-error' : '']">
            <label for="shipping_address_0" class="required">
                {{ __('shop::app.checkout.onepage.address1') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="shipping_address_0" name="shipping[address1][]" v-model="address.shipping.address1[0]" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.address1') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.shipping[address1][]')">
                @{{ errors.first('address-form.shipping[address1][]') }}
            </span>
        </div>

        @if (core()->getConfigData('customer.settings.address.street_lines') && core()->getConfigData('customer.settings.address.street_lines') > 1)
            <div class="control-group" style="margin-top: -25px;">
                @for ($i = 1; $i < core()->getConfigData('customer.settings.address.street_lines'); $i++)
                    <input type="text" class="control" name="shipping[address1][{{ $i }}]" id="shipping_address_{{ $i }}" v-model="address.shipping.address1[{{$i}}]">
                @endfor
            </div>
        @endif

        <div class="control-group" :class="[errors.has('address-form.shipping[city]') ? 'has-error' : '']">
            <label for="shipping[city]" class="required">
                {{ __('shop::app.checkout.onepage.city') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="shipping[city]" name="shipping[city]" v-model="address.shipping.city" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.city') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.shipping[city]')">
                @{{ errors.first('address-form.shipping[city]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.shipping[state]') ? 'has-error' : '']">
            <label for="shipping[state]" class="required">
                {{ __('shop::app.checkout.onepage.state') }}
            </label>


            <input type="text" v-validate="'required'" class="control" id="shipping[state]" name="shipping[state]" v-model="address.shipping.state" v-if="!haveStates('shipping')" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.state') }}&quot;"/>

            <select v-validate="'required'" class="control" id="shipping[state]" name="shipping[state]" v-model="address.shipping.state" v-if="haveStates('shipping')" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.state') }}&quot;">

                <option value="">{{ __('shop::app.checkout.onepage.select-state') }}</option>

                <option v-for='(state, index) in countryStates[address.shipping.country]' :value="state.code">
                    @{{ state.default_name }}
                </option>

            </select>

            <span class="control-error" v-if="errors.has('address-form.shipping[state]')">
                @{{ errors.first('address-form.shipping[state]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.shipping[postcode]') ? 'has-error' : '']">
            <label for="shipping[postcode]" class="required">
                {{ __('shop::app.checkout.onepage.postcode') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="shipping[postcode]" name="shipping[postcode]" v-model="address.shipping.postcode" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.postcode') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.shipping[postcode]')">
                @{{ errors.first('address-form.shipping[postcode]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.shipping[country]') ? 'has-error' : '']">
            <label for="shipping[country]" class="required">
                {{ __('shop::app.checkout.onepage.country') }}
            </label>

            <select type="text" v-validate="'required'" class="control" id="shipping[country]" name="shipping[country]" v-model="address.shipping.country" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.country') }}&quot;">
                <option value=""></option>

                @foreach (core()->countries() as $country)
                    <option value="{{ $country->code }}">{{ $country->name }}</option>
                @endforeach
            </select>

            <span class="control-error" v-if="errors.has('address-form.shipping[country]')">
                @{{ errors.first('address-form.shipping[country]') }}
            </span>
        </div>

        <div class="control-group" :class="[errors.has('address-form.shipping[phone]') ? 'has-error' : '']">
            <label for="shipping[phone]" class="required">
                {{ __('shop::app.checkout.onepage.phone') }}
            </label>

            <input type="text" v-validate="'required'" class="control" id="shipping[phone]" name="shipping[phone]" v-model="address.shipping.phone" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.phone') }}&quot;"/>

            <span class="control-error" v-if="errors.has('address-form.shipping[phone]')">
                @{{ errors.first('address-form.shipping[phone]') }}
            </span>
        </div>

        @auth('customer')
            <div class="control-group">
                <span class="checkbox">
                    <input type="checkbox" id="shipping[save_as_address]" name="shipping[save_as_address]" v-model="address.shipping.save_as_address"/>
                    <label class="checkbox-view" for="shipping[save_as_address]"></label>
                    {{ __('shop::app.checkout.onepage.save_as_address') }}
                </span>
            </div>
        @endauth

    </div> -->

</form>

