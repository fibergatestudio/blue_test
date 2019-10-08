@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.checkout.cart.title') }}
@stop

@section('content-wrapper')
    @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')
    <section class="">
        @if ($cart)
            <!-- <div class="title">
                {{ __('shop::app.checkout.cart.title') }}
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
                        <h1 class="page__title">Cart</h1>
                        <div class="cart">
                            <form class="cart__table" action="{{ route('shop.checkout.cart.update') }}" method="POST" @submit.prevent="onSubmit">
                            @csrf
                                <div class="cart__row cart__row_header">
                                    <div class="cart__col cart__col_cat">Product</div>
                                    <div class="cart__col cart__col_price">Price</div>
                                    <div class="cart__col cart__col_quantity">Quantity</div>
                                    <div class="cart__col cart__col_total">Total</div>
                                </div>
                                @foreach ($cart->items as $key => $item)

                                <?php
                                    if ($item->type == "configurable")
                                        $productBaseImage = $productImageHelper->getProductBaseImage($item->child->product);
                                    else
                                        $productBaseImage = $productImageHelper->getProductBaseImage($item->product);
                                ?>

                                <div class="">
                                    <?php  

                                    $points_price = $item->special_price; 
                                    $converted_price = $item->base_price / $points->points_value;

                                    if($customer){
                                        $customer_points = $customer->points;
                                    } else {
                                        $customer_points = '0';
                                    }



                                    $quantity_price = ($item->base_price / $points->points_value) * $item->quantity;

                                    if($quantity_price > $customer_points){

                                        $final_points = $customer_points;

                                    } else {

                                        $final_points = ($item->base_price / $points->points_value) * $item->quantity;
                                    }

                                    // echo $points_price;
                                    //echo $converted_price;

                                    ?>

                                </div>

                                <div class="cart__row cart__row_product">

                                    <div class="cart__col cart__col_remove">
                                        <span class="remove">
                                            <button class="cart__remove-btn" type="button">
                                                <a href="{{ route('shop.checkout.cart.remove', $item->id) }}" onclick="removeLink('Do you really want to do this?')"> 
                                                    <svg>
                                                        <use style="color: #64b2db;" xlink:href="#close"></use>
                                                    </svg>
                                                </a>
                                            </button>
                                        </span>
                                    </div>

                                    <div class="cart__col cart__col_image">
                                        <picture>
                                            <source srcset="{{ $productBaseImage['medium_image_url'] }}" type="image/webp">
                                            <source srcset="{{ $productBaseImage['medium_image_url'] }}" type="image/png">
                                            <img src="{{ $productBaseImage['medium_image_url'] }}" alt="Picture alt text">
                                        </picture>
                                    </div>

                                    <div class="cart__col cart__col_info">
                                        <div>
                                            <h2 class="cart__product-title">{{ $item->product->name }}</h2>
                                            <p class="cart__product-desc">Spice, Nutty, Dark chocolate, Cocoa, Bitter sweet</p>
                                            <p class="cart__product-mob-price">{{ core()->currency($item->base_price) }}</p>
                                        </div>
                                    </div>

                                    <div class="cart__col cart__col_price">
                                        <span class="cart__product-price">{{ core()->currency($item->base_price) }}</span>
                                        <span style="font-size: 12px;" class="cart__product-price">Price in points: <b><?php echo $converted_price ?></b></span>
                                    </div>

                                    <div class="cart__col cart__col_quantity">
                                        <div class="input-number cart__product-quantity">
                                            <input type="text" class="control quantity-change input-number__value" id="cart-quantity{{ $key }}" v-validate="'required|numeric|min_value:1'" name="qty[{{$item->id}}]" value="{{ $item->quantity }}" data-vv-as="&quot;{{ __('shop::app.checkout.cart.quantity.quantity') }}&quot;" style="border-right: none; border-left: none; border-radius: 0px;" readonly>
                                            
                                            <div class="input-number__controls">
                                                <button class="control quantity-change input-number__button" value="+" style="width: 35px; padding: 0 12px; border-radius: 0px 3px 3px 0px;" onclick="updateCartQunatity('add', {{$key}})" readonly>+</button>
                                                <button class="control quantity-change input-number__button" value="-" style="width: 35px; border-radius: 3px 0px 0px 3px;" onclick="updateCartQunatity('remove', {{$key}})" readonly>-</button>
                                            </div>
                                        
                                        </div>
                                    </div>

                                    <?php 
                                    
                                    $prod_quan = $item->quantity;
                                    $prod_price = $item->price;
                                    $prod_sum = $prod_quan * $prod_price;
                                    
                                    ?>


                                    <div class="cart__col cart__col_total">
                                        <span class="cart__product-price">{{ core()->currency($prod_sum) }}</span>
                                    </div>


                                </div>
                                @endforeach

                                <div class="cart__row cart__row_total">
                                    <div class="cart__coupon">
                                        <div class="coupon">
                                            <input class="coupon__input" type="text" name="coupon" placeholder="Coupon Code">
                                            <button class="button button_blue coupon__button">Apply</button>
                                        </div><br>
                                        <div class="">
                                        You Points: <b>
                                            <?php 
                                            
                                            if($customer_points){
                                                echo $customer_points; 
                                            } else {
                                                echo 'NotLoggedIn'; 
                                            }
                                            
                                            ?>
                                            </b>
                                        </div>
                                        <div class="coupon">
                                            <!-- <input  type="text" name="coupon" placeholder="Coupon Code"> -->
                                            <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                                            <input class="coupon__input" style="width: 100%;" type="number" min="0" max="<?php echo $final_points ?>" name="new_points" placeholder="{{ $cart->points }}" value="{{ $cart->points }}">
                                            <button class="button button_blue coupon__button" type="submit" >Update Points</button>
                                        </div>
                                    </div>
                                    <div class="cart__total total">
                                        <!-- Loyalty POINTS -->

                                            <?php 

                                        if($customer){
                                            
                                            $used_points = $cart->points;

                                            $point_miltipl = $used_points * $points->points_value;

                                            $points_price = $cart->sub_total / $points->points_value; 



                                            if($customer->points < $points_price){

                                                $max_points = $customer->points; 

                                            } else {

                                                $max_points = $cart->sub_total / $points->points_value; 

                                            }

                                        } else {

                                        }

                                        ?>
                                        <!-- END Loyalty POINTS -->
                                        <div class="total__container">
                                            <div class="total__row">
                                                <h3>Input use points:</h3> <span id="totalSum"> {{ $cart->points }} </span>
                                            </div>
                                            <div class="total__row">
                                                <h3>Points (Converted):</h3> <span id="totalSum"> {{ core()->currency($cart->points_converted) }}</span>
                                            </div>
                                            <div class="total__row">
                                                <h3>Subtotal:</h3> <span id="subtotalSum">{{ core()->currency($cart->base_sub_total) }}</span>
                                            </div>
                                            <div class="total__row">
                                                <h3>Total:</h3> <span id="totalSum">  {{ core()->currency($cart->base_grand_total) }} </span>
                                            </div>
                                        </div>
                                        <!-- input.button.button_blue.total__button(type="submit", value="PROCEED TO CHECKOUT")-->
                                        <!-- <a style="color:white;" class="button button_blue total__button" href="shopping-cart-step-1.html">PROCEED TO CHECKOUT</a> -->
                                        <button type="submit" class="button button_blue total__button">{{ __('shop::app.checkout.cart.update-cart') }}</button>
                                        @if (! cart()->hasError())
                                        <a style="color:white; display: initial;" class="button button_blue total__button" href="{{ route('shop.checkout.onepage.index') }}">{{ __('shop::app.checkout.cart.proceed-to-checkout') }}</a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div style="display:none;" class="cart-content">
                <div class="left-side">
                    <form action="{{ route('shop.checkout.cart.update') }}" method="POST" @submit.prevent="onSubmit">

                        <div class="cart-item-list" style="margin-top: 0">
                            @csrf
                            @foreach ($cart->items as $key => $item)
                                <?php
                                    if ($item->type == "configurable")
                                        $productBaseImage = $productImageHelper->getProductBaseImage($item->child->product);
                                    else
                                        $productBaseImage = $productImageHelper->getProductBaseImage($item->product);
                                ?>

                                <div class="item mt-5">
                                    <div class="item-image" style="margin-right: 15px;">
                                        <a href="{{ url()->to('/').'/products/'.$item->product->url_key }}"><img src="{{ $productBaseImage['medium_image_url'] }}" /></a>
                                    </div>

                                    <div class="item-details">

                                        {!! view_render_event('bagisto.shop.checkout.cart.item.name.before', ['item' => $item]) !!}

                                        <div class="item-title">
                                            <a href="{{ url()->to('/').'/products/'.$item->product->url_key }}">
                                                {{ $item->product->name }}
                                            </a>
                                        </div>

                                        {!! view_render_event('bagisto.shop.checkout.cart.item.name.after', ['item' => $item]) !!}


                                        {!! view_render_event('bagisto.shop.checkout.cart.item.price.before', ['item' => $item]) !!}

                                        <div class="price">
                                            {{ core()->currency($item->base_price) }}
                                        </div>

                                        <div class="">
                                        <?php  

                                        $points_price = $item->special_price; 
                                        $converted_price = $item->base_price / $points->points_value;

                                        if($customer){
                                            $customer_points = $customer->points;
                                        } else {
                                            $customer_points = '0';
                                        }



                                        $quantity_price = ($item->base_price / $points->points_value) * $item->quantity;

                                        if($quantity_price > $customer_points){

                                            $final_points = $customer_points;

                                        } else {

                                            $final_points = ($item->base_price / $points->points_value) * $item->quantity;
                                        }

                                        // echo $points_price;
                                        //echo $converted_price;

                                        ?>


                                            <p style="font-size: 20px;">Price in points: <b> <?php echo $converted_price ?> </b></p>
                                        </div>

                                        {!! view_render_event('bagisto.shop.checkout.cart.item.price.after', ['item' => $item]) !!}


                                        {!! view_render_event('bagisto.shop.checkout.cart.item.options.before', ['item' => $item]) !!}

                                        @if ($item->type == 'configurable')

                                            <div class="summary">

                                                {{ Cart::getProductAttributeOptionDetails($item->child->product)['html'] }}

                                            </div>
                                        @endif

                                        {!! view_render_event('bagisto.shop.checkout.cart.item.options.after', ['item' => $item]) !!}


                                        {!! view_render_event('bagisto.shop.checkout.cart.item.quantity.before', ['item' => $item]) !!}

                                        <div class="misc">
                                            <div class="control-group" :class="[errors.has('qty[{{$item->id}}]') ? 'has-error' : '']">
                                                <!-- <div class="wrap">
                                                    <label for="points[{{$item->id}}]">{{ __('Points to USE') }}</label>

                                                    <input type="text" class="control quantity-change" id="points-quantity{{ $key
                                                    }}" name="points[{{$item->id}}]" value="" style="border-right: none; border-left: none; border-radius: 0px;" readonly>

                                                </div> -->
                                                <div class="wrap">
                                                    <label for="qty[{{$item->id}}]">{{ __('shop::app.checkout.cart.quantity.quantity') }}</label>

                                                    <input class="control quantity-change" value="-" style="width: 35px; border-radius: 3px 0px 0px 3px;" onclick="updateCartQunatity('remove', {{$key}})" readonly>

                                                    <input type="text" class="control quantity-change" id="cart-quantity{{ $key
                                                    }}" v-validate="'required|numeric|min_value:1'" name="qty[{{$item->id}}]" value="{{ $item->quantity }}" data-vv-as="&quot;{{ __('shop::app.checkout.cart.quantity.quantity') }}&quot;" style="border-right: none; border-left: none; border-radius: 0px;" readonly>

                                                    <input class="control quantity-change" value="+" style="width: 35px; padding: 0 12px; border-radius: 0px 3px 3px 0px;" onclick="updateCartQunatity('add', {{$key}})" readonly>
                                                </div>

                                                <!-- <span class="control-error" v-if="errors.has('qty[{{$item->id}}]')">@{{ errors.first('qty[{!!$item->id!!}]') }}</span> -->
                                            </div>

                                            <span class="remove">
                                                <a href="{{ route('shop.checkout.cart.remove', $item->id) }}" onclick="removeLink('Do you really want to do this?')">{{ __('shop::app.checkout.cart.remove-link') }}</a></span>

                                            @auth('customer')
                                                <span class="towishlist">
                                                    @if ($item->parent_id != 'null' ||$item->parent_id != null)
                                                        <a href="{{ route('shop.movetowishlist', $item->id) }}" onclick="removeLink('Do you really want to do this?')">{{ __('shop::app.checkout.cart.move-to-wishlist') }}</a>
                                                    @else
                                                        <a href="{{ route('shop.movetowishlist', $item->child->id) }}" onclick="removeLink('{{ __('shop::app.checkout.cart.cart-remove-action') }}')">{{ __('shop::app.checkout.cart.move-to-wishlist') }}</a>
                                                    @endif
                                                </span>
                                            @endauth
                                        </div>

                                        {!! view_render_event('bagisto.shop.checkout.cart.item.quantity.after', ['item' => $item]) !!}

                                        @if (! cart()->isItemHaveQuantity($item))
                                            <div class="error-message mt-15">
                                                * {{ __('shop::app.checkout.cart.quantity-error') }}
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        

                        {!! view_render_event('bagisto.shop.checkout.cart.controls.after', ['cart' => $cart]) !!}

                        <div class="misc-controls">
                            <a href="{{ route('shop.home.index') }}" class="link">{{ __('shop::app.checkout.cart.continue-shopping') }}</a>

                            <div>
                                <button type="submit" class="btn btn-lg btn-primary">
                                    {{ __('shop::app.checkout.cart.update-cart') }}
                                </button>

                                @if (! cart()->hasError())
                                    <a href="{{ route('shop.checkout.onepage.index') }}" class="btn btn-lg btn-primary">
                                        {{ __('shop::app.checkout.cart.proceed-to-checkout') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        {!! view_render_event('bagisto.shop.checkout.cart.controls.after', ['cart' => $cart]) !!}
                    </form>
                </div>

                <div class="right-side">
                    {!! view_render_event('bagisto.shop.checkout.cart.summary.after', ['cart' => $cart]) !!}

                    @include('shop::checkout.total.summary', ['cart' => $cart])

                    {!! view_render_event('bagisto.shop.checkout.cart.summary.after', ['cart' => $cart]) !!}
                </div>
            </div>

            <!-- include ('shop::products.view.cross-sells') --> 

        @else

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
                        <h1 class="page__title">Your cart is empty</h1>
                        <div class="cart">
                            <a style="color:white;" class="button button_blue cart__go-shopping" href="{{ url('/categories/coffee') }}">Go shopping</a>
                        </div>
                    </div>
                </div>
            </div>


        @endif
    </section>
    <script type="text/javascript" src="{{ bagisto_asset('js/shop.js') }}"></script>
@endsection

@push('scripts')


<!-- <script>
    $(document).ready(function(){
        $(".quantity-change").click(function(){
            var current_price = $("#final_price").text();
            current_price = current_price.replace(/[^0-9\.]+/g, "");
            var quant = $( "#quantity" ).val();
            var total_price = current_price * quant;

                $('#total_price').text("Total HUF " + total_price);
                console.log(total_price);
        });
    });


    </script> -->


    <script>
        function removeLink(message) {
            if (!confirm(message))
            event.preventDefault();
        }

        function updateCartQunatity(operation, index) {
            var quantity = document.getElementById('cart-quantity'+index).value;

            if (operation == 'add') {
                quantity = parseInt(quantity) + 1;
            } else if (operation == 'remove') {
                if (quantity > 1) {
                    quantity = parseInt(quantity) - 1;
                } else {
                    alert('{{ __('shop::app.products.less-quantity') }}');
                }
            }
            document.getElementById('cart-quantity'+index).value = quantity;
            event.preventDefault();
        }
    </script>
@endpush