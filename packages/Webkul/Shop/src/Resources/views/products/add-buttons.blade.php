
    @if ($product->type == "configurable")
        <div class="cart-wish-wrap">
            <div class="product-tile__buttons">
                <a href="{{ route('cart.add.configurable', $product->url_key) }}">
                    <button class="button button_transparent">{{ __('shop::app.products.add-to-cart') }}</button>
                </a>
                <button class="button button_blue"{{ $product->haveSufficientQuantity(1) ? '' : 'disabled' }}>Add to Blue box</button>
            </div>

            <!-- include('shop::products.wishlist') -->
        </div>
    @else
        <div class="cart-wish-wrap">
            <form action="{{ route('cart.add', $product->product_id) }}" method="POST">
                @csrf
                <input type="hidden" name="product" value="{{ $product->product_id }}">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" value="false" name="is_configurable">
                    <div class="product-tile__buttons">
                        <button class="button button_transparent" {{ $product->haveSufficientQuantity(1) ? '' : 'disabled' }}>{{ __('shop::app.products.add-to-cart') }}</button>
                        <button class="button button_blue"{{ $product->haveSufficientQuantity(1) ? '' : 'disabled' }}>Add to Blue box</button>
                    </div>
            </form>

            <!-- include('shop::products.wishlist') -->
        </div>
    @endif