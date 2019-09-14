
@extends('layouts.main')

@section('header')

<header class="header header_has-columns header_main">
<div class="header__row js-block-cnt">
                @include('layouts.header_menu')
                <div class="header__content header__content_index">
                    <div class="banner banner_index">
                        <h1 class="title banner__title">The best coffe <span class="font-light">in the </span><br><span class="font-light">heart of </span>Budapest</h1>
                        <p class="banner__text">
                            <svg class="banner__icon banner__icon_coffee">
                                <use xlink:href="#coffee"></use>
                            </svg><span>Award-winning coffees, roasted to perfection,<br> and delivered at peak freshness.</span>
                        </p>
                        <div class="banner__btn-group">
                            <button class="button button_blue banner__button">Shop Coffee</button>
                            <button class="button button_blue banner__button">Make a Blue Box</button>
                        </div>
                        <div class="banner__brands"><span>Featured on:</span>
                            <ul>
                                <li>
                                    <a href="#">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/brands/shark-tank.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/brands/shark-tank.png') }}" type="image/png">
                                            <img src="{{ url('assets/img/tmp/brands/shark-tank.png') }}" alt="Brands logo">
                                        </picture>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/brands/food-wine.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/brands/food-wine.png') }}" type="image/png">
                                            <img src="{{ url('assets/img/tmp/brands/food-wine.png') }}" alt="Brands logo">
                                        </picture>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <picture>
                                            <source srcset="{{ url('assets/img/tmp/brands/tc.webp') }}" type="image/webp">
                                            <source srcset="{{ url('assets/img/tmp/brands/tc.png') }}" type="image/png">
                                            <img src="{{ url('assets/img/tmp/brands/tc.png') }}" alt="Brands logo">
                                        </picture>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header__picture"></div>
            </div>
            </header>
@endsection


@section('content')

<div class="scroll-panel">
            <a class="scroll-panel__logo" href="/">
                <svg>
                    <use xlink:href="#logo"></use>
                </svg>
            </a>
            <div class="scroll-panel__indicator">
                <div class="scroll-panel__num">1/9</div>
                <div class="scroll-panel__track">
                    <div class="scroll-panel__thumb"></div>
                </div>
            </div>
            <button class="scroll-panel__slide-to slide-btn"><span class="slide-btn__text">Scroll down</span><span class="slide-btn__down">
            <svg>
              <use xlink:href="#arrow-down"></use>
            </svg></span><span class="slide-btn__up">
            <svg>
              <use xlink:href="#long-arrow"></use>
            </svg></span>
            </button>
        </div>
        <main>
            <section class="how-blue-bird-works js-block-cnt">
                <div class="how-blue-bird-works__container">
                    <h2 class="how-blue-bird-works__title title">How <span class="font-light">Blue Bird <br>Cafe works</span>
                    </h2>
                    <div class="how-blue-bird-works__steps js-init-slider swiper-container" data-options="howBlueBirdWorks">
                        <div class="swiper-wrapper">
                            <li class="swiper-slide">
                                <div class="step">
                                    <div class="step__head">Step <span>01</span>
                                    </div>
                                    <svg class="step__icon">
                                        <use xlink:href="#coffee-beans"></use>
                                    </svg>
                                    <div class="step__text"><strong>Choose</strong><br> a subscription<br> term</div>
                                    </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="step">
                                    <div class="step__head">Step <span>02</span>
                                    </div>
                                    <svg class="step__icon">
                                        <use xlink:href="#jar"></use>
                                    </svg>
                                    <div class="step__text"><strong>Choose</strong><br> your favorite type<br> of coffee</div>
                                    </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="step">
                                    <div class="step__head">Step <span>03</span>
                                    </div>
                                    <svg class="step__icon">
                                        <use xlink:href="#credit-card"></use>
                                    </svg>
                                    <div class="step__text"><strong>Connect</strong><br> your card</div>
                                    </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="step">
                                    <div class="step__head">Step <span>04</span>
                                    </div>
                                    <svg class="step__icon">
                                        <use xlink:href="#cup"></use>
                                    </svg>
                                    <div class="step__text"><strong>Get coffee</strong><br> to your home<br> or office</div>
                                    </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="steps-buy">
                                    <div class="steps-buy__text">or, <strong>just buy coffee </strong><br>in our online store:</div>
                                        <div class="steps-buy__button button button_blue">Buy</div>
                                    </div>
                            </li>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>
            <article class="about-cafe js-block-cnt">
                <div class="about-cafe__row">
                    <div class="about-cafe__col">
                        <header class="about-cafe__header">
                            <svg>
                                <use xlink:href="#coffee-bag"></use>
                            </svg>
                            <h2 class="about-cafe__title">About<span class="font-light">Blue Bird Cafe</span>
                            </h2>
                            <p class="about-cafe__desc">The Blue Bird Cafe and Roastery is waiting the coffee lovers <strong>since 2013, in Rumbach</strong>
                            </p>
                        </header>
                    </div>
                    <div class="about-cafe__col">
                        <div class="about-cafe__text">
                            <p>While in Gozsdu you can have a limitless fun, at Rumbach you can choose from 14 coffee beans (twelve SO and two Blend) to find the best for your taste. Dont be afraid if you can't choose, our baristas are here to help you. Their job is to make the best drink from the fresh coffee. We also seeks to serve alternative coffee lovers.</p>
                            <p>In our grinder we put always fresh and best quality beans. <br>We are buying and roasting green coffee from certified high quality producers.</p>
                        </div>
                        <button class="button button_blue about-cafe__button">Read more</button>
                    </div>
                </div>
            </article>
            <section class="split split_lightgray js-block-cnt">
                <div class="split__row">
                    <div class="split__col split__col_picture">
                        <picture class="split__img">
                            <source srcset="{{ url('assets/img/front-page/subscription-block-img.webp') }}" type="image/webp">
                            <source srcset="{{ url('assets/img/front-page/subscription-block-img.jpg') }}" type="image/jpeg">
                            <img src="{{ url('assets/img/front-page/subscription-block-img.jpg') }}" alt="Image alt text">
                        </picture>
                    </div>
                    <div class="split__col">
                        <div class="box box_no-pr-lg">
                            <h2 class="title box__title"> <span class="font-light">Coffee </span>subscription</h2>
                            <picture class="box__img">
                                <source srcset="{{ url('assets/img/front-page/subscription-block-img.webp') }}" type="image/webp">
                                <source srcset="{{ url('assets/img/front-page/subscription-block-img.jpg') }}" type="image/jpeg">
                                <img src="{{ url('assets/img/front-page/subscription-block-img.jpg') }}" alt="Image alt text">
                            </picture>
                            <p class="box__desc">You don't have to search for freshly roasted coffee any more. If you decide to subscribe, <strong>you will always have fresh coffee when you want.</strong>
                            </p>
                            <ul class="box__advantages">
                                <li>
                                    <div>
                                        <svg class="coffee-cup">
                                            <use xlink:href="#coffee-cup-2"></use>
                                        </svg>
                                    </div>
                                    <div> <strong>Fresh</strong>
                                        coffe
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <svg>
                                            <use xlink:href="#discount"></use>
                                        </svg>
                                    </div>
                                    <div>We give <br><strong>discount</strong>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <svg>
                                            <use xlink:href="#coffee-pack"></use>
                                        </svg>
                                    </div>
                                    <div> <strong>Special</strong>
                                        coffee <br>blends
                    </div>
                                </li>
                                <li>
                                    <div>
                                        <svg>
                                            <use xlink:href="#package"></use>
                                        </svg>
                                    </div>
                                    <div> <strong>Delivery</strong>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="box__subtitle">Choose the right package for you:</h3>
                            <button class="button button_blue box__button">Choose</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="split split_bluebox js-block-cnt">
                <div class="split__row">
                    <div class="split__col">
                        <div class="box">
                            <h2 class="box__title title">Blue Box <span class="font-light">+ Loyalty Program</span>
                            </h2>
                            <picture class="box__img">
                                <source srcset="{{ url('assets/img/front-page/blue-box-block-img.webp') }}" type="image/webp">
                                <source srcset="{{ url('assets/img/front-page/blue-box-block-img.jpg') }}" type="image/jpeg">
                                <img src="{{ url('img/front-page/blue-box-block-img.jpg') }}" alt="Image alt text">
                            </picture>
                            <p class="box__desc box__desc_bluebox">You don't have to search for freshly roasted coffee any more. If you decide to subscribe, <strong>you will always have fresh coffee when you want.</strong>
                            </p>
                            <h3 class="box__subtitle box__subtitle_bluebox">Read more about our Loyalty Program</h3>
                            <button class="button button_blue box__button">Read more</button>
                        </div>
                    </div>
                    <div class="split__col split__col_picture">
                        <picture class="split__img">
                            <source srcset="{{ url('assets/img/front-page/blue-box-block-img.webp') }}" type="image/webp">
                            <source srcset="{{ url('assets/img/front-page/blue-box-block-img.jpg') }}" type="image/jpeg">
                            <img src="{{ url('assets/img/front-page/blue-box-block-img.jpg') }}" alt="Image alt text">
                        </picture>
                    </div>
                </div>
            </section>
            <section class="best js-block-cnt">
                <div class="best__container">
                    <h2 class="best__title title">
                        The best <span class="font-light">from our shop</span>
                    </h2>
                    <div class="best__list js-init-slider swiper-container" data-options="bestGoods">
                        <div style="height: auto;"  class="swiper-wrapper">
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
                                                    <source srcset="{{ url('img/tmp/goods/blue.webp') }}" type="image/webp">
                                                    <source srcset="{{ url('img/tmp/goods/blue.png') }}" type="image/png">
                                                    <img src="{{ url('img/tmp/goods/blue.png') }}" alt="product image">
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
                        <button class="slider-control slider-control_prev best__control best__control_prev">
                            <svg>
                                <use xlink:href="#slider-arrow"></use>
                            </svg>
                        </button>
                        <button class="slider-control slider-control_next best__control best__control_next">
                            <svg>
                                <use xlink:href="#slider-arrow"></use>
                            </svg>
                        </button>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="best__button-wrapper"><span>Make your choice here:</span>
                        <button class="button button_blue">Visit shop</button>
                    </div>
                </div>
            </section>
            <section class="testimonials js-block-cnt">
                <div class="testimonials__col">
                    <h2 class="testimonials__title title">Clients about Blue Bird Coffee</h2>
                </div>
                <div class="testimonials__col">
                    <div class="testimonials__list js-init-slider swiper-container" data-options="testimonials">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-tile">
                                    <div class="testimonial-tile__message">Gyors kiszolgálás! Just happen to find this place on a walk around town. <b>Could smell the coffee roasting ….Taste fantastic and service is excellent.</b>
                                    </div>
                                    <div class="testimonial-tile__author">
                                        <div class="testimonial-tile__photo">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" alt="Authors photo">
                                            </picture>
                                        </div>
                                        <div class="testimonial-tile__name"><span>Nagyné L. Mária</span><span>Nyugdíjas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-tile">
                                    <div class="testimonial-tile__message">Gyors kiszolgálás! Just happen to find this place on a walk around town. <b>Could smell the coffee roasting ….Taste fantastic and service is excellent.</b>
                                    </div>
                                    <div class="testimonial-tile__author">
                                        <div class="testimonial-tile__photo">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" alt="Authors photo">
                                            </picture>
                                        </div>
                                        <div class="testimonial-tile__name"><span>Nagyné L. Mária</span><span>Nyugdíjas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-tile">
                                    <div class="testimonial-tile__message">Gyors kiszolgálás! Just happen to find this place on a walk around town. <b>Could smell the coffee roasting ….Taste fantastic and service is excellent.</b>
                                    </div>
                                    <div class="testimonial-tile__author">
                                        <div class="testimonial-tile__photo">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" alt="Authors photo">
                                            </picture>
                                        </div>
                                        <div class="testimonial-tile__name"><span>Nagyné L. Mária</span><span>Nyugdíjas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-tile">
                                    <div class="testimonial-tile__message">Gyors kiszolgálás! Just happen to find this place on a walk around town. <b>Could smell the coffee roasting ….Taste fantastic and service is excellent.</b>
                                    </div>
                                    <div class="testimonial-tile__author">
                                        <div class="testimonial-tile__photo">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" alt="Authors photo">
                                            </picture>
                                        </div>
                                        <div class="testimonial-tile__name"><span>Nagyné L. Mária</span><span>Nyugdíjas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-tile">
                                    <div class="testimonial-tile__message">Gyors kiszolgálás! Just happen to find this place on a walk around town. <b>Could smell the coffee roasting ….Taste fantastic and service is excellent.</b>
                                    </div>
                                    <div class="testimonial-tile__author">
                                        <div class="testimonial-tile__photo">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" alt="Authors photo">
                                            </picture>
                                        </div>
                                        <div class="testimonial-tile__name"><span>Nagyné L. Mária</span><span>Nyugdíjas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-tile">
                                    <div class="testimonial-tile__message">Gyors kiszolgálás! Just happen to find this place on a walk around town. <b>Could smell the coffee roasting ….Taste fantastic and service is excellent.</b>
                                    </div>
                                    <div class="testimonial-tile__author">
                                        <div class="testimonial-tile__photo">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" alt="Authors photo">
                                            </picture>
                                        </div>
                                        <div class="testimonial-tile__name"><span>Nagyné L. Mária</span><span>Nyugdíjas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-tile">
                                    <div class="testimonial-tile__message">Gyors kiszolgálás! Just happen to find this place on a walk around town. <b>Could smell the coffee roasting ….Taste fantastic and service is excellent.</b>
                                    </div>
                                    <div class="testimonial-tile__author">
                                        <div class="testimonial-tile__photo">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" alt="Authors photo">
                                            </picture>
                                        </div>
                                        <div class="testimonial-tile__name"><span>Nagyné L. Mária</span><span>Nyugdíjas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-tile">
                                    <div class="testimonial-tile__message">Gyors kiszolgálás! Just happen to find this place on a walk around town. <b>Could smell the coffee roasting ….Taste fantastic and service is excellent.</b>
                                    </div>
                                    <div class="testimonial-tile__author">
                                        <div class="testimonial-tile__photo">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" alt="Authors photo">
                                            </picture>
                                        </div>
                                        <div class="testimonial-tile__name"><span>Nagyné L. Mária</span><span>Nyugdíjas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-tile">
                                    <div class="testimonial-tile__message">Gyors kiszolgálás! Just happen to find this place on a walk around town. <b>Could smell the coffee roasting ….Taste fantastic and service is excellent.</b>
                                    </div>
                                    <div class="testimonial-tile__author">
                                        <div class="testimonial-tile__photo">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" alt="Authors photo">
                                            </picture>
                                        </div>
                                        <div class="testimonial-tile__name"><span>Nagyné L. Mária</span><span>Nyugdíjas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-tile">
                                    <div class="testimonial-tile__message">Gyors kiszolgálás! Just happen to find this place on a walk around town. <b>Could smell the coffee roasting ….Taste fantastic and service is excellent.</b>
                                    </div>
                                    <div class="testimonial-tile__author">
                                        <div class="testimonial-tile__photo">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" type="image/png">
                                                <img src="{{ url('assets/img/tmp/persons/Nagyn%C3%A9.png') }}" alt="Authors photo">
                                            </picture>
                                        </div>
                                        <div class="testimonial-tile__name"><span>Nagyné L. Mária</span><span>Nyugdíjas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials__scroll"></div>
                    </div>
                    <button class="slider-control slider-control_prev testimonials__control testimonials__control_prev">
                        <svg>
                            <use xlink:href="#slider-arrow"></use>
                        </svg>
                    </button>
                    <button class="slider-control slider-control_next testimonials__control testimonials__control_next">
                        <svg>
                            <use xlink:href="#slider-arrow"></use>
                        </svg>
                    </button>
                </div>
                <div class="testimonials__pagination"></div>
            </section>
            <article class="split split_lightgray js-block-cnt">
                <div class="split__row">
                    <div class="split__col split__col_picture">
                        <picture>
                            <source srcset="{{ url('assets/img/front-page/faq-block-img.webp') }}" type="image/webp">
                            <source srcset="{{ url('assets/img/front-page/faq-block-img.jpg') }}" type="image/jpeg">
                            <img src="{{ url('assets/img/front-page/faq-block-img.jpg') }}" alt="FAQ image">
                        </picture>
                    </div>
                    <div class="split__col">
                        <div class="faq">
                            <h2 class="title faq-title">FAQ</h2>
                            <div class="faq__list js-init-simplebar">
                                <ul>
                                    <li>
                                        <div class="faq__question js-show-hidden-block" role="button" tabindex="0" data-selector="#answer1">What can we offer to other companies?
                                            <div class="faq__question-icon"><span>+</span><span>-</span>
                                            </div>
                                        </div>
                                        <div class="faq__answer" id="answer1">The Blue Bird Café provides fresh roasted coffee, lectures, coffee machines to rent and buy and collaboration. You can read more about our offers here.</div>
                                    </li>
                                    <li>
                                        <div class="faq__question js-show-hidden-block" role="button" tabindex="0" data-selector="#answer2">What can we offer to other companies?
                                            <div class="faq__question-icon"><span>+</span><span>-</span>
                                            </div>
                                        </div>
                                        <div class="faq__answer" id="answer2">The Blue Bird Café provides fresh roasted coffee, lectures, coffee machines to rent and buy and collaboration. You can read more about our offers here.</div>
                                    </li>
                                    <li>
                                        <div class="faq__question js-show-hidden-block" role="button" tabindex="0" data-selector="#answer3">What can we offer to other companies?
                                            <div class="faq__question-icon"><span>+</span><span>-</span>
                                            </div>
                                        </div>
                                        <div class="faq__answer" id="answer3">The Blue Bird Café provides fresh roasted coffee, lectures, coffee machines to rent and buy and collaboration. You can read more about our offers here.</div>
                                    </li>
                                    <li>
                                        <div class="faq__question js-show-hidden-block" role="button" tabindex="0" data-selector="#answer4">What can we offer to other companies?
                                            <div class="faq__question-icon"><span>+</span><span>-</span>
                                            </div>
                                        </div>
                                        <div class="faq__answer" id="answer4">The Blue Bird Café provides fresh roasted coffee, lectures, coffee machines to rent and buy and collaboration. You can read more about our offers here.</div>
                                    </li>
                                    <li>
                                        <div class="faq__question js-show-hidden-block" role="button" tabindex="0" data-selector="#answer5">What can we offer to other companies?
                                            <div class="faq__question-icon"><span>+</span><span>-</span>
                                            </div>
                                        </div>
                                        <div class="faq__answer" id="answer5">The Blue Bird Café provides fresh roasted coffee, lectures, coffee machines to rent and buy and collaboration. You can read more about our offers here.</div>
                                    </li>
                                </ul>
                            </div>
                            <button class="faq__load-more">Load more</button>
                            <h3 class="faq__subt">Did not find the answer? Write to us:</h3>
                            <button class="button button_blue faq__write">Write</button>
                        </div>
                    </div>
                </div>
            </article>
        </main>
        @endsection