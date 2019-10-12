@extends('shop::layouts.master')

@section('page_title')
    {{ trim($product->meta_title) != "" ? $product->meta_title : $product->name }}
@stop

@section('seo')
    <meta name="description" content="{{ trim($product->meta_description) != "" ? $product->meta_description : str_limit(strip_tags($product->description), 120, '') }}"/>
    <meta name="keywords" content="{{ $product->meta_keywords }}"/>
@stop

@section('content-wrapper')
<div class="container">
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
                                    <a href="{{ url('/categories/coffee') }}">Shop</a>
                                </li>
                                <li class="breadcrumb__item">
                                    <a href="{{ url('/products/'. $product->url_key) }}">{{ $product->name }}</a>
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

                        <input type="hidden" id="product_id" name="product" value="{{ $product->product_id }}">
                        <input type="hidden" name="points" value="" class="input value1">
                        

                        @else
                        <input type="hidden" id="product_id" name="product" value="{{ $product->product_id }}">
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
                                    </b><br>
                                    <input type="hidden" name="points" class="control quantity-change" value="0" min="0" max="<?php echo $points_price; ?>" placeholder="Enter Amount of Points">
                                @endif

                            </div>
                            <section class="product-card prod_fix">
                                <div id="app" class="product-card__row">
                                    <div class="product-card__image">
                                        @include ('shop::products.view.gallery')
                                    </div>

                                    <div class="product-card__info">
                                        <h1 class="product-card__title">{{ $product->name }}</h1>
                                        <div class="product-card__price">@include ('shop::products.price', ['product' => $product])</div>

                                        @include ('shop::products.view.stock', ['product' => $product])
                                        <?php 
                                        
                                        $prod_price = $product->price;
                                        
                                        ?>

                                        <input id="price" type="hidden" value="<?php echo $prod_price ?>">

                                        
                                        {!! view_render_event('bagisto.shop.products.view.quantity.before', ['product' => $product]) !!}

                                        <div class="quantity control-group product-card__quantity" :class="[errors.has('quantity') ? 'has-error' : '']">

                                            <label id="test" class="required">{{ __('shop::app.products.quantity') }}</label>

                                            <input class="control quantity-change product-card__input" value="-" style="width: 35px;" onclick="updateQunatity('remove')" readonly>

                                            <input name="quantity" id="quantity" style="margin-left: 14px; max-width:30px;" class="control quantity-change product-card__input" value="1" v-validate="'required|numeric|min_value:1'" style="width: 60px; position: relative; margin-left: -4px; margin-right: -4px; border-right: none;border-left: none; border-radius: 0px;" data-vv-as="&quot;{{ __('shop::app.products.quantity') }}&quot;" readonly>

                                            <input class="control quantity-change product-card__input" value="+" style="width: 35px;" onclick=updateQunatity('add') readonly>


                                        </div>

                                        {!! view_render_event('bagisto.shop.products.view.quantity.after', ['product' => $product]) !!}

                                        @include ('shop::products.view.configurable-options')

                                        @inject ('productViewHelper', 'Webkul\Product\Helpers\View')
                                        @if ($customAttributeValues = $productViewHelper->getAdditionalData($product))
                                            @foreach ($customAttributeValues as $attribute)
                                            <?php if($attribute['label'] == 'Arabica') { ?>
                                                <ul class="product-card__composition">
                                                <li><strong>90% Arabica:</strong><span><?php echo $attribute['value'] ?></span>
                                                </li>
                                                </ul>
                                               <?php } else if($attribute['label'] == 'Robusta'){ ?>
                                                <ul class="product-card__composition">
                                                <li><strong>10% Robusta:</strong><span><?php echo $attribute['value'] ?></span>
                                                </li>
                                                </ul>
                                               <?php } else if($attribute['label'] == 'Notes'){ ?>
                                                
                                                <div class="product-card__notes">
                                                    <h2>Notes: </h2> <span><?php echo $attribute['value'] ?></span>
                                                </div>
                                                    
                                                <?php } else { ?>
                                                  
                                            <?php } ?>
                                            @endforeach
                                        @endif
                                        <div class="product-card__buttons">
                                                @include ('shop::products.add-to-cart')
                                            <button class="button button_transparent">Add to Blue Box</button>
                                        </div>
                                    </div>
                                </div>
                            </section>


                            @if ($product->type == 'configurable')
                                <input type="hidden" value="true" name="is_configurable">
                            @else
                                <input type="hidden" value="false" name="is_configurable">
                            @endif

                        </div>
                    </div>
                </product-view>
                <div class="product-card__details product-details">
                                <h2 class="product-details__title"><span>Product Details</span>
                                </h2>
                                

                                @inject ('productViewHelper', 'Webkul\Product\Helpers\View')

                                @if ($customAttributeValues = $productViewHelper->getAdditionalData($product))
                                    @foreach ($customAttributeValues as $attribute)
                                        <?php 
                                        if($attribute['label'] == 'Body'){
                                            $body = $attribute['value'];
                                        } else if($attribute['label'] == 'Region'){
                                            $region = $attribute['value'];
                                        } else if($attribute['label'] == 'Aroma'){
                                            $aroma = $attribute['value'];
                                        } else if($attribute['label'] == 'Roasting'){
                                            $roastin = $attribute['value'];
                                        } else if($attribute['label'] == 'Recomend'){
                                            $recomend = $attribute['value'];
                                        } else if($attribute['label'] == 'Flavor'){
                                            $flavor = $attribute['value'];
                                        }  
                                        ?>
                                    @endforeach
                                @endif
                                <ul class="product-details__list product-card">
                                    <li class="product-details__list-item">
                                        <div class="product-details__icon">
                                            <svg>
                                                <use xlink:href="#coffee-bean-2"></use>
                                            </svg>
                                        </div>
                                        <div class="product-details__text">
                                            <h3>Body: </h3><span>
                                            @if(!empty($body))
                                            <?php echo $body ?>
                                            @else
                                            None
                                            @endif
                                            </span>
                                        </div>
                                    </li>
                                    <li class="product-details__list-item">
                                        <div class="product-details__icon">
                                            <svg>
                                                <use xlink:href="#location-pin"></use>
                                            </svg>
                                        </div>
                                        <div class="product-details__text">
                                            <h3>Region: </h3><span>
                                            @if(!empty($region))
                                            <?php echo $region ?>
                                            @else
                                            None
                                            @endif
                                            </span>
                                        </div>
                                    </li>
                                    <li class="product-details__list-item">
                                        <div class="product-details__icon">
                                            <svg>
                                                <use xlink:href="#cup"></use>
                                            </svg>
                                        </div>
                                        <div class="product-details__text">
                                            <h3>Aroma: </h3><span>
                                            @if(!empty($aroma))
                                            <?php echo $aroma ?>
                                            @else
                                            None
                                            @endif
                                            </span>
                                        </div>
                                    </li>
                                    <li class="product-details__list-item">
                                        <div class="product-details__icon">
                                            <svg>
                                                <use xlink:href="#coffee-bean-2"></use>
                                            </svg>
                                        </div>
                                        <div class="product-details__text">
                                            <h3>Roasting: </h3><span>
                                            @if(!empty($roastin))
                                            <?php echo $roastin ?>
                                            @else
                                            None
                                            @endif
                                            </span>
                                        </div>
                                    </li>
                                    <li class="product-details__list-item">
                                        <div class="product-details__icon">
                                            <svg>
                                                <use xlink:href="#bean-bag"></use>
                                            </svg>
                                        </div>
                                        <div class="product-details__text">
                                            <h3>Flavor: </h3><span>
                                            @if(!empty($flavor))
                                            <?php echo $flavor ?>
                                            @else
                                            None
                                            @endif
                                            </span>
                                        </div>
                                    </li>
                                    <li class="product-details__list-item">
                                        <div class="product-details__icon">
                                            <svg>
                                                <use xlink:href="#barista"></use>
                                            </svg>
                                        </div>
                                        <div class="product-details__text">
                                            <h3>We recommend: </h3><span>
                                            @if(!empty($recomend))
                                            <?php echo $recomend ?>
                                            @else
                                            None
                                            @endif
                                            </span>
                                        </div>
                                    </li>
                                    @if ($customAttributeValues = $productViewHelper->getAdditionalData($product))
                                        @foreach ($customAttributeValues as $attribute)
                                        <?php if($attribute['label'] == 'Weight'){ ?>
                                        <?php } else if($attribute['label'] == 'Body'){
                                                
                                            }else if($attribute['label'] == 'Region'){
                                                
                                            } else if($attribute['label'] == 'Aroma'){
                                                
                                            } else if($attribute['label'] == 'Roasting'){
                                                
                                            } else if($attribute['label'] == 'Recomend'){
                                            
                                            } else if($attribute['label'] == 'Flavor'){
                                                
                                            } else if($attribute['label'] == 'catalog_img'){
                                                
                                            } else { ?>
                                                <li class="product-details__list-item">
                                                    <div class="product-details__icon">
                                                        <svg>
                                                            <use xlink:href="#coffee-bean-2"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="product-details__text">
                                                        <h3><?php echo $attribute['label'] ?> </h3><span><?php echo $attribute['value'] ?></span>
                                                    </div>
                                                </li>
                                        <?php } ?>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
            </div>
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

<!-- Script for products -->
<script type="text/javascript" src="{{ bagisto_asset('js/shop.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/webkul/ui/assets/js/ui.js') }}"></script>



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
            //document.getElementById('loader').style.display="none";
            //addTOButton.style.display="flex";
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