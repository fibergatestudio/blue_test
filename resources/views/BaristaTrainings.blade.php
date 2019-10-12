@extends('layouts.main')

@section('header')
        <header class="header header_has-columns header_barista">

               
                    @include('layouts.header_menu')
                

            <!-- cart popup-->
            <form class="cart-modal" id="cartModal">
                <button class="cart-modal__close js-close-modal" type="button">
                    <svg>
                        <use xlink:href="#rounded-close"></use>
                    </svg>
                </button>
                <h2 class="cart-modal__header">Cart (<span id="cartItems">2</span>)</h2>
                <div class="cart-modal__list">
                    <div class="cart-sm-product cart-modal__item">
                        <div class="cart-sm-product__image">
                            <img src="{{ url('assets/img/tmp/goods/green-sm.png') }}" alt="Blue Bird Blend ">
                        </div>
                        <h3 class="cart-sm-product__title">Blue Bird Blend </h3><span class="cart-sm-product__price">2150 HUF</span>
                    </div>
                    <div class="cart-sm-product cart-modal__item">
                        <div class="cart-sm-product__image">
                            <img src="{{ url('assets/img/tmp/goods/coffee-machine.png') }}" alt="Coffee Machine">
                        </div>
                        <h3 class="cart-sm-product__title">Coffee Machine</h3><span class="cart-sm-product__price">10 000 HUF</span>
                    </div>
                    <div class="cart-sm-product cart-modal__item">
                        <div class="cart-sm-product__image">
                            <img src="{{ url('assets/img/tmp/goods/cup.png') }}" alt="Cup">
                        </div>
                        <h3 class="cart-sm-product__title">Cup</h3><span class="cart-sm-product__price">3 000 HUF</span>
                    </div>
                    <div class="cart-modal__price">
                        <div class="cart-modal__row"><span class="cart-modal__label">Shipping:</span><span>Free</span>
                        </div>
                        <div class="cart-modal__row"><span class="cart-modal__label">Total:</span><span class="cart-modal__total">19 300 HUF</span>
                        </div>
                    </div>
                </div>
                <div class="cart-modal__buttons">
                    <input class="button button_blue cart-modal__submit" type="submit" value="Make a purchase">
                    <a class="cart-modal__back" href="#">Back to product list</a>
                </div>
            </form>
            <div class="header__row js-block-cnt">
                <div class="header__content">
                    <div class="banner banner_about-bbg">
                        <h1 class="banner__title"> <span class="color-blue">Learn </span><br class="hidden-md">with us!</h1>
                            <svg class="banner__icon" width="65" height="65" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.755 22h18.5l2.601 2.655v.645H7.463v2.2h19.393v3.3H3.154v-3.3h2.155v-2.2H3.154v-.645zm.63-4.4h17.24v2.2H6.385zm6.461-13.2c0-1.215.962-2.2 2.149-2.2s2.149.985 2.149 2.2v11h-4.298zM2.076 33h25.847c.595 0 1.077-.492 1.077-1.1v-7.7c0-.292-.114-.571-.316-.778l-2.915-2.977V16.5c0-.608-.482-1.1-1.077-1.1h-5.384v-11C19.308 1.97 17.379 0 15 0c-2.38 0-4.308 1.97-4.308 4.4v11H5.308c-.595 0-1.077.492-1.077 1.1v3.945l-2.915 2.977A1.112 1.112 0 0 0 1 24.2v7.7c0 .608.482 1.1 1.077 1.1z" fill="#fff"></path>
                                <path d="M59.583 49.964H39v-6.445h20.583c1.795 0 3.25 1.443 3.25 3.222 0 1.78-1.455 3.223-3.25 3.223zm-29.25-2.149v-2.148h6.5v2.148zm-2.166 7.066l-2.616 2.59H4.782l-2.614-2.59v-8.142h2.166v-2.147H2.167v-2.147h26v2.147H6.5v2.147h21.667zm-11.73 7.97h-2.551l-.649-3.221h3.847zM10.29 39.224c1.003 0 1.998.187 2.931.55.34.132.724.084 1.021-.126a8.15 8.15 0 0 1 10.223.645H6.256a8.146 8.146 0 0 1 4.033-1.069zm49.294 2.148H37.917c-.599 0-1.084.481-1.084 1.074v1.074h-6.5v-2.148c0-.593-.485-1.074-1.083-1.074h-1.928c-3.15-4.42-9.243-5.615-13.854-2.718a10.24 10.24 0 0 0-3.176-.504 10.322 10.322 0 0 0-7.483 3.222H1.083c-.598 0-1.083.481-1.083 1.074v13.963c0 .285.114.558.317.759l3.25 3.222c.204.202.479.315.766.315h6.695l.91 4.51c.103.5.547.86 1.062.86h4.333c.515 0 .959-.36 1.062-.86l.91-4.51H26c.287 0 .563-.113.766-.315l3.25-3.222a1.07 1.07 0 0 0 .317-.76v-5.37h6.5v1.075c0 .593.485 1.074 1.084 1.074h21.666c2.992 0 5.417-2.405 5.417-5.37 0-2.966-2.425-5.37-5.417-5.37z" fill="#fff"></path>
                            </svg>
                            <p class="banner__text"><span>Our company has many years of experience and we are happy to deliver it individually through our intensive training sessions. </span>
                            </p>
                    </div>
                </div>
                <div class="header__picture"></div>
            </div>
        </header>
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
@endsection

@section('content')

<main>
            <div class="what-do-we-offer what-do-we-offer_pt-80 js-block-cnt">
                <div class="container what-do-we-offer__container">
                    <div class="what-do-we-offer__offers offers swiper-container js-init-slider" data-options="offers">
                        <div class="swiper-wrapper offers__queue">
                            <div class="swiper-slide offers__item">
                                <div class="white-card">
                                    <div class="white-card__icon white-card__icon_open-book">
                                        <svg>
                                            <use xlink:href="#open-book"></use>
                                        </svg>
                                    </div>
                                    <h3 class="white-card__title">Our Trainings</h3>
                                    <p class="white-card__text">Choose the best to upgrade your skills</p>
                                </div>
                            </div>
                            <div class="swiper-slide offers__item">
                                <div class="offer-tile js-box-trigger" data-target-id="training1" role="button" tabindex="0" style="background-image: url(assets/img/barista-trainings/trainings/barista-training-1.jpg)">
                                    <div class="offer-tile__wrapper">
                                        <div class="offer-tile__offer-num">training 1</div>
                                        <div class="offer-tile__title">Barista<span class="font-poppins">/</span>Latte art basics</div>
                                        <ul class="offer-tile__pricing">
                                            <li><span>2 hours — Price:</span> <strong>20,000 HUF gross</strong>
                                            </li>
                                            <li><span>3 hours — Price:</span> <strong>30,000 HUF, max. 4 people</strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide offers__item">
                                <div class="offer-tile js-box-trigger" data-target-id="training2" role="button" tabindex="0" style="background-image: url(assets/img/barista-trainings/trainings/barista-training-2.jpg)">
                                    <div class="offer-tile__wrapper">
                                        <div class="offer-tile__offer-num">training 2</div>
                                        <div class="offer-tile__title">Home Barista</div>
                                        <ul class="offer-tile__pricing">
                                            <li><span>2 hours — Price:</span> <strong>20,000 HUF gross</strong>
                                            </li>
                                            <li><span>3 hours — Price:</span> <strong>30,000 HUF, max. 4 people</strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide offers__item">
                                <div class="offer-tile js-box-trigger" data-target-id="training3" role="button" tabindex="0" style="background-image: url(assets/img/barista-trainings/trainings/barista-training-3.jpg)">
                                    <div class="offer-tile__wrapper">
                                        <div class="offer-tile__offer-num">training 3</div>
                                        <div class="offer-tile__title">Cafe open</div>
                                        <ul class="offer-tile__pricing">
                                            <li><span>2 hours — Price:</span> <strong>20,000 HUF gross</strong>
                                            </li>
                                            <li><span>3 hours — Price:</span> <strong>30,000 HUF, max. 4 people</strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide offers__item">
                                <div class="offer-tile js-box-trigger" data-target-id="training4" role="button" tabindex="0" style="background-image: url(assets/img/barista-trainings/trainings/barista-training-4.jpg)">
                                    <div class="offer-tile__wrapper">
                                        <div class="offer-tile__offer-num">training 4</div>
                                        <div class="offer-tile__title">Roasting</div>
                                        <ul class="offer-tile__pricing">
                                            <li><span>2 hours — Price:</span> <strong>20,000 HUF gross</strong>
                                            </li>
                                            <li><span>3 hours — Price:</span> <strong>30,000 HUF, max. 4 people</strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide offers__item">
                                <div class="white-card">
                                    <div class="white-card__icon white-card__icon_idea">
                                        <svg>
                                            <use xlink:href="#idea"></use>
                                        </svg>
                                    </div>
                                    <h3 class="white-card__title">Have ideas?</h3>
                                    <p class="white-card__text">Write us and we will discuss it</p>
                                    <!-- <button class="white-card__button button button_blue">write</button> -->
                                    <button class="white-card__button button button_blue faq__write js-box-trigger" data-target-id="regModal">Write</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="what-do-we-offer__details">
                        <article class="offer-popup" id="training1">
                            <button class="offer-popup__close js-close-offer"></button>
                            <div class="offer-popup__row">
                                <div class="offer-popup__image">
                                    <picture>
                                        <source srcset="{{ url('assets/img/barista-trainings/trainings/barista-training-1.webp') }}" type="image/webp">
                                        <source srcset="{{ url('assets/img/barista-trainings/trainings/barista-training-1.jpg') }}" type="image/jpeg">
                                        <img src="{{ url('assets/img/barista-trainings/trainings/barista-training-1.jpg') }}" alt="Picture alt text">
                                    </picture>
                                </div>
                                <div class="offer-popup__header">
                                    <h3 class="offer-popup__heading">{{ $trainings_info_1->training_number }}</h3>
                                    <h4 class="title offer-popup__subheading">{{ $trainings_info_1->training_name }}</h4>
                                    <div class="offer-popup__description">
                                        {!! $trainings_info_1->training_description !!}
                                    </div>
                                </div>
                            </div>
                            <div class="offer-popup__row offer-popup__row_details">
                                <div class="offer-popup__info">
                                    <h4>
                                        <svg width="18" height="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 13.055c-2.497 0-4.528-1.96-4.528-4.368 0-2.409 2.031-4.368 4.528-4.368 2.497 0 4.528 1.96 4.528 4.368 0 2.409-2.031 4.368-4.528 4.368zM9 0C4.037 0 0 3.9 0 8.692c0 5.948 8.054 14.68 8.397 15.048a.83.83 0 0 0 1.206 0C9.946 23.372 18 14.64 18 8.692 18 3.899 13.963 0 9 0z" fill="#64b2db"></path>
                                        </svg>Location of the training:
                                    </h4>
                                    {{ $trainings_info_1->training_location }}
                                </div>
                                <div class="offer-popup__info">
                                    <h4>
                                        <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.325 5L15 2.022 14.488.855c-.336-.76-1.153-1.073-1.826-.695L4 5z" fill="#64b2db"></path>
                                            <path d="M19.156 2c-.128 0-.255.02-.382.057l-2.41.727L9 5h12l-.451-1.824C20.376 2.466 19.792 2 19.156 2z" fill="#64b2db"></path>
                                            <path d="M22.573 6H1.433c-.452 0-.855.211-1.118.544A1.453 1.453 0 0 0 0 7.446v16.108C0 24.352.64 25 1.43 25h21.14c.79 0 1.43-.648 1.43-1.446v-4.033h-8.486c-1.342 0-2.431-1.102-2.431-2.458v-3.215c0-.666.263-1.27.689-1.712a2.397 2.397 0 0 1 1.739-.743H24V7.446A1.434 1.434 0 0 0 22.573 6z" fill="#64b2db"></path>
                                            <path d="M17.25 17h-.5c-.414 0-.75-.504-.75-1.126v-.748c0-.36.111-.68.288-.883.13-.148.289-.243.463-.243h.498c.415 0 .751.504.751 1.126v.748c0 .621-.336 1.126-.75 1.126zm7.3-4.566a1.356 1.356 0 0 0-.484-.345 1.2 1.2 0 0 0-.448-.089h-8.236c-.763 0-1.382.742-1.382 1.656v3.688c0 .914.619 1.656 1.382 1.656h8.236c.158 0 .307-.033.448-.09.182-.072.345-.192.484-.344.276-.301.45-.739.45-1.222v-3.688c0-.483-.174-.92-.45-1.222z" fill="#64b2db"></path>
                                        </svg>Cost of education:
                                    </h4>
                                    {{ $trainings_info_1->training_cost }}
                                    </p>
                                </div>
                                <div class="offer-popup__info">
                                    <h4>
                                        <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24.353 10.945l-2.94-2.943c-1.21-1.21-.47-2.488.847-2.565 2.17-.135 3.39-2.452 1.617-4.38-1.927-1.77-4.231-.554-4.366 1.613-.082 1.319-1.369 2.064-2.573.858L14.06.648a2.21 2.21 0 0 0-3.126 0L8.02 3.565c-1.209 1.21-2.49.46-2.573-.859C5.313.534 2.987-.702 1.061 1.072-.717 3.006.518 5.333 2.688 5.468c1.318.083 2.067 1.37.863 2.58L.647 10.95a2.215 2.215 0 0 0 0 3.129l2.878 2.88c1.21 1.206.491 2.463-.827 2.545-2.17.135-3.384 2.447-1.612 4.376 1.928 1.774 4.227.563 4.361-1.609.083-1.319 1.344-2.043 2.553-.838l2.903 2.907c.879.88 2.315.88 3.194.005l2.035-2.038.874-.874c1.141-1.194.403-2.451-.9-2.534-2.17-.134-3.4-2.462-1.627-4.39 1.927-1.775 4.252-.539 4.387 1.634.082 1.303 1.333 2.037 2.526.894l.79-.791 2.13-2.13.01-.011.03-.031a2.215 2.215 0 0 0 0-3.13z" fill="#64b2db"></path>
                                        </svg>Training structure:
                                    </h4>
                                    <ul>
                                        {{ $trainings_info_1->training_structure }}
                                    </ul>
                                </div>
                            </div>
                            <div class="offer-popup__signup">
                                <a href="{{ url('/trainings') }}">
                                <button class="button button_blue">Sign Up for training</button>
                                </a>
                            </div>
                        </article>
                        <article class="offer-popup" id="training2">
                            <button class="offer-popup__close js-close-offer"></button>
                            <div class="offer-popup__row">
                                <div class="offer-popup__image">
                                    <picture>
                                        <source srcset="{{ url('assets/img/barista-trainings/trainings/barista-training-1.webp') }}" type="image/webp">
                                        <source srcset="{{ url('assets/img/barista-trainings/trainings/barista-training-1.jpg') }}" type="image/jpeg">
                                        <img src="{{ url('assets/img/barista-trainings/trainings/barista-training-1.jpg') }}" alt="Picture alt text">
                                    </picture>
                                </div>
                                <div class="offer-popup__header">
                                    <h3 class="offer-popup__heading">{{ $trainings_info_2->training_number }}</h3>
                                    <h4 class="title offer-popup__subheading">{{ $trainings_info_2->training_name }}</h4>
                                    <div class="offer-popup__description">

                                        {!! $trainings_info_2->training_description !!}

                                    </div>
                                </div>
                            </div>
                            <div class="offer-popup__row offer-popup__row_details">
                                <div class="offer-popup__info">
                                    <h4>
                                        <svg width="18" height="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 13.055c-2.497 0-4.528-1.96-4.528-4.368 0-2.409 2.031-4.368 4.528-4.368 2.497 0 4.528 1.96 4.528 4.368 0 2.409-2.031 4.368-4.528 4.368zM9 0C4.037 0 0 3.9 0 8.692c0 5.948 8.054 14.68 8.397 15.048a.83.83 0 0 0 1.206 0C9.946 23.372 18 14.64 18 8.692 18 3.899 13.963 0 9 0z" fill="#64b2db"></path>
                                        </svg>Location of the training:
                                    </h4>
                                    {{ $trainings_info_2->training_location }}
                                </div>
                                <div class="offer-popup__info">
                                    <h4>
                                        <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.325 5L15 2.022 14.488.855c-.336-.76-1.153-1.073-1.826-.695L4 5z" fill="#64b2db"></path>
                                            <path d="M19.156 2c-.128 0-.255.02-.382.057l-2.41.727L9 5h12l-.451-1.824C20.376 2.466 19.792 2 19.156 2z" fill="#64b2db"></path>
                                            <path d="M22.573 6H1.433c-.452 0-.855.211-1.118.544A1.453 1.453 0 0 0 0 7.446v16.108C0 24.352.64 25 1.43 25h21.14c.79 0 1.43-.648 1.43-1.446v-4.033h-8.486c-1.342 0-2.431-1.102-2.431-2.458v-3.215c0-.666.263-1.27.689-1.712a2.397 2.397 0 0 1 1.739-.743H24V7.446A1.434 1.434 0 0 0 22.573 6z" fill="#64b2db"></path>
                                            <path d="M17.25 17h-.5c-.414 0-.75-.504-.75-1.126v-.748c0-.36.111-.68.288-.883.13-.148.289-.243.463-.243h.498c.415 0 .751.504.751 1.126v.748c0 .621-.336 1.126-.75 1.126zm7.3-4.566a1.356 1.356 0 0 0-.484-.345 1.2 1.2 0 0 0-.448-.089h-8.236c-.763 0-1.382.742-1.382 1.656v3.688c0 .914.619 1.656 1.382 1.656h8.236c.158 0 .307-.033.448-.09.182-.072.345-.192.484-.344.276-.301.45-.739.45-1.222v-3.688c0-.483-.174-.92-.45-1.222z" fill="#64b2db"></path>
                                        </svg>Cost of education:
                                    </h4>
                                    {{ $trainings_info_2->training_cost }}
                                </div>
                                <div class="offer-popup__info">
                                    <h4>
                                        <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24.353 10.945l-2.94-2.943c-1.21-1.21-.47-2.488.847-2.565 2.17-.135 3.39-2.452 1.617-4.38-1.927-1.77-4.231-.554-4.366 1.613-.082 1.319-1.369 2.064-2.573.858L14.06.648a2.21 2.21 0 0 0-3.126 0L8.02 3.565c-1.209 1.21-2.49.46-2.573-.859C5.313.534 2.987-.702 1.061 1.072-.717 3.006.518 5.333 2.688 5.468c1.318.083 2.067 1.37.863 2.58L.647 10.95a2.215 2.215 0 0 0 0 3.129l2.878 2.88c1.21 1.206.491 2.463-.827 2.545-2.17.135-3.384 2.447-1.612 4.376 1.928 1.774 4.227.563 4.361-1.609.083-1.319 1.344-2.043 2.553-.838l2.903 2.907c.879.88 2.315.88 3.194.005l2.035-2.038.874-.874c1.141-1.194.403-2.451-.9-2.534-2.17-.134-3.4-2.462-1.627-4.39 1.927-1.775 4.252-.539 4.387 1.634.082 1.303 1.333 2.037 2.526.894l.79-.791 2.13-2.13.01-.011.03-.031a2.215 2.215 0 0 0 0-3.13z" fill="#64b2db"></path>
                                        </svg>Training structure:
                                    </h4>
                                    <ul>
                                        {{ $trainings_info_2->training_structure }}
                                    </ul>
                                </div>
                            </div>
                            <div class="offer-popup__signup">
                                <a href="{{ url('/trainings') }}">
                                <button class="button button_blue">Sign Up for training</button>
                                </a>
                            </div>
                        </article>
                        <article class="offer-popup" id="training3">
                            <button class="offer-popup__close js-close-offer"></button>
                            <div class="offer-popup__row">
                                <div class="offer-popup__image">
                                    <picture>
                                        <source srcset="{{ url('assets/img/barista-trainings/trainings/barista-training-1.webp') }}" type="image/webp">
                                        <source srcset="{{ url('assets/img/barista-trainings/trainings/barista-training-1.jpg') }}" type="image/jpeg">
                                        <img src="{{ url('assets/img/barista-trainings/trainings/barista-training-1.jpg') }}" alt="Picture alt text">
                                    </picture>
                                </div>
                                <div class="offer-popup__header">
                                    <h3 class="offer-popup__heading">{{ $trainings_info_3->training_number }}</h3>
                                    <h4 class="title offer-popup__subheading">{{ $trainings_info_3->training_name }}</h4>
                                    <div class="offer-popup__description">
                                        {!! $trainings_info_3->training_description !!}
                                    </div>
                                </div>
                            </div>
                            <div class="offer-popup__row offer-popup__row_details">
                                <div class="offer-popup__info">
                                    <h4>
                                        <svg width="18" height="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 13.055c-2.497 0-4.528-1.96-4.528-4.368 0-2.409 2.031-4.368 4.528-4.368 2.497 0 4.528 1.96 4.528 4.368 0 2.409-2.031 4.368-4.528 4.368zM9 0C4.037 0 0 3.9 0 8.692c0 5.948 8.054 14.68 8.397 15.048a.83.83 0 0 0 1.206 0C9.946 23.372 18 14.64 18 8.692 18 3.899 13.963 0 9 0z" fill="#64b2db"></path>
                                        </svg>Location of the training:
                                    </h4>
                                    {{ $trainings_info_3->training_location }}
                                </div>
                                <div class="offer-popup__info">
                                    <h4>
                                        <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.325 5L15 2.022 14.488.855c-.336-.76-1.153-1.073-1.826-.695L4 5z" fill="#64b2db"></path>
                                            <path d="M19.156 2c-.128 0-.255.02-.382.057l-2.41.727L9 5h12l-.451-1.824C20.376 2.466 19.792 2 19.156 2z" fill="#64b2db"></path>
                                            <path d="M22.573 6H1.433c-.452 0-.855.211-1.118.544A1.453 1.453 0 0 0 0 7.446v16.108C0 24.352.64 25 1.43 25h21.14c.79 0 1.43-.648 1.43-1.446v-4.033h-8.486c-1.342 0-2.431-1.102-2.431-2.458v-3.215c0-.666.263-1.27.689-1.712a2.397 2.397 0 0 1 1.739-.743H24V7.446A1.434 1.434 0 0 0 22.573 6z" fill="#64b2db"></path>
                                            <path d="M17.25 17h-.5c-.414 0-.75-.504-.75-1.126v-.748c0-.36.111-.68.288-.883.13-.148.289-.243.463-.243h.498c.415 0 .751.504.751 1.126v.748c0 .621-.336 1.126-.75 1.126zm7.3-4.566a1.356 1.356 0 0 0-.484-.345 1.2 1.2 0 0 0-.448-.089h-8.236c-.763 0-1.382.742-1.382 1.656v3.688c0 .914.619 1.656 1.382 1.656h8.236c.158 0 .307-.033.448-.09.182-.072.345-.192.484-.344.276-.301.45-.739.45-1.222v-3.688c0-.483-.174-.92-.45-1.222z" fill="#64b2db"></path>
                                        </svg>Cost of education:
                                    </h4>
                                    {{ $trainings_info_3->training_cost }}
                                </div>
                                <div class="offer-popup__info">
                                    <h4>
                                        <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24.353 10.945l-2.94-2.943c-1.21-1.21-.47-2.488.847-2.565 2.17-.135 3.39-2.452 1.617-4.38-1.927-1.77-4.231-.554-4.366 1.613-.082 1.319-1.369 2.064-2.573.858L14.06.648a2.21 2.21 0 0 0-3.126 0L8.02 3.565c-1.209 1.21-2.49.46-2.573-.859C5.313.534 2.987-.702 1.061 1.072-.717 3.006.518 5.333 2.688 5.468c1.318.083 2.067 1.37.863 2.58L.647 10.95a2.215 2.215 0 0 0 0 3.129l2.878 2.88c1.21 1.206.491 2.463-.827 2.545-2.17.135-3.384 2.447-1.612 4.376 1.928 1.774 4.227.563 4.361-1.609.083-1.319 1.344-2.043 2.553-.838l2.903 2.907c.879.88 2.315.88 3.194.005l2.035-2.038.874-.874c1.141-1.194.403-2.451-.9-2.534-2.17-.134-3.4-2.462-1.627-4.39 1.927-1.775 4.252-.539 4.387 1.634.082 1.303 1.333 2.037 2.526.894l.79-.791 2.13-2.13.01-.011.03-.031a2.215 2.215 0 0 0 0-3.13z" fill="#64b2db"></path>
                                        </svg>Training structure:
                                    </h4>
                                    <ul>
                                        {{ $trainings_info_3->training_structure }}
                                    </ul>
                                </div>
                            </div>
                            <div class="offer-popup__signup">
                                <a href="{{ url('/trainings') }}">
                                <button class="button button_blue">Sign Up for training</button>
                                </a>
                            </div>
                        </article>
                        <article class="offer-popup" id="training4">
                            <button class="offer-popup__close js-close-offer"></button>
                            <div class="offer-popup__row">
                                <div class="offer-popup__image">
                                    <picture>
                                        <source srcset="{{ url('assets/img/barista-trainings/trainings/barista-training-1.webp') }}" type="image/webp">
                                        <source srcset="{{ url('assets/img/barista-trainings/trainings/barista-training-1.jpg') }}" type="image/jpeg">
                                        <img src="{{ url('assets/img/barista-trainings/trainings/barista-training-1.jpg') }}" alt="Picture alt text">
                                    </picture>
                                </div>
                                <div class="offer-popup__header">
                                    <h3 class="offer-popup__heading">{{ $trainings_info_4->training_number }}</h3>
                                    <h4 class="title offer-popup__subheading">{{ $trainings_info_4->training_name }}</h4>
                                    <div class="offer-popup__description">
                                        {{ $trainings_info_4->training_description }}
                                    </div>
                                </div>
                            </div>
                            <div class="offer-popup__row offer-popup__row_details">
                                <div class="offer-popup__info">
                                    <h4>
                                        <svg width="18" height="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 13.055c-2.497 0-4.528-1.96-4.528-4.368 0-2.409 2.031-4.368 4.528-4.368 2.497 0 4.528 1.96 4.528 4.368 0 2.409-2.031 4.368-4.528 4.368zM9 0C4.037 0 0 3.9 0 8.692c0 5.948 8.054 14.68 8.397 15.048a.83.83 0 0 0 1.206 0C9.946 23.372 18 14.64 18 8.692 18 3.899 13.963 0 9 0z" fill="#64b2db"></path>
                                        </svg>Location of the training:
                                    </h4>
                                    {{ $trainings_info_4->training_location }}
                                </div>
                                <div class="offer-popup__info">
                                    <h4>
                                        <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.325 5L15 2.022 14.488.855c-.336-.76-1.153-1.073-1.826-.695L4 5z" fill="#64b2db"></path>
                                            <path d="M19.156 2c-.128 0-.255.02-.382.057l-2.41.727L9 5h12l-.451-1.824C20.376 2.466 19.792 2 19.156 2z" fill="#64b2db"></path>
                                            <path d="M22.573 6H1.433c-.452 0-.855.211-1.118.544A1.453 1.453 0 0 0 0 7.446v16.108C0 24.352.64 25 1.43 25h21.14c.79 0 1.43-.648 1.43-1.446v-4.033h-8.486c-1.342 0-2.431-1.102-2.431-2.458v-3.215c0-.666.263-1.27.689-1.712a2.397 2.397 0 0 1 1.739-.743H24V7.446A1.434 1.434 0 0 0 22.573 6z" fill="#64b2db"></path>
                                            <path d="M17.25 17h-.5c-.414 0-.75-.504-.75-1.126v-.748c0-.36.111-.68.288-.883.13-.148.289-.243.463-.243h.498c.415 0 .751.504.751 1.126v.748c0 .621-.336 1.126-.75 1.126zm7.3-4.566a1.356 1.356 0 0 0-.484-.345 1.2 1.2 0 0 0-.448-.089h-8.236c-.763 0-1.382.742-1.382 1.656v3.688c0 .914.619 1.656 1.382 1.656h8.236c.158 0 .307-.033.448-.09.182-.072.345-.192.484-.344.276-.301.45-.739.45-1.222v-3.688c0-.483-.174-.92-.45-1.222z" fill="#64b2db"></path>
                                        </svg>Cost of education:
                                    </h4>
                                    {{ $trainings_info_4->training_cost }}
                                </div>
                                <div class="offer-popup__info">
                                    <h4>
                                        <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24.353 10.945l-2.94-2.943c-1.21-1.21-.47-2.488.847-2.565 2.17-.135 3.39-2.452 1.617-4.38-1.927-1.77-4.231-.554-4.366 1.613-.082 1.319-1.369 2.064-2.573.858L14.06.648a2.21 2.21 0 0 0-3.126 0L8.02 3.565c-1.209 1.21-2.49.46-2.573-.859C5.313.534 2.987-.702 1.061 1.072-.717 3.006.518 5.333 2.688 5.468c1.318.083 2.067 1.37.863 2.58L.647 10.95a2.215 2.215 0 0 0 0 3.129l2.878 2.88c1.21 1.206.491 2.463-.827 2.545-2.17.135-3.384 2.447-1.612 4.376 1.928 1.774 4.227.563 4.361-1.609.083-1.319 1.344-2.043 2.553-.838l2.903 2.907c.879.88 2.315.88 3.194.005l2.035-2.038.874-.874c1.141-1.194.403-2.451-.9-2.534-2.17-.134-3.4-2.462-1.627-4.39 1.927-1.775 4.252-.539 4.387 1.634.082 1.303 1.333 2.037 2.526.894l.79-.791 2.13-2.13.01-.011.03-.031a2.215 2.215 0 0 0 0-3.13z" fill="#64b2db"></path>
                                        </svg>Training structure:
                                    </h4>
                                    <ul>
                                        {{ $trainings_info_4->training_structure}}
                                    </ul>
                                </div>
                            </div>
                            <div class="offer-popup__signup">
                                <a href="{{ url('/trainings') }}">
                                <button class="button button_blue">Sign Up for training</button>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
                <!-- block icons-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position: absolute; left: -10px; width: 1px; height: 1px; overflow: hidden;">
                    <symbol id="open-book" width="93" height="93" xmlns="http://www.w3.org/2000/svg">
                        <path d="M53.168 44.09c.273.577.817.91 1.38.91.235 0 .476-.058.7-.182.091-.05 9.187-5.033 13.673-6.56.813-.28 1.264-1.216 1.006-2.092-.256-.877-1.118-1.365-1.939-1.089-4.726 1.612-13.76 6.562-14.143 6.772-.76.416-1.063 1.42-.677 2.241z" fill="#64b2db"></path>
                        <path d="M54.548 26c.235 0 .476-.058.7-.182.091-.05 9.187-5.033 13.673-6.56.813-.28 1.264-1.216 1.006-2.092-.256-.877-1.118-1.365-1.94-1.089-4.725 1.612-13.759 6.562-14.142 6.772-.76.416-1.063 1.42-.677 2.241.273.577.817.91 1.38.91z" fill="#64b2db"></path>
                        <path d="M91.45 23.25a1.55 1.55 0 0 0-1.55 1.55v60.45a4.656 4.656 0 0 1-4.65 4.65h-37.2v-3.567c2.26-.79 8.147-2.633 13.95-2.633 13.502 0 22.67 2.99 22.762 3.02A1.549 1.549 0 0 0 86.8 85.25V17.052c0-.727-.504-1.357-1.214-1.513 0 0-1.215-.271-3.292-.653a1.55 1.55 0 1 0-.561 3.049c.792.146 1.455.274 1.967.377V83.19c-3.513-.92-11.312-2.59-21.7-2.59-6.754 0-13.387 2.218-15.44 2.97-1.824-.806-7.339-2.97-14.01-2.97-10.677 0-19.471 1.76-23.25 2.655V18.25c3.095-.76 12.237-2.75 23.25-2.75 5.651 0 10.498 1.76 12.4 2.555V79.05a1.55 1.55 0 0 0 2.348 1.328c.154-.091 15.51-9.264 29.141-13.807a1.55 1.55 0 0 0 1.06-1.47V1.55A1.55 1.55 0 0 0 75.405.098c-12.401 4.652-24.95 12.46-25.076 12.538a1.55 1.55 0 0 0 1.643 2.63C52.086 15.191 63.003 8.4 74.4 3.816V63.99c-10.58 3.677-21.628 9.68-26.35 12.368V17.05c0-.588-.332-1.124-.858-1.388-.266-.131-6.618-3.262-14.642-3.262-14.006 0-24.774 3.03-25.226 3.16a1.549 1.549 0 0 0-1.124 1.49V85.25a1.549 1.549 0 0 0 1.975 1.49C8.282 86.71 19 83.7 32.55 83.7c5.667 0 10.509 1.764 12.4 2.556V89.9H7.75a4.656 4.656 0 0 1-4.65-4.65V24.8a1.55 1.55 0 0 0-3.1 0v60.45C0 89.523 3.477 93 7.75 93h77.5c4.273 0 7.75-3.477 7.75-7.75V24.8a1.55 1.55 0 0 0-1.55-1.55z" fill="#64b2db"></path>
                        <path d="M53.168 35.09c.273.577.817.91 1.38.91.235 0 .476-.058.7-.182.091-.05 9.187-5.033 13.673-6.56.813-.28 1.264-1.216 1.006-2.092-.256-.877-1.118-1.365-1.939-1.089-4.726 1.612-13.76 6.562-14.143 6.772-.76.416-1.063 1.42-.677 2.241z" fill="#64b2db"></path>
                        <path d="M53.168 54.09c.273.577.817.91 1.38.91.235 0 .476-.058.7-.182.091-.05 9.187-5.033 13.673-6.56.813-.28 1.264-1.216 1.006-2.092-.256-.877-1.118-1.365-1.939-1.089-4.726 1.612-13.76 6.562-14.143 6.772-.76.416-1.063 1.42-.677 2.241z" fill="#64b2db"></path>
                        <path d="M37.815 28.739c-9.467-1.935-20.226.53-20.678.636-.818.19-1.304.922-1.084 1.635.184.597.803.99 1.48.99.131 0 .264-.015.398-.045.103-.026 10.461-2.399 19.185-.616.82.167 1.65-.278 1.843-.996.193-.717-.319-1.436-1.144-1.604z" fill="#64b2db"></path>
                        <path d="M37.815 38.738c-9.467-1.934-20.226.53-20.678.636-.818.191-1.304.923-1.084 1.636.184.597.803.99 1.48.99.131 0 .264-.015.398-.045.103-.026 10.461-2.4 19.185-.616.82.167 1.65-.278 1.843-.997.193-.717-.319-1.435-1.144-1.604z" fill="#64b2db"></path>
                        <path d="M53.168 63.09c.273.577.817.91 1.38.91.235 0 .476-.058.7-.182.091-.05 9.187-5.033 13.673-6.56.813-.28 1.264-1.216 1.006-2.092-.256-.877-1.118-1.365-1.939-1.089-4.726 1.612-13.76 6.562-14.143 6.772-.76.416-1.063 1.42-.677 2.241z" fill="#64b2db"></path>
                        <path d="M37.815 46.738c-9.467-1.933-20.226.529-20.678.636-.818.19-1.304.923-1.084 1.635.184.597.803.991 1.48.991.131 0 .264-.016.398-.047.103-.025 10.461-2.398 19.185-.615.82.167 1.65-.278 1.843-.996.193-.717-.319-1.435-1.144-1.604z" fill="#64b2db"></path>
                        <path d="M37.815 65.739c-9.467-1.935-20.226.53-20.678.635-.818.191-1.304.923-1.084 1.635.184.597.803.991 1.48.991.131 0 .264-.016.398-.047.103-.025 10.461-2.397 19.185-.615.82.165 1.65-.278 1.843-.996.193-.717-.319-1.435-1.144-1.603z" fill="#64b2db"></path>
                        <path d="M37.815 56.739c-9.467-1.934-20.226.528-20.678.635-.818.191-1.304.923-1.084 1.635.184.597.803.991 1.48.991.131 0 .264-.016.398-.047.103-.025 10.461-2.397 19.185-.615.82.167 1.65-.278 1.843-.996.193-.717-.319-1.435-1.144-1.603z" fill="#64b2db"></path>
                    </symbol>
                    <symbol id="idea" width="98" height="106" xmlns="http://www.w3.org/2000/svg">
                        <path d="M58.738 77.126a1.959 1.959 0 0 0-1.356 1.858v3.538H41.618v-3.538c0-.845-.546-1.594-1.356-1.858-12.153-3.968-20.32-15.167-20.32-27.865 0-16.183 13.26-29.348 29.558-29.348 16.299 0 29.559 13.165 29.559 29.348 0 12.698-8.168 23.897-20.32 27.865zm-3.326 19.098c-1.09 0-1.97.875-1.97 1.957v3.916h-7.883V98.18c0-1.082-.881-1.957-1.97-1.957h-1.971v-9.79h15.764v9.79zM49.5 16C31.028 16 16 30.92 16 49.26c0 13.916 8.653 26.242 21.676 31.11v17.804c0 1.082.881 1.956 1.971 1.956h1.97v3.913c0 1.082.882 1.957 1.971 1.957h11.824c1.09 0 1.97-.875 1.97-1.957v-3.913h1.97c1.09 0 1.972-.874 1.972-1.956V80.37C74.347 75.502 83 63.176 83 49.26 83 30.92 67.972 16 49.5 16z" fill="#64b2db"></path>
                        <path d="M49 12c1.106 0 2-.894 2-2V2c0-1.106-.894-2-2-2-1.106 0-2 .894-2 2v8c0 1.106.894 2 2 2z" fill="#64b2db"></path>
                        <path d="M96 47h-8c-1.106 0-2 .894-2 2 0 1.106.894 2 2 2h8c1.106 0 2-.894 2-2 0-1.106-.894-2-2-2z" fill="#64b2db"></path>
                        <path d="M10 47H2c-1.106 0-2 .894-2 2 0 1.106.894 2 2 2h8c1.106 0 2-.894 2-2 0-1.106-.894-2-2-2z" fill="#64b2db"></path>
                        <path d="M80.818 14.546l-5.271 5.272A1.862 1.862 0 0 0 76.864 23c.478 0 .955-.183 1.318-.546l5.271-5.272a1.863 1.863 0 1 0-2.636-2.636z" fill="#64b2db"></path>
                        <path d="M19.818 75.547l-5.271 5.271A1.862 1.862 0 0 0 15.864 84c.478 0 .955-.183 1.318-.546l5.271-5.272a1.862 1.862 0 0 0 0-2.635 1.862 1.862 0 0 0-2.635 0z" fill="#64b2db"></path>
                        <path d="M78.182 75.547a1.862 1.862 0 0 0-2.635 0 1.862 1.862 0 0 0 0 2.635l5.27 5.272a1.859 1.859 0 0 0 2.636 0 1.862 1.862 0 0 0 0-2.636z" fill="#64b2db"></path>
                        <path d="M19.818 22.454a1.859 1.859 0 0 0 2.635 0 1.862 1.862 0 0 0 0-2.636l-5.27-5.271a1.862 1.862 0 0 0-2.636 0 1.862 1.862 0 0 0 0 2.635z" fill="#64b2db"></path>
                        <path d="M49.077 25C36.352 25 26 35.766 26 49c0 1.106.86 2 1.923 2 1.064 0 1.923-.894 1.923-2 0-11.028 8.627-20 19.23-20C50.14 29 51 28.106 51 27c0-1.106-.86-2-1.923-2z" fill="#64b2db"></path>
                    </symbol>
                </svg>
            </div>

                     <!-- Modal - modal-->
         <div style="z-index: 999; padding-bottom: 0px; padding: 0px;" class="modal modal_reg" id="regModal">
            <button class="modal__close js-close-modal">
                <svg>
                    <use xlink:href="#rounded-close"></use>
                </svg>
            </button>
        
                <form action="{{ url('/form_sumbit') }}" method="POST" class="lets-work__form form">
                @csrf()
                    <input type="hidden" name="page_from" value="Barista Trainings">
                    <p class="lets-work__note">Write to us what we can help</p>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_user">
                                <use xlink:href="#user"></use>
                            </svg>
                            <input class="field__input" type="text" name="name" placeholder="Name" required>
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_phone-call">
                                <use xlink:href="#phone-call"></use>
                            </svg>
                            <input class="field__input" type="tel" name="tel" placeholder="Phone" required>
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_envelope">
                                <use xlink:href="#envelope"></use>
                            </svg>
                            <input class="field__input" type="email" name="email" placeholder="Email" required>
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_comment">
                                <use xlink:href="#chat-comment"></use>
                            </svg>
                            <input class="field__input" type="text" name="symptom" placeholder="Comments" required>
                        </label>
                        <input class="button button_blue" type="submit" value="Send">
                    </form>
            </div>
            
            <div class="events js-block-cnt">
                <div class="container">
                <div class="events__category"><span>Trainings:</span>
                            <div class="select events__select">
                                <select class="js-init-styleselect" name="trainingCategory" onchange="location = this.value;">
                                @foreach($trainings as $train)
                                    <option value="{{ url('baristatrainings/'. $train->training_name.'/#calendar') }}">{{ $train->training_name }}</option>
                                @endforeach
                                </select>
                                <div class="select__arrow">
                                    <svg>
                                        <use xlink:href="#arrow-down"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>

                <div id='calendar'></div>

                <!-- <script type="text/javascript">
                function showDiv(select){
                    if(select.value==1){
                        document.getElementById('hidden_div').style.display = "block";
                    } else{
                        document.getElementById('hidden_div').style.display = "none";
                    }
                    foreach($trainings as $traning){

                    }
                } 
                </script> -->


                <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>

                <script>
                    $(document).ready(function() {
                        // page is now ready, initialize the calendar...
                        $('#calendar').fullCalendar({
                            customButtons: {
                                myCustomButton: {
                                text: 'custom!',
                                click: function() {
                                    alert('clicked the custom button!');
                                }
                                }
                            },
                            header: {
                                right: 'prev, title, next',
                                //center: 'today',
                                left: ''
                                // right: 'month,basicWeek,basicDay'
                            },
                            // put your options and callbacks here
                                titleFormat: 'MMMM',
                                firstDay: 1,
                                dayNamesShort: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                                showNonCurrentDates: false,
                                fixedWeekCount: false,
                                displayEventTime: true,
                            events : [
                                @if($tasks)
                                @foreach($tasks as $task)
                                {
                                    title : '\n {{ $task->description}}',
                                    start : '{{ $task->task_date }}',
                                    description: '{{ $task->description}}',
                                    url : '{{ url('/trainings/'. $task->id) }}'
                                },
                                @endforeach
                                @endif
                            ],
                        @if(!$tasks->isEmpty())
                            eventRender: function( event, element, view ) {
                                element.find('.fc-title').prepend('<span style="font-weight: 700;" class="calendar__name">{{ $task->name }} </span> '); 
                            }
                        @else
                        eventRender: function( event, element, view ) {
                                element.find('.fc-title').prepend('<span style="font-weight: 700;" class="calendar__name"> </span> '); 
                            }
                        @endif

                        })
                    });

                    $(".fc-right").append('<select class="select_month"><option value="">Select Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mrch</option><option value="4">Aprl</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>');
  
                    $(".select_month").on("change", function(event) {
                    $('#calendar').fullCalendar('changeView', 'month', this.value);
                    $('#calendar').fullCalendar('gotoDate', "2018-"+this.value+"-1");
                    });

                </script>
                </div>
            </div>
        </main>


@endsection
