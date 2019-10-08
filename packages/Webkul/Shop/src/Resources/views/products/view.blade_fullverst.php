@extends('shop::layouts.master')

@section('page_title')
    {{ trim($product->meta_title) != "" ? $product->meta_title : $product->name }}
@stop

@section('seo')
    <meta name="description" content="{{ trim($product->meta_description) != "" ? $product->meta_description : str_limit(strip_tags($product->description), 120, '') }}"/>
    <meta name="keywords" content="{{ $product->meta_keywords }}"/>
@stop

@section('content-wrapper')

<main>
            <div class="page">
                <div class="page__content">
                    <div class="container">
                        <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="catalog.html">Shop</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="product-card.html">Blue Bird Blend - Our Own Selected</a>
                            </li>
                        </ul>
                        <a class="back-button page__back-button" href="#">
                            <svg>
                                <use xlink:href="#long-arrow"></use>
                            </svg>
                        </a>
                        <section class="product-card">
                            <form class="product-card__row">
                                <div class="product-card__image">
                                    <picture>
                                        <source srcset="{{ url('assets/img/tmp/goods/coffee-product-card.webp') }}" type="image/webp">
                                        <source srcset="{{ url('assets/img/tmp/goods/coffee-product-card.png') }}" type="image/png">
                                        <img src="{{ url('assets/img/tmp/goods/coffee-product-card.png') }}" alt="Picture alt text">
                                    </picture>
                                </div>
                                <div class="product-card__info">
                                    <h1 class="product-card__title">Blue Bird Blend – Our own selected Blend</h1>
                                    <div class="product-card__price">3 300 HUF</div>
                                    <div class="product-card__quantity"><span>Quantity: </span>
                                        <select class="js-init-styleselect" name="quantity" value="250">
                                            <option value="250" selected>250 g</option>
                                            <option value="500">500 g</option>
                                            <option value="1000">1000 g</option>
                                        </select>
                                    </div>
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
                                        <button class="button button_blue">Buy</button>
                                        <button class="button button_transparent">Add to Blue Box</button>
                                    </div>
                                </div>
                            </form>
                            <div class="product-card__details product-details">
                                <h2 class="product-details__title"><span>Product Details</span>
                                </h2>
                                <ul class="product-details__list">
                                    <li class="product-details__list-item">
                                        <div class="product-details__icon">
                                            <svg>
                                                <use xlink:href="#coffee-bean-2"></use>
                                            </svg>
                                        </div>
                                        <div class="product-details__text">
                                            <h3>Body: </h3><span>Mixed arabica coffee from brazil, guatemala, columbia fields + some robusta coffee</span>
                                        </div>
                                    </li>
                                    <li class="product-details__list-item">
                                        <div class="product-details__icon">
                                            <svg>
                                                <use xlink:href="#location-pin"></use>
                                            </svg>
                                        </div>
                                        <div class="product-details__text">
                                            <h3>Region: </h3><span>South-america</span>
                                        </div>
                                    </li>
                                    <li class="product-details__list-item">
                                        <div class="product-details__icon">
                                            <svg>
                                                <use xlink:href="#cup"></use>
                                            </svg>
                                        </div>
                                        <div class="product-details__text">
                                            <h3>Aroma: </h3><span>Honey and chocolate</span>
                                        </div>
                                    </li>
                                    <li class="product-details__list-item">
                                        <div class="product-details__icon">
                                            <svg>
                                                <use xlink:href="#coffee-bean-2"></use>
                                            </svg>
                                        </div>
                                        <div class="product-details__text">
                                            <h3>Roasting: </h3><span>Medium és medium +</span>
                                        </div>
                                    </li>
                                    <li class="product-details__list-item">
                                        <div class="product-details__icon">
                                            <svg>
                                                <use xlink:href="#bean-bag"></use>
                                            </svg>
                                        </div>
                                        <div class="product-details__text">
                                            <h3>Flavor: </h3><span>Creamy, honey, chocolate aroma, characteristic coffee with more caffein</span>
                                        </div>
                                    </li>
                                    <li class="product-details__list-item">
                                        <div class="product-details__icon">
                                            <svg>
                                                <use xlink:href="#barista"></use>
                                            </svg>
                                        </div>
                                        <div class="product-details__text">
                                            <h3>We recommend: </h3><span>We recommend: Those who like the characteristic and strong coffee this is a good blend for espresso, but it is a good basic for a morning latte or cappuccino as well.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="goods goods_white">
                        <div class="container goods__container">
                            <h2 class="goods__title">You might also like</h2>
                            <div class="goods__slider swiper-container js-init-slider" data-options="goodsSlider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-tile product-tile_has-shadow">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                            <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">Blue Bird Blend – Our own selected Blend</a>
                                                </h3>
                                                <div class="product-tile__price">2150 HUF</div>
                                            </div>
                                            <div class="product-tile__hidden">
                                                <div class="product-tile__buttons">
                                                    <button class="button button_transparent">Add to cart</button>
                                                    <button class="button button_blue">Add to Blue box</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-tile product-tile_has-shadow">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/yellow.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/yellow.png') }}" type="image/png">
                                                            <img src="{{ url('assets/img/tmp/goods/yellow.png') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">Blue Bird Blend – Our own selected Blend</a>
                                                </h3>
                                                <div class="product-tile__price">2150 HUF</div>
                                            </div>
                                            <div class="product-tile__hidden">
                                                <div class="product-tile__buttons">
                                                    <button class="button button_transparent">Add to cart</button>
                                                    <button class="button button_blue">Add to Blue box</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-tile product-tile_has-shadow">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/blue.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/blue.png') }}" type="image/png">
                                                            <img src="{{ url('assets/img/tmp/goods/blue.png') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">Blue Bird Blend – Our own selected Blend</a>
                                                </h3>
                                                <div class="product-tile__price">2150 HUF</div>
                                            </div>
                                            <div class="product-tile__hidden">
                                                <div class="product-tile__buttons">
                                                    <button class="button button_transparent">Add to cart</button>
                                                    <button class="button button_blue">Add to Blue box</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-tile product-tile_has-shadow">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                            <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">Blue Bird Blend – Our own selected Blend</a>
                                                </h3>
                                                <div class="product-tile__price">2150 HUF</div>
                                            </div>
                                            <div class="product-tile__hidden">
                                                <div class="product-tile__buttons">
                                                    <button class="button button_transparent">Add to cart</button>
                                                    <button class="button button_blue">Add to Blue box</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-tile product-tile_has-shadow">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/yellow.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/yellow.png') }}" type="image/png">
                                                            <img src="{{ url('assets/img/tmp/goods/yellow.png') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">Blue Bird Blend – Our own selected Blend</a>
                                                </h3>
                                                <div class="product-tile__price">2150 HUF</div>
                                            </div>
                                            <div class="product-tile__hidden">
                                                <div class="product-tile__buttons">
                                                    <button class="button button_transparent">Add to cart</button>
                                                    <button class="button button_blue">Add to Blue box</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-tile product-tile_has-shadow">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/blue.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/blue.png') }}" type="image/png">
                                                            <img src="{{ url('assets/img/tmp/goods/blue.png') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">Blue Bird Blend – Our own selected Blend</a>
                                                </h3>
                                                <div class="product-tile__price">2150 HUF</div>
                                            </div>
                                            <div class="product-tile__hidden">
                                                <div class="product-tile__buttons">
                                                    <button class="button button_transparent">Add to cart</button>
                                                    <button class="button button_blue">Add to Blue box</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                    <div class="swiper-slide">
                                        <div class="product-tile product-tile_has-shadow">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                            <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">Blue Bird Blend – Our own selected Blend</a>
                                                </h3>
                                                <div class="product-tile__price">2150 HUF</div>
                                            </div>
                                            <div class="product-tile__hidden">
                                                <div class="product-tile__buttons">
                                                    <button class="button button_transparent">Add to cart</button>
                                                    <button class="button button_blue">Add to Blue box</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-tile product-tile_has-shadow">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/yellow.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/yellow.png') }}" type="image/png">
                                                            <img src="{{ url('assets/img/tmp/goods/yellow.png') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">Blue Bird Blend – Our own selected Blend</a>
                                                </h3>
                                                <div class="product-tile__price">2150 HUF</div>
                                            </div>
                                            <div class="product-tile__hidden">
                                                <div class="product-tile__buttons">
                                                    <button class="button button_transparent">Add to cart</button>
                                                    <button class="button button_blue">Add to Blue box</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-tile product-tile_has-shadow">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/blue.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/blue.png') }}" type="image/png">
                                                            <img src="{{ url('assets/img/tmp/goods/blue.png') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">Blue Bird Blend – Our own selected Blend</a>
                                                </h3>
                                                <div class="product-tile__price">2150 HUF</div>
                                            </div>
                                            <div class="product-tile__hidden">
                                                <div class="product-tile__buttons">
                                                    <button class="button button_transparent">Add to cart</button>
                                                    <button class="button button_blue">Add to Blue box</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-tile product-tile_has-shadow">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                            <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">Blue Bird Blend – Our own selected Blend</a>
                                                </h3>
                                                <div class="product-tile__price">2150 HUF</div>
                                            </div>
                                            <div class="product-tile__hidden">
                                                <div class="product-tile__buttons">
                                                    <button class="button button_transparent">Add to cart</button>
                                                    <button class="button button_blue">Add to Blue box</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-tile product-tile_has-shadow">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/yellow.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/yellow.png') }}" type="image/png">
                                                            <img src="{{ url('assets/img/tmp/goods/yellow.png') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">Blue Bird Blend – Our own selected Blend</a>
                                                </h3>
                                                <div class="product-tile__price">2150 HUF</div>
                                            </div>
                                            <div class="product-tile__hidden">
                                                <div class="product-tile__buttons">
                                                    <button class="button button_transparent">Add to cart</button>
                                                    <button class="button button_blue">Add to Blue box</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-tile product-tile_has-shadow">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/blue.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/blue.png') }}" type="image/png">
                                                            <img src="{{ url('assets/img/tmp/goods/blue.png') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">Blue Bird Blend – Our own selected Blend</a>
                                                </h3>
                                                <div class="product-tile__price">2150 HUF</div>
                                            </div>
                                            <div class="product-tile__hidden">
                                                <div class="product-tile__buttons">
                                                    <button class="button button_transparent">Add to cart</button>
                                                    <button class="button button_blue">Add to Blue box</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                </div>
            </div>
        </main>

<!--  -->
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