@extends('layouts.main')

@section('header')

<header class="header header_inner">

@include('layouts.header_menu')

</header>

@endsection

@section('content')

<main>
            <div class="page page_has-filter">
                <div class="page__content page__content_bluebox">
                    <div class="container page__container page__container_bluebox">
                        <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="#">Box creator</a>
                            </li>
                        </ul>
                        <div class="page__header">
                            <a class="back-button page__back-button" href="#">
                                <svg>
                                    <use xlink:href="#long-arrow"></use>
                                </svg>
                            </a>
                            <h1 class="page__title">Box creator</h1>
                            <button class="button button_blue button_vid">
                                <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.312 15.397a11.12 11.12 0 0 1-5.215 6.797 11.12 11.12 0 0 1-8.494 1.118 11.12 11.12 0 0 1-6.797-5.215 11.12 11.12 0 0 1-1.118-8.494 11.12 11.12 0 0 1 5.215-6.797 11.128 11.128 0 0 1 8.494-1.118 11.12 11.12 0 0 1 6.797 5.215 11.12 11.12 0 0 1 1.118 8.494zm.009-9.144A12.413 12.413 0 0 0 15.734.43 12.412 12.412 0 0 0 6.253 1.68 12.413 12.413 0 0 0 .43 9.266a12.413 12.413 0 0 0 1.248 9.481 12.413 12.413 0 0 0 7.587 5.822 12.422 12.422 0 0 0 9.481-1.248 12.413 12.413 0 0 0 5.822-7.587c.864-3.224.42-6.591-1.248-9.481z" fill="#fff"></path>
                                    <g>
                                        <path d="M17.638 13.052L9.423 17.69a.056.056 0 0 1-.061 0c-.031-.017-.031-.041-.031-.052V8.363c0-.011 0-.035.03-.052a.064.064 0 0 1 .032-.01c.014 0 .024.007.03.01l8.216 4.637c.01.005.03.017.03.052 0 .035-.02.047-.03.052zm.666-1.23l-8.215-4.637a1.406 1.406 0 0 0-1.393 0A1.342 1.342 0 0 0 8 8.362v9.274c0 .492.26.932.696 1.178a1.413 1.413 0 0 0 1.393 0l8.215-4.636c.436-.246.696-.687.696-1.18 0-.491-.26-.932-.696-1.178z" fill="#fff"></path>
                                    </g>
                                </svg><span>How it works</span>
                            </button>
                        </div>
                        <div class="blue-box" id="blueboxGoods">
                            <button class="blue-box__close js-close-offer"></button>
                            <div class="blue-box__container">
                                <div class="blue-box__filters">
                                    <div class="blue-box__option blue-box__option_category">
                                        <div class="select blue-box__select">
                                            <select class="js-init-styleselect" name="bb-category">
                                                <option value="Coffee" selected>Coffee</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <div class="select__arrow">
                                                <svg>
                                                    <use xlink:href="#arrow-down"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blue-box__option">
                                        <button class="blue-box__button blue-box__button_active">Coffee beans</button>
                                    </div>
                                    <div class="blue-box__option">
                                        <button class="blue-box__button">Flavored coffee</button>
                                    </div>
                                    <div class="blue-box__option">
                                        <button class="blue-box__button">Turkish coffee</button>
                                    </div>
                                    <div class="blue-box__option">
                                        <button class="blue-box__button">Capsules</button>
                                    </div>
                                </div>
                                <div class="blue-box__goods">
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                    <div class="bb-card blue-box__card">
                                        <div class="bb-card__img">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/goods/green.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/goods/green.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/goods/green.png') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="bb-card__info">
                                            <h3 class="bb-card__title">Blue Bird Blend – Our own selected Blend </h3><span class="bb-card__price">2150 HUF</span>
                                        </div>
                                        <div class="bb-card__hidden">
                                            <svg class="bb-card__icon">
                                                <use xlink:href="#drag"></use>
                                            </svg>
                                            <button class="button button_blue bb-card__add-to-bb">Add to blue Box</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="blue-box__choose">
                                    <button class="button button_blue">Choose</button>
                                </div>
                            </div>
                        </div>
                        <aside class="sidebar sidebar_bluebox" id="sidebar">
                            <div class="sidebar-form sidebar-form_bb">
                                <h2 class="sidebar-form__title">Blue box</h2>
                                <div class="sidebar-form__content">
                                    <form class="sidebar-bluebox">
                                        <div class="sidebar-bluebox__top">
                                            <div class="sidebar-bluebox__level">60%</div>
                                            <div class="sidebar-bluebox__image">
                                                <picture>
                                                    <source srcset="{{ url('assets/img/bluebox/box.webp') }}" type="image/webp">
                                                    <source srcset="{{ url('assets/img/bluebox/box.jpg') }}" type="image/jpeg">
                                                    <img src="{{ url('assets/img/bluebox/box.jpg') }}" alt="Picture alt text">
                                                </picture>
                                            </div>
                                            <div class="sidebar-bluebox__mob-add">
                                                <button class="button button_blue js-box-trigger" data-target-id="blueboxGoods" type="button">Add products to box</button>
                                            </div>
                                        </div>
                                        <div class="sidebar-bluebox__drop-zone">Use drug and drop or press button «Add to Blue Box»</div>
                                        <div class="sidebar-bluebox__items">
                                            <div class="sidebar-bluebox__mob-header">Products in box</div>
                                            <div class="sm-product">
                                                <div class="sm-product__image">
                                                    <img src="{{ url('assets/img/tmp/goods/green-sm.png') }}" alt="Blue Bird Blend ">
                                                </div>
                                                <h3 class="sm-product__title">Blue Bird Blend </h3><span class="sm-product__price">2150 HUF</span>
                                                <button class="sm-product__delete" type="button">
                                                    <svg>
                                                        <use xlink:href="#delete"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="sm-product">
                                                <div class="sm-product__image">
                                                    <img src="{{ url('assets/img/tmp/goods/coffee-machine.png') }}" alt="Coffee Machine">
                                                </div>
                                                <h3 class="sm-product__title">Coffee Machine</h3><span class="sm-product__price">10 000 HUF</span>
                                                <button class="sm-product__delete" type="button">
                                                    <svg>
                                                        <use xlink:href="#delete"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="sm-product">
                                                <div class="sm-product__image">
                                                    <img src="{{ url('assets/img/tmp/goods/cup.png') }}" alt="Cup">
                                                </div>
                                                <h3 class="sm-product__title">Cup</h3><span class="sm-product__price">3 000 HUF</span>
                                                <button class="sm-product__delete" type="button">
                                                    <svg>
                                                        <use xlink:href="#delete"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="sidebar-bluebox__total">
                                            <h3>Total: </h3> <span id="blueboxTotal">15 150 HUF </span>
                                        </div>
                                        <input class="sidebar-bluebox__create button button_blue" type="submit" value="Create">
                                    </form>
                                </div>
                            </div>
                        </aside>
                        <article class="choose-your-box choose-your-box_bb">
                            <h2 class="title">Choose your box</h2>
                            <div class="choose-your-box__items swiper-container js-init-slider" data-options="blue-box-slider">
                                <div style="height:auto;" class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-tile product-tile_has-shadow product-tile_full-img choose-your-box__product">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/box.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/box.jpg') }}" type="image/jpeg">
                                                            <img src="{{ url('assets/img/tmp/goods/box.jpg') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">4x250g Coffee beans</a>
                                                </h3>
                                                <div class="product-tile__price">9 150 HUF</div>
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
                                        <div class="product-tile product-tile_has-shadow product-tile_full-img choose-your-box__product">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/box.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/box.jpg') }}" type="image/jpeg">
                                                            <img src="{{ url('assets/img/tmp/goods/box.jpg') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">4x250g Coffee beans</a>
                                                </h3>
                                                <div class="product-tile__price">9 150 HUF</div>
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
                                        <div class="product-tile product-tile_has-shadow product-tile_full-img choose-your-box__product">
                                            <div class="product-tile__content">
                                                <div class="product-tile__image">
                                                    <a href="product-card.html">
                                                        <picture>
                                                            <source srcset="{{ url('assets/img/tmp/goods/box.webp') }}" type="image/webp">
                                                            <source srcset="{{ url('assets/img/tmp/goods/box.jpg') }}" type="image/jpeg">
                                                            <img src="{{ url('assets/img/tmp/goods/box.jpg') }}" alt="product image">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <h3 class="product-tile__name">
                                                    <a href="product-card.html">4x250g Coffee beans</a>
                                                </h3>
                                                <div class="product-tile__price">9 150 HUF</div>
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
                                <div class="swiper-pagination"></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <!-- page icons-->
            <svg style="position: absolute; left: -10000px; top: -1px; width: 1px; height: 1px; overflow: hidden;">
                <symbol id="delete" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 13 13">
                    <path fill="#64b2db" d="M6.5 13a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13z"></path>
                    <path fill="#fff" d="M6.942 6.5l1.966-1.966a.313.313 0 1 0-.442-.442L6.5 6.058 4.534 4.092a.313.313 0 1 0-.442.442L6.058 6.5 4.092 8.466a.313.313 0 1 0 .442.442L6.5 6.942l1.966 1.966a.312.312 0 0 0 .442 0 .313.313 0 0 0 0-.442z"></path>
                </symbol>
                <symbol id="drag" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 16 16">
                    <path fill="#64b2db" d="M7.19 3.211H6.173c-.079 0-.157.002-.236-.001-.135-.006-.247-.06-.304-.187-.059-.132-.033-.252.06-.365.478-.585.953-1.171 1.43-1.757L7.73.158c.174-.212.379-.21.552.003.674.83 1.347 1.662 2.023 2.491.092.114.121.234.066.365-.06.14-.18.196-.329.196H8.956c-.045 0-.091.006-.144.009v3.967h3.977V6.103c0-.068-.006-.137.003-.204.035-.27.318-.39.53-.22.851.69 1.7 1.382 2.548 2.076.175.143.173.356-.004.5-.846.689-1.694 1.374-2.541 2.061a.317.317 0 0 1-.352.05c-.135-.06-.188-.172-.187-.317V8.811H8.8v3.97c.059.003.114.008.17.008.351 0 .702.002 1.054 0 .148-.001.27.043.337.183.065.138.032.26-.064.377-.674.824-1.344 1.651-2.018 2.475-.194.238-.387.233-.581-.006-.657-.81-1.313-1.622-1.973-2.43-.104-.128-.168-.255-.091-.415.077-.162.222-.187.384-.186.335.004.671.002 1.007.002.051 0 .102-.004.161-.007V8.814H3.21v1.239c-.001.142-.058.258-.192.316-.132.058-.251.03-.365-.062C1.822 9.626.987 8.948.155 8.268c-.205-.167-.207-.377-.003-.543.83-.674 1.662-1.347 2.491-2.022.117-.096.24-.133.378-.072.147.065.193.194.192.348-.002.398 0 .796 0 1.205H7.19z"></path>
                </symbol>
            </svg>
        </main>

@endsection

