

    @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

    <?php 
    //$productBaseImage = $productImageHelper->getProductBaseImage($product); 

    foreach($image as $im){
        if($im->product_id == $product->product_id){
            $imagePath = $im->path;
            //echo $imagePath;
        } else {
            //$imagePath = 'null';
            //echo 'null';
        }
        
    }

    ?>


    <?php if (\Request::is('shop') || \Request::is('filter') || \Request::is('categories/*')  ) { ?>
     <div class="catalog__item">
   <?php } ?>
        <div class="product-tile product-tile_has-shadow">
            <div class="product-tile__content">
                <div class="product-tile__image">
                    <a href="{{ url()->to('/').'/products/' . $product->url_key }}">
                        <picture>

                            @if(!empty($product->catalog_img))
                                <source srcset="{{ url('/cache/large/' . $product->catalog_img) }}" type="image/webp">
                                <source srcset="{{ url('/cache/large/' . $product->catalog_img) }}" type="image/png">
                                <img src="{{ url('/cache/large/' . $product->catalog_img) }}" onerror="this.src='{{ asset('vendor/webkul/ui/assets/images/product/meduim-product-placeholder.png') }}" alt="product image">
                            @else
                                @if(!empty($imagePath))
                                <source srcset="{{ url('/cache/large/' . $imagePath) }}" type="image/webp">
                                <source srcset="{{ url('/cache/large/' . $imagePath) }}" type="image/png">
                                <img style="height: 339px; width: 226px;" src="{{ url('/cache/large/' . $imagePath) }}" onerror="this.src='{{ asset('vendor/webkul/ui/assets/images/product/meduim-product-placeholder.png') }}" alt="product image">
                                @else 
                                <source srcset="{{ asset('vendor/webkul/ui/assets/images/product/meduim-product-placeholder.png') }}" type="image/webp">
                                <source srcset="{{ asset('vendor/webkul/ui/assets/images/product/meduim-product-placeholder.png') }}" type="image/png">
                                <img style="height: 339px; width: 226px;" src="{{ asset('vendor/webkul/ui/assets/images/product/meduim-product-placeholder.png') }}" alt="product image">
                                @endif
                            @endif
                          
                            

                        </picture>
                    </a>
                </div>
                <h3 class="product-tile__name">
                    <a href="{{ url()->to('/').'/products/' . $product->url_key }}" title="{{ $product->name }}">{{ $product->name }}</a>
                </h3>
                <div class="product-tile__price">{{ core()->currency($product->price) }}</div>
            </div>
            <div class="product-tile__hidden">
                <div class="product-tile__buttons">


                            <a href="{{ route('cart.add.configurable', $product->url_key) }}">
                                <button class="button button_transparent" style="margin-right:5px;">{{ __('shop::app.products.add-to-cart') }}</button>
                            </a>

                             <form href="{{ route('cart.add', $product->id) }}" method="POST">
                             @csrf()
                                <button class="button button_blue">Add to Blue box</button>
                            </form>



                    <!-- <button style="margin-right:5px;"  class="button button_transparent">Add to cart</button>
                    <button class="button button_blue">Add to Blue box</button> -->
                </div>
            </div>
        </div>
        <?php if (\Request::is('shop') || \Request::is('filter') || \Request::is('categories/*')) { ?>
            </div>
        <?php } ?>

<!-- <div class="swiper-slide">
    <div class="product-tile product-tile_has-shadow">
        <div class="product-tile__content">
            <div class="product-tile__image">
                <a href="" title="{{ $product->name }}">
                    <picture>
                        <img src="" onerror="this.src='{{ asset('vendor/webkul/ui/assets/images/product/meduim-product-placeholder.png') }}'"/>
                    </picture>
                </a>
            </div>
            <h3 class="product-tile__name">
                <a href="{{ url()->to('/').'/products/' . $product->url_key }}" title="{{ $product->name }}">{{ $product->name }}</a>
            </h3>
            <div class="product-tile__price"></div>
        </div>
        <div class="product-tile__hidden">
            <div class="product-tile__buttons">

            
                <!-- <button class="button button_transparent">Add to cart</button>
                <button class="button button_blue">Add to Blue box</button> -->
           <!-- </div>
        </div>
    </div>
</div> -->

