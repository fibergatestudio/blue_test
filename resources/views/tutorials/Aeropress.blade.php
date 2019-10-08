@extends('layouts.main')

@section('header')
    <header class="header header_inner">
        @include('layouts.header_menu')
    </header>
@endsection

@section('content')
<main>
            <div class="page">
                <div class="page__content">
                    <div class="container page__container">
                        <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="#">Tutorials</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="#">Aeropress</a>
                            </li>
                        </ul>
                        <div class="page__header">
                            <a class="back-button page__back-button" href="#">
                                <svg>
                                    <use xlink:href="#long-arrow"></use>
                                </svg>
                            </a>
                            <h1 class="page__title">Aeropress</h1>
                        </div>
                        <div class="tutorials">
                            <article class="tutorial-card">
                                <header class="tutorial-card__header">
                                    <div class="tutorial-card__row">
                                        <div class="tutorial-card__col">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tutorial/header-image.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tutorial/header-image.jpg') }}" type="image/jpeg">
                                                <img src="{{ url('assets/img/tutorial/header-image.jpg') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="tutorial-card__col">
                                            <div class="tutorial-card__info">
                                                <h3>What you’ll need:</h3>
                                                <ul class="list tutorial-card__list">
                                                    <li>AeroPress</li>
                                                    <li>AeroPress Filters</li>
                                                    <li>AeroPress funnel</li>
                                                    <li>Kettle</li>
                                                    <li>Grinder</li>
                                                    <li>Digital Scale</li>
                                                    <li>Timer</li>
                                                    <li>Stirring tool</li>
                                                    <li>Coffee cup or other vessel</li>
                                                </ul>
                                                <h3>Brew time:</h3>
                                                <div class="tutorial-card__row">
                                                    <svg class="tutorial-card__icon tutorial-card__icon_clock">
                                                        <use xlink:href="#clock"></use>
                                                    </svg><span>1-1:30</span>
                                                </div>
                                                <h3>Have question?</h3>
                                                <div class="tutorial-card__row">
                                                    <svg class="tutorial-card__icon tutorial-card__icon_envelope">
                                                        <use xlink:href="#envelope"></use>
                                                    </svg><span>Ask our experts at <br><a href="mailto:support@bluebottlecoffee.com">support@bluebottlecoffee.com</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="title tutorial-card__title">Background</h2>
                                    <div class="tutorial-card__row">
                                        <div class="tutorial-card__col">
                                            <p><b>A space-age contraption with gravity-defying aspirations, the AeroPress was invented by Aerobie just 38 miles from our Oakland roastery. Aerobie is responsible for creating the long-flying “superdisc” that broke Guiness World Records when it soared 1,333 feet into the air. (Take that, frisbee!) </b>
                                            </p>
                                        </div>
                                        <div class="tutorial-card__col">
                                            <p> <b>The same mastery of aerodynamics comes into play here, with this peculiar and lovely device for brewing coffee.</b>
                                            </p>
                                        </div>
                                    </div>
                                </header>
                                <div class="tutorial-card__step">
                                    <h3 class="alt-title">Step 1:</h3>
                                    <p>Bring 7 oz (200 g) of water to a boil. Weigh out 15–18 grams of coffee (depending on your preferred strength). Grind to a texture slightly finer than sea salt.</p>
                                    <picture>
                                        <source srcset="{{ url('assets/img/tutorial/tutorial-step-1.webp') }}" type="image/webp">
                                        <source srcset="{{ url('assets/img/tutorial/tutorial-step-1.jpg') }}" type="image/jpeg">
                                        <img src="{{ url('assets/img/tutorial/tutorial-step-1.jpg') }}" alt="Picture alt text">
                                    </picture>
                                </div>
                                <div class="tutorial-card__step">
                                    <h3 class="alt-title">Step 2:</h3>
                                    <p>Insert a paper filter into the AeroPress's detachable plastic cap.</p>
                                    <div class="tutorial-card__row">
                                        <div class="tutorial-card__col">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tutorial/tutorial-step-2-1.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tutorial/tutorial-step-2-1.jpg') }}" type="image/jpeg">
                                                <img src="{{ url('assets/img/tutorial/tutorial-step-2-1.jpg') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                        <div class="tutorial-card__col">
                                            <picture>
                                                <source srcset="{{ url('assets/img/tutorial/tutorial-step-2-2.webp') }}" type="image/webp">
                                                <source srcset="{{ url('assets/img/tutorial/tutorial-step-2-2.jpg') }}" type="image/jpeg">
                                                <img src="{{ url('assets/img/tutorial/tutorial-step-2-2.jpg') }}" alt="Picture alt text">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <div class="tutorial-card__step">
                                    <h3 class="alt-title">Step 3:</h3>
                                    <p>Use some of your hot water to wet your filter and cap. The water serves a dual function here: It helps the filter adhere to the cap, and heats your brewing vessel. This can be challenging as the water is hot and the cap is quite small: Hold the cap by its “ears” and pour the water very slowly so it can be absorbed by the filter.</p>
                                    <picture>
                                        <source srcset="{{ url('assets/img/tutorial/tutorial-step-3.webp') }}" type="image/webp">
                                        <source srcset="{{ url('assets/img/tutorial/tutorial-step-3.jpg') }}" type="image/jpeg">
                                        <img src="{{ url('assets/img/tutorial/tutorial-step-3.jpg') }}" alt="Picture alt text">
                                    </picture>
                                </div>
                                <footer class="tutorial-card__footer">
                                    <h4>Pour your coffee and enjoy!</h4>
                                    <a href="{{ url('/categories/coffee') }}"><button class="button button_blue">Shop our coffee</button></a>
                                </footer>
                            </article>
                        </div>
                    </div>
                    <div class="more-tutorials">
                        <div class="container">
                            <h2 class="alt-title">You might also watch:</h2>
                            <div class="more-tutorials__list swiper-container js-init-slider" data-options="blue-box-slider">
                                <div style="height: auto;" class="swiper-wrapper">
                                    <div class="tutorial-tile tutorial-tile_mini swiper-slide" style="background-image: url({{ url('assets/img/tutorials/card-img-2.jpg')}})">
                                        <div class="tutorial-tile__wrapper">
                                            <div class="tutorial-tile__title">AEROPRESS</div>
                                            <div class="tutorial-tile__desc">Coffee liberated from the constraints of gravity</div>
                                            <a class="button button_blue tutorial-tile__button" href="#">Start guide</a>
                                        </div>
                                    </div>
                                    <div class="tutorial-tile tutorial-tile_mini swiper-slide" style="background-image: url({{ url('assets/img/tutorials/card-img-3.jpg')}})">
                                        <div class="tutorial-tile__wrapper">
                                            <div class="tutorial-tile__title">BIALETTI MOKA POT</div>
                                            <div class="tutorial-tile__desc">Preparation guide</div>
                                            <a class="button button_blue tutorial-tile__button" href="#">Start guide</a>
                                        </div>
                                    </div>
                                    <div class="tutorial-tile tutorial-tile_mini swiper-slide" style="background-image: url({{ url('assets/img/tutorials/card-img-4.jpg')}})">
                                        <div class="tutorial-tile__wrapper">
                                            <div class="tutorial-tile__title">CHEMEX</div>
                                            <div class="tutorial-tile__desc">Coffee liberated from the constraints of gravity</div>
                                            <a class="button button_blue tutorial-tile__button" href="#">Start guide</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection