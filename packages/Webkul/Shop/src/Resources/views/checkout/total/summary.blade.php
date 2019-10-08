<div style="display:none;" class="order-summary">
    <h3>{{ __('shop::app.checkout.total.order-summary') }}</h3>

    <div class="item-detail">
        <label>
            {{ intval($cart->items_qty) }}
            {{ __('shop::app.checkout.total.sub-total') }}
            {{ __('shop::app.checkout.total.price') }}
        </label>
        <label class="right">{{ core()->currency($cart->base_sub_total) }}</label>
    </div>

    @if ($cart->selected_shipping_rate)
        <div class="item-detail">
            <label>{{ __('shop::app.checkout.total.delivery-charges') }}</label>
            <label class="right">{{ core()->currency($cart->selected_shipping_rate->base_price) }}</label>
        </div>
    @endif

    @if ($cart->base_tax_total)
        <div class="item-detail">
            <label>{{ __('shop::app.checkout.total.tax') }}</label>
            <label class="right">{{ core()->currency($cart->base_tax_total) }}</label>
        </div>
    @endif
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
        <div class="item-detail">
            <label>{{ __('Input use points') }}</label>
            <label class="right">{{ $cart->points }} </label>
  
        </div>
        <div class="item-detail">
            <label>{{ __('Points (Converted)') }}</label>
            <label class="right"> {{ core()->currency($cart->points_converted) }}</label>
        </div>
    <!-- END Loyalty POINTS -->

    <div class="item-detail" id="discount-detail" @if ($cart->discount_amount && $cart->discount_amount > 0) style="display: block;" @else style="display: none;" @endif>
        <label>
            <b>{{ __('shop::app.checkout.total.disc-amount') }}</b>
        </label>
        <label class="right">
            <b id="discount-detail-discount-amount">
                {{ core()->currency($cart->discount_amount) }}
            </b>
        </label>
    </div>


    <div class="payable-amount" id="grand-total-detail">
        <label>{{ __('shop::app.checkout.total.grand-total') }}</label>
        <label class="right" id="grand-total-amount-detail">
            {{ core()->currency($cart->base_grand_total) }} <!-- base_grand_total -->
        </label>
    </div> 

        <hr>
        <div class="item-detail">
            @if(Route::current()->getName() == 'shop.checkout.cart.index')
            <p>
                You Points: <b>
                <?php 
                
                if($customer_points){
                    echo $customer_points; 
                } else {
                    echo 'NotLoggedIn'; 
                }
                
                ?>
                </b>
            </p>
            <br>
            <form style="display: flex;" action="{{ route('cart.update_points') }}" method="POST">
            @csrf()
                <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                <input style="width: 100%;" type="number" min="0" max="<?php echo $final_points ?>" name="new_points" placeholder="{{ $cart->points }}" value="{{ $cart->points }}">

                <button type="submit" class="btn">Update Points</button>
            </form>
            @endif
        </div>


    <div @if (! request()->is('checkout/cart')) v-if="parseInt(discount)" @endif>
        @if (! request()->is('checkout/cart'))
            @if (! $cart->coupon_code)
                <div class="discount">
                    <div class="discount-group">
                        <form class="coupon-form" method="post" @submit.prevent="onSubmit">
                            <div class="control-group mt-20" :class="[errors.has('code') ? 'has-error' : '']" style="margin-bottom: 10px">
                                <input type="text" class="control" value="" v-model="coupon_code" name="code" placeholder="Enter Coupon Code" v-validate="'required'" style="width: 100%" @change="changeCoupon">
                            </div>

                            <div class="control-error mb-10" v-if="error_message != null" style="color: #FF6472">* @{{ error_message }}</div>

                            <button class="btn btn-lg btn-black" :disabled="couponChanged">{{ __('shop::app.checkout.onepage.apply-coupon') }}</button>
                        </form>
                    </div>
                </div>
            @else
                <div class="discount-details-group">
                    <div class="item-detail">
                        <label>{{ __('shop::app.checkout.total.coupon-applied') }}</label>

                        <label class="right" style="display: inline-flex; align-items: center;">
                            <b>{{ $cart->coupon_code }}</b>

                            <span class="icon cross-icon" title="{{ __('shop::app.checkout.total.remove-coupon') }}" v-on:click="removeCoupon"></span>
                        </label>
                    </div>
                </div>
            @endif
        @endif
    </div>
</div>