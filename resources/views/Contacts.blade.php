@extends('layouts.main')

@section('header')

<header class="header header_has-columns">
            <div class="header__top-panel">
                <button class="burger header__burger"><span class="burger__line"></span><span class="burger__line"></span><span class="burger__line"></span>
                </button>
                <a class="header__logo" href="/">
                    <svg>
                        <use xlink:href="#logo"></use>
                    </svg>
                </a>
                <nav class="nav header__nav nav_main">
                @include('layouts.header_menu')
                </nav>
                <div class="header__lang-switcher lang lang_main">
                    <button class="lang__trigger">En
                        <svg>
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </button>
                    <ul class="lang__list">
                        <li class="lang__current">
                            <button class="lang__trigger">En
                                <svg>
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                            </button>
                        </li>
                        <li class="lang__option">
                            <a href="#">Hu</a>
                        </li>
                        <li class="lang__option">
                            <a href="#">En</a>
                        </li>
                    </ul>
                </div>
                <a class="header__cart cart-link cart-link_main" href="shopping-cart.html">
                    <svg class="cart-link__icon">
                        <use xlink:href="#shopping-bag"></use>
                    </svg><span class="cart-link__counter">2</span>
                </a>
                <div class="header__auth">
                    <a href="newsletter-subscription.html">Subscribe</a>
                    <button class="js-open-popup" data-popup-id="signin">Sign in</button>
                </div>
            </div>
            <div class="header__row js-block-cnt">
                <div class="header__content">
                    <div class="banner">
                        <h1 class="title banner__title color-blue">Contacts</h1>
                    </div>
                    <div class="header-contacts">
                        <div class="header-contacts__col">
                            <div class="header-contacts__block">
                                <h2 class="header-contacts__heading">ADDRESS:</h2>
                                <div class="header-contacts__content">1074 Budapest, Rumbach Sebestyén u. 12, fszt.</div>
                            </div>
                            <div class="header-contacts__block">
                                <h2 class="header-contacts__heading">COFFE STORE MANAGER:</h2>
                                <div class="header-contacts__content">Orobinszkij Dániel <a href="tel:+36705506011">+3670/550 60 11</a>
                                </div>
                            </div>
                            <div class="header-contacts__block">
                                <h2 class="header-contacts__heading">HEAD MANAGER:<br><i>With any other question</i>
                                </h2>
                                <div class="header-contacts__content">Benkő Attila <a href="tel:+36706102442">+3670/610 24 42 </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-contacts__col">
                            <div class="header-contacts__block">
                                <h2 class="header-contacts__heading">EDUCATION FOR BARISTAS AND PROFESSIONAL CONSULTING:</h2>
                                <div class="header-contacts__content">Horváth Attila <a href="tel:+36307849081">+3630/784 90 81 </a>
                                    <a href="mailto:bluebirdbaristas@gmail.com">bluebirdbaristas@gmail.com</a>
                                </div>
                            </div>
                            <div class="header-contacts__block">
                                <h2 class="header-contacts__heading">To make an order:</h2>
                                <div class="header-contacts__content">
                                    <a href="mailto:bluebirdroastery@gmail.com">bluebirdroastery@gmail.com</a>
                                </div>
                            </div>
                            <button class="header-contacts__button button button_blue">Contact Us</button>
                        </div>
                    </div>
                </div>
                <div class="header__picture header__picture_keep">
                    <div class="header__iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86256.52734472117!2d19.012056505233627!3d47.49933206308122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc420682ae6d%3A0x9e38ac65096abc3b!2zQnVkYXBlc3QsIFJ1bWJhY2ggU2ViZXN0ecOpbiB1LiAxMiwgMTA3NSDQktC10L3Qs9GA0LjRjw!5e0!3m2!1sru!2sua!4v1566122179585!5m2!1sru!2sua" allowfullscreen></iframe>
                    </div>
                </div>
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
    <section class="lets-work js-block-cnt">
        <div class="container">
            <h2 class="title color-blue lets-work__title">We are open to cooperation</h2>
            <p class="lets-work__note">If you have any questions or comments, write to us!</p>
            <form class="lets-work__form form">
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
                    <input class="field__input" type="text" name="comments" placeholder="Comments" required>
                </label>
                <input class="button button_blue" type="submit" value="Send">
            </form>
        </div>
    </section>
</main>
@endsection