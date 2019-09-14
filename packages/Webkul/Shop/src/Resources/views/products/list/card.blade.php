{!! view_render_event('bagisto.shop.products.list.card.before', ['product' => $product]) !!}



    @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

    <?php $productBaseImage = $productImageHelper->getProductBaseImage($product); ?>

<div class="swiper-slide">
    <div class="product-tile product-tile_has-shadow">
        <div class="product-tile__content">
            <div class="product-tile__image">
                <a href="{{ route('shop.products.index', $product->url_key) }}" title="{{ $product->name }}">
                    <picture>
                        <img src="{{ $productBaseImage['medium_image_url'] }}" onerror="this.src='{{ asset('vendor/webkul/ui/assets/images/product/meduim-product-placeholder.png') }}'"/>
                    </picture>
                </a>
            </div>
            <h3 class="product-tile__name">
                <a href="{{ url()->to('/').'/products/' . $product->url_key }}" title="{{ $product->name }}">{{ $product->name }}</a>
            </h3>
            <div class="product-tile__price">@include ('shop::products.price', ['product' => $product])</div>
        </div>
        <div class="product-tile__hidden">
            <div class="product-tile__buttons">

            @include('shop::products.add-buttons', ['product' => $product])
                <!-- <button class="button button_transparent">Add to cart</button>
                <button class="button button_blue">Add to Blue box</button> -->
            </div>
        </div>
    </div>
</div>

{!! view_render_event('bagisto.shop.products.list.card.after', ['product' => $product]) !!}