@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.home.page-title') }}
@endsection

@section('content-wrapper')

@inject ('productRepository', 'Webkul\Product\Repositories\ProductRepository')

<?php
    $category = "3";
    $products = $productRepository->getAll();

    //dd($products);
?>


@inject ('attributeRepository', 'Webkul\Attribute\Repositories\AttributeRepository')

<?php 

$atributes = $attributeRepository->getFilterAttributes();

?>

            <div class="page page_has-filter">
                <!-- *** Filters BEGIN *** -->
                <aside style="padding-top:150px;" class="sidebar" id="sidebar">
                    <div class="filters">

                    <form id="form" action="{{ url('/filter') }}" method="POST">
                    @csrf()
                    @foreach($atributes as $atr)

                        <div class="filters__category">
                            <div class="filters__title" role="button" tabindex="0" aria-label="Show/hide category">{{ $atr->admin_name }}
                                <svg>
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </div>
                            <ul class="filters__list">
                            @foreach ($atr->options as $option)
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="atr{{ $option->id }}" type="checkbox" name="atr[]" value="{{ $option->admin_name }}" 
                                        @if(!empty($filter))

                                            @foreach($filter as $filt)

                                                @if($filt == $option->admin_name) 

                                                checked 

                                                @endif

                                            @endforeach

                                        @endif

                                        >
                                        <label class="input-checkbox__label" for="atr{{ $option->id }}">{{ $option->admin_name }}</label>
                                    </div>
                                </li>
                               
                            @endforeach
                            </ul>
                        </div>

                        @endforeach
                    </form>

                    <div class="filters__category">
                            <div class="filters__title" role="button" tabindex="0" aria-label="Show/hide category">Roast
                                <svg>
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </div>
                            <ul class="filters__list">
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="roastOption0" type="checkbox" name="roast">
                                        <label class="input-checkbox__label" for="roastOption0">LIGHT</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="roastOption1" type="checkbox" name="roast">
                                        <label class="input-checkbox__label" for="roastOption1">MEDIUM</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="roastOption2" type="checkbox" name="roast">
                                        <label class="input-checkbox__label" for="roastOption2">DARK</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__category">
                            <div class="filters__title" role="button" tabindex="0" aria-label="Show/hide category">Type
                                <svg>
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </div>
                            <ul class="filters__list">
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="typeOption0" type="checkbox" name="type">
                                        <label class="input-checkbox__label" for="typeOption0">SINGLE ORIGIN</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="typeOption1" type="checkbox" name="type">
                                        <label class="input-checkbox__label" for="typeOption1">BLEND</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="typeOption2" type="checkbox" name="type">
                                        <label class="input-checkbox__label" for="typeOption2">ESPRESSO</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="filters__category">
                            <div class="filters__title" role="button" tabindex="0" aria-label="Show/hide category">Tasting Notes
                                <svg>
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </div>
                            <ul class="filters__list">
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="tastingNotesOption0" type="checkbox" name="tastingNotes">
                                        <label class="input-checkbox__label" for="tastingNotesOption0">CHOCOLATE</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="tastingNotesOption1" type="checkbox" name="tastingNotes">
                                        <label class="input-checkbox__label" for="tastingNotesOption1">CITRUS</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="tastingNotesOption2" type="checkbox" name="tastingNotes">
                                        <label class="input-checkbox__label" for="tastingNotesOption2">FRUITY</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-checkbox filters__checkbox">
                                        <input class="input-checkbox__real" id="tastingNotesOption3" type="checkbox" name="tastingNotes">
                                        <label class="input-checkbox__label" for="tastingNotesOption3">EARTHY</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    
                        <div style="display:block;" class="filters__view-more">
                            <button class="button button_blue">View items</button>
                        </div>
                    </div>
                </aside>
                <!-- *** Filters END *** -->
                <div class="page__content">
                    <div class="container page__container page__container_catalog">
                        <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="catalog.html">Shop</a>
                            </li>
                        </ul>
                        <div class="catalog">
                            <div class="catalog__category">
                                <h1 class="catalog__results">Category: <span class="result">Coffee
                      <div class="result__icon">
                        <svg>
                          <use xlink:href="#arrow-down"></use>
                        </svg>
                      </div></span>
                                </h1>
                                <div class="catalog__search search">
                                    <form class="search__field">
                                        <button class="search__button search__button_submit">
                                            <svg>
                                                <use xlink:href="#lens"></use>
                                            </svg>
                                        </button>
                                        <input type="search" name="catalogSearch">
                                    </form>
                                    <button class="search__button catalog__search-trigger">
                                        <svg>
                                            <use xlink:href="#lens"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="catalog__mob-btns">
                                    <button class="catalog__menu-trigger js-box-trigger" data-target-id="sidebar">Filter</button>
                                    <button class="catalog__menu-trigger">Category</button>
                                </div>
                            </div>
                            <div class="catalog__list">
                            @foreach ($all_prod as $prod)

                            @include ('shop::products.list.maincard', ['product' => $prod])

                            @endforeach

                                <!-- <div class="catalog__item">
                                    <div class="product-tile">
                                        <div class="product-tile__content">
                                            <div class="product-tile__image">
                                                <a href="product-card.html">
                                                    <picture>
                                                        <source srcset="img/tmp/goods/yellow.webp" type="image/webp">
                                                        <source srcset="img/tmp/goods/yellow.png" type="image/png">
                                                        <img src="img/tmp/goods/yellow.png" alt="product image">
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
                                </div> -->

                            </div>
                            <div class="catalog__show-more">
                                <button class="button button_blue button_icon">
                                    <svg>
                                        <use xlink:href="#update-arrow"></use>
                                    </svg><span>Show more items</span>
                                </button>
                            </div>
                            <ul class="pagination catalog__pagination">
                                <li class="pagination__item pagination__item_prev">
                                    <a href="#">
                                        <svg>
                                            <use xlink:href="#arrow-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="pagination__item pagination__item_number">
                                    <a href="#">1</a>
                                </li>
                                <li class="pagination__item pagination__item_number pagination__item_current">
                                    <a href="#">2</a>
                                </li>
                                <li class="pagination__item pagination__item_number">
                                    <a href="#">3</a>
                                </li>
                                <li class="pagination__item pagination__item_next">
                                    <a href="#">
                                        <svg>
                                            <use xlink:href="#arrow-down"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

    {!! view_render_event('bagisto.shop.home.content.before') !!}

    {!! DbView::make(core()->getCurrentChannel())->field('home_page_content')->with(['sliderData' => $sliderData])->render() !!}

    {{ view_render_event('bagisto.shop.home.content.after') }}

@endsection

@push('scripts')

<script>
    $(document).ready(function(){

        $(".input-checkbox__real").click(function(){

            $('#form').submit();

            console.log(123);
        });

    });


    </script>


@endpush