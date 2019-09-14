{!! view_render_event('bagisto.shop.products.buy_now.before', ['product' => $product]) !!}

<button type="submit" data-href="{{ route('shop.product.buynow',['id' => $product->product_id])}}" class="button button_blue" {{ $product->type != 'configurable' && ! $product->haveSufficientQuantity(1) ? 'disabled' : '' }}>
    {{ __('shop::app.products.buy-now') }}
</button>


{!! view_render_event('bagisto.shop.products.buy_now.after', ['product' => $product]) !!}