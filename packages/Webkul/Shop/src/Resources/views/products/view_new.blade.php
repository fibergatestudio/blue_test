@extends('layouts.main')


@section('page_title')
    {{ trim($product->meta_title) != "" ? $product->meta_title : $product->name }}
@stop

@section('header')
    <header class="header header_inner">
        @include('layouts.header_menu')
    </header>
@endsection


@section('content')

    <meta name="description" content="{{ trim($product->meta_description) != "" ? $product->meta_description : str_limit(strip_tags($product->description), 120, '') }}"/>
    <meta name="keywords" content="{{ $product->meta_keywords }}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    {!! view_render_event('bagisto.shop.products.view.before', ['product' => $product]) !!}


        <main>
            <div class="page">
                <div class="page__content">
                    <div class="container">
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
                        @include ('shop::products.view.gallery')
                        <section class="product-card">
                            <form class="product-card__row">
                                <div class="product-card__image">
                                    <picture>
                                        <source srcset="img/tmp/goods/coffee-product-card.webp" type="image/webp">
                                        <source srcset="img/tmp/goods/coffee-product-card.png" type="image/png">
                                        <img src="img/tmp/goods/coffee-product-card.png" alt="Picture alt text">
                                    </picture>
                                </div>
                                <div class="product-card__info">
                                    <h1 class="product-card__title">{{ $product->name }}</h1>
                                    <div class="product-card__price">@include ('shop::products.price', ['product' => $product])</div>
                                    @include ('shop::products.view.stock', ['product' => $product])
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
                                        <a href="{{ route('cart.add', $product->product_id) }}"><button class="button button_blue">Add to Cart</button></a>
                                        <a href="{{ url('buynow/'.$product->product_id) }}"><button class="button button_blue">Buy</button></a>
                                        <button class="button button_transparent">Add to Blue Box</button>
                                    </div>
                                </div>
                            </form>
                            <div class="product-card__details product-details">
                                <h2 class="product-details__title"><span>Product Details</span>
                                </h2>
                                <br>
                                {!! view_render_event('bagisto.shop.products.view.short_description.before', ['product' => $product]) !!} 

                                <div class="description">
                                    {!! $product->short_description !!}
                                </div>

                                {!! view_render_event('bagisto.shop.products.view.short_description.after', ['product' => $product]) !!}
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
                            @include ('shop::products.view.related-products')
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
                            @include ('shop::products.view.up-sells')
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

        {!! view_render_event('bagisto.shop.products.view.after', ['product' => $product]) !!}


        <script type="text/x-template" id="product-view-template">
        <form method="POST" id="product-form" action="{{ route('cart.add', $product->product_id) }}" @click="onSubmit($event)">

            <slot></slot>

        </form>
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


@endsection