{!! view_render_event('bagisto.shop.products.add_to_cart.before', ['product' => $product]) !!}

<button style="margin-right: 20px;" type="submit" id="test" class="button button_blue" {{ $product->type != 'configurable' && ! $product->haveSufficientQuantity(1) ? 'disabled' : '' }}>
    {{ __('shop::app.products.add-to-cart') }}
</button>

{!! view_render_event('bagisto.shop.products.add_to_cart.after', ['product' => $product]) !!}