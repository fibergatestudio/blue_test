<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Blue Bird Cafe | Newsletter Subscription</title>
    <!-- Webp support detection-->
    <script>
        (function() {
            var webP = new Image();
            webP.onload = webP.onerror = function() {
                var result = webP.height == 2;
                window.hasWebp = result;
                document.documentElement.classList.add(result ? 'webp' : 'nowebp');
            };
            webP.src = 'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
        })();
    </script>
    <link rel="stylesheet" href="{{ url('assets/css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/main.css?1566387414270') }}">
</head>

<body>
    <div class="wrapper">
        <header class="header header_inner">
            <div class="header__top-panel">
                <button class="burger header__burger"><span class="burger__line"></span><span class="burger__line"></span><span class="burger__line"></span>
                </button>
                <a class="header__logo" href="/">
                    <svg>
                        <use xlink:href="#logo"></use>
                    </svg>
                </a>
                <nav class="nav header__nav">
                    <ul class="nav__list">
                        <li class="nav__item nav__item">
                            <a href="catalog.html">Shop</a>
                        </li>
                        <li class="nav__item nav__item">
                            <a href="box-creator.html">Blue Box</a>
                        </li>
                        <li class="nav__item nav__item nav__item_has-submenu"><span>Learn</span>
                            <svg>
                                <use xlink:href="#arrow-down"></use>
                            </svg>
                            <div class="nav__submenu submenu">
                                <div class="submenu__wrapper">
                                    <div class="submenu__category">
                                        <h2 class="submenu__title">COFFEE</h2>
                                        <ul class="submenu__list">
                                            <li class="submenu__item">
                                                <a href="catalog.html">Online Shop</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="coffee-beans.html">Coffee Beans</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="flavored-coffee.html">Flavored Coffee</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="capsules.html">Coffee Capsules</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="turkish-coffee.html">Turkish Coffee</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="about-our-cafe.html">Our Cafe (Rumbach)</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="submenu__category">
                                        <h2 class="submenu__title">LEARN</h2>
                                        <ul class="submenu__list">
                                            <li class="submenu__item">
                                                <a href="about-us.html">About Us</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="about-bb-group.html">About BB Group</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="shipping.html">Payment &amp; Shipping</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="tutorials.html">Tutorial</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="faq.html">FAQ</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="submenu__category">
                                        <h2 class="submenu__title">FOR CLIENTS</h2>
                                        <ul class="submenu__list">
                                            <li class="submenu__item">
                                                <a href="box-creator.html">Blue Box</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="coffee-subscription.html">Coffee Subscription</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="services.html">Services</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="barista-trainings.html">Barista Trainings</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="for-businesses.html">For Businesses</a>
                                            </li>
                                            <li class="submenu__item">
                                                <a href="loyality-program.html">Loyalty Program</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav__item nav__item">
                            <a href="contact-us.html">Contacts</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__lang-switcher lang lang_inner">
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
                <a class="header__cart cart-link" href="shopping-cart.html">
                    <svg class="cart-link__icon">
                        <use xlink:href="#shopping-bag"></use>
                    </svg><span class="cart-link__counter">2</span>
                </a>
                <div class="header__auth">
                    <a href="newsletter-subscription.html">Subscribe</a>
                    <button class="js-open-popup" data-popup-id="signin">Sign in</button>
                </div>
            </div>
        </header>
        <main>
            <div class="page page_has-filter">
                <aside class="sidebar" id="sidebar">
                    <div class="manage-account">
                        <h2 class="manage-account__title">Manage Account</h2>
                        <ul class="manage-account__menu">
                            <li class="manage-account__item">
                                <a href="personal-information.html">Personal Information</a>
                            </li>
                            <li class="manage-account__item">
                                <a href="change-password.html">Change Password</a>
                            </li>
                            <li class="manage-account__item manage-account__item_current">
                                <a href="newsletter-subscription.html">Newsletter Subscription</a>
                            </li>
                            <li class="manage-account__item">
                                <a href="billing.html">Billing</a>
                            </li>
                            <li class="manage-account__item">
                                <a href="your-purchases.html">Your Purchases</a>
                            </li>
                            <li class="manage-account__item">
                                <a href="refer-a-friend.html">Refer a Friend</a>
                            </li>
                        </ul>
                    </div>
                </aside>
                <div class="page__content">
                    <div class="container page__container">
                        <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="#">FAQ </a>
                            </li>
                        </ul>
                        <a class="back-button page__back-button" href="#">
                            <svg>
                                <use xlink:href="#long-arrow"></use>
                            </svg>
                        </a>
                        <h1 class="page__title">Have any questions?</h1>
                        <div class="cart faq-page">
                            <div class="cart__mob-btns">
                                <button class="cart__menu-trigger js-box-trigger" data-target-id="sidebar">Manage account</button>
                            </div>
                            <div class="search faq-page__search">
                                <form class="search__field">
                                    <button class="search__button search__button_submit">
                                        <svg>
                                            <use xlink:href="#lens"></use>
                                        </svg>
                                    </button>
                                    <input type="search" name="catalogSearch" placeholder="Search">
                                </form>
                            </div>
                            <div class="faq-page__content">
                                <h2 class="page__title faq-page__title">Coffee Shop</h2>
                                <div class="faq-page__item">
                                    <div class="faq-page__question">
                                        <label for="question1">How can I subscribe to fresh roasted coffee?</label>
                                        <button class="button button_blue button_round faq-page__show-answer js-show-hidden-block" id="question1" data-selector="#answer1"><span>+</span><span>-</span>
                                        </button>
                                    </div>
                                    <div class="faq-page__answer" id="answer1">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum est ratione, minima accusamus consectetur voluptate velit, iure rerum iste similique?</p>
                                    </div>
                                </div>
                                <div class="faq-page__item">
                                    <div class="faq-page__question">
                                        <label for="question2">Why is subscribing to fresh roasted coffee beneficial?</label>
                                        <button class="button button_blue button_round faq-page__show-answer js-show-hidden-block" id="question2" data-selector="#answer2"><span>+</span><span>-</span>
                                        </button>
                                    </div>
                                    <div class="faq-page__answer" id="answer2">
                                        <p>If you are subscribed to any of our fresh roasted coffee blends made by Blue Bird Café, you get fresh roasted coffee delivered to your doorstep for a reasonable price each month. You can read more about subscription to fresh roasted coffee blends and the advantages of home delivery here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="scroll-panel scroll-panel_abs scroll-panel_footer">
                <a class="scroll-panel__logo" href="/">
                    <svg>
                        <use xlink:href="#logo"></use>
                    </svg>
                </a>
                <button class="scroll-panel__slide-to slide-btn" data-scroll-to-point="0"><span class="slide-btn__up">
                    <svg>
                      <use xlink:href="#long-arrow"></use>
                    </svg></span>
                </button>
            </div>
            <div class="footer__row">
                <div class="footer__col">
                    <h2 class="footer__title">COFFEE</h2>
                    <ul class="footer__nav">
                        <li>
                            <a href="#">Online Shop</a>
                        </li>
                        <li>
                            <a href="#">Coffee Beans</a>
                        </li>
                        <li>
                            <a href="#">Flavored Coffee</a>
                        </li>
                        <li>
                            <a href="#">Coffee Capsules</a>
                        </li>
                        <li>
                            <a href="#">Turkish Coffee</a>
                        </li>
                        <li>
                            <a href="#">Our Coffee (Rumbach)</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__col">
                    <h2 class="footer__title">Learn</h2>
                    <ul class="footer__nav">
                        <li>
                            <a href="about-us.html">About Us</a>
                        </li>
                        <li>
                            <a href="about-bb-group.html">About BB Group</a>
                        </li>
                        <li>
                            <a href="shipping.html">Payment &amp; Shipping</a>
                        </li>
                        <li>
                            <a href="tutorials.html">Tutorial</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="#">Contacts</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__col">
                    <h2 class="footer__title">FOR CLIENTS</h2>
                    <ul class="footer__nav">
                        <li>
                            <a href="#">Blue Box</a>
                        </li>
                        <li>
                            <a href="#">Coffee Subscription</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Barista Trainings</a>
                        </li>
                        <li>
                            <a href="#">For Businesses</a>
                        </li>
                        <li>
                            <a href="#">Loyalty Program</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__col">
                    <ul class="footer__contacts">
                        <li>
                            <svg class="icon_placeholder">
                                <use xlink:href="#placeholder"></use>
                            </svg>1074 Budapest Rumbach Sebestyén utca 12
                        </li>
                        <li>
                            <svg class="icon_tel">
                                <use xlink:href="#tel"></use>
                            </svg>
                            <a href="tel:+36307849081">+3630 784 90 81</a>
                        </li>
                        <li>
                            <svg class="icon_envelope">
                                <use xlink:href="#black-envelope"></use>
                            </svg>
                            <a href="mailto:bluebirdroastery@gmail.com">bluebirdroastery@gmail.com</a>
                        </li>
                    </ul>
                    <div class="footer__socials">
                        <h2>Follow us:</h2>
                        <ul>
                            <li>
                                <a href="#">
                                    <svg class="icon_instagram">
                                        <use xlink:href="#instagram"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="icon_facebook">
                                        <use xlink:href="#facebook"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="footer__privacy footer__privacy_md">
                            <a href="#">Terms and conditions </a>
                            <a href="#">Privacy Policy</a>
                        </div>
                    </div>
                </div>
                <div class="footer__col">
                    <form class="subscribe-card">
                        <svg class="subscribe-card__icon">
                            <use xlink:href="#email"></use>
                        </svg>
                        <h2 class="subscribe-card__title">Want to hear coffee news from us?</h2>
                        <input class="subscribe-card__email" type="email" name="email" required placeholder="Enter your email">
                        <input class="subscribe-card__button button button_white" type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
            <div class="footer__row footer__row_bottom">
                <div class="footer__copyrights">© 2019 Roastery. All right reserved</div>
                <div class="footer__privacy footer__privacy_md-hidden">
                    <a href="terms.html">Terms and conditions </a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
        </footer>
        <div class="bb-floating">
            <a class="bb-floating__button" href="#"><span>BLUE BOX</span>
            </a>
        </div>
    </div>
    <div class="layout">
        <div class="layout__back js-close-popup"></div>
        <div class="popup" id="signin">
            <button class="popup__close js-close-popup">
                <svg>
                    <use xlink:href="#close"></use>
                </svg>
            </button>
            <div class="account-popup">
                <div class="account-popup__additional account-popup__additional_login">
                    <h2>Welcome Back!</h2>
                    <p>To keep connected with us please log in with your personal info</p>
                    <button class="button button_transparent-white js-open-popup" data-popup-id="login">Log in</button>
                </div>
                <div class="account-popup__main">
                    <h2>Create Account</h2>
                    <form class="account-popup__form form">
                        <label class="form__field field">
                            <svg class="field__icon field__icon_user">
                                <use xlink:href="#user"></use>
                            </svg>
                            <input class="field__input" type="text" name="name" placeholder="Name" required>
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_envelope">
                                <use xlink:href="#envelope"></use>
                            </svg>
                            <input class="field__input" type="email" name="email" placeholder="Email" required>
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_padlock">
                                <use xlink:href="#padlock"></use>
                            </svg>
                            <input class="field__input" type="password" name="password" placeholder="Password" required>
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_padlock">
                                <use xlink:href="#padlock"></use>
                            </svg>
                            <input class="field__input" type="password" name="password" placeholder="Confirm password" required>
                        </label>
                        <input class="button button_blue" type="submit" value="Sign Up">
                    </form>
                </div>
            </div>
        </div>
        <div class="popup" id="login">
            <button class="popup__close popup__close_white js-close-popup">
                <svg>
                    <use xlink:href="#close"></use>
                </svg>
            </button>
            <div class="account-popup">
                <div class="account-popup__main">
                    <h2>Log In</h2>
                    <form class="account-popup__form form">
                        <label class="form__field field">
                            <svg class="field__icon field__icon_envelope">
                                <use xlink:href="#envelope"></use>
                            </svg>
                            <input class="field__input" type="email" name="email" placeholder="Email" required>
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_padlock">
                                <use xlink:href="#padlock"></use>
                            </svg>
                            <input class="field__input" type="password" name="password" placeholder="Password" required>
                        </label>
                        <div>
                            <button class="account-popup__recovery js-open-popup" data-popup-id="recovery" type="button">Forgot your password?</button>
                        </div>
                        <input class="button button_blue" type="submit" value="Log In">
                    </form>
                </div>
                <div class="account-popup__additional account-popup__additional_register">
                    <h2>Hello!</h2>
                    <p>Enter your personal details and enjoy the best coffee ever! </p>
                    <button class="button button_transparent-white js-open-popup" data-popup-id="signin">Register</button>
                </div>
            </div>
        </div>
        <div class="popup" id="recovery">
            <button class="popup__close js-close-popup">
                <svg>
                    <use xlink:href="#close"></use>
                </svg>
            </button>
            <div class="account-popup">
                <div class="account-popup__main account-popup__main_recovery">
                    <h2>Forgot Your Password?</h2>
                    <p>Please confirm your email address below and we will send you a verification code. </p>
                    <form class="account-popup__form form">
                        <label class="form__field field">
                            <svg class="field__icon field__icon_envelope">
                                <use xlink:href="#envelope"></use>
                            </svg>
                            <input class="field__input" type="email" name="email" placeholder="Email" required>
                        </label>
                        <input class="button button_blue" type="submit" value="Reset password">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="position: absolute; left: -10000px; top: -1px; width: 1px; height: 1px; overflow: hidden;">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol fill="currentColor" viewBox="0 0 9 6" preserveAspectRatio="none" id="arrow-down" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 5a.488.488 0 01-.347-.144L1.143 1.84a.492.492 0 010-.695.49.49 0 01.694 0L4.5 3.814l2.663-2.67a.49.49 0 01.693 0 .492.492 0 010 .695l-3.01 3.017A.488.488 0 014.5 5z" />
            </symbol>
            <symbol viewBox="0 0 27 35" id="barista" xmlns="http://www.w3.org/2000/svg">
                <path fill="#64b2db" d="M11.5 12c.276 0 .5-.336.5-.75v-1.5c0-.414-.224-.75-.5-.75s-.5.336-.5.75v1.5c0 .414.224.75.5.75zm4 0c.276 0 .5-.336.5-.75v-1.5c0-.414-.224-.75-.5-.75s-.5.336-.5.75v1.5c0 .414.224.75.5.75zM11.04.889c1.138-.002 2.22.391 2.963 1.076.174.16.467.202.7.098a3.447 3.447 0 012.788.019C18.35 2.48 18.878 3.21 18.88 4H20c-.002-1.043-.66-2.016-1.755-2.592-1.095-.576-2.48-.68-3.692-.276C13.101.012 10.945-.31 9.08.315 7.213.941 6 2.392 6 4h1.12C7.122 2.283 8.876.89 11.04.889zM9.5 30a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm8 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                <path fill="#64b2db" d="M25.836 23.6h-5.293v-1.8h5.293zm-1.76 10.2h-3.533v-9h3.532zm-7.054 0H9.978v-.6c0-.994.789-1.8 1.761-1.8h3.522c.972 0 1.76.806 1.76 1.8zM7.63 26h11.74v7.8h-1.174v-.6c-.002-1.656-1.315-2.998-2.935-3h-3.522c-1.62.002-2.933 1.344-2.935 3v.6H7.63zm-4.695-1.2h3.532v9H2.935zm-1.761-3h5.293v1.8H1.174zm4.104-4.2h3.516l-.037 7.2H7.622v-5.4H6.45v1.2H2.348c.002-1.656 1.313-2.998 2.93-3zm1.179-7.2a.594.594 0 01-.587-.6V8.6c0-.331.262-.6.587-.6h.586v2.4zm12.316-4.2v6.6c0 2.982-2.363 5.4-5.278 5.4-2.915 0-5.278-2.418-5.278-5.4V6.2zm1.77 1.8c.325 0 .587.269.587.6v1.2c0 .331-.262.6-.587.6h-.586V8zm-3.538 10.329l-.033 6.471H9.938l.034-6.48a6.298 6.298 0 003.523 1.08 6.297 6.297 0 003.51-1.071zM19.37 24.8h-1.214l.037-7.2h1.177zm5.282-4.2h-4.109v-3h1.174c1.62.002 2.933 1.344 2.935 3zm1.174 0c-.002-2.318-1.84-4.197-4.109-4.2h-2.812a6.663 6.663 0 001.052-3.6v-1.2h.586c.973 0 1.761-.806 1.761-1.8V8.6c0-.994-.788-1.8-1.76-1.8h-.587v-.6h.586V5H5.87v1.2h1.173v.6h-.586c-.973 0-1.761.806-1.761 1.8v1.2c0 .994.788 1.8 1.76 1.8h.587v1.2c0 1.28.366 2.53 1.052 3.6H5.283c-2.268.003-4.106 1.882-4.11 4.2H.588a.594.594 0 00-.587.6v3c0 .331.263.6.587.6h1.174v9.6c0 .331.263.6.587.6h22.304a.594.594 0 00.587-.6v-9.6h1.174a.594.594 0 00.587-.6v-3c0-.331-.263-.6-.587-.6z" />
            </symbol>
            <symbol viewBox="0 0 24 29" id="bean-bag" xmlns="http://www.w3.org/2000/svg">
                <path fill="#64b2db" d="M15.646 17.645c-2.503 2.505-5.956 3.132-7.69 1.398-.066-.065-.12-.137-.18-.207a4.828 4.828 0 011.64-.651 5.392 5.392 0 002.878-1.557 5.404 5.404 0 001.56-2.883 4.381 4.381 0 011.296-2.42 4.133 4.133 0 012.041-1.2c1.541 1.78.884 5.091-1.545 7.52zm-1.194-8.67c.63-.01 1.251.132 1.814.415-.686.278-1.305.7-1.815 1.236a5.388 5.388 0 00-1.556 2.878 4.388 4.388 0 01-1.3 2.425 4.382 4.382 0 01-2.419 1.297 5.814 5.814 0 00-1.91.764c-.765-1.86.019-4.568 2.088-6.637 1.548-1.547 3.456-2.379 5.098-2.379zM7.257 19.741a4.537 4.537 0 003.281 1.256 8.51 8.51 0 005.807-2.654c2.891-2.891 3.52-6.968 1.398-9.088-2.12-2.12-6.197-1.492-9.088 1.398-2.891 2.891-3.52 6.97-1.398 9.088z" />
                <path fill="#64b2db" d="M23.04 24.65H3.36v.967h19.68v.966c0 .801-.645 1.45-1.44 1.45H2.4c-.795 0-1.44-.649-1.44-1.45v-.966H2.4v-.967H.96V9.88c0-.997.278-1.973.803-2.818l.183-.295H4.32V5.8H2.546l.6-.967h17.708l.6.967H19.68v.967h2.374l.183.295c.525.845.803 1.821.803 2.818zM19.2.967c.795 0 1.44.649 1.44 1.45v1.45H3.36v-1.45c0-.801.645-1.45 1.44-1.45zm2.4 3.244V2.417A2.411 2.411 0 0019.2 0H4.8a2.411 2.411 0 00-2.4 2.417V4.21L.949 6.551A6.304 6.304 0 000 9.88v16.703A2.411 2.411 0 002.4 29h19.2a2.411 2.411 0 002.4-2.417V9.88a6.308 6.308 0 00-.948-3.33z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 21 14" id="black-envelope" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.389.84l7.797 5.8c.353.263.84.38 1.314.357.472.022.96-.094 1.313-.357L19.61.84c.625-.461.483-.84-.31-.84H1.7c-.792 0-.933.379-.31.84z" />
                <path d="M19.884 2.225l-8.266 6.032c-.309.223-.714.332-1.117.327-.404.005-.809-.104-1.118-.327L1.116 2.225C.502 1.778 0 2.018 0 2.758v9.896C0 13.394.63 14 1.4 14h18.2c.77 0 1.4-.606 1.4-1.346V2.758c0-.74-.502-.98-1.116-.533z" />
            </symbol>
            <symbol viewBox="0 0 12 12" id="chat-comment" xmlns="http://www.w3.org/2000/svg">
                <path fill="#64b2db" d="M11.25 5.25C11.25 2.765 8.9.75 6 .75S.75 2.765.75 5.25c0 1.525.887 2.87 2.24 3.684l-.023 1.74 1.765-1.062c.407.087.83.138 1.268.138 2.9 0 5.25-2.015 5.25-4.5zm.75 0c0 2.9-2.686 5.25-6 5.25a6.88 6.88 0 01-1.122-.095L2.25 12V9.345C.88 8.382 0 6.907 0 5.25 0 2.35 2.687 0 6 0c3.314 0 6 2.35 6 5.25zM9 4.5a.375.375 0 01-.375.375h-5.25a.375.375 0 010-.75h5.25c.207 0 .375.168.375.375zm-.75 2.25a.375.375 0 01-.375.375h-3.75a.375.375 0 010-.75h3.75c.207 0 .375.168.375.375z" />
            </symbol>
            <symbol viewBox="0 0 17 17" id="clock" xmlns="http://www.w3.org/2000/svg">
                <path fill="#64b2db" d="M14.204 11.815a6.584 6.584 0 01-2.411 2.406 6.453 6.453 0 01-3.305.886 6.344 6.344 0 01-2.559-.525 6.705 6.705 0 01-2.1-1.404 6.675 6.675 0 01-1.402-2.11 6.473 6.473 0 01-.516-2.571c0-1.191.292-2.293.877-3.301A6.588 6.588 0 015.191 2.79a6.403 6.403 0 013.297-.887 6.45 6.45 0 013.305.887 6.604 6.604 0 012.41 2.406 6.42 6.42 0 01.887 3.3 6.492 6.492 0 01-.886 3.319zm1.197-6.236c-.79-1.845-2.134-3.187-3.994-3.98A7.369 7.369 0 008.487 1c-1.016 0-1.983.2-2.91.599-1.844.791-3.194 2.132-3.987 3.98A7.306 7.306 0 001 8.492c0 1.017.194 1.995.59 2.921.793 1.848 2.143 3.197 3.986 3.988A7.293 7.293 0 008.488 16c1.017 0 1.99-.203 2.92-.599 1.858-.793 3.202-2.143 3.993-3.988A7.344 7.344 0 0016 8.492a7.3 7.3 0 00-.599-2.913z" />
                <path fill="none" stroke="#64b2db" stroke-miterlimit="50" stroke-width=".5" d="M14.204 11.815a6.584 6.584 0 01-2.411 2.406 6.453 6.453 0 01-3.305.886 6.344 6.344 0 01-2.559-.525 6.705 6.705 0 01-2.1-1.404 6.675 6.675 0 01-1.402-2.11 6.473 6.473 0 01-.516-2.571c0-1.191.292-2.293.877-3.301A6.588 6.588 0 015.191 2.79a6.403 6.403 0 013.297-.887 6.45 6.45 0 013.305.887 6.604 6.604 0 012.41 2.406 6.42 6.42 0 01.887 3.3 6.492 6.492 0 01-.886 3.319zm1.197-6.236c-.79-1.845-2.134-3.187-3.994-3.98A7.369 7.369 0 008.487 1c-1.016 0-1.983.2-2.91.599-1.844.791-3.194 2.132-3.987 3.98A7.306 7.306 0 001 8.492c0 1.017.194 1.995.59 2.921.793 1.848 2.143 3.197 3.986 3.988A7.293 7.293 0 008.488 16c1.017 0 1.99-.203 2.92-.599 1.858-.793 3.202-2.143 3.993-3.988A7.344 7.344 0 0016 8.492a7.3 7.3 0 00-.599-2.913z" />
                <path fill="#64b2db" d="M8.827 8.839V4.472c0-.261-.197-.472-.424-.472C8.19 4 8 4.21 8 4.472v4.434c0 .009.015.042.015.068a.483.483 0 00.11.38l2.189 2.52a.377.377 0 00.564 0 .503.503 0 000-.658z" />
                <path fill="none" stroke="#64b2db" stroke-miterlimit="50" stroke-width=".5" d="M8.827 8.839v0-4.367c0-.261-.197-.472-.424-.472C8.19 4 8 4.21 8 4.472v4.434c0 .009.015.042.015.068a.483.483 0 00.11.38l2.189 2.52a.377.377 0 00.564 0 .503.503 0 000-.658z" />
            </symbol>
            <symbol viewBox="0 0 10 10" fill="currentColor" id="close" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.884 5l3.933-3.932a.625.625 0 10-.885-.885L5 4.116 1.068.183a.625.625 0 10-.885.885L4.116 5 .183 8.933a.625.625 0 10.885.884L5 5.884l3.932 3.933a.623.623 0 00.885 0 .625.625 0 000-.885z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 38 45" id="coffee" xmlns="http://www.w3.org/2000/svg">
                <path d="M36.214 10.898H1.776V7.026h19.948c.49 0 .887-.394.887-.88a.883.883 0 00-.887-.878H5.18l1.417-3.309a.332.332 0 01.306-.201h24.184c.134 0 .254.079.306.201l1.417 3.309h-3.986a.883.883 0 00-.887.879c0 .485.397.879.887.879h7.391zm-7.105 32.05a.333.333 0 01-.33.284H9.21a.333.333 0 01-.33-.285l-4.214-30.29h28.656zm7.145-37.68h-1.506l-1.711-3.995A2.106 2.106 0 0031.095 0H6.905c-.849 0-1.61.5-1.942 1.273l-1.71 3.995H1.745A1.74 1.74 0 000 6.997v3.93a1.74 1.74 0 001.746 1.73h1.13l4.248 30.54A2.11 2.11 0 009.213 45h19.574a2.11 2.11 0 002.09-1.803l4.248-30.54h1.129A1.74 1.74 0 0038 10.926v-3.93a1.74 1.74 0 00-1.746-1.73z" />
                <path d="M16.005 24.005c.8-.8 1.864-1.24 2.995-1.24a4.2 4.2 0 012.62.909A2.63 2.63 0 0119 26.118a4.397 4.397 0 00-3.937 2.447A4.227 4.227 0 0114.765 27c0-1.131.44-2.195 1.24-2.995zM19 31.235c-.963 0-1.877-.32-2.62-.909A2.63 2.63 0 0119 27.882a4.397 4.397 0 003.937-2.447c.195.492.298 1.02.298 1.565 0 1.131-.44 2.195-1.24 2.995-.8.8-1.864 1.24-2.995 1.24zM19 33a5.96 5.96 0 004.243-1.757A5.96 5.96 0 0025 27a5.96 5.96 0 00-1.757-4.243A5.96 5.96 0 0019 21a5.96 5.96 0 00-4.243 1.757A5.96 5.96 0 0013 27a5.96 5.96 0 001.757 4.243A5.96 5.96 0 0019 33zm6-28a1.005 1.005 0 00-1 1c0 .263.107.52.293.707.186.186.444.293.707.293a1.004 1.004 0 00.707-1.707A1.006 1.006 0 0025 5z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 65 65" id="coffee-bag" xmlns="http://www.w3.org/2000/svg">
                <path d="M54.297 62.847c.01-.013.018-.026.027-.04 1.073-1.52 2.289-3.243 2.289-6.547 0-3.303-1.216-5.025-2.289-6.546-1.022-1.448-1.905-2.699-1.905-5.338 0-2.636.883-3.886 1.905-5.333.248-.352.497-.72.741-1.107 4.443 1.018 7.838 6.178 7.838 12.387 0 6.564-3.791 11.961-8.606 12.524zM44.032 50.323c0-6.562 3.794-11.96 8.612-12.524-.01.012-.016.023-.024.035-1.074 1.519-2.291 3.24-2.291 6.542 0 3.304 1.217 5.026 2.29 6.548 1.023 1.447 1.907 2.698 1.907 5.336 0 2.64-.884 3.89-1.906 5.338-.25.353-.5.723-.744 1.11-4.447-1.018-7.844-6.177-7.844-12.385zm-17.05 10.773c.062-.01.121-.023.184-.034 1.906-.33 4.067-.701 6.493-3.13 2.427-2.427 2.8-4.587 3.13-6.494.316-1.83.588-3.411 2.545-5.368 1.381-1.38 2.575-1.918 3.802-2.227a17.89 17.89 0 00-1.2 6.48c0 2.572.526 4.99 1.443 7.094-.278.324-.545.623-.805.883-4.851 4.85-11.655 6.005-15.592 2.796zm-2.74-4.476l-8.258-.007c-3.888 0-7.402-1.61-9.926-4.193h16.15a13.63 13.63 0 00-.192 2.092l2.097.009c.012-3.493 1.69-7.165 4.603-10.079 4.77-4.766 11.456-5.97 15.416-2.942-1.854.322-3.942.75-6.28 3.088-2.427 2.427-2.8 4.588-3.13 6.495-.315 1.83-.587 3.411-2.545 5.368-1.958 1.958-3.538 2.23-5.369 2.546-.47.081-.958.177-1.454.291a7.063 7.063 0 01-.892-1.912zM10.485 46.13V29.356h23.074v9.455c-2.237.864-4.417 2.25-6.317 4.148a19.254 19.254 0 00-2.549 3.17zm-7.972-6.772L6.06 25.163h31.911l3.206 12.822c-1.747-.337-3.634-.27-5.532.177V27.259H8.387v20.967h15.124a16.394 16.394 0 00-.814 2.097H4.373a13.798 13.798 0 01-2.276-7.596c0-1.134.139-2.267.415-3.369zm9.373-37.234c1.157.129 2.303.708 3.229 1.634 1.3 1.3 1.9 3.093 1.55 4.533-.105.097-.212.191-.31.293l-6.221-6.221a3.503 3.503 0 011.752-.24zM26.68 10.69c-.913.242-1.55.657-2.091 1.02-.732.486-1.31.871-2.567.871-1.256 0-1.834-.385-2.566-.872-.541-.36-1.178-.777-2.09-1.02.868-1.359 2.618-2.301 4.656-2.301s3.789.942 4.658 2.302zm5.467-8.567a3.505 3.505 0 011.753.238l-6.222 6.222c-.097-.102-.204-.195-.308-.292-.352-1.44.244-3.229 1.549-4.534.925-.926 2.072-1.506 3.228-1.634zM10.92 11.097c1.524 1.525 2.023 3.577 1.416 5L5.94 9.7a3.488 3.488 0 011.753-.238c1.155.13 2.302.71 3.228 1.635zm3.347 1.452c.14-.013.278-.028.415-.05-.001.028-.006.055-.006.083 0 1.612.718 3.08 1.884 4.194h-2.257c.494-1.284.474-2.785-.036-4.227zm7.748 4.237c-2.838 0-5.144-1.822-5.226-4.081.593.151 1.015.427 1.499.751.819.548 1.837 1.228 3.727 1.228s2.908-.68 3.727-1.228c.486-.324.907-.6 1.5-.751-.084 2.26-2.389 4.08-5.227 4.08zm9.699-.707c-.611-1.457-.108-3.477 1.397-4.982.926-.926 2.073-1.507 3.228-1.635a3.505 3.505 0 011.753.238zm-2.36-3.497c0-.028-.004-.057-.005-.085.136.023.274.038.414.05-.511 1.444-.53 2.944-.037 4.229h-2.258c1.169-1.115 1.886-2.582 1.886-4.194zm8.831 3.59c-.211.211-.465.41-.753.614h-3.45l5.601-5.602c.217.516.31 1.108.24 1.755-.13 1.158-.71 2.306-1.638 3.233zm-2.8-12.331c.445 1.087.276 2.51-.492 3.799a7.82 7.82 0 00-3.962 2.78c-.704.108-1.366.044-1.932-.192zM8.641 3.837l6.39 6.39c-.569.237-1.229.3-1.932.193a7.821 7.821 0 00-3.965-2.78c-.78-1.306-.95-2.718-.493-3.803zM5.853 16.173c-.926-.927-1.506-2.076-1.634-3.233a3.529 3.529 0 01.238-1.756l5.593 5.602H6.605a5.906 5.906 0 01-.752-.613zm-.611 6.903a1.051 1.051 0 01-1.048-1.051v-2.102c0-.579.47-1.05 1.048-1.05H38.79a1.05 1.05 0 011.049 1.05v2.102a1.05 1.05 0 01-1.049 1.05zm48.226 12.57c-3.133 0-5.974 1.603-8.055 4.192a9.597 9.597 0 00-1.896-1.116l-3.454-13.834a3.147 3.147 0 001.872-2.87V19.92a3.14 3.14 0 00-1.778-2.82c2.205-2.637 2.39-6.236.322-8.305-.85-.849-1.957-1.315-3.15-1.42.781-2.175.439-4.436-1.043-5.918-2.213-2.213-6.185-1.848-8.85.819-1.327 1.326-2.099 3.003-2.238 4.646a8.29 8.29 0 00-3.182-.63 8.3 8.3 0 00-3.184.63c-.14-1.645-.913-3.325-2.236-4.647C15.335 1.015 13.744.22 12.117.039 10.4-.15 8.85.352 7.745 1.457c-1.478 1.478-1.82 3.742-1.04 5.917-1.194.107-2.303.572-3.152 1.422-2.068 2.069-1.883 5.668.322 8.306a3.138 3.138 0 00-1.778 2.819v2.097c0 1.28.771 2.38 1.87 2.869L.478 38.85A16.01 16.01 0 000 42.727C0 51.54 7.17 58.71 15.983 58.71l6.72.006c.477 1.241 1.212 2.35 2.23 3.367 1.955 1.956 4.608 2.903 7.47 2.903 3.925 0 8.238-1.786 11.655-5.203.121-.12.242-.257.364-.386C46.534 62.802 49.8 65 53.468 65 59.826 65 65 58.416 65 50.323s-5.174-14.677-11.532-14.677z" />
                <path d="M23 33.245c1.161.552 2 2.018 2 3.754 0 1.736-.839 3.203-2 3.755zm-2 0v7.5c-1.161-.553-2-2.016-2-3.75s.839-3.198 2-3.75zM22 31c-2.757 0-5 2.69-5 6 0 3.309 2.243 6 5 6s5-2.691 5-6c0-3.31-2.243-6-5-6z" />
            </symbol>
            <symbol viewBox="0 0 28 36" id="coffee-bean-2" xmlns="http://www.w3.org/2000/svg">
                <path fill="#64b2db" d="M1.94 24.477a13.277 13.277 0 01-.345-6.659c.398-1.656 1.167-2.813 2.19-3.319 2.333 2.446 2.131 4.975 1.897 7.893-.235 2.917-.483 6.111 2.17 9.188-2.307-.333-4.79-3.27-5.911-7.103zm8.03 7.456a.698.698 0 00-.202-.326c-3.264-2.93-3.029-5.924-2.774-9.098.248-3.11.502-6.333-2.611-9.326a.625.625 0 00-.653-.146c-1.651.548-2.866 2.12-3.42 4.442a14.733 14.733 0 00.365 7.414C2.06 29.59 5.245 33 8.286 33c.425 0 .848-.067 1.253-.2.345-.114.538-.502.432-.867z" />
                <path fill="#64b2db" d="M18.04 24.241c-2.565 1.282-5.41 2.67-6.511 6.535v-.007a5.13 5.13 0 01-.28-3.002 11.87 11.87 0 012.934-5.723c2.182-2.47 5-3.985 7.352-3.985a3.709 3.709 0 012.052.532c-.745 3.253-2.982 4.369-5.547 5.65zM9.887 22.27H9.88c.226-2.656.466-5.352-1.737-7.928 2.21.212 4.61 2.51 5.958 5.843a15.66 15.66 0 00-.965.996 13.541 13.541 0 00-3.119 5.79 13.396 13.396 0 01-.13-4.7zm14.877-4.475a4.963 4.963 0 00-3.229-1.076c-2.051 0-4.302.936-6.34 2.537-1.956-4.436-5.581-7-8.714-6.063a.66.66 0 00-.45.831.663.663 0 00.197.298c2.736 2.43 2.544 4.934 2.291 7.842-.219 2.49-.437 5.06 1.327 7.63a4.683 4.683 0 001.608 3.048.698.698 0 00.964-.074.655.655 0 00.157-.338c.63-4.31 3.27-5.631 6.06-7.026 2.736-1.367 5.582-2.782 6.355-6.992a.653.653 0 00-.226-.617z" />
                <path fill="#64b2db" d="M26.56 25.143l-.006.006a11.628 11.628 0 01-2.893 5.617c-2.151 2.424-4.93 3.91-7.249 3.91a3.668 3.668 0 01-2.023-.535c.722-3.91 3.244-5.213 5.914-6.516 2.387-1.186 4.848-2.41 5.914-5.525.435.956.555 2.018.344 3.043zm-.202-5.005a.693.693 0 00-.667-.09.658.658 0 00-.438.501c-.675 3.499-2.92 4.626-5.55 5.936-2.799 1.388-5.975 2.965-6.696 7.871a.64.64 0 00.229.587 4.908 4.908 0 003.183 1.055c2.697 0 5.867-1.68 8.267-4.385a12.925 12.925 0 003.203-6.262c.364-2.222-.175-4.06-1.53-5.213zM8.641.226c-.213-.28-.579-.303-.816-.051a.77.77 0 00-.043.962c.019.025.04.049.061.07 1.555 1.758 1.012 2.678.197 4.089-.746 1.274-1.775 3.026-.26 5.431.191.301.554.362.81.137.255-.226.306-.653.115-.954-1.03-1.616-.48-2.556.283-3.85.856-1.46 1.92-3.265-.347-5.834zm6.003 1.931c-.246-.241-.609-.2-.812.092a.786.786 0 00.016.895c1.552 1.77 1.01 2.696.196 4.115-.75 1.283-1.782 3.046-.26 5.467.192.303.553.364.808.137.255-.227.307-.657.116-.96-1.027-1.626-.48-2.572.282-3.875.854-1.468 1.915-3.286-.346-5.871zm5.999 2c-.246-.241-.61-.2-.813.092a.786.786 0 00.016.895c1.553 1.77 1.01 2.696.197 4.115-.75 1.283-1.778 3.045-.26 5.466.191.303.553.365.808.138.255-.227.307-.657.116-.96-1.028-1.626-.48-2.573.282-3.876.855-1.467 1.917-3.285-.346-5.87z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 88 89" id="coffee-beans" xmlns="http://www.w3.org/2000/svg">
                <path d="M57.898 57.034h-1.433c-2.19 0-4.196-.86-5.718-2.269.326-8.603 7.218-15.524 15.748-15.524 9.17 0 16.253-5.399 18.134-13.34a9.09 9.09 0 01.494 2.96c0 15.57-12.18 28.173-27.225 28.173zm17.194-37.068h1.433c2.19 0 4.195.86 5.718 2.268-.323 8.122-6.81 14.037-15.749 14.037-8.855 0-16.232 6.333-18.145 14.783a9.087 9.087 0 01-.483-2.925c0-15.564 12.18-28.163 27.226-28.163zm9.879.886a1.278 1.278 0 00-.534-.56C82.376 18.257 79.59 17 76.533 17H75.1C58.473 17 45 30.938 45 48.138c0 3.08 1.151 5.895 3.03 8.01.12.242.302.432.533.56C50.624 58.743 53.41 60 56.467 60H57.9C74.527 60 88 46.062 88 28.862c0-3.08-1.151-5.895-3.03-8.01zM5.987 9.048l.746-1.179c.95-2.061 2.684-3.526 4.704-4.32 8.131 3.965 11.633 12.886 7.98 20.819-2.835 4.272-3.73 9.575-2.388 14.289a16.478 16.478 0 005.554 8.374 9.46 9.46 0 01-3.017-.861c-7.162-3.39-12.534-9.134-15.071-16.352-2.387-6.923-1.94-14.289 1.492-20.77zm28.368 11.044c2.388 6.922 1.94 14.286-1.493 20.766l-.747 1.325c-1.032 1.97-2.795 3.436-4.849 4.23-3.691-1.934-6.381-5.089-7.393-8.795-1.194-3.977-.299-8.248 2.09-11.93 0 0 .15 0 .15-.147 3.727-8.24 1.036-17.354-6.165-22.644 1.16.092 2.245.372 3.328.847 7.166 3.388 12.54 9.131 15.079 16.348zM18.38 48.822c1.792.736 3.583 1.178 5.375 1.178 1.136 0 2.271-.152 3.37-.446.19-.013.377-.07.548-.16 3.015-.946 5.702-2.972 7.279-5.876l.746-1.326c3.733-7.218 4.33-15.32 1.643-22.98-2.837-7.955-8.809-14.29-16.721-17.972-2.957-1.423-6.227-1.571-9.154-.7-.31.01-.612.107-.854.284-2.773 1.04-5.162 3.022-6.564 5.72l-.746 1.325c-3.733 7.218-4.33 15.32-1.643 22.98 2.687 7.955 8.66 14.29 16.721 17.972z" />
                <path d="M6.84 78.658L5.811 77.61c-1.64-1.533-2.643-3.454-2.776-5.644 8.155-7.247 15.883-7.218 22.911-.051 4.263 4.347 8.966 6.595 13.669 6.595 3.157 0 6.315-1 9.364-3.054a9.201 9.201 0 01-1.575 2.154C36.675 88.401 18.451 88.85 6.84 78.66zM5.37 65.02c10.582-11.54 28.806-11.99 40.564-.9l1.176 1.05c1.68 1.571 2.692 3.552 2.783 5.81-7.049 6.466-14.886 6.124-21.89-1.164-7.272-7.416-15.807-8.16-24.184-2.236.391-.921.916-1.783 1.551-2.56zm43.798-2.098l-1.03-1.05c-12.932-12.29-32.92-11.69-44.678 1.05C1.363 65.201.067 68.025.07 71.003a1.37 1.37 0 00.044.987c.258 3.074 1.56 5.74 3.786 7.867l1.028 1.05C11.102 86.301 19.04 89 26.828 89c8.377 0 16.608-3.147 22.78-9.293 2.205-2.398 3.528-5.395 3.38-8.543-.146-3.147-1.469-6.145-3.82-8.243z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 54 59" id="coffee-cup-2" xmlns="http://www.w3.org/2000/svg">
                <path d="M38.418 57.279H15.027V55.73h23.391zm-26.26-9.22c.794-1.193 1.273-2.53 1.38-3.825a6.94 6.94 0 01.887-.24c2.183-.435 4.287.224 5.126 1.478l-5.512 1.1a.86.86 0 00.334 1.688l5.516-1.1c-.11.566-.425 1.134-.928 1.655l-.004.005a5.2 5.2 0 01-.707.602h-7.212a8.693 8.693 0 001.12-1.364zm-.273-19.876H41.55v7.211c0 3.978-1.542 7.718-4.343 10.53a14.919 14.919 0 01-5.503 3.498h-9.97a14.474 14.474 0 01-.824-.321c.63-.993.87-2.098.662-3.15v-.005l-.001-.005c-.274-1.37-1.238-2.497-2.716-3.174-1.384-.634-3.077-.798-4.765-.461a8.93 8.93 0 00-.457.104 14.922 14.922 0 01-1.748-7.015zM42.807 39.34c.652.282 1.355.43 2.08.43 2.898 0 5.257-2.37 5.257-5.281 0-2.912-2.359-5.28-5.257-5.28a5.23 5.23 0 00-1.612.253v-2.216a7.362 7.362 0 011.612-.178c4.073 0 7.388 3.329 7.388 7.42 0 4.094-3.315 7.423-7.388 7.423a7.286 7.286 0 01-2.717-.52 16.56 16.56 0 00.637-2.051zm.469-3.946v-4.072a3.526 3.526 0 011.617-.392 3.56 3.56 0 010 7.118 3.52 3.52 0 01-1.76-.469c.094-.718.143-1.448.143-2.185zm9.313 14.028h-8.283a.86.86 0 00-.857.861c0 .475.383.86.857.86h7.425v.486l-12.49 2.38H14.205l-12.49-2.38v-.485h39.407a.86.86 0 00.858-.86.86.86 0 00-.858-.862h-5.533a16.659 16.659 0 005.877-6.458 8.991 8.991 0 003.424.669c5.024 0 9.111-4.102 9.111-9.144s-4.087-9.143-9.11-9.143a9.14 9.14 0 00-1.614.145v-.493A1.997 1.997 0 0041.285 23h-4.057a.86.86 0 00-.858.86.86.86 0 00.858.862h4.057c.152 0 .275.124.275.276v1.464H11.885v-1.464c0-.152.124-.276.276-.276h21.88a.86.86 0 00.858-.861.86.86 0 00-.857-.861H12.16a1.997 1.997 0 00-1.991 1.998v10.397c0 1.298.15 2.585.446 3.835-1.396-.417-3.06-.09-4.578.953a.863.863 0 00-.224 1.197.856.856 0 001.193.224c.995-.683 2.039-.951 2.902-.778l-3.125 4.691a.863.863 0 00.713 1.34.856.856 0 00.714-.383l3.125-4.692c.324.482.502 1.114.51 1.85v.006c.012 1.138-.384 2.368-1.115 3.464a6.757 6.757 0 01-1.466 1.596 5.403 5.403 0 01-1.208.724h-2.71a1.923 1.923 0 01-.092-.058c-1.428-.957-1.519-3.433-.206-5.636a.863.863 0 00-.296-1.18.856.856 0 00-1.176.296c-.837 1.405-1.246 2.97-1.151 4.406.054.816.266 1.55.616 2.172H.858a.86.86 0 00-.858.861v2.059a.86.86 0 00.698.846l12.613 2.404v2.547a.86.86 0 00.858.861h25.107a.86.86 0 00.858-.86v-2.548l12.615-2.404a.86.86 0 00.698-.846v-2.059a.86.86 0 00-.858-.86zM29.766 17.145l.045-.03m.056-.04c.017-.014.015-.012 0 0m1.327-7.59c1.092-1.112 1.72-2.654 1.72-4.308 0-2.06-.972-3.945-2.601-5.043-.38-.256-.88-.134-1.118.272-.239.406-.125.943.254 1.198 1.155.78 1.844 2.115 1.844 3.573 0 1.458-.689 2.794-1.844 3.572-.496.333-.496 1.137 0 1.471 1.155.779 1.844 2.114 1.844 3.572 0 1.459-.689 2.794-1.844 3.573a.486.486 0 00-.01.007l.01-.007c-.379.256-.493.792-.254 1.198a.798.798 0 00.687.407.768.768 0 00.43-.134c1.63-1.099 2.603-2.984 2.603-5.043 0-1.655-.63-3.196-1.72-4.308zm5.099-.356a.846.846 0 00-1.163.263.837.837 0 00.264 1.158A4.052 4.052 0 0137.313 14a4.051 4.051 0 01-1.918 3.45.837.837 0 00-.265 1.158.844.844 0 001.163.263A5.72 5.72 0 0039 14a5.72 5.72 0 00-2.707-4.87zm-13 0a.846.846 0 00-1.163.263.837.837 0 00.264 1.158 4.052 4.052 0 011.92 3.45 4.051 4.051 0 01-1.92 3.45.837.837 0 00-.264 1.158.844.844 0 001.163.263A5.72 5.72 0 0026 14.001a5.72 5.72 0 00-2.707-4.872z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 37 52.07" id="coffee-pack" xmlns="http://www.w3.org/2000/svg">
                <path stroke="#f6fafc" stroke-miterlimit="50" stroke-width=".5" d="M22.945 38.676c0 .662-.536 1.2-1.196 1.2h-.199a1.199 1.199 0 010-2.399h.199c.66 0 1.196.537 1.196 1.2zm-8.063-12.48c0 1.537.803 2.887 2.01 3.652-.37-1.913.206-4.062 1.38-5.532 1.048-1.313 1.19-3.435.394-4.608a4.315 4.315 0 00-3.784 4.284zm4.798 4.285a4.312 4.312 0 003.778-4.284v-2.205a4.321 4.321 0 00-2.019-3.66c.37 1.912-.183 4.062-1.315 5.483-.986 1.238-1.322 3.405-.444 4.666zm-7.182-4.284v-2.205c0-3.7 2.992-6.711 6.67-6.713h.007c3.677.003 6.666 3.013 6.666 6.713v2.205c0 3.7-2.992 6.712-6.671 6.712-3.679 0-6.672-3.01-6.672-6.712zm22.799-21.76zM32.82 6.094c-.4.268-.921.268-1.321 0L27.832 3.64l-3.667 2.455c-.4.268-.921.268-1.321 0l-3.67-2.455-3.667 2.455c-.4.268-.92.268-1.321 0L10.518 3.64 6.85 6.094c-.4.268-.92.268-1.321 0L3.053 4.437v4.371h32.244v-4.37zm2.476 5.112H3.053v39.386h32.244zM37.67 2.2v49.6c0 .662-.534 1.199-1.192 1.199H1.862A1.195 1.195 0 01.67 51.801V2.2a1.2 1.2 0 01.629-1.057 1.186 1.186 0 011.223.059l3.667 2.455 3.667-2.455c.4-.268.92-.268 1.32 0l3.667 2.455 3.667-2.455c.4-.268.92-.268 1.32 0l3.667 2.455 3.667-2.455c.4-.268.92-.268 1.32 0l3.667 2.455 3.667-2.455a1.186 1.186 0 011.223-.059A1.2 1.2 0 0137.67 2.2zM25.41 44.147c0 .662-.534 1.199-1.193 1.199h-.198a1.195 1.195 0 01-1.191-1.2c0-.661.533-1.198 1.191-1.198h.198c.659 0 1.192.537 1.192 1.199zm-4.949 0c0 .662-.534 1.199-1.192 1.199h-.198a1.195 1.195 0 01-1.191-1.2c0-.661.533-1.198 1.191-1.198h.198c.658 0 1.192.537 1.192 1.199zm-2.474-5.47c0 .661-.534 1.198-1.192 1.198h-.198a1.195 1.195 0 01-1.192-1.199c0-.662.534-1.199 1.192-1.199h.198c.658 0 1.192.537 1.192 1.2zm-2.474 5.47c0 .662-.534 1.199-1.192 1.199h-.198a1.195 1.195 0 01-1.192-1.2c0-.661.534-1.198 1.192-1.198h.198c.658 0 1.192.537 1.192 1.199z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 91 91" id="credit-card" xmlns="http://www.w3.org/2000/svg">
                <path d="M85.903 40.23L40.23 85.907a4.437 4.437 0 01-3.154 1.301h-.014a4.435 4.435 0 01-3.152-1.301L9.988 61.985l43.864-43.866a1.896 1.896 0 00-2.681-2.681L7.307 59.304 5.093 57.09a4.436 4.436 0 01-1.301-3.16c0-1.199.462-2.321 1.301-3.16L50.768 5.093a4.437 4.437 0 013.16-1.301c1.198 0 2.32.462 3.16 1.301L67.344 15.35 23.479 59.216a1.896 1.896 0 002.681 2.681l43.865-43.866 15.878 15.878a4.475 4.475 0 010 6.321zm2.681-9.002L59.77 2.412A8.203 8.203 0 0053.928 0a8.203 8.203 0 00-5.841 2.412L2.412 48.089A8.204 8.204 0 000 53.929c0 2.212.857 4.287 2.412 5.842l3.553 3.554h.001l.001.002 23.88 23.881h-3.306a1.896 1.896 0 000 3.792h37.915a1.896 1.896 0 000-3.792H44.29l44.295-44.297c3.22-3.22 3.22-8.462 0-11.683z" />
                <path d="M45.407 54.593a2.027 2.027 0 00-2.867 0L26.593 70.54a2.027 2.027 0 002.866 2.866L45.406 57.46a2.027 2.027 0 000-2.867zm-3.346 15.911l-5.557 5.557a1.722 1.722 0 002.435 2.435l5.557-5.557a1.722 1.722 0 00-2.435-2.435zm4.419-7.9l-.876.875a2.063 2.063 0 002.917 2.917l.875-.875a2.062 2.062 0 10-2.917-2.917zm22.698-22.118l-2.654-2.654 5.308-5.307 2.654 2.653zm3.973-11.937a1.874 1.874 0 00-2.65 0L62.548 36.5a1.874 1.874 0 000 2.65l5.3 5.301a1.871 1.871 0 002.651 0l7.951-7.95a1.874 1.874 0 000-2.651zM60.063 14c.528 0 1.056-.201 1.458-.604l.875-.876a2.062 2.062 0 10-2.917-2.916l-.875.876A2.062 2.062 0 0060.063 14zM18.48 62.604l-.876.875a2.063 2.063 0 002.917 2.917l.875-.875a2.063 2.063 0 00-2.917-2.917z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 91 91" id="cup" xmlns="http://www.w3.org/2000/svg">
                <path d="M87.455 51.745c0 7.376-6.09 13.377-13.575 13.377h-3.027a36.307 36.307 0 001.519-3.505h1.508c5.524 0 10.018-4.429 10.018-9.872v-5.52c0-.969-.796-1.753-1.778-1.753h-7.47v-3.505h12.805zM74.65 48.94v-.963h5.696v3.764c0 3.507-2.901 6.36-6.467 6.36h-.404a36.284 36.284 0 001.175-9.161zm.505 32.246c-.814 3.605-4.083 6.309-7.98 6.309H11.729c-3.897 0-7.166-2.704-7.98-6.309zm14.068-43.724H74.648v-3.71c0-.967-.795-1.752-1.777-1.752h-38.39c-.982 0-1.778.785-1.778 1.752 0 .968.796 1.753 1.777 1.753h36.614V48.94c0 11.803-6.391 22.772-16.71 28.741h-34.12c-10.319-5.968-16.71-16.938-16.71-28.74V35.505h11.909c.981 0 1.777-.784 1.777-1.752S16.444 32 15.463 32H1.777C.796 32 0 32.785 0 33.753V48.94c0 6.624 1.806 13.12 5.222 18.783a37.157 37.157 0 008.794 9.957H1.777C.796 77.68 0 78.465 0 79.433 0 85.81 5.262 91 11.73 91h55.454c6.468 0 11.73-5.189 11.73-11.566 0-.968-.796-1.753-1.777-1.753H60.632a37.196 37.196 0 008.23-9.054h5.016C83.32 68.627 91 61.053 91 51.745v-12.53c0-.968-.796-1.753-1.777-1.753zM39.782 10.377l-.971-1.225a4.903 4.903 0 01-.006-6.111 1.88 1.88 0 00-.301-2.634A1.862 1.862 0 0035.88.71a8.648 8.648 0 00.01 10.778l.97 1.225a6.408 6.408 0 01.008 7.987l-.996 1.26a1.88 1.88 0 00.302 2.634 1.861 1.861 0 002.624-.303l.995-1.26a10.153 10.153 0 00-.01-12.654zm10 5l-.971-1.225a4.903 4.903 0 01-.005-6.111 1.88 1.88 0 00-.302-2.634 1.862 1.862 0 00-2.624.303 8.648 8.648 0 00.01 10.779l.97 1.224a6.408 6.408 0 01.007 7.987l-.995 1.26a1.88 1.88 0 00.302 2.634 1.862 1.862 0 002.624-.303l.995-1.26a10.153 10.153 0 00-.01-12.654zm-19 0l-.971-1.225a4.903 4.903 0 01-.006-6.111 1.88 1.88 0 00-.301-2.635 1.863 1.863 0 00-2.624.303 8.649 8.649 0 00.01 10.78l.97 1.224a6.408 6.408 0 01.008 7.987l-.996 1.26a1.88 1.88 0 00.301 2.633 1.861 1.861 0 002.624-.303l.996-1.259a10.153 10.153 0 00-.01-12.654z" />
                <path d="M26.56 31.44A1.511 1.511 0 0025.5 31a1.506 1.506 0 00-1.5 1.5c0 .395.16.781.44 1.062A1.51 1.51 0 0025.5 34a1.51 1.51 0 001.06-.438c.28-.28.44-.666.44-1.062 0-.395-.16-.781-.44-1.06zM63.975 47c-1.118 0-2.025.74-2.025 1.652 0 6.132-3.048 12.158-8.363 16.533-.788.648-.782 1.694.012 2.336.395.32.91.479 1.426.479.521 0 1.042-.163 1.438-.49C62.523 62.523 66 55.649 66 48.653 66 47.74 65.093 47 63.975 47zM51.808 71.758a1.479 1.479 0 00-2.02-.566l-.033.02a1.494 1.494 0 00-.563 2.03 1.481 1.481 0 002.02.565l.033-.019a1.494 1.494 0 00.563-2.03z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 52 54" stroke="#f6fafc" stroke-miterlimit="50" stroke-width=".5" id="discount" xmlns="http://www.w3.org/2000/svg">
                <path d="M47.502 34.993l-3.909 2.07a4.506 4.506 0 00-2.345 3.222l-.764 4.35a1.53 1.53 0 01-1.73 1.254l-4.38-.619a4.517 4.517 0 00-3.795 1.23l-3.18 3.072a1.533 1.533 0 01-2.138 0l-3.18-3.071a4.513 4.513 0 00-3.794-1.23l-4.382.618a1.53 1.53 0 01-1.729-1.254l-.764-4.35a4.505 4.505 0 00-2.345-3.222l-3.91-2.07a1.526 1.526 0 01-.66-2.029l1.944-3.968a4.497 4.497 0 000-3.982l-1.944-3.968a1.526 1.526 0 01.66-2.029l3.91-2.07a4.506 4.506 0 002.345-3.222l.764-4.35a1.53 1.53 0 011.729-1.254l4.382.619a4.519 4.519 0 003.794-1.23l3.18-3.072a1.533 1.533 0 012.137 0l3.18 3.071a4.518 4.518 0 003.795 1.23l4.382-.618a1.53 1.53 0 011.729 1.254l.764 4.35a4.505 4.505 0 002.345 3.222l3.91 2.07a1.526 1.526 0 01.66 2.029l-1.944 3.968a4.497 4.497 0 000 3.982l1.944 3.968a1.526 1.526 0 01-.66 2.029zm1.417-7.32a1.521 1.521 0 010-1.346l1.944-3.968a4.51 4.51 0 00-1.952-5.994L45 14.295a1.524 1.524 0 01-.793-1.09l-.764-4.35a4.523 4.523 0 00-5.11-3.705l-4.382.619a1.53 1.53 0 01-1.283-.416l-3.18-3.07a4.53 4.53 0 00-6.317 0l-3.18 3.07a1.53 1.53 0 01-1.284.416l-4.382-.618a4.522 4.522 0 00-5.11 3.705l-.764 4.35a1.526 1.526 0 01-.794 1.089l-3.909 2.07a4.51 4.51 0 00-1.952 5.994l1.944 3.968c.21.428.21.919 0 1.347L1.797 31.64a4.51 4.51 0 001.952 5.995l3.91 2.07c.42.223.71.62.793 1.09l.764 4.349a4.518 4.518 0 005.11 3.705l4.382-.619c.472-.067.94.085 1.283.416l3.181 3.07a4.533 4.533 0 006.316 0l3.18-3.07a1.53 1.53 0 011.284-.416l4.382.619a4.522 4.522 0 005.11-3.705l.764-4.35c.083-.469.372-.866.794-1.09l3.909-2.07a4.51 4.51 0 001.952-5.994z" />
                <path d="M37.887 16.443a1.515 1.515 0 00-2.14 0L15.773 36.417a1.513 1.513 0 002.14 2.14l19.974-19.974a1.513 1.513 0 000-2.14zM19.83 22a2.503 2.503 0 01-2.5-2.5c0-1.379 1.122-2.5 2.5-2.5s2.5 1.121 2.5 2.5c0 1.378-1.122 2.5-2.5 2.5zm0-8a5.506 5.506 0 00-5.5 5.5c0 3.033 2.467 5.5 5.5 5.5s5.5-2.467 5.5-5.5-2.467-5.5-5.5-5.5zm13 23a2.503 2.503 0 01-2.5-2.5c0-1.378 1.121-2.5 2.5-2.5 1.378 0 2.5 1.122 2.5 2.5s-1.122 2.5-2.5 2.5zm0-8a5.506 5.506 0 00-5.5 5.5c0 3.033 2.467 5.5 5.5 5.5s5.5-2.467 5.5-5.5-2.467-5.5-5.5-5.5z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 49 49" id="email" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.101 18.6V1.994a2.282 2.282 0 012.205.587l15.112 15.103c.261.262.45.575.56.918zm17.317 2.32L22.834 44.512a2.277 2.277 0 01-.394.314V27.19h2.466a4.2 4.2 0 004.195-4.197v-2.467h10.97l-5.538 5.54a.955.955 0 000 1.354.957.957 0 001.354 0l6.89-6.894h3.956c-.09.14-.194.273-.315.394zm-29.352 4.352l2.838-2.838a.957.957 0 00-1.353-1.353l-4.192 4.191h-2.788l8.652-8.652a.957.957 0 00-1.353-1.354L8.864 25.272H5.39L27.187 3.473v19.518a2.284 2.284 0 01-2.28 2.281zm3.47 19.789a2.266 2.266 0 01-.919-.557L4.497 29.39a2.28 2.28 0 01-.588-2.205h16.627zM47.77 16.339L32.66 1.227a4.2 4.2 0 00-5.932 0L3.143 24.812a4.183 4.183 0 00-1.227 2.966c0 1.074.409 2.149 1.227 2.967l3.791 3.791L2.771 38.7a.954.954 0 000 1.353.957.957 0 001.354 0l4.163-4.163 1.734 1.734L.28 47.366a.954.954 0 000 1.354.957.957 0 001.354 0l9.742-9.742 6.879 6.88a4.2 4.2 0 005.933 0L47.77 22.271A4.168 4.168 0 0049 19.306c0-1.12-.436-2.174-1.229-2.967z" />
                <path d="M22.707 13.293a1.003 1.003 0 00-1.414 0A1.006 1.006 0 0021 14c0 .263.107.521.293.707.186.186.443.293.707.293.263 0 .521-.107.707-.293.186-.186.293-.444.293-.707 0-.264-.107-.521-.293-.707zm-21 28A1.008 1.008 0 001 41c-.263 0-.521.107-.707.293A1.008 1.008 0 000 42c0 .263.107.521.293.707.186.186.444.293.707.293a1.003 1.003 0 00.707-1.707zm9.98 1.02a1.07 1.07 0 00-1.514 0l-4.86 4.86a1.067 1.067 0 000 1.514 1.07 1.07 0 001.514 0l4.86-4.86a1.07 1.07 0 000-1.514z" />
            </symbol>
            <symbol viewBox="0 0 14 11" id="envelope" xmlns="http://www.w3.org/2000/svg">
                <path fill="#64b2db" d="M13.22 9.232c0 .53-.416.96-.93.96H1.713c-.513 0-.93-.43-.93-.96V1.771c0-.53.417-.96.93-.96h10.576c.513 0 .93.43.93.96v7.461zM12.29 0H1.713C.768 0 0 .793 0 1.768v7.464C0 10.207.768 11 1.712 11h10.576C13.232 11 14 10.207 14 9.232V1.771C14.003.796 13.235 0 12.29 0z" />
                <path fill="#64b2db" d="M8.696 5.416l3.178-2.793a.352.352 0 00.027-.503.37.37 0 00-.514-.027L7.005 5.95 6.15 5.2a.535.535 0 00-.065-.058L2.606 2.091a.368.368 0 00-.513.029.35.35 0 00.03.503L5.337 5.44 2.136 8.378a.352.352 0 00-.016.503.368.368 0 00.514.018l3.25-2.98.881.773a.367.367 0 00.484-.003l.907-.796 3.231 3.01a.37.37 0 00.514-.013.352.352 0 00-.014-.504z" />
                <path fill="none" stroke="#64b2db" stroke-miterlimit="50" stroke-width=".1" d="M8.696 5.416v0l3.178-2.793a.352.352 0 00.027-.503.37.37 0 00-.514-.027L7.005 5.95v0L6.15 5.2a.535.535 0 00-.065-.058L2.606 2.091a.368.368 0 00-.513.029.35.35 0 00.03.503L5.337 5.44v0L2.136 8.378a.352.352 0 00-.016.503.368.368 0 00.514.018l3.25-2.98v0l.881.773a.367.367 0 00.484-.003l.907-.796v0l3.231 3.01a.37.37 0 00.514-.013.352.352 0 00-.014-.504z" />
            </symbol>
            <symbol viewBox="0 0 17 11" fill="currentColor" id="eye" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.423 5.632c.077-1.26-.883-2.299-2.045-2.22-.96.068-1.738.91-1.798 1.952-.076 1.26.884 2.299 2.045 2.22.957-.064 1.735-.906 1.798-1.952zM8.738 9.373C6.58 9.52 4.796 7.591 4.932 5.247c.111-1.933 1.557-3.5 3.34-3.62 2.159-.147 3.942 1.782 3.806 4.126-.115 1.929-1.56 3.495-3.34 3.62zM8.5 0C5.252 0 2.306 1.929.133 5.062a.781.781 0 000 .872C2.306 9.071 5.252 11 8.5 11c3.248 0 6.194-1.929 8.367-5.062a.781.781 0 000-.872C14.694 1.929 11.748 0 8.5 0z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 16 30" id="facebook" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.397.006L11.56 0C7.248 0 4.462 2.898 4.462 7.383v3.404H.603A.608.608 0 000 11.4v4.932c0 .338.27.612.603.612h3.859v12.445c0 .338.27.612.603.612H10.1a.608.608 0 00.603-.612V16.943h4.512a.607.607 0 00.603-.612l.002-4.932a.617.617 0 00-.177-.432.6.6 0 00-.427-.18h-4.513V7.901c0-1.387.326-2.09 2.109-2.09l2.585-.002A.608.608 0 0016 5.198V.618a.608.608 0 00-.603-.612z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 32 32" id="instagram" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.161 23.17a5.999 5.999 0 01-5.992 5.99H8.831a5.998 5.998 0 01-5.992-5.99V8.83a5.998 5.998 0 015.992-5.99h14.338a5.999 5.999 0 015.992 5.99v14.34zM23.169 0H8.831C3.96 0 0 3.962 0 8.83v14.34C0 28.038 3.961 32 8.83 32h14.34c4.869 0 8.83-3.962 8.83-8.83V8.83C32 3.963 28.039 0 23.169 0z" />
                <path d="M16.005 21.255a5.256 5.256 0 01-5.25-5.25 5.256 5.256 0 015.25-5.25 5.256 5.256 0 015.25 5.25 5.256 5.256 0 01-5.25 5.25zM16 8c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zm8.8-3.2c-.63 0-1.25.255-1.695.703A2.411 2.411 0 0022.4 7.2c0 .63.257 1.25.705 1.697A2.418 2.418 0 0024.8 9.6c.633 0 1.25-.257 1.697-.703A2.418 2.418 0 0027.2 7.2a2.41 2.41 0 00-.703-1.697A2.41 2.41 0 0024.8 4.8z" />
            </symbol>
            <symbol viewBox="0 0 74 91" fill="currentColor" id="jar" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.002 91c-.587-.154-1.181-.286-1.759-.467-4.436-1.391-7.23-5.227-7.233-9.96-.008-10.188-.02-20.377.005-30.566A45.696 45.696 0 012.99 33.854c1.801-4.771 3.568-9.555 5.35-14.333l.266-.72c-.861-.179-1.718-.259-2.5-.536-2.963-1.052-4.55-3.995-3.84-7.025.33-1.41.644-2.827 1.045-4.22C4.23 3.837 6.306 1.65 9.535.517c.936-.33 1.72-.043 2.003.679.312.796-.067 1.476-1.068 1.843-2.495.915-3.995 2.65-4.589 5.14-.288 1.209-.582 2.416-.862 3.626-.502 2.166.91 4.13 3.184 4.155 5.709.065 11.42.016 17.129.01.054 0 .108-.042.213-.086V2.665h-1.43c-2.333 0-4.666.004-6.999 0-.98-.003-1.617-.529-1.625-1.32-.007-.787.633-1.339 1.606-1.339 14.92-.002 29.84-.019 44.76.014 4.044.01 7.754 3.002 8.836 6.978.389 1.427.745 2.864 1.074 4.305.837 3.667-1.859 7.363-6.384 7.405.162.456.31.885.468 1.31 1.884 5.089 3.795 10.168 5.65 15.267 1.732 4.76 2.467 9.693 2.478 14.724.023 10.218.034 20.436-.005 30.655-.017 4.362-2.07 7.572-6.183 9.492a5.34 5.34 0 01-.51.2c-.96.336-1.732.102-2.038-.614-.335-.784.026-1.514.997-1.89 2.554-.992 4.144-2.77 4.743-5.359.1-.429.135-.879.137-1.32.014-2.813.01-5.627.01-8.44 0-.173-.035-.345-.062-.601-2.092.34-3.858 1.215-5.407 2.512a10.697 10.697 0 00-3.131 4.318c-.5 1.259-1.112 1.493-2.438.997-4.464-1.671-9.152-.67-12.496 2.67-1.039 1.038-1.64 1.052-2.704.065a11.59 11.59 0 00-15.782.002c-1.056.98-1.66.962-2.705-.082-3.332-3.328-8.028-4.324-12.502-2.652-1.344.502-1.903.247-2.472-1.088-1.564-3.67-4.417-5.84-8.506-6.8-.021.411-.05.718-.05 1.026-.004 2.517-.003 5.035-.002 7.552.001 4.545 3.17 7.666 7.887 7.67 16.24.018 32.48.01 48.72-.001.837-.001 1.542.118 1.82.992.234.738-.26 1.21-.717 1.687zm2.627-72.315c-2.19 5.913-4.396 11.796-6.546 17.7-1.277 3.506-2.054 7.144-2.122 10.85-.13 7.136-.061 14.276-.104 21.414-.004.65.312.762.854.87 3.098.623 5.74 2.053 7.792 4.385.863.982 1.562 2.098 2.345 3.167 4.674-1.284 9.554-.683 14.015 3.026 5.317-4.21 12.791-4.318 18.31.02 4.133-3.428 8.831-4.511 14.095-2.996.097-.168.157-.27.214-.372.073-.13.14-.263.215-.391 2.13-3.625 5.306-5.913 9.514-6.816.712-.153.942-.371.939-1.076-.028-6.16-.032-12.321-.012-18.482a42.111 42.111 0 00-2.77-15.199c-1.366-3.604-2.697-7.22-4.045-10.831-.659-1.766-1.32-3.531-1.956-5.23h-13.96c0 2.013.002 3.964 0 5.914-.002 1.64-.665 2.953-2.174 3.749-1.542.813-3.063.634-4.51-.304-1.221-.793-2.467-1.551-3.674-2.362-.732-.492-1.383-.475-2.111.01-1.312.874-2.63 1.745-3.994 2.537-2.824 1.64-6.273-.203-6.345-3.382-.04-1.776-.001-3.554-.003-5.331 0-.284-.028-.567-.044-.87zM28.504 2.703c-.041.15-.085.233-.085.316-.005 7.226-.018 14.45.002 21.676.004 1.342 1.106 1.874 2.277 1.151 1.11-.685 2.2-1.403 3.297-2.108 2.39-1.535 3.625-1.533 6.05.018 1.1.702 2.184 1.425 3.295 2.11 1.123.692 2.16.165 2.25-1.121.017-.236.007-.474.007-.71 0-6.84 0-13.681-.003-20.521 0-.26-.031-.519-.05-.811zm19.98 13.281c5.807 0 11.54.042 17.272-.02 2.239-.025 3.715-1.93 3.269-4.033-.313-1.472-.645-2.948-1.092-4.386-.808-2.605-2.621-4.502-5.418-4.66-4.638-.262-9.304-.072-14.032-.072z" />
                <path d="M39.101 34.78c1.49-1.102 3.054-.915 4.626-.061 3.874 2.103 5.916 5.459 6.665 9.633.576 3.211.15 6.331-1.334 9.404.403.022.71.052 1.017.052 2.346.004 4.692-.005 7.038.005 2.872.013 4.873 1.98 4.882 4.797.008 2.806.005 5.612 0 8.418-.004 2.988-1.945 4.93-5.006 4.953-3.622.028-7.245.017-10.868.016-8.314 0-16.629-.002-24.943-.013-2.665-.003-4.81-1.33-4.986-3.678a74.125 74.125 0 01.013-10.841c.161-2.22 2.252-3.632 4.547-3.649 2.698-.02 5.396-.005 8.099-.005-.393-1.28-.838-2.482-1.127-3.719-1.326-5.68 1.041-11.907 5.644-14.837 1.242-.79 2.54-1.583 4.144-1.115.504.147.98.39 1.59.64m-.093 34.49c5.968 0 11.936.002 17.903-.003 1.666 0 2.386-.701 2.391-2.34.01-2.69.005-5.378-.01-8.067-.008-1.636-.728-2.347-2.39-2.354-3-.011-5.999-.023-8.997.02-.41.006-.853.277-1.22.516-1.276.832-2.482 1.779-3.8 2.536-1.068.612-2.216.426-3.327-.11-.3-.145-.79-.146-1.093-.004-1.112.523-2.26.719-3.328.106-1.32-.756-2.527-1.7-3.806-2.527-.367-.237-.812-.496-1.226-.503-2.968-.047-5.937-.04-8.906-.035-1.792.003-2.483.684-2.486 2.44-.004 2.6.003 5.202.009 7.803.004 1.887.645 2.52 2.56 2.52 5.91.003 11.818.001 17.726.001m-1.382-22.305c0-3.01.009-6.02-.004-9.03-.005-1.08-.649-1.517-1.625-1.026-.836.421-1.689.902-2.355 1.537-3.137 2.992-4.044 6.729-3.318 10.842.59 3.34 2.247 6.071 5.444 7.666 1.246.621 1.854.233 1.857-1.135.006-2.951.002-5.903.001-8.854m2.763.029c0 2.98-.007 5.962.003 8.943.004 1.195.659 1.65 1.709 1.055 1.014-.575 2.058-1.22 2.83-2.064 2.688-2.933 3.454-6.471 2.766-10.279-.604-3.34-2.26-6.068-5.454-7.665-1.223-.612-1.85-.2-1.853 1.155-.005 2.952-.001 5.903 0 8.855" />
                <path d="M37.56 65.995c-2.282 0-4.564.008-6.845-.003-1.08-.005-1.717-.574-1.715-1.484.002-.914.66-1.502 1.717-1.503 4.592-.005 9.184 0 13.776-.005.706 0 1.36.223 1.489 1.044.077.492-.095 1.166-.379 1.552-.22.299-.785.377-1.2.383-2.28.034-4.562.016-6.844.016" />
            </symbol>
            <symbol viewBox="0 0 25 25" id="lens" xmlns="http://www.w3.org/2000/svg">
                <path fill="#64b2db" d="M10.45 2.633c4.258 0 7.722 3.347 7.722 7.46 0 4.115-3.464 7.461-7.722 7.461-4.258 0-7.723-3.346-7.723-7.46s3.465-7.46 7.723-7.46zm14.17 20.138l-6.163-6.188a9.855 9.855 0 002.453-6.49C20.91 4.529 16.22 0 10.455 0S0 4.528 0 10.094c0 5.565 4.69 10.093 10.455 10.093a10.6 10.6 0 005.99-1.826l6.21 6.235c.259.26.608.404.982.404.354 0 .69-.13.945-.367.542-.504.56-1.338.038-1.862z" />
            </symbol>
            <symbol viewBox="0 0 19 29" id="location-pin" xmlns="http://www.w3.org/2000/svg">
                <path fill="#64b2db" d="M13.864 19.56a110.032 110.032 0 01-3.646 6.245l-.713 1.119-.712-1.119c-.075-.117-1.856-2.92-3.647-6.244-2.47-4.583-3.722-7.853-3.722-9.719 0-4.614 3.625-8.367 8.081-8.367 4.456 0 8.081 3.753 8.081 8.367 0 1.867-1.252 5.136-3.722 9.719zM9.5 0C4.262 0 0 4.415 0 9.842c0 2.18 1.24 5.497 3.9 10.437a112.938 112.938 0 003.7 6.338l1.306 2.052A.706.706 0 009.5 29c.24 0 .462-.124.594-.331l1.306-2.052c.076-.118 1.87-2.94 3.7-6.338 2.66-4.94 3.9-8.256 3.9-10.437C19 4.415 14.738 0 9.5 0z" />
                <path fill="#64b2db" d="M9.495 13.504a4.013 4.013 0 01-4.008-4.009 4.013 4.013 0 014.008-4.008 4.013 4.013 0 014.009 4.008 4.013 4.013 0 01-4.009 4.009zM9.5 4A5.506 5.506 0 004 9.5C4 12.533 6.467 15 9.5 15S15 12.533 15 9.5 12.533 4 9.5 4z" />
            </symbol>
            <symbol viewBox="0 0 53 90" fill="currentColor" id="logo" xmlns="http://www.w3.org/2000/svg">
                <path d="M47.234 61.276c1.645 1.37.987 3.523.42 4.394-.602.927-1.838 1.796-2.702 1.952-.797.144-.523-.468-.068-.923.751-.753.618-1.856.102-2.194-.638-.42-1.175.015-1.527-1.215-.587-2.048 2.146-3.281 3.775-2.014m.726 14.53c.828-1.548.352-5.817-1.02-4.749-.443.344-1.104 1.15-1.705 2.615-1.208-.055-1.848-.089-2.744-.843-.165.505 1.183 1.36 2.184 1.669-.763.059-1.49-.02-2.153-.488.013.559 1.11 1.103 2.163 1.271a7.742 7.742 0 00-.053.195c-.742.105-1.496.058-2.08-.287.146.559.964.901 1.908.98-.03.125-.058.253-.085.383-.667.086-1.318.05-1.794-.184.433.663 1.672.955 3.035.636.883-.117 1.96-.494 2.344-1.197m-1.645 11.23c-4.885 2.014-7.044-1.536-7.306-6.191-1.048-.442-1.398-2.618-1.234-3.56.185-1.06 1.363.005 1.441-.511.353-2.371 1.136-4.841 2.815-6.822 2.016-2.578 5.08-.928 6.894-3.88 1.002-2.665 4.187 1.49 3.1 7.43-.205 2.92-1.587 6.84-7.504 8.07-.06 1.167.127 1.788 2.343.95 1.012-.382 2.586-1.196 4.138-2.47 1.086-.892.556 2.188-.45 3.46-.73.924-2.28 2.719-4.237 3.524M27.866 63.029c-.953-1.19 1.848.019 6.63-2.667 3.355-1.886 7.365-1.95 8.024 2.298.17 2.685-3.155 5.106-4.845 3.025a3.708 3.708 0 01-.16-.214.572.572 0 00-.102-.274c.56.08 1.29-1.82.342-2.451-1.779-1.185-3.858-.323-4.298 1.383.482-.448 1.17-.644 1.87-.66a4.36 4.36 0 00-.343.627c-.775.347-1.396.93-1.496 1.622a2.592 2.592 0 011.178-.724c-.067.249-.12.51-.16.784-.573.472-.997 1.047-.988 1.529.324-.405.67-.673 1.032-.85.04.185.087.336.141.46-.69.688-1.273 1.533-1.142 1.978.734-1.064 1.303-1.342 2.225-1.63.238-.067.465-.12.68-.155a.461.461 0 00.144-.022c1.3-.174 2.115.303 2.184 1.652.114 2.22.365 4.503-.2 4.352-.699-.185-2.893.576-2.947 1.08-.043.403-.08.754-.109 1.14.728 6.278 1.86 12.527 1.14 14.017-1.89.815-7.215.666-7.152-.114 1.135-1.118 1.308-6.082 1.113-12.643-.197-.554-.586-.95-.987-.78-.524.222-.513-.043-.862.15-.425.237-.275-1.924-.264-3.167.004-.497.31-.938 1.471-1.808.077-.06.147-.13.21-.211-.432-3.403-1.182-6.297-2.329-7.727m-3.398 12.876c-.43.712-.897 1.202-1.385 1.57a8.701 8.701 0 00-.002-.427c.79-1.056 1.516-2.337 1.38-2.784-.513.947-.944 1.493-1.458 1.956-.086-.548-.242-1.03-.468-1.394-.747-1.211-1.978-.665-2.749 1.218-.77 1.885-.789 4.396-.04 5.607.307.498.696.699 1.101.633 1.037.304 3.228-1.408 3.638-3.101-.544.727-1.332 1.24-2.114 1.532a6.27 6.27 0 00.253-.623c.931-.708 1.725-1.692 1.853-2.548a4.783 4.783 0 01-1.56 1.46c.041-.204.074-.411.101-.618.79-.848 1.454-1.871 1.45-2.481m3.675 10.749c-.29.996-3.985-1.407-6.332-.167-1.676 2.028-3.616 2.905-5.144 2.05-2.405-1.345-2.885-6.465-1.07-11.433 1.738-4.763 4.954-7.66 7.335-6.705a3.214 3.214 0 00-.16-.17c-2.238-2.212-5.75 1.065-7.694 2.718-3.206 2.726-5.813 2.643-4.779-3.344.483-2.081.624 1.488 4.431-.714 3.148-1.82 3.872-4.293 7.16-4.461 6.415-.326 5.811 11.62 5.613 14.175-.466 5.986.682 7.452.64 8.05M11.2 28.949a.43.43 0 00-.427.432.431.431 0 00.417.442.432.432 0 00.43-.432.43.43 0 00-.42-.442m11.995 17.31c.27.578 3.253-.255 3.675-.951.45 3.398.165 15.228-4.905 16.346 1.615-1.355 2.721-3.947 2.982-5.786l-.019.008v-.003c-.758 2.378-3.2 5.387-4.822 5.538 1.46-1.103 2.4-2.807 2.94-4.352-1.15 1.88-3.73 4.248-4.8 4.109 1.08-.73 1.822-1.582 2.407-2.505-.627.464-3.723 2.598-4.267 2.261 1.905-1.143 2.933-2.551 4.153-4.371.063-.255.213-.482.398-.652 1.366-2.615 2.525-6.108 2.258-9.642m3.078-8.99c-.168-.086-.28-.555.533-.707.795-.15 2.048-.241 2.643-.138.296.05.557.117.79.195a.937.937 0 00.312.217c1.281 1.178 1.933 1.737 2.451 3.278.308-.24-.057-1.3-.594-2.302.065-.118.128-.235.193-.351.405.423.75.912.995 1.514.2-.381-.143-1.213-.7-2.041.084-.15.17-.3.256-.447.43.397.795.848 1.04 1.35.11-.482-.208-1.163-.744-1.841.103-.165.206-.33.312-.49.428.368.79.773 1.026 1.192.04-.533-.236-1.106-.708-1.655 1.36-1.901 3.088-3.302 5.931-3.203.837.029 2.791.045 3.29 2.459.382 2.583-2.413 5.259-4.842 3.578-.914-.633-.5-1.362-1.172-1.407-1.5-.101-1.774 2.198-2.174 3.476-1.608 5.133-1.338 14.27.405 16.678.841 1.162-6.024 3.426-7.579 3.465-2.339.06-1.375-.822-1.1-1.328 2.232-4.117 3.414-15.508 1.046-20.128-.443-.863-1.026-1.061-1.61-1.363m19.776 10.369a4.53 4.53 0 00-.179-.887c.051.32.111.613.18.887m-.138 4.872c.005-.139.012-.279.02-.423-.88-1.694-1.484-3.757-1.05-4.349.205 1.071.62 1.974 1.146 2.795.018-.263.034-.525.045-.785-.422-1.453-.646-2.938-.303-3.256-.176-.394-.437-.675-.816-.8-3.21-1.05-4.372 2.085-3.89 4.284.455 2.088 2.153 3.881 3.41 4.3-1.069-1.397-1.73-2.883-1.483-3.963.404 1.32 1.467 2.736 2.597 3.823a.898.898 0 00.167-.24c-1.276-1.709-2.208-3.872-1.818-4.87.317 1.274 1.094 2.477 1.975 3.484m1.053-24.005c4.722.115 5.386 5.083 5.525 7.479.428 7.346-3.783 19.132-.907 23.884.303.5 1.287.954.491 1.587-.05.04-1.268.497-3.327-.515-2.039-1.001-5.363-3.894-8.537-3.671-4.719.33-5.056-11.055-2.687-14.822 2.367-3.767 6.28-3.948 9.141-.798.401-3.273.114-7.035-2.093-9.655-1.134-1.344-2.77-1.27-3.069-1.938-.646-1.44 4.228-1.567 5.463-1.551m-35.346 11.83a48.893 48.893 0 01-2.034 4.823c.284-.374.565-.788.853-1.258.077.078.102.202.084.363.23-.32.462-.665.697-1.05.555.563-1.56 3.494-3.434 5.4l-.108.196c.64-.386 1.258-.803 1.839-1.273a10.77 10.77 0 001.425-1.67c.023.09.025.19.008.304.272-.31.53-.636.774-.99.231.904-1.667 3.18-3.712 4.888-.364.336-.74.66-1.119.963 1.251-.57 2.54-1.302 3.647-2.193a9.08 9.08 0 00.906-1.005 1.365 1.365 0 01-.028.224c.294-.29.565-.593.808-.91-.032.953-1.166 2.323-2.704 3.59a18.936 18.936 0 01-3.12 2.34c1.711-.62 3.607-1.596 5.05-2.747a7.88 7.88 0 00.497-.53c-.008.045-.02.09-.03.136.3-.267.573-.542.812-.822-.188.985-1.036 2.026-2.243 2.992-1.28 1.245-3.23 2.42-5.263 3.272 3.844-.48 8.57-2.522 9.907-6.801.65-2.084-2.484-7.192-3.512-8.241m-3.16-12.544c.558 1.083.818 1.958 1.074 3.123.211-.372.52-.699.853-.982a.991.991 0 01-.246-.677c.006-.509.37-.918.81-.913.361.004.663.286.756.666.357-.222.598-.375.574-.464-.453-1.653-2.495-.68-3.82-.753m1.476-12.498c.003.16.012.32.025.48-.86.387-1.588 1.064-1.697 1.81.5-.583 1.154-.872 1.813-.977.02.094.037.186.058.278-.934.546-1.855 1.52-1.842 2.211.595-.798 1.268-1.117 1.98-1.272-.916.694-2.128 2.19-1.95 2.783.824-1.273 1.429-1.482 2.626-1.946.664.284 1.595.318 2.337-.15 2.188-1.385.948-3.126-.21-3.597-.064-.13-.194-.25-.413-.333-1.709-.646-4.007-.171-4.428 1.493.44-.451 1.062-.696 1.7-.78m5.672-4.053c4.883 2.71 3.426 16.434 1.433 13.815-3.08-4.047-9.332-.492-10.932-3.596-.59-1.612-.63-6.247-.193-9.691.463-2.597-2.21-.123-2.039-2.575.216-3.08 6.145-5.957 8.078-6.386 3.741-.833 8.002 5.054 3.653 8.433m2.39 25.286c2.961-6.808 2.535-32.68.358-34.12-.084-.824 5.076-2.543 6.997-2.4 1.061 1.868-.184 19.337-.932 25.78-.633-.312-1.194-.76-1.83-1.537-.218.55.662 1.618 1.712 2.49a9.871 9.871 0 00-.062.623 4.537 4.537 0 01-1.75-1.153c-.032.652.732 1.454 1.728 2.086.01.289.034.565.07.829-.7-.17-1.359-.471-1.896-.955.13.824 1.007 1.54 2.132 1.998.096.298.215.57.353.816-.98-.072-1.917-.337-2.582-.855.531 1.798 2.903 2.884 5.31 2.31a3.43 3.43 0 00.605-.135c.345-.11.552-.215.663-.327l.008-.004c1.483-.75.418-3.117-.448-3.035a.624.624 0 00.094-.732c1.79-2.35 5.307-.727 5.301 1.828-.013 5.158-6.21 4.999-10.507 5.395-4.093.377-6.084 2.846-5.324 1.098M39.67 4.272c-1.718 3.074-1.942 12.878-1.24 20.14.237 2.448 1.395 2.983 1.596 3.329a.39.39 0 01.026.344c-1.093-.566-1.76-1.003-2.519-2.12-.3.407.861 1.837 1.92 2.74-.035.023-.07.043-.105.065-.783-.342-1.498-.803-2.079-1.547-.093.444.531 1.208 1.355 1.88a5.087 5.087 0 01-.63.183 4.287 4.287 0 01-.989-.806c.014.282.18.588.45.894-.767.077-1.48-.071-1.783-.611-.35-.626-.665-1.814-.936-3.36-3.752 3.249-8.662-2.68-7.842-8.341.475-3.281 1.201-9.612 1.023-11.538-.223-2.397 3.39-.384 4.595.267-1.129 3.032-1.92 7.639-1.564 10.47.43 3.404 2.584 4.448 2.895.585a126.463 126.463 0 01-.148-3.21c-.176-1.993-.363-5.131.014-7.794.048-.982.116-1.868.206-2.623 1.238-1.753 5.25-.265 5.755 1.053m7.128 9.193c.534-1.78-.356-6.488-2.017-5.217-.398.305-.712 1.347-.91 2.632-1.098-.058-1.725-.137-2.677-.975-.092.593 1.378 1.595 2.422 1.955-.753.071-1.492-.02-2.22-.57.092.644 1.22 1.27 2.28 1.477-.007.083-.01.168-.016.252-.71.11-1.448.05-2.066-.345.227.656 1.09 1.057 2.042 1.148l.001.447c-.662.109-1.328.068-1.842-.209.611.904 2.24 1.217 3.757.5.56-.175 1.066-.524 1.246-1.095m-.777 12.914c-10.687 1.19-6.73-19.1-3.47-21.445 4.351-3.13 6.707.516 7.664 4.93 1.425 6.583-.483 10.579-6.06 9.84.05.329-.052 2.097 1.967 1.912.924-.086 2.65-.354 4.01-1.32.593-.421 1.086 1.364.06 3.242-.615 1.128-1.301 2.522-4.17 2.84M10.927 6.649c-1.027.737-1.259 3.117-1.149 4.864.978-.503 2.514-1.24 3.423-2.474 1.324-1.795-.901-3.376-2.274-2.39m-6.91 14.88c.528.036-1.1 2.591 2.936 3.577 2.701.66 5.643-.655 7.6.558 4.322 2.673 2.293 9.857 1.203 9.506-.386-.124-.212-1.815-1.975-2.133-.98-.178-2.937.802-2.624 1.747 1.272 3.852 6.667 3.986 9.138 10.166 2.252 5.63-1.464 10.304-2.73 12.344-1.003 1.613-1.626 1.45-4.012 1.031-6.773-1.187-11.92 3.292-12.447 11.97-.137 2.34-1.043 2.258-1.068.42-.644-18.309 6.852-20.825 5.84-35.322-.226-3.252-2.19-7.362-3.11-10.094-.814-2.412.32-3.831 1.248-3.77M16.38 64.158c.381 2.934-3.08 5.328-5.153 3.085-1.488-1.611.097-2.301.045-3.394-.043-.884-.674-1.431-2.13-.748-2.739 1.134-2.756 10.639-.365 13.502.867 1.037 2.12.747 3.78-.324 2.107-1.363-.673 12.532-2.668 13.578a8.42 8.42 0 00-.512-1.168c.656-1.173.994-2.326.77-3.198-.212.808-.653 1.659-1.203 2.458-.12-.19-.247-.378-.379-.567.587-1.277.877-2.507.596-3.182-.185.883-.576 1.74-1.07 2.533-.114-.154-.233-.306-.352-.46.532-1.46.794-2.897.436-3.367a8.111 8.111 0 01-.947 2.72l-.254-.322c.446-1.674.67-3.476.216-3.688-.124 1.245-.368 2.113-.764 2.987-2.496-3.25-5.012-7.474-3.415-16.524.801-4.537 5.001-8.64 9.261-7.864.85.156 3.612.914 4.108 3.943" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 14 21" id="long-arrow" xmlns="http://www.w3.org/2000/svg">
                <path d="M.696 7.032a.747.747 0 000 1.008.623.623 0 00.922 0l4.724-5.11v16.863c.001.394.29.706.653.706.364 0 .662-.312.662-.706V2.93l4.716 5.11a.633.633 0 00.931 0 .747.747 0 000-1.008L7.461.712a.609.609 0 00-.922 0z" />
            </symbol>
            <symbol viewBox="0 0 54 54" fill="currentColor" stroke="#f6fafc" stroke-miterlimit="50" stroke-width=".5" id="package" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 39a1 1 0 100 2 1 1 0 000-2z" />
                <path stroke-width=".7" d="M32.768 31.964l-4.065-5.076 16.304-5.429 5.074 5.07zm-4.753 18.612v-21.29l3.601 4.5c.262.327.698.46 1.098.335l11.551-3.63v14.668zM27 25.32l-15.07-5.023 8.206-2.735a10.163 10.163 0 007.88 3.75c2.837 0 5.504-1.167 7.423-3.225l6.63 2.21zm-1.026 25.2l-14.208-5.333v-14.24c11.179 3.71 10.633 3.596 10.944 3.596.349 0 .683-.18.87-.493l2.394-3.992zM5.96 26.87l3.211-5.352 16.308 5.436-3.212 5.352L5.96 26.871zM3.921 14.064l14.046-4.38a10.095 10.095 0 001.018 6.12l-9.992 3.332zm16.409-5.55a8.128 8.128 0 017.686-5.482 8.109 8.109 0 018.124 8.125 8.027 8.027 0 01-1.81 5.114 8.096 8.096 0 01-6.314 3.011 8.132 8.132 0 01-6.676-3.494 8.066 8.066 0 01-1.45-4.63 8.1 8.1 0 01.44-2.644zm17.84 2.643c0-.258-.01-.515-.03-.772l11.924 3.683-5.063 5.068-8.274-2.76a10.191 10.191 0 001.444-5.219zm8.548 9.14l5.985-5.984a1.016 1.016 0 00-.42-1.689L37.71 8.125A10.135 10.135 0 0028.016 1a10.16 10.16 0 00-9.422 6.36l-16.88 5.264a1.016 1.016 0 00-.417 1.688l6.143 6.142-3.874 6.457a1.016 1.016 0 00.55 1.486l5.618 1.873v15.62c0 .424.263.803.66.952 3.435 1.288 16.2 6.076 16.268 6.1.202.07.429.08.65.009l.009-.003 18.281-6.094c.415-.138.695-.526.695-.963V29.852l5.992-1.883a1.016 1.016 0 00.413-1.687z" />
                <path d="M23.385 40.95l-2.105-.882c-.49-.205-1.036.072-1.22.619-.183.547.065 1.157.555 1.363l2.105.882c.491.206 1.036-.073 1.22-.619.183-.547-.065-1.157-.555-1.363zm-.035 4.227l-5.999-2.117c-.517-.182-1.093.064-1.287.55-.194.487.068 1.03.585 1.212l6 2.118c.115.04.234.06.35.06a1 1 0 00.937-.61c.194-.488-.068-1.03-.585-1.213zM33.707 7.293a1 1 0 00-1.414 0L27 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l6-6a1 1 0 000-1.414z" />
            </symbol>
            <symbol viewBox="0 0 10 13" id="padlock" xmlns="http://www.w3.org/2000/svg">
                <path fill="#64b2db" d="M9.02 11.467a.5.5 0 01-.49.507H1.47a.5.5 0 01-.49-.507V6.296a.5.5 0 01.49-.507h7.06a.5.5 0 01.49.507zM3.332 2.681c0-.918.75-1.665 1.672-1.665A1.67 1.67 0 016.676 2.68v2.082H3.332zM8.53 4.773h-.883V2.686C7.646 1.205 6.46 0 5 0 3.54 0 2.352 1.205 2.352 2.686v2.087h-.881C.66 4.773 0 5.457 0 6.297v5.18C0 12.317.66 13 1.47 13h7.06c.81 0 1.47-.683 1.47-1.523v-5.18c0-.84-.66-1.524-1.47-1.524z" />
                <path fill="#64b2db" d="M5 7c-.552 0-1 .376-1 .84 0 .297.183.558.458.708v.997c0 .251.242.455.541.455.299 0 .54-.204.54-.455V8.55C5.816 8.4 6 8.14 6 7.842 6 7.376 5.552 7 5 7z" />
            </symbol>
            <symbol viewBox="0 0 13 13" id="phone-call" xmlns="http://www.w3.org/2000/svg">
                <path fill="#64b2db" d="M10.224 10.329c-.003 0-.003.002 0 0-.088.094-.178.18-.275.273a5.906 5.906 0 00-.434.449 1.086 1.086 0 01-.846.356c-.034 0-.07 0-.104-.002-.668-.042-1.289-.303-1.755-.525a9.99 9.99 0 01-3.32-2.592c-.767-.922-1.28-1.774-1.62-2.69-.21-.558-.286-.993-.252-1.403.022-.263.124-.48.31-.666l.768-.765a.512.512 0 01.342-.16c.141 0 .256.086.328.158l.007.007c.137.127.268.26.405.401l.214.218.614.612c.239.238.239.457 0 .695-.065.065-.128.13-.193.193-.19.193-.37.372-.565.547-.005.005-.01.007-.012.011-.193.193-.157.382-.117.51l.007.02c.16.385.385.749.727 1.182l.002.002c.621.762 1.276 1.357 1.998 1.812.093.058.187.105.277.15.081.04.158.079.223.119.009.004.018.011.027.016a.49.49 0 00.223.056.482.482 0 00.342-.155l.77-.767c.076-.076.197-.168.34-.168.139 0 .253.087.323.163l.005.005 1.24 1.236c.231.228.231.464.002.702zM9.418 7.96c-.218-.226-.481-.347-.76-.347-.277 0-.543.119-.77.345l-.711.705-.173-.09c-.081-.04-.158-.078-.223-.118-.666-.421-1.271-.97-1.852-1.68a4.536 4.536 0 01-.608-.954c.185-.168.356-.343.523-.511l.189-.19c.472-.47.472-1.08 0-1.55l-.615-.612a9.353 9.353 0 01-.209-.213 10.602 10.602 0 00-.423-.417A1.067 1.067 0 003.032 2c-.274 0-.54.114-.765.33l-.004.004-.765.768a1.636 1.636 0 00-.489 1.042c-.054.654.14 1.263.288 1.662.365.979.91 1.886 1.722 2.858a10.582 10.582 0 003.526 2.75c.517.243 1.208.532 1.98.582.047.002.097.004.142.004a1.7 1.7 0 001.298-.556c.002-.004.007-.006.009-.01.117-.142.252-.27.394-.406.096-.092.195-.188.292-.29.223-.23.34-.499.34-.774 0-.278-.12-.545-.347-.769z" />
                <path fill="none" stroke="#64b2db" stroke-miterlimit="50" stroke-width=".3" d="M10.224 10.329c-.003 0-.003.002 0 0-.088.094-.178.18-.275.273a5.906 5.906 0 00-.434.449 1.086 1.086 0 01-.846.356c-.034 0-.07 0-.104-.002-.668-.042-1.289-.303-1.755-.525a9.99 9.99 0 01-3.32-2.592c-.767-.922-1.28-1.774-1.62-2.69-.21-.558-.286-.993-.252-1.403.022-.263.124-.48.31-.666l.768-.765a.512.512 0 01.342-.16c.141 0 .256.086.328.158l.007.007c.137.127.268.26.405.401l.214.218.614.612c.239.238.239.457 0 .695-.065.065-.128.13-.193.193-.19.193-.37.372-.565.547-.005.005-.01.007-.012.011-.193.193-.157.382-.117.51l.007.02c.16.385.385.749.727 1.182l.002.002c.621.762 1.276 1.357 1.998 1.812.093.058.187.105.277.15.081.04.158.079.223.119.009.004.018.011.027.016a.49.49 0 00.223.056.482.482 0 00.342-.155l.77-.767c.076-.076.197-.168.34-.168.139 0 .253.087.323.163l.005.005 1.24 1.236c.231.228.231.464.002.702zM9.418 7.96c-.218-.226-.481-.347-.76-.347-.277 0-.543.119-.77.345l-.711.705-.173-.09c-.081-.04-.158-.078-.223-.118-.666-.421-1.271-.97-1.852-1.68a4.536 4.536 0 01-.608-.954c.185-.168.356-.343.523-.511l.189-.19c.472-.47.472-1.08 0-1.55l-.615-.612a9.353 9.353 0 01-.209-.213 10.602 10.602 0 00-.423-.417A1.067 1.067 0 003.032 2c-.274 0-.54.114-.765.33l-.004.004-.765.768a1.636 1.636 0 00-.489 1.042c-.054.654.14 1.263.288 1.662.365.979.91 1.886 1.722 2.858a10.582 10.582 0 003.526 2.75c.517.243 1.208.532 1.98.582.047.002.097.004.142.004a1.7 1.7 0 001.298-.556c.002-.004.007-.006.009-.01.117-.142.252-.27.394-.406.096-.092.195-.188.292-.29.223-.23.34-.499.34-.774 0-.278-.12-.545-.347-.769z" />
                <path fill="#64b2db" d="M7.233 3.563c.55.092 1.05.353 1.45.752.4.4.658.9.752 1.45a.282.282 0 00.28.235c.016 0 .031-.002.048-.004a.284.284 0 00.233-.328 3.24 3.24 0 00-.91-1.754 3.24 3.24 0 00-1.754-.91.285.285 0 00-.328.23.28.28 0 00.23.329z" />
                <path fill="none" stroke="#64b2db" stroke-miterlimit="50" stroke-width=".3" d="M7.233 3.563c.55.092 1.05.353 1.45.752.4.4.658.9.752 1.45a.282.282 0 00.28.235c.016 0 .031-.002.048-.004a.284.284 0 00.233-.328 3.24 3.24 0 00-.91-1.754 3.24 3.24 0 00-1.754-.91.285.285 0 00-.328.23.28.28 0 00.23.329z" />
                <path fill="#64b2db" d="M11.995 5.653a5.65 5.65 0 00-1.586-3.061 5.646 5.646 0 00-3.06-1.587.3.3 0 00-.345.244.302.302 0 00.247.348 5.056 5.056 0 012.735 1.418 5.044 5.044 0 011.417 2.736.3.3 0 00.296.249c.018 0 .034-.002.052-.004a.295.295 0 00.244-.343z" />
                <path fill="none" stroke="#64b2db" stroke-miterlimit="50" stroke-width=".3" d="M11.995 5.653a5.65 5.65 0 00-1.586-3.061 5.646 5.646 0 00-3.06-1.587.3.3 0 00-.345.244.302.302 0 00.247.348 5.056 5.056 0 012.735 1.418 5.044 5.044 0 011.417 2.736.3.3 0 00.296.249c.018 0 .034-.002.052-.004a.295.295 0 00.244-.343z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 54.757 54.757" id="placeholder" xmlns="http://www.w3.org/2000/svg">
                <path d="M40.94 5.617A19.052 19.052 0 0027.38 0a19.05 19.05 0 00-13.56 5.617c-6.703 6.702-7.536 19.312-1.804 26.952L27.38 54.757 42.721 32.6c5.755-7.671 4.922-20.281-1.781-26.983zM27.557 26c-3.859 0-7-3.141-7-7s3.141-7 7-7 7 3.141 7 7-3.141 7-7 7z" />
            </symbol>
            <symbol viewBox="0 0 20 20" id="rounded-close" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10z" />
                <path fill="#fff" d="M10.708 10l3.145-3.146a.5.5 0 10-.707-.707L10 9.293 6.854 6.147a.5.5 0 10-.707.707L9.293 10l-3.146 3.146a.5.5 0 10.707.707L10 10.707l3.146 3.146a.499.499 0 00.707 0 .5.5 0 000-.707z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 19 22" id="shopping-bag" xmlns="http://www.w3.org/2000/svg">
                <path d="M.996 20.986L2.454 6.658h2.551v.904c-.52.191-.885.712-.885 1.315 0 .767.599 1.397 1.327 1.397.73 0 1.328-.63 1.328-1.397 0-.603-.364-1.124-.885-1.315v-.904h7.184v.904c-.52.191-.885.712-.885 1.315 0 .767.599 1.397 1.328 1.397.728 0 1.327-.63 1.327-1.397 0-.603-.364-1.124-.885-1.315v-.904h2.655l1.458 14.328zm4.48-12.52a.42.42 0 01.417.433.42.42 0 01-.417.434.42.42 0 01-.417-.434.42.42 0 01.417-.433zm.469-3.699c0-2.082 1.615-3.78 3.594-3.78 1.98 0 3.594 1.698 3.594 3.78V5.7H5.945zm7.657 3.699a.42.42 0 01.417.433.42.42 0 01-.417.434.42.42 0 01-.417-.434.42.42 0 01.417-.433zm5.391 12.986L17.431 6.137a.486.486 0 00-.47-.438h-2.89v-.932C14.07 2.137 12.039 0 9.539 0S5.007 2.137 5.007 4.767V5.7H2.038a.486.486 0 00-.469.438L.007 21.452a.51.51 0 00.104.384A.41.41 0 00.45 22h18.1c.13 0 .26-.055.339-.164a.51.51 0 00.104-.384z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 96 96" id="slider-arrow" xmlns="http://www.w3.org/2000/svg">
                <path d="M55.46 49.738L44.146 60.487a1.911 1.911 0 01-2.606 0 1.69 1.69 0 010-2.476L51.55 48.5l-10.01-9.511a1.69 1.69 0 010-2.476 1.912 1.912 0 012.606 0l11.315 10.75c.36.341.539.789.539 1.237 0 .448-.18.896-.54 1.238z" />
            </symbol>
            <symbol fill="currentColor" viewBox="0 0 348.077 348.077" id="tel" xmlns="http://www.w3.org/2000/svg">
                <path d="M340.273 275.083l-53.755-53.761c-10.707-10.664-28.438-10.34-39.518.744l-27.082 27.076a792.327 792.327 0 01-5.344-2.973c-17.102-9.476-40.509-22.464-65.14-47.113-24.704-24.701-37.704-48.144-47.209-65.257-1.003-1.813-1.964-3.561-2.913-5.221l18.176-18.149 8.936-8.947c11.097-11.1 11.403-28.826.721-39.521L73.39 8.194c-10.682-10.68-28.421-10.356-39.518.744l-15.15 15.237.414.411c-5.08 6.482-9.325 13.958-12.484 22.02C3.74 54.28 1.927 61.603 1.098 68.941-6 127.785 20.89 181.564 93.866 254.541c100.875 100.868 182.167 93.248 185.674 92.876 7.638-.913 14.958-2.738 22.397-5.627 7.992-3.122 15.463-7.361 21.941-12.43l.331.294 15.348-15.029c11.074-11.098 11.393-28.83.716-39.542z" />
            </symbol>
            <symbol viewBox="0 0 21 20" id="update-arrow" xmlns="http://www.w3.org/2000/svg">
                <path fill="#fff" d="M20.96 14.531a.813.813 0 00-1.026-.526l-1.058.346A10.05 10.05 0 0019.864 10c0-5.514-4.456-10-9.932-10C4.455 0 0 4.486 0 10s4.455 10 9.932 10c.45 0 .814-.367.814-.82a.817.817 0 00-.814-.82c-4.579 0-8.304-3.75-8.304-8.36 0-4.61 3.725-8.36 8.304-8.36 4.579 0 8.304 3.75 8.304 8.36 0 1.27-.285 2.514-.83 3.644l-.36-1.121a.813.813 0 00-1.026-.526.821.821 0 00-.523 1.032l.96 2.975a.815.815 0 001.025.527l2.955-.967a.821.821 0 00.523-1.033z" />
            </symbol>
            <symbol viewBox="0 0 11 13" id="user" xmlns="http://www.w3.org/2000/svg">
                <path fill="#64b2db" d="M8.521 12H2.478c-.464 0-.82-.124-1.087-.378-.263-.25-.391-.59-.391-1.04 0-.235.008-.466.023-.688a6.648 6.648 0 01.264-1.413c.065-.204.155-.407.266-.602.107-.187.229-.346.364-.475.126-.12.285-.219.472-.293.173-.068.368-.105.58-.111.025.014.07.04.145.088l.518.333c.217.138.497.263.831.37.342.11.69.166 1.037.166a3.38 3.38 0 001.036-.166 3.7 3.7 0 00.832-.37 66.7 66.7 0 00.517-.333A2.36 2.36 0 018.031 7c.212.006.406.043.58.111.187.074.346.173.472.293.135.129.257.288.363.475.111.195.201.398.267.602a5.6 5.6 0 01.172.7 6.7 6.7 0 01.091.713c.016.221.024.453.024.688 0 .45-.128.79-.39 1.04-.269.254-.624.378-1.089.378zm2.346-2.984a6.892 6.892 0 00-.205-.86 4.309 4.309 0 00-.345-.803 3.016 3.016 0 00-.519-.695 2.282 2.282 0 00-.746-.48A2.518 2.518 0 008.1 6c-.135 0-.265.057-.516.225a69.69 69.69 0 01-.538.356 3.04 3.04 0 01-.696.315 2.696 2.696 0 01-.85.14 2.71 2.71 0 01-.851-.14 3.032 3.032 0 01-.695-.315 73.39 73.39 0 01-.539-.356C3.165 6.057 3.034 6 2.9 6c-.342 0-.663.06-.952.177-.29.118-.54.28-.746.481-.196.193-.37.427-.519.695a4.317 4.317 0 00-.344.803 6.91 6.91 0 00-.205.86 8.208 8.208 0 00-.107.856 12.22 12.22 0 00-.026.8c0 .706.219 1.278.65 1.7.426.417.99.628 1.676.628h6.348c.686 0 1.25-.211 1.676-.628.431-.421.65-.994.65-1.7 0-.274-.009-.543-.027-.8a8.261 8.261 0 00-.106-.856z" />
                <path fill="none" stroke="#64b2db" stroke-miterlimit="50" stroke-width=".9" d="M5.5 6a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
            </symbol>
        </svg>
    </div>
    <script src="{{ url('assets/js/libs.min.js') }}"></script>
    <script src="{{ url('assets/js/main.js?1566387414272') }}"></script>
</body>

</html>