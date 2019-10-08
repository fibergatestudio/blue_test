@extends('layouts.main')

@section('header')
<header class="header header_has-columns header_our-cafe">

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
                            <img src="img/tmp/goods/green-sm.png" alt="Blue Bird Blend ">
                        </div>
                        <h3 class="cart-sm-product__title">Blue Bird Blend </h3><span class="cart-sm-product__price">2150 HUF</span>
                    </div>
                    <div class="cart-sm-product cart-modal__item">
                        <div class="cart-sm-product__image">
                            <img src="img/tmp/goods/coffee-machine.png" alt="Coffee Machine">
                        </div>
                        <h3 class="cart-sm-product__title">Coffee Machine</h3><span class="cart-sm-product__price">10 000 HUF</span>
                    </div>
                    <div class="cart-sm-product cart-modal__item">
                        <div class="cart-sm-product__image">
                            <img src="img/tmp/goods/cup.png" alt="Cup">
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
                    <div class="banner banner_loyality">
                        <h1 class="title banner__title color-blue">Loyalty program</h1>
                        <svg class="banner__icon" width="65" height="65" xmlns="http://www.w3.org/2000/svg">
                            <path d="M62.823 33.574a3.254 3.254 0 0 1-3.25 3.25H52.44L40.023 24.407a5.64 5.64 0 0 0-4.015-1.664 5.685 5.685 0 0 0-5.68 5.679c0 1.516.59 2.942 1.665 4.014l4.386 4.386H5.416a3.253 3.253 0 0 1-3.25-3.249V5.416a3.253 3.253 0 0 1 3.25-3.25h54.158a3.253 3.253 0 0 1 3.25 3.25zm-34.656 29.26v-3.25h29.25v3.25zM22.75 47.217V39h15.167v6.5c0 .287.113.563.317.766l4.333 4.333 1.532-1.532-4.016-4.016v-7.134a1.08 1.08 0 0 0-.317-.766l-6.237-6.237A3.49 3.49 0 0 1 32.5 28.43a3.518 3.518 0 0 1 3.513-3.513c.938 0 1.82.365 2.484 1.029l12.737 12.737c.203.203.479.317.766.317h5.417v18.417h-29.25v-4.334a1.08 1.08 0 0 0-.318-.766zM59.583 0H5.417A5.423 5.423 0 0 0 0 5.417v28.166A5.423 5.423 0 0 0 5.417 39h15.166v8.667c0 .287.114.563.318.766L26 53.532v10.385c0 .597.486 1.083 1.083 1.083H58.5c.598 0 1.083-.486 1.083-1.083V39A5.423 5.423 0 0 0 65 33.583V5.417A5.423 5.423 0 0 0 59.583 0z" fill="#fff"></path>
                            <path d="M56.79 19.8h-1.076v-2.2h2.153v1.1c0 .606-.483 1.1-1.076 1.1zm-9.647-1.1v-1.1h2.153v2.2h-1.077a1.09 1.09 0 0 1-1.076-1.1zm1.076-5.5h1.077v2.2h-2.153v-1.1c0-.606.483-1.1 1.076-1.1zm5.352 4.4v2.2H51.43v-2.2zm-2.142-2.2v-2.2h2.142v2.2zm6.438-1.1v1.1h-2.153v-2.2h1.077a1.09 1.09 0 0 1 1.076 1.1zM56.786 11h-8.572C46.442 11 45 12.48 45 14.3v4.4c0 1.82 1.442 3.3 3.214 3.3h8.572C58.558 22 60 20.52 60 18.7v-4.4c0-1.82-1.442-3.3-3.214-3.3z" fill="#fff"></path>
                            <path d="M56 24h2v2h-2z" fill="#fff"></path>
                            <path d="M51 24h2v2h-2z" fill="#fff"></path>
                            <path d="M47 24h2v2h-2z" fill="#fff"></path>
                            <path d="M13.998 25.938h-.575a3.34 3.34 0 0 1-2.298-.93c.131-3.523 2.9-6.357 6.328-6.357 3.684 0 6.53-2.211 7.286-5.463.128.38.198.787.198 1.212 0 6.376-4.893 11.538-10.939 11.538zm7.012-14.875h.576c.88 0 1.687.352 2.299.93-.13 3.33-2.738 5.757-6.332 5.757-3.56 0-6.527 2.597-7.296 6.063a3.794 3.794 0 0 1-.195-1.2c0-6.383 4.898-11.55 10.948-11.55zm3.792.46a.505.505 0 0 0-.21-.221A4.438 4.438 0 0 0 21.466 10H20.9C14.327 10 9 15.51 9 22.31a4.76 4.76 0 0 0 1.198 3.167c.047.096.12.171.21.221A4.438 4.438 0 0 0 13.534 27h.567C20.673 27 26 21.49 26 14.69a4.76 4.76 0 0 0-1.198-3.167z" fill="#fff"></path>
                            <path d="M13.998 25.938h-.575a3.34 3.34 0 0 1-2.298-.93c.131-3.523 2.9-6.357 6.328-6.357 3.684 0 6.53-2.211 7.286-5.463.128.38.198.787.198 1.212 0 6.376-4.893 11.538-10.939 11.538zm7.012-14.875h.576c.88 0 1.687.352 2.299.93-.13 3.33-2.738 5.757-6.332 5.757-3.56 0-6.527 2.597-7.296 6.063a3.794 3.794 0 0 1-.195-1.2c0-6.383 4.898-11.55 10.948-11.55zm3.792.46a.505.505 0 0 0-.21-.221A4.438 4.438 0 0 0 21.466 10H20.9C14.327 10 9 15.51 9 22.31a4.76 4.76 0 0 0 1.198 3.167c.047.096.12.171.21.221A4.438 4.438 0 0 0 13.534 27h.567C20.673 27 26 21.49 26 14.69a4.76 4.76 0 0 0-1.198-3.167z" fill="none" stroke="#fff" stroke-miterlimit="50" stroke-width=".5"></path>
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
            <section class="how-blue-bird-works js-block-cnt">
                <div class="how-blue-bird-works__container">
                    <h2 class="how-blue-bird-works__title title title_center">How it works</h2>
                    <div class="how-blue-bird-works__steps">
                        <div class="how-blue-bird-works__step">
                            <div class="step">
                                <div class="step__head"> <span>01</span>
                                </div>
                                <svg class="step__icon">
                                    <use xlink:href="#lens-bin"></use>
                                </svg>
                                <div class="step__text"><strong>Choose</strong><br> a subscription<br> term</div>
                                </div>
                            </div>
                            <div class="how-blue-bird-works__step">
                                <div class="step">
                                    <div class="step__head"> <span>02</span>
                                    </div>
                                    <svg class="step__icon">
                                        <use xlink:href="#book-bean"></use>
                                    </svg>
                                    <div class="step__text"><strong>Choose</strong><br> a subscription<br> term</div>
                                    </div>
                                </div>
                                <div class="how-blue-bird-works__step">
                                    <div class="step">
                                        <div class="step__head"> <span>03</span>
                                        </div>
                                        <svg class="step__icon">
                                            <use xlink:href="#moka-pot"></use>
                                        </svg>
                                        <div class="step__text"><strong>Choose</strong><br> a subscription<br> term</div>
                                        </div>
                                    </div>
                                    <div class="how-blue-bird-works__step">
                                        <div class="step">
                                            <div class="step__head"> <span>04</span>
                                            </div>
                                            <svg class="step__icon">
                                                <use xlink:href="#place"></use>
                                            </svg>
                                            <div class="step__text"><strong>Choose</strong><br> a subscription<br> term</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            </section>
            <section class="coffee-club js-block-cnt">
                <div class="container">
                    <h2 class="title title_center">Blue Bird Coffee Club</h2>
                    <p class="coffee-club__desc"> <strong>Sign up</strong>
                        and become
                        <strong>a member of the club </strong>
                        to enjoy the various
                        <strong>discounts and special offers</strong>
                        available for club members only!
                    </p>
                    <div class="coffee-club__row">
                        <div class="coffee-club__col">
                            <div class="coffee-club__icon coffee-club__icon_offer">
                                <svg>
                                    <use xlink:href="#offer"></use>
                                </svg>
                            </div>
                            <div class="coffee-club__heading">Discounts for Blue Bird Club Membership:</div>
                            <ul class="coffee-club__list list">
                                <li>a point collection system that offers up to 10% discount on buying coffee!</li>
                                <li>discount card, which in addition to our shop is valid in our cafes and in our nightclubs!</li>
                                <li>periodic special discounts are available for club members only</li>
                            </ul>
                        </div>
                        <div class="coffee-club__col">
                            <div class="coffee-club__icon coffee-club__icon_membership">
                                <svg>
                                    <use xlink:href="#membership"></use>
                                </svg>
                            </div>
                            <div class="coffee-club__heading">Special Offers with Blue Bird Club Membership:</div>
                            <ul class="coffee-club__list list">
                                <li>We only arrange free coffee courses and business visits for club members</li>
                                <li>Our new coffee tasting packages are available for free</li>
                                <li>We develop our coffee offer taking into account the opinions and feedback of the club members</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page icons-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position: absolute; left: -10000px; top: -1px; width: 1px; height: 1px; overflow: hidden;">
                <symbol id="lens-bin" viewBox="0 0 88 88" xmlns="http://www.w3.org/2000/svg">
                    <path d="M54.128 54.115c-5.239 5.238-12.205 8.122-19.616 8.122-7.41 0-14.375-2.884-19.615-8.122-5.239-5.237-8.124-12.201-8.124-19.61 0-7.409 2.885-14.373 8.124-19.61 5.24-5.238 12.205-8.122 19.615-8.122 7.41 0 14.376 2.884 19.616 8.122 10.813 10.813 10.813 28.407 0 39.22zm1.952-41.182C50.317 7.173 42.657 4 34.507 4s-15.81 3.172-21.573 8.933C7.173 18.693 4 26.352 4 34.5c0 8.15 3.173 15.808 8.934 21.567C18.696 61.827 26.358 65 34.507 65c8.15 0 15.81-3.172 21.573-8.933 11.893-11.891 11.893-31.241 0-43.134z" fill="#64b2db"></path>
                    <path d="M78.209 84.032l-14.95-14.944.969-.97.002-.001.002-.003 3.881-3.88.006-.004.004-.006.968-.968 14.95 14.947h.002v.002a4.084 4.084 0 0 1 1.207 2.91 4.088 4.088 0 0 1-1.21 2.917c-1.556 1.561-4.275 1.556-5.831 0zM57.685 59.628c.335-.31.67-.623.996-.947.325-.326.637-.66.946-.997l5.564 5.573-1.94 1.946zm-45.673-2.891C6.04 50.764 2.752 42.822 2.75 34.374c0-8.448 3.29-16.389 9.262-22.362C17.986 6.04 25.928 2.75 34.375 2.75c8.448 0 16.39 3.29 22.363 9.262 12.33 12.33 12.33 32.394 0 44.723-5.974 5.973-13.916 9.262-22.363 9.262-8.448 0-16.39-3.289-22.363-9.26zm73.974 19.529L70.063 60.339a1.373 1.373 0 0 0-1.944 0l-.974.974-5.728-5.73c10.585-13.48 9.68-33.099-2.735-45.515C52.19 3.576 43.557 0 34.375 0c-9.18 0-17.813 3.576-24.307 10.068C3.576 16.559 0 25.19 0 34.374c.001 9.182 3.576 17.814 10.068 24.307 6.491 6.493 15.125 10.066 24.307 10.066 7.79 0 15.181-2.583 21.21-7.33l5.729 5.73-.972.972a1.373 1.373 0 0 0 0 1.944l15.922 15.923A6.832 6.832 0 0 0 81.126 88a6.824 6.824 0 0 0 4.86-2.014A6.832 6.832 0 0 0 88 81.124a6.82 6.82 0 0 0-2.014-4.858z" fill="#64b2db"></path>
                    <path d="M43.104 51.216H25.907L23.383 27.54h22.244zM23.228 20.43l22.536-2.478v2.629H23.228zm-1.41 4.336v-1.402h25.364v1.402zm26.773-4.187v-4.184c0-.028-.014-.049-.015-.075-.002-.028.01-.052.007-.08-.009-.068-.044-.122-.062-.186-.024-.095-.045-.188-.089-.272-.037-.074-.086-.132-.134-.196a1.352 1.352 0 0 0-.198-.229c-.055-.047-.119-.082-.18-.12a1.469 1.469 0 0 0-.28-.145c-.079-.028-.162-.035-.246-.05-.073-.01-.138-.041-.213-.041-.028 0-.05.014-.077.015-.029.002-.051-.01-.08-.007l-25.363 2.788c-.07.009-.127.043-.194.061-.092.025-.183.044-.267.085-.08.04-.146.092-.216.145-.075.054-.147.106-.208.174-.059.066-.1.14-.146.215-.048.078-.094.15-.127.236-.03.088-.04.18-.055.272-.01.067-.04.127-.04.196v1.397A1.4 1.4 0 0 0 19 21.97v4.177a1.4 1.4 0 0 0 1.409 1.393h.143l2.687 25.214c.008.08.045.145.066.217.021.078.034.155.07.226.041.091.105.168.167.247.045.057.082.12.134.17.081.077.177.128.273.183.056.03.101.075.162.099.163.065.34.104.527.104h19.726c.185 0 .363-.039.526-.104.061-.025.106-.069.162-.1.096-.054.193-.105.274-.182.053-.05.088-.113.134-.17.062-.079.125-.154.167-.247.034-.071.048-.15.07-.226.02-.074.057-.14.065-.217L48.45 27.54h.142A1.4 1.4 0 0 0 50 26.147v-4.176a1.4 1.4 0 0 0-1.409-1.393z" fill="#64b2db"></path>
                    <path d="M34.5 35.75a2.753 2.753 0 0 1 2.75 2.75 2.753 2.753 0 0 1-2.75 2.75 2.753 2.753 0 0 1-2.75-2.75 2.753 2.753 0 0 1 2.75-2.75zm0 8.25c3.033 0 5.5-2.467 5.5-5.5S37.533 33 34.5 33a5.506 5.506 0 0 0-5.5 5.5c0 3.033 2.467 5.5 5.5 5.5z" fill="#64b2db"></path>
                </symbol>
                <symbol id="book-bean" viewBox="0 0 80 88" xmlns="http://www.w3.org/2000/svg">
                    <path d="M70.346 81.542l4.465 3.708H65.88zm2.758-76.045h.008c.352 0 .705-.135.973-.403l1.778-1.776 1.37 1.37v79l-5.508-4.583V4.688l.405.405c.269.27.621.404.974.404zm-8.267-2.178l1.78 1.775c.268.27.621.403.974.403h.009c.353 0 .706-.135.975-.403l.392-.39v74.401l-5.518 4.583V4.702zM2.759 4.693L4.14 3.315l1.782 1.778c.269.27.622.404.975.404h.008c.353 0 .707-.135.976-.403l1.78-1.776 1.78 1.775c.269.27.622.403.975.403h.008c.353 0 .706-.135.975-.403l1.78-1.777 1.78 1.775c.27.27.622.403.975.403h.009c.353 0 .706-.135.975-.403l1.78-1.773 1.776 1.773c.269.271.622.406.975.406h.008c.353 0 .707-.135.976-.403l1.78-1.776 1.78 1.775c.269.27.622.403.975.403h.008c.353 0 .706-.135.975-.403l1.781-1.777 1.78 1.775c.268.27.621.403.974.403h.009c.353 0 .706-.135.975-.403l1.78-1.773 1.776 1.773c.269.271.622.406.975.406h.008c.353 0 .707-.135.976-.403l1.78-1.776 1.78 1.775c.269.27.622.403.975.403h.008c.353 0 .706-.135.975-.403l1.781-1.777 1.78 1.775c.268.27.621.403.974.403h.009c.353 0 .706-.135.975-.403l1.78-1.773 1.776 1.773c.269.271.622.406.975.406h.008c.353 0 .707-.135.976-.403l1.78-1.776 1.373 1.369V85.25H2.759zM78.622 88c.199 0 .385-.045.556-.121.043-.02.077-.055.117-.08.127-.073.244-.151.34-.258.015-.015.033-.02.046-.035.043-.05.057-.112.09-.167.051-.081.102-.157.135-.25.033-.091.044-.186.058-.284.008-.062.036-.115.036-.18V4.137a1.381 1.381 0 0 0-.108-.546c-.01-.025-.031-.042-.044-.066a1.355 1.355 0 0 0-.25-.374L76.846.404a1.38 1.38 0 0 0-1.95-.001h-.001l-.003.002-1.782 1.777L71.327.404a1.38 1.38 0 0 0-1.973.023l-1.76 1.755L65.812.404a1.38 1.38 0 0 0-1.95-.001h-.002l-.002.002-1.782 1.777L60.293.404a1.38 1.38 0 0 0-1.95-.001h-.001l-.003.002-1.782 1.777L54.775.404a1.38 1.38 0 0 0-1.95-.001c-.003.002-.005.006-.008.01l-1.775 1.769L49.26.404a1.38 1.38 0 0 0-1.95-.001h-.002l-.002.002-1.782 1.777L43.74.404a1.38 1.38 0 0 0-1.95-.001h-.001l-.003.002-1.782 1.777L38.223.404a1.38 1.38 0 0 0-1.95-.001c-.003.002-.005.006-.008.01L34.49 2.181 32.708.404a1.38 1.38 0 0 0-1.95-.001h-.002l-.002.002-1.782 1.777L27.189.404a1.38 1.38 0 0 0-1.95-.001h-.001l-.003.002-1.782 1.777L21.67.404a1.38 1.38 0 0 0-1.95-.001c-.003.002-.005.006-.008.01l-1.775 1.769L16.156.404a1.38 1.38 0 0 0-1.95-.001h-.002l-.002.002-1.782 1.777L10.637.404a1.38 1.38 0 0 0-1.95-.001h-.001l-.003.002-1.78 1.777L5.12.402a1.382 1.382 0 0 0-1.495-.3c-.17.067-.328.166-.466.303L.406 3.15c-.003.001-.003.005-.006.008a1.384 1.384 0 0 0-.294.44 1.363 1.363 0 0 0-.083.413C.021 4.049 0 4.083 0 4.125v82.5C0 87.385.617 88 1.38 88z" fill="#64b2db"></path>
                    <path d="M49.607 61H13.393c-.77 0-1.393.67-1.393 1.5s.623 1.5 1.393 1.5h36.214c.77 0 1.393-.67 1.393-1.5s-.623-1.5-1.393-1.5z" fill="#64b2db"></path>
                    <path d="M49.607 65H13.393c-.77 0-1.393.67-1.393 1.5s.623 1.5 1.393 1.5h36.214c.77 0 1.393-.67 1.393-1.5s-.623-1.5-1.393-1.5z" fill="#64b2db"></path>
                    <path d="M40.571 69H23.43c-.79 0-1.429.67-1.429 1.5s.639 1.5 1.429 1.5H40.57c.79 0 1.429-.67 1.429-1.5s-.639-1.5-1.429-1.5z" fill="#64b2db"></path>
                    <path d="M30.907 35.3c4.105 5.023 1.404 10.89.32 12.81-5.816-.391-10.427-5.135-10.427-10.925v-5.48c0-5.233 3.766-9.616 8.782-10.701-1.388 3.21-2.912 9.108 1.325 14.296zM43.2 31.704v5.48c0 5.231-3.763 9.613-8.779 10.7 1.388-3.213 2.912-9.108-1.326-14.295-4.103-5.022-1.405-10.886-.32-12.81 5.815.39 10.425 5.135 10.425 10.925zm-20.496 15.7a14.114 14.114 0 0 0 9.302 3.485c3.57 0 6.822-1.325 9.3-3.485a11.27 11.27 0 0 1-9.3 4.855c-3.87 0-7.287-1.93-9.302-4.855zM32 55C39.72 55 46 48.852 46 41.296v-9.59C46 24.148 39.72 18 32 18s-14 6.148-14 13.706v9.59C18 48.852 24.28 55 32 55z" fill="#64b2db"></path>
                </symbol>
                <symbol id="moka-pot" viewBox="0 0 68 88" xmlns="http://www.w3.org/2000/svg">
                    <path d="M61.01 15.136h4.27v.719l-4.987 4.173zM53.222 49.48H46.4l3.778-34.345h8.083zm-2.902 5.516H25.898V52.24H50.32zm6.6 30.252h-8.077l-2.471-27.502h6.837zM43.638 57.747l2.471 27.502H30.053l2.47-27.502zm-20.683 0h6.834l-2.47 27.502h-8.075zM17.9 15.136h8.082L29.76 49.48h-6.82zM8.16 19.25c-.752 0-1.36.614-1.36 1.375v30.942c0 1.138-.915 2.063-2.04 2.063s-2.04-.925-2.04-2.063V20.625c0-3.021 2.42-5.477 5.406-5.496.012 0 .023.007.034.007h6.99l.603 4.114zm28.56-16.5h2.72v2.753h-2.72zm12.737 9.636l-1.913-1.61 4.462 1.61zm-22.744 0h-2.549l4.462-1.61zm13.601-4.133l4.904 4.143H30.954l4.903-4.143zM32.5 49.48L28.72 15.136h18.722L43.664 49.48zM35.36 0C34.608 0 34 .615 34 1.375V5.91l-17.913 6.476H8.213c-.019-.002-.034-.011-.053-.011-4.5 0-8.16 3.7-8.16 8.25v30.942c0 2.654 2.135 4.813 4.76 4.813s4.76-2.159 4.76-4.813V22h6.637l4.266 29.068c.1.674.672 1.175 1.345 1.175h1.41v2.755h-1.41c-.68 0-1.255.507-1.348 1.19L16.338 86.44c-.053.393.065.79.323 1.089.257.298.631.47 1.024.47h40.792a1.366 1.366 0 0 0 1.387-1.375c0-.158-.027-.312-.076-.454l-4.046-29.984a1.365 1.365 0 0 0-1.347-1.19H53.04v-2.755h1.355c.674 0 1.245-.499 1.345-1.174l3.956-26.969 7.81-6.537c.018-.015.025-.034.04-.05.072-.065.124-.144.18-.225.047-.067.101-.129.135-.202.034-.074.048-.155.07-.236.025-.094.051-.186.057-.282 0-.024.012-.04.012-.063V13.76c0-.76-.608-1.375-1.36-1.375h-6.567L42.16 5.91V1.375C42.16.615 41.552 0 40.8 0z" fill="#64b2db"></path>
                </symbol>
                <symbol id="place" viewBox="0 0 102 88" xmlns="http://www.w3.org/2000/svg">
                    <path d="M98.802 84.8H3.188v-3.2h95.615zM14.133 64h7.397l-6.837 14.4H4.57zm29.772-1.6h-9.533c-.033 0-.06.018-.095.02-.109.006-.21.034-.316.063-.099.027-.193.048-.283.093-.09.043-.165.104-.243.165-.084.064-.167.121-.237.201-.064.07-.107.154-.16.236-.059.097-.116.19-.154.3-.011.03-.034.052-.043.084l-2.286 8c-.02.073-.008.144-.017.217-.011.077-.045.144-.045.224 0 .034.018.063.02.096.007.11.034.213.063.319.029.097.048.193.093.283.044.09.103.165.164.243.063.086.122.168.2.24.07.062.153.106.233.157.097.06.19.118.3.157.03.01.05.033.083.043.145.041.291.06.435.062h37.832c.145-.001.292-.02.435-.062.032-.01.053-.034.083-.043a1.37 1.37 0 0 0 .3-.157c.081-.05.164-.095.233-.157.078-.072.137-.157.2-.24.06-.08.12-.155.164-.243.045-.088.066-.186.093-.285.029-.104.056-.206.064-.317.001-.033.019-.06.019-.096 0-.08-.034-.147-.045-.224-.01-.073.003-.144-.017-.217l-2.286-8c-.01-.032-.033-.053-.043-.084a1.392 1.392 0 0 0-.156-.302c-.05-.082-.094-.163-.156-.234-.072-.08-.158-.139-.244-.203-.078-.059-.15-.118-.236-.161-.092-.045-.19-.068-.29-.095a1.561 1.561 0 0 0-.31-.064c-.033-.001-.061-.019-.096-.019h-9.533a104.98 104.98 0 0 0 4.173-4.8H73.9l4.881 10.282c.075.16.176.294.292.414.037.038.083.067.123.102a1.633 1.633 0 0 0 .504.296c.13.045.265.072.406.084.04.003.076.024.118.024h10.83l2.124 3.2h-9.915c-.01 0-.018.004-.026.004-.13.004-.256.044-.385.079-.078.022-.161.027-.233.059-.016.006-.032.005-.045.011-.097.047-.165.123-.247.186-.071.053-.15.096-.21.16-.09.096-.151.206-.215.318-.037.066-.086.123-.113.194a1.565 1.565 0 0 0-.086.429c-.007.054-.034.102-.034.161 0 .01.005.016.005.024.002.123.041.242.073.367.024.088.03.179.066.26.006.013.003.026.01.036l1.953 4.113H18.223l7.27-15.31c.005-.01.004-.021.009-.03.049-.108.063-.231.087-.351.02-.093.053-.18.054-.27 0-.015.008-.026.008-.039 0-.093-.036-.171-.052-.26-.018-.105-.024-.212-.062-.311-.04-.106-.107-.194-.17-.29-.049-.078-.089-.16-.152-.228-.09-.095-.198-.16-.306-.23-.06-.04-.1-.095-.166-.126-.01-.004-.02-.003-.03-.008-.1-.044-.212-.056-.32-.081-.103-.023-.203-.06-.305-.061-.011 0-.02-.006-.03-.006H16.26l2.125-3.2h21.346a105.754 105.754 0 0 0 4.173 4.798zm22.524 3.2l1.37 4.8H34.2l1.37-4.8H46.99a71.659 71.659 0 0 0 2.96 2.803 1.595 1.595 0 0 0 2.101 0c.201-.176 1.318-1.171 2.96-2.803zM50.995 3.2c12.301 0 22.308 10.048 22.308 22.4 0 17.174-17.757 35.11-22.308 39.426a93.214 93.214 0 0 1-1.778-1.738 1.577 1.577 0 0 0-.68-.69c-6.52-6.665-19.85-22.113-19.85-36.998 0-12.352 10.007-22.4 22.308-22.4zm30.234 62.4l-3.798-8h6.185l5.312 8zm6.078 12.8l-1.519-3.2h9.517l2.124 3.2zm14.516.9c-.032-.063-.05-.129-.09-.186l-15.938-24c-.03-.044-.075-.068-.105-.106a1.556 1.556 0 0 0-.478-.398 1.539 1.539 0 0 0-.592-.176c-.052-.008-.099-.034-.151-.034H64.773C70.718 46.46 76.5 36.054 76.5 25.6 76.5 11.485 65.06 0 51 0S25.5 11.485 25.5 25.6c0 10.454 5.782 20.86 11.727 28.8H17.53c-.052 0-.099.026-.151.032a1.55 1.55 0 0 0-.317.064 1.457 1.457 0 0 0-.521.278c-.087.07-.161.144-.23.23-.033.04-.078.065-.107.108l-15.937 24c-.039.058-.06.123-.091.186-.022.043-.045.084-.062.13a1.57 1.57 0 0 0-.109.54c0 .011-.006.02-.006.032v6.4c0 .885.712 1.6 1.594 1.6h98.812c.882 0 1.594-.715 1.594-1.6V80c0-.011-.006-.02-.006-.032a1.569 1.569 0 0 0-.109-.538c-.017-.046-.04-.088-.062-.13z" fill="#64b2db"></path>
                    <path d="M47.543 15.881c-.189.402-.37.821-.522 1.275-.887 2.649-1.116 6.632 2.83 10.56 4.418 4.402 1.674 8.67.45 10.155-5.046-.36-9.047-4.556-9.047-9.68 0-.005-.003-.01-.003-.016v-3.222l-.002-.007c.003-4.139 2.622-7.672 6.294-9.065zm13.208 9.067l-.002.006v3.223c0 .006-.003.01-.003.016 0 4.142-2.619 7.675-6.289 9.071.189-.4.37-.82.522-1.273.887-2.649 1.116-6.632-2.83-10.562-4.414-4.397-1.677-8.663-.45-10.155 5.047.358 9.049 4.554 9.052 9.674zM42.749 38.192A12.956 12.956 0 0 0 51 41.145c3.132 0 6.006-1.11 8.251-2.953-1.723 2.738-4.773 4.57-8.251 4.57-3.478 0-6.528-1.832-8.251-4.57zM51 46c7.16 0 12.984-5.8 12.993-12.933 0-.008.005-.013.005-.021v-8.084l.002-.008C64 17.812 58.168 12 51 12s-13 5.812-13 12.954l.002.008v8.084c0 .008.005.013.005.02C38.017 40.2 43.84 46 51 46z" fill="#64b2db"></path>
                </symbol>
                <symbol id="offer" viewBox="0 0 80 79" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.992 22.902a8.337 8.337 0 0 0 1.504-5.248l-.003-.05c-.106-2.273 1.195-4.384 3.296-5.35l.026-.012a8.81 8.81 0 0 0 4.025-3.799l.015-.027c1.082-2.021 3.35-3.247 5.758-3.121l.053.002a9.39 9.39 0 0 0 5.47-1.393 6.451 6.451 0 0 1 6.728 0 9.41 9.41 0 0 0 5.468 1.394l.053-.003c2.42-.124 4.677 1.1 5.757 3.115l.02.037a8.81 8.81 0 0 0 4.02 3.794l.026.012c2.134 1.017 3.43 3.117 3.3 5.352l-.004.052a8.336 8.336 0 0 0 1.504 5.247 5.376 5.376 0 0 1-.001 6.182 8.345 8.345 0 0 0-1.503 5.249l.003.05c.13 2.234-1.165 4.335-3.3 5.353l-.022.01a8.82 8.82 0 0 0-4.029 3.804l-.01.022c-1.084 2.021-3.348 3.247-5.76 3.121l-.052-.003a9.407 9.407 0 0 0-5.471 1.394 6.452 6.452 0 0 1-6.727 0 9.385 9.385 0 0 0-5.47-1.394l-.053.002c-2.377.148-4.625-1.071-5.76-3.124l-.016-.028a8.8 8.8 0 0 0-4.018-3.792l-.028-.014c-2.135-1.017-3.43-3.118-3.3-5.351l.003-.053a8.344 8.344 0 0 0-1.504-5.247 5.376 5.376 0 0 1 .002-6.181zM23.48 34.223c-.2 3.43 1.76 6.644 4.993 8.184l.033.016a5.833 5.833 0 0 1 2.664 2.513l.014.023c1.629 3.043 4.999 4.887 8.591 4.702l.055-.003a6.352 6.352 0 0 1 3.699.943 9.536 9.536 0 0 0 9.945 0 6.352 6.352 0 0 1 3.699-.943l.054.003c3.587.186 6.961-1.66 8.594-4.707l.008-.016A5.844 5.844 0 0 1 68.5 42.42l.027-.013c3.234-1.541 5.194-4.754 4.993-8.185l-.003-.047a5.41 5.41 0 0 1 .975-3.402 8.305 8.305 0 0 0 0-9.545 5.41 5.41 0 0 1-.975-3.4l.003-.051c.2-3.431-1.76-6.644-4.996-8.186l-.03-.014a5.828 5.828 0 0 1-2.66-2.504l-.017-.032c-1.63-3.043-5.004-4.886-8.59-4.702l-.056.003a6.347 6.347 0 0 1-3.697-.943h-.002a9.536 9.536 0 0 0-9.945 0 6.357 6.357 0 0 1-3.699.943l-.054-.003c-3.588-.187-6.961 1.659-8.59 4.7l-.013.023a5.836 5.836 0 0 1-2.667 2.516l-.031.014c-3.234 1.54-5.194 4.754-4.993 8.185l.003.048a5.407 5.407 0 0 1-.975 3.4 8.305 8.305 0 0 0 0 9.546 5.407 5.407 0 0 1 .974 3.402z" fill="#64b2db"></path>
                    <path d="M38.68 40.776c.676.432 1.566.22 1.989-.471l17.104-28.033c.28-.448.303-1.015.06-1.484A1.441 1.441 0 0 0 56.601 10a1.436 1.436 0 0 0-1.278.707L38.22 38.74a1.497 1.497 0 0 0 .46 2.036z" fill="#64b2db"></path>
                    <path d="M40.505 13.979c1.964 0 3.561 2.028 3.561 4.52 0 2.493-1.597 4.522-3.561 4.522s-3.561-2.03-3.561-4.521c0-2.492 1.597-4.521 3.56-4.521zM40.5 26c3.584 0 6.5-3.365 6.5-7.5 0-4.136-2.916-7.5-6.5-7.5S34 14.364 34 18.5c0 4.135 2.916 7.5 6.5 7.5z" fill="#64b2db"></path>
                    <path d="M60.066 33.5c0 2.493-1.597 4.521-3.561 4.521s-3.561-2.028-3.561-4.521 1.597-4.521 3.56-4.521c1.965 0 3.562 2.027 3.562 4.521zM56.5 41c3.584 0 6.5-3.365 6.5-7.5 0-4.134-2.916-7.5-6.5-7.5S50 29.363 50 33.5c0 4.136 2.916 7.5 6.5 7.5z" fill="#64b2db"></path>
                    <path d="M51.226 74.542a16.897 16.897 0 0 1-10.327 1.151L22.625 70.57a8.24 8.24 0 0 0-6.14.67l-1.567.84.42-15.239a16.385 16.385 0 0 1 16.632-.886l1.096.567a14.39 14.39 0 0 0 6.184 1.596l10.77.296a6.53 6.53 0 0 1 6.21 5.2l-16.044-.44a1.488 1.488 0 1 0-.082 2.975l17.706.486h.042a1.49 1.49 0 0 0 1.488-1.447 9.485 9.485 0 0 0-.144-1.93l11.965-5.65.035-.016a4.553 4.553 0 0 1 5.146.72zm-48.207.381l.632-22.907 8.833.242-.632 22.908zm66.852-19.997L58.204 60.43a9.506 9.506 0 0 0-8.102-4.992l-10.77-.296a11.399 11.399 0 0 1-4.896-1.262l-1.096-.567a19.357 19.357 0 0 0-17.906.018l.068-2.479a1.488 1.488 0 0 0-1.448-1.528l-11.81-.324a1.488 1.488 0 0 0-1.53 1.445L.001 76.328a1.488 1.488 0 0 0 1.448 1.528l11.81.325h.042a1.49 1.49 0 0 0 1.489-1.447l.033-1.238 3.068-1.64a5.272 5.272 0 0 1 3.93-.43l18.321 5.135c.032.01.064.017.097.024a19.897 19.897 0 0 0 12.33-1.394 1.46 1.46 0 0 0 .184-.1l26.566-17.16a1.485 1.485 0 0 0 .488-1.981 7.53 7.53 0 0 0-9.936-3.024z" fill="#64b2db"></path>
                </symbol>
                <symbol id="membership" viewBox="0 0 106 64" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.453 14.627H85.04v-3.87c0-2.401-1.97-4.355-4.39-4.355H10.843c-2.42 0-4.39 1.954-4.39 4.354zm97.797 22.448a2.684 2.684 0 0 1-.098 3.82c-3.444 3.241-8.94 3.83-13.658 2.657v9.697c0 5.377-4.415 9.751-9.842 9.751h-69.81C5.415 63 1 58.626 1 53.249V10.75C1 5.374 5.415 1 10.842 1h69.81c5.426 0 9.842 4.374 9.842 9.751v17.745c3.465 1.307 7.823 1.008 9.901-.949a2.744 2.744 0 0 1 3.855.097 2.683 2.683 0 0 1-.098 3.82c-4.898 4.612-13.952 3.855-19.014.29-3.688-2.598-9.633-2.74-12.233-.291a2.745 2.745 0 0 1-3.854-.097 2.684 2.684 0 0 1 .097-3.819c4.048-3.81 10.726-3.99 15.893-1.937V20.02H6.453v6.518h53.404c1.505 0 2.726 1.21 2.726 2.701 0 1.492-1.22 2.701-2.726 2.701H6.453v21.31c0 2.398 1.969 4.349 4.389 4.349h69.81c2.42 0 4.39-1.951 4.39-4.35v-12.13c-3.696-2.533-9.56-2.65-12.137-.224a2.744 2.744 0 0 1-3.854-.097 2.684 2.684 0 0 1 .097-3.819c4.972-4.682 13.915-3.882 19.149-.196 3.553 2.503 9.545 2.6 12.098.196a2.744 2.744 0 0 1 3.855.097zm-51.822 6.93a2.717 2.717 0 0 1 2.726 2.706 2.717 2.717 0 0 1-2.726 2.706h-6.27a2.717 2.717 0 0 1-2.727-2.706 2.717 2.717 0 0 1 2.726-2.706zm-16.445 0a2.717 2.717 0 0 1 2.726 2.706 2.717 2.717 0 0 1-2.726 2.706h-19.97a2.717 2.717 0 0 1-2.727-2.706 2.717 2.717 0 0 1 2.727-2.706z" fill="#64b2db"></path>
                    <path d="M6.453 14.627H85.04v-3.87c0-2.401-1.97-4.355-4.39-4.355H10.843c-2.42 0-4.39 1.954-4.39 4.354zm97.797 22.448a2.684 2.684 0 0 1-.098 3.82c-3.444 3.241-8.94 3.83-13.658 2.657v9.697c0 5.377-4.415 9.751-9.842 9.751h-69.81C5.415 63 1 58.626 1 53.249V10.75C1 5.374 5.415 1 10.842 1h69.81c5.426 0 9.842 4.374 9.842 9.751v17.745c3.465 1.307 7.823 1.008 9.901-.949a2.744 2.744 0 0 1 3.855.097 2.683 2.683 0 0 1-.098 3.82c-4.898 4.612-13.952 3.855-19.014.29-3.688-2.598-9.633-2.74-12.233-.291a2.745 2.745 0 0 1-3.854-.097 2.684 2.684 0 0 1 .097-3.819c4.048-3.81 10.726-3.99 15.893-1.937V20.02H6.453v6.518h53.404c1.505 0 2.726 1.21 2.726 2.701 0 1.492-1.22 2.701-2.726 2.701H6.453v21.31c0 2.398 1.969 4.349 4.389 4.349h69.81c2.42 0 4.39-1.951 4.39-4.35v-12.13c-3.696-2.533-9.56-2.65-12.137-.224a2.744 2.744 0 0 1-3.854-.097 2.684 2.684 0 0 1 .097-3.819c4.972-4.682 13.915-3.882 19.149-.196 3.553 2.503 9.545 2.6 12.098.196a2.744 2.744 0 0 1 3.855.097zm-51.822 6.93a2.717 2.717 0 0 1 2.726 2.706 2.717 2.717 0 0 1-2.726 2.706h-6.27a2.717 2.717 0 0 1-2.727-2.706 2.717 2.717 0 0 1 2.726-2.706zm-16.445 0a2.717 2.717 0 0 1 2.726 2.706 2.717 2.717 0 0 1-2.726 2.706h-19.97a2.717 2.717 0 0 1-2.727-2.706 2.717 2.717 0 0 1 2.727-2.706z" fill="none" stroke="#fff" stroke-miterlimit="50" stroke-width="2"></path>
                </symbol>
            </svg>
        </main>
@endsection
