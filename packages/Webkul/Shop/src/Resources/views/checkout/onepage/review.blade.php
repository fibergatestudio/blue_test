<div class="form-container">
    <!-- <div class="form-header mb-30">
        <span class="checkout-step-heading">{{ __('shop::app.checkout.onepage.summary') }}</span>
    </div> -->

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
                                <li class="cart-step"><span class="cart-step__num">5<span>.</span>
                                    </span><span class="cart-step__text">Confirmation of an order</span>
                                </li>
                            </ul>
                            <div class="cart-settings__payment payment">
                                <div class="payment__box payment__box_order">
                                    <div class="payment__row payment__row_head payment__row_order">
                                        <h2 class="payment__title">Your order</h2>
                                        <a href="{{ url('checkout/cart') }}"><button class="payment__edit-cart js-open-popup" data-popup-id="editShoppingCart">Edit shopping cart</button></a>
                                    </div>
                                    <div class="payment__content">

                                    @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')
                                    @foreach ($cart->items as $item)

                                    <?php
                                        $product = $item->product;

                                        $productBaseImage = $productImageHelper->getProductBaseImage($product);
                                    
                                        $prod_quan = $item->quantity;
                                        $prod_price = $item->price;
                                        $prod_sum = $prod_quan * $prod_price;
                                        
                                    ?>

                                     <div class="cart-product payment__product">
                                            <div class="cart-product__image">
                                                <picture>
                                                    <source srcset="{{ $productBaseImage['medium_image_url'] }}" type="image/webp">
                                                    <source srcset="{{ $productBaseImage['medium_image_url'] }}" type="image/png">
                                                    <img src="{{ $productBaseImage['medium_image_url'] }}" alt="Picture alt text">
                                                </picture>
                                            </div>
                                            <div class="cart-product__info">
                                                <div class="cart-product__text">
                                                    <h3 class="cart-product__title">{{ $product->name }}</h3>
                                                </div>
                                                <div class="cart-product__price"><span class="cart-product__mob-quantity">4&nbsp;x&nbsp;</span><span>{{ core()->currency($item->base_price) }}</span>
                                                </div>
                                                <div class="cart-product__quantity"><span>Q-ty: {{ $item->quantity }}</span>
                                                </div>
                                                <div class="cart-product__total-price"><span>{{ core()->currency($prod_sum) }}</span>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                       
                                        <div class="payment__total">
                                            <div class="payment__line">
                                                <h4>Subtotal</h4>
                                                <div class="payment__product-total"><span>{{ core()->currency($cart->base_sub_total) }}</span>
                                                </div>
                                            </div>
                                            <div class="payment__line">
                                                <h4>Shipping</h4>
                                                <div class="payment__product-total"><span>{{ core()->currency($cart->selected_shipping_rate->base_price) }}</span>
                                                </div>
                                            </div>
                                            <div class="payment__line">
                                                <h4>Total</h4>
                                                <div class="payment__final-price"><span> {{ core()->currency($cart->base_grand_total) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="payment__row payment__row_head payment__row_order">
                                            <h2 class="payment__title">Shipping details</h2>
                                            <a href="{{ url('checkout/onepage') }}"><button class="payment__edit-cart js-open-popup" data-popup-id="editShoppingCart">Edit shipping address</button></a>
                                        </div>
                                        @if ($shippingAddress = $cart->shipping_address)
                                        <div class="payment__row payment__row_order">
                                            <div class="payment__col">
                                                <p class="payment__address">
                                                    {{ $shippingAddress->address1 }} , {{ $shippingAddress->state }} <br>
                                                    {{ core()->country_name($shippingAddress->country) }} {{ $shippingAddress->postcode }}
                                                </p><span class="payment__sn">{{ $shippingAddress->name }}</span>
                                            </div>
                                            <div class="payment__col payment__col_more">
                                                <p>{{ $cart->customer_email }}</p>
                                                <p>{{ $cart->selected_shipping_rate->method_title }}</p>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="payment__box payment__box_pay">
                                    <div class="payment__row payment__row_head payment__row_pay">
                                        <h2 class="payment__title">Payment</h2>
                                    </div>
                                    <div class="payment__card-details">
                                        <div class="payment__form">
                                            <div class="payment__field">
                                                <div class="input-text">
                                                    <label class="input-text__label" for="firstName">First name</label>
                                                    <input class="input-text__input" id="firstName" type="text" name="first-name">
                                                </div>
                                            </div>
                                            <div class="payment__field">
                                                <div class="input-text">
                                                    <label class="input-text__label" for="cardNumber">Card number</label>
                                                    <input class="input-text__input" id="cardNumber" type="text" name="card-number">
                                                </div>
                                            </div>
                                            <div class="payment__field payment__field_third">
                                                <div class="input-text">
                                                    <label class="input-text__label" for="cardValidThru">Valid thru</label>
                                                    <input class="input-text__input" id="cardValidThru" type="text" name="valid-thru">
                                                </div>
                                            </div>
                                            <div class="payment__field payment__field_third">
                                                <div class="input-text">
                                                    <label class="input-text__label" for="cardYear"></label>
                                                    <input class="input-text__input" id="cardYear" type="text" name="card-year">
                                                </div>
                                            </div>
                                            <div class="payment__field payment__field_third">
                                                <div class="input-text">
                                                    <label class="input-text__label" for="cardCvv">CVV</label>
                                                    <input class="input-text__input" id="cardCvv" type="text" name="card-cvv">
                                                </div>
                                            </div>
                                            <a style="color:white;" class="payment__submit button button_blue" href="{{ url('') }}">Purchase</a>
                                            <!-- <button type="button" class="payment__submit button button_blue" @click="placeOrder()" :disabled="disable_button" id="checkout-place-order-button">
                                                {{ __('shop::app.checkout.onepage.place-order') }}
                                            </button> -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- <div class="address-summary">
        @if ($billingAddress = $cart->billing_address)
            <div class="billing-address">
                <div class="card-title mb-20">
                    <b>{{ __('shop::app.checkout.onepage.billing-address') }}</b>
                </div>

                <div class="card-content">
                    <ul>
                        <li class="mb-10">
                            {{ $billingAddress->name }}
                        </li>
                        <li class="mb-10">
                            {{ $billingAddress->address1 }},<br/> {{ $billingAddress->state }}
                        </li>
                        <li class="mb-10">
                            {{ core()->country_name($billingAddress->country) }} {{ $billingAddress->postcode }}
                        </li>

                        <span class="horizontal-rule mb-15 mt-15"></span>

                        <li class="mb-10">
                            {{ __('shop::app.checkout.onepage.contact') }} : {{ $billingAddress->phone }}
                        </li>
                    </ul>
                </div>
            </div>
        @endif

        @if ($shippingAddress = $cart->shipping_address)
            <div class="shipping-address">
                <div class="card-title mb-20">
                    <b>{{ __('shop::app.checkout.onepage.shipping-address') }}</b>
                </div>

                <div class="card-content">
                    <ul>
                        <li class="mb-10">
                            {{ $shippingAddress->name }}
                        </li>
                        <li class="mb-10">
                            {{ $shippingAddress->address1 }},<br/> {{ $shippingAddress->state }}
                        </li>
                        <li class="mb-10">
                            {{ core()->country_name($shippingAddress->country) }} {{ $shippingAddress->postcode }}
                        </li>

                        <span class="horizontal-rule mb-15 mt-15"></span>

                        <li class="mb-10">
                            {{ __('shop::app.checkout.onepage.contact') }} : {{ $shippingAddress->phone }}
                        </li>
                    </ul>
                </div>
            </div>
        @endif

    </div> -->

    <!-- @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

    <div class="cart-item-list mt-20">
        @foreach ($cart->items as $item)

            <?php
                $product = $item->product;

                $productBaseImage = $productImageHelper->getProductBaseImage($product);
            ?>

            <div class="item mb-5" style="margin-bottom: 5px;">
                <div class="item-image">
                    <img src="{{ $productBaseImage['medium_image_url'] }}" />
                </div>

                <div class="item-details">

                    {!! view_render_event('bagisto.shop.checkout.name.before', ['item' => $item]) !!}

                    <div class="item-title">
                        {{ $product->name }}
                    </div>

                    {!! view_render_event('bagisto.shop.checkout.name.after', ['item' => $item]) !!}
                    {!! view_render_event('bagisto.shop.checkout.price.before', ['item' => $item]) !!}

                    <div class="row">
                        <span class="title">
                            {{ __('shop::app.checkout.onepage.price') }}
                        </span>
                        <span class="value">
                            {{ core()->currency($item->base_price) }}
                        </span>
                    </div>

                    {!! view_render_event('bagisto.shop.checkout.price.after', ['item' => $item]) !!}
                    {!! view_render_event('bagisto.shop.checkout.quantity.before', ['item' => $item]) !!}

                    <div class="row">
                        <span class="title">
                            {{ __('shop::app.checkout.onepage.quantity') }}
                        </span>
                        <span class="value">
                            {{ $item->quantity }}
                        </span>
                    </div>

                    {!! view_render_event('bagisto.shop.checkout.quantity.after', ['item' => $item]) !!}

                    @if ($product->type == 'configurable')
                        {!! view_render_event('bagisto.shop.checkout.options.after', ['item' => $item]) !!}

                        <div class="summary" >
                            {{ Cart::getProductAttributeOptionDetails($item->child->product)['html'] }}
                        </div>

                        {!! view_render_event('bagisto.shop.checkout.options.after', ['item' => $item]) !!}
                    @endif
                </div>
            </div>
        @endforeach
    </div> -->

    <!-- <div class="order-description mt-20">
        <div class="pull-left" style="width: 60%; float: left;">
            <div class="shipping">
                <div class="decorator">
                    <i class="icon shipping-icon"></i>
                </div>

                <div class="text">
                    {{ core()->currency($cart->selected_shipping_rate->base_price) }}

                    <div class="info">
                        {{ $cart->selected_shipping_rate->method_title }}
                    </div>
                </div>
            </div>

            <div class="payment">
                <div class="decorator">
                    <i class="icon payment-icon"></i>
                </div>

                <div class="text">
                    {{ core()->getConfigData('sales.paymentmethods.' . $cart->payment->method . '.title') }}
                </div>
            </div>

        </div>

        <div class="pull-right" style="width: 40%; float: left;">
            <slot name="summary-section"></slot>
        </div>
    </div> -->
</div>