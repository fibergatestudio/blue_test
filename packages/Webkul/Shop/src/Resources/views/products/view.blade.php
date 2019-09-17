@extends('shop::layouts.master')

@section('page_title')
    {{ trim($product->meta_title) != "" ? $product->meta_title : $product->name }}
@stop

@section('seo')
    <meta name="description" content="{{ trim($product->meta_description) != "" ? $product->meta_description : str_limit(strip_tags($product->description), 120, '') }}"/>
    <meta name="keywords" content="{{ $product->meta_keywords }}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@stop

@section('content-wrapper')
<div class="page__content">
    {!! view_render_event('bagisto.shop.products.view.before', ['product' => $product]) !!}

    <section class="product-detail">

        <div class="layouter">
            <product-view>
                        <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="#">Shop</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="product-card.html">{{ $product->name }}</a>
                            </li>
                        </ul>
                        <a class="back-button page__back-button" href="#">
                            <svg>
                                <use xlink:href="#long-arrow"></use>
                            </svg>
                        </a>
                <div class="form-container">
                    @csrf()

                    @if(empty($customer))

                    @else
                    <input type="hidden" name="product" value="{{ $product->product_id }}">
                    <input type="hidden" name="points" value="" class="input value1">
                    <input type="hidden" name="customer_id" value="{{ $customer->id }}" class="input value1">
                    @endif


                    <div class="details">


                        <?php  

                        $points_price = $product->special_price / $points->points_value; 
                        $converted_price = core()->currency($product->price);
                        
                        ?>

                        <div style="font-size: 20px;" class="control-group">

                            @if(empty($customer))

                            @else

                                <!-- Current Loyality Points: <b>{{ $customer->points }}</b><br> -->
                                <!-- Price in points: <b>  -->
                                <?php 

                                
                                //echo number_format((float)$points_price, 2, '.', '');
                                ?>
                                </b><br>
                                <input type="hidden" name="points" class="control quantity-change" value="0" min="0" max="<?php echo $points_price; ?>" placeholder="Enter Amount of Points">

                                <!-- <b>Buy with Points?</b><br>
                                <input class="control" id="points" type="number" placeholder="Enter Amount"><br>
                                <b>Final Price:</b><br>
                                <input type="number" class="control" id="result"  disabled> -->
                            @endif

                        </div>
                        <section style="padding-top: 70px !important; outline: none; box-shadow: none;" class="product-card">
                            <div id="app" class="product-card__row">
                                <div class="product-card__image">
                                @include ('shop::products.view.gallery')
                                    <!-- <picture>
                                        <source srcset="img/tmp/goods/coffee-product-card.webp" type="image/webp">
                                        <source srcset="img/tmp/goods/coffee-product-card.png" type="image/png">
                                        <img src="img/tmp/goods/coffee-product-card.png" alt="Picture alt text">
                                    </picture> -->
                                </div>

                                <div class="product-card__info">
                                    <h1 class="product-card__title">{{ $product->name }}</h1>
                                    <div class="product-card__price">@include ('shop::products.price', ['product' => $product])</div>

                                    @if ($product->type == 'configurable')
                                        <div id="total_price" style="font-size: 20px; color: #64dbd0; margin-top: -20px;" class="product-card__price"></div>
                                    @else
                                       
                                    @endif

                                    @include ('shop::products.view.stock', ['product' => $product])
                                    <!-- <div class="product-card__quantity"><span>Quantity: </span>
                                        <select class="js-init-styleselect" name="quantity_gram" value="250">
                                            <option value="250" selected>250 g</option>
                                            <option value="500">500 g</option>
                                            <option value="1000">1000 g</option>
                                        </select>
                                    </div> -->
                                    <?php 
                                    
                                    $prod_price = $product->price;

                                    //echo $prod_price;
                                    
                                    ?>

                                    <input id="price" type="hidden" value="<?php echo $prod_price ?>">

                                    
                                    {!! view_render_event('bagisto.shop.products.view.quantity.before', ['product' => $product]) !!}

                                    <div class="quantity control-group" :class="[errors.has('quantity') ? 'has-error' : '']">

                                        <label id="test" class="required">{{ __('shop::app.products.quantity') }}</label>

                                        <input class="control quantity-change" value="-" style="width: 35px; border-radius: 3px 0px 0px 3px;" onclick="updateQunatity('remove')" readonly>

                                        <input name="quantity" id="quantity" class="control quantity-change" value="1" v-validate="'required|numeric|min_value:1'" style="width: 60px; position: relative; margin-left: -4px; margin-right: -4px; border-right: none;border-left: none; border-radius: 0px;" data-vv-as="&quot;{{ __('shop::app.products.quantity') }}&quot;" readonly>

                                        <input class="control quantity-change" value="+" style="width: 35px; padding: 0 12px; border-radius: 0px 3px 3px 0px;" onclick=updateQunatity('add') readonly>

                                        <span class="control-error" v-if="errors.has('quantity')">@{{ errors.first('quantity') }}</span>
                                    </div>

                                    {!! view_render_event('bagisto.shop.products.view.quantity.after', ['product' => $product]) !!}

                                    @include ('shop::products.view.configurable-options')

                                    <ul class="product-card__composition">
                                        <li><strong>90% Arabica:</strong><span>Brasilia, Columbia, Guatemala.</span>
                                        </li>
                                        <li><strong>10% Robusta:</strong><span>Monsooned</span>
                                        </li>
                                    </ul>
                                    <div class="product-card__notes">
                                        <h2>Notes: </h2> <span>Honey, Dark chocolate, Hazelnut</span>
                                    </div>
                                    <div class="product-card__buttons">
                                        <!-- <a href="{{ route('cart.add', $product->product_id) }}"><button class="button button_blue">Add to Cart</button></a>
                                        <a href="{{ url('buynow/'.$product->product_id) }}"><button class="button button_blue">Buy</button></a> -->
                                        <!-- @include ('shop::products.buy-now') -->
                                        @include ('shop::products.add-to-cart')
                                        <button class="button button_transparent">Add to Blue Box</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- {!! view_render_event('bagisto.shop.products.view.short_description.before', ['product' => $product]) !!}  -->

                        <!-- <div class="description">
                            {!! $product->short_description !!}
                        </div> -->

                        <!-- {!! view_render_event('bagisto.shop.products.view.short_description.after', ['product' => $product]) !!} -->


                        @if ($product->type == 'configurable')
                            <input type="hidden" value="true" name="is_configurable">
                        @else
                            <input type="hidden" value="false" name="is_configurable">
                        @endif

                        <!-- @include ('shop::products.view.attributes') -->

                        <!-- @include ('shop::products.view.reviews') -->
                    </div>
                </div>
            </product-view>
            <div class="product-card__details product-details">
                    <h2 class="product-details__title"><span>Product Details</span>
                    </h2>
                    <br>
                    <ul class="product-details__list">
                    <!-- {!! view_render_event('bagisto.shop.products.view.short_description.before', ['product' => $product]) !!} 

                    <div style="overflow-wrap: break-word;" class="description"> -->
                        {!! $product->short_description !!}
                    <!-- </div>

                    {!! view_render_event('bagisto.shop.products.view.short_description.after', ['product' => $product]) !!} -->
                    </ul>
                </div>
        </div>

        <div class="goods goods_white">
            <div class="container goods__container">
                <h2 class="goods__title">You might also like</h2>
                    <div class="goods__slider swiper-container js-init-slider" data-options="goodsSlider">
                            <div class="swiper-wrapper">
                            @include ('shop::products.view.related-products')
                            </div>
                        <div class="swiper-pagination goods__pagination"></div>
                    </div>
                <button class="slider-control slider-control_prev goods__control goods__control_prev">
                    <svg>
                        <use xlink:href="#slider-arrow"></use>
                    </svg>
                </button>
                <button class="slider-control slider-control_next goods__control goods__control_next">
                    <svg>
                        <use xlink:href="#slider-arrow"></use>
                    </svg>
                </button>
            </div>
        </div> 
        <div class="goods">
            <div class="container goods__container">
                <h2 class="goods__title">Reccomended</h2>
                    <div class="goods__slider swiper-container js-init-slider" data-options="goodsSlider">
                        <div class="swiper-wrapper">
                            @include ('shop::products.view.up-sells')
                        </div>
                        <div class="swiper-pagination goods__pagination"></div>
                    </div>
                <button class="slider-control slider-control_prev goods__control goods__control_prev">
                    <svg>
                        <use xlink:href="#slider-arrow"></use>
                    </svg>
                </button>
                <button class="slider-control slider-control_next goods__control goods__control_next">
                    <svg>
                        <use xlink:href="#slider-arrow"></use>
                    </svg>
                </button>
            </div>
        </div>


    </section>
</div>




    {!! view_render_event('bagisto.shop.products.view.after', ['product' => $product]) !!}
@endsection

@push('scripts')


    <script type="text/x-template" id="product-view-template">
        <form method="POST" id="product-form" action="{{ route('cart.add', $product->product_id) }}" @click="onSubmit($event)">

            <slot></slot>

        </form>
    </script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script>
    $(document).ready(function(){
        var current_price = $("#final_price").text();
        current_price = current_price.replace(/[^0-9\.]+/g, "");
        var quant = $( "#quantity" ).val();
        var total_price = current_price * quant;

        $('#total_price,#control').text("Total HUF " + total_price);
            $(".quantity-change").click(function(){
                var current_price = $("#final_price").text();
                current_price = current_price.replace(/[^0-9\.]+/g, "");
                var quant = $( "#quantity" ).val();
                var total_price = current_price * quant;

                    $('#total_price').text("Total HUF " + total_price);
                    console.log(total_price);
            });

            
            $('.super').on('change', function() {
                var current_price = $("#final_price").text();
                current_price = current_price.replace(/[^0-9\.]+/g, "");
                var quant = $( "#quantity" ).val();
                var total_price = current_price * quant;

                    $('#total_price').text("Total HUF " + total_price);
                    console.log(total_price);
            });
    });


    </script>


    <script>

        Vue.component('product-view', {

            template: '#product-view-template',

            inject: ['$validator'],

            methods: {
                onSubmit: function(e) {
                    if (e.target.getAttribute('type') != 'submit')
                        return;

                    e.preventDefault();

                    this.$validator.validateAll().then(function (result) {
                        if (result) {
                          if (e.target.getAttribute('data-href')) {
                            window.location.href = e.target.getAttribute('data-href');
                          } else {
                            document.getElementById('product-form').submit();
                          }
                        }
                    });
                }
            }
        });

        $(document).ready(function() {
            var addTOButton = document.getElementsByClassName('add-to-buttons')[0];
            document.getElementById('loader').style.display="none";
            addTOButton.style.display="flex";
        });

        window.onload = function() {
            var thumbList = document.getElementsByClassName('thumb-list')[0];
            var thumbFrame = document.getElementsByClassName('thumb-frame');
            var productHeroImage = document.getElementsByClassName('product-hero-image')[0];

            if (thumbList && productHeroImage) {

                for(let i=0; i < thumbFrame.length ; i++) {
                    thumbFrame[i].style.height = (productHeroImage.offsetHeight/4) + "px";
                    thumbFrame[i].style.width = (productHeroImage.offsetHeight/4)+ "px";
                }

                if (screen.width > 720) {
                    thumbList.style.width = (productHeroImage.offsetHeight/4) + "px";
                    thumbList.style.minWidth = (productHeroImage.offsetHeight/4) + "px";
                    thumbList.style.height = productHeroImage.offsetHeight + "px";
                }
            }

            window.onresize = function() {
                if (thumbList && productHeroImage) {

                    for(let i=0; i < thumbFrame.length; i++) {
                        thumbFrame[i].style.height = (productHeroImage.offsetHeight/4) + "px";
                        thumbFrame[i].style.width = (productHeroImage.offsetHeight/4)+ "px";
                    }

                    if (screen.width > 720) {
                        thumbList.style.width = (productHeroImage.offsetHeight/4) + "px";
                        thumbList.style.minWidth = (productHeroImage.offsetHeight/4) + "px";
                        thumbList.style.height = productHeroImage.offsetHeight + "px";
                    }
                }
            }
        };

        function updateQunatity(operation) {
            var quantity = document.getElementById('quantity').value;

            if (operation == 'add') {
                quantity = parseInt(quantity) + 1;
            } else if (operation == 'remove') {
                if (quantity > 1) {
                    quantity = parseInt(quantity) - 1;
                } else {
                    alert('{{ __('shop::app.products.less-quantity') }}');
                }
            }
            document.getElementById("quantity").value = quantity;

            event.preventDefault();
        }
    </script>
@endpush