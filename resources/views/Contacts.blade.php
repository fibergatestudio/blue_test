@extends('layouts.main')

@section('header')

<header class="header header_has-columns">

                @include('layouts.header_menu')

            <div class="header__row js-block-cnt">
                <div class="header__content">
                    <div class="banner">
                        <h1 class="title banner__title color-blue">{{ __('shop::app.contacts.contacts') }}</h1>
                    </div>
                    <div class="header-contacts">
                        <div class="header-contacts__col">
                            <div class="header-contacts__block">
                                <h2 class="header-contacts__heading">{{ __('shop::app.contacts.address') }}:</h2>
                                <div class="header-contacts__content">1074 Budapest, Rumbach Sebestyén u. 12, fszt.</div>
                            </div>
                            <div class="header-contacts__block">
                                <h2 class="header-contacts__heading">{{ __('shop::app.contacts.coffee-manager') }}:</h2>
                                <div class="header-contacts__content">Orobinszkij Dániel <a href="tel:+36705506011">+3670/550 60 11</a>
                                </div>
                            </div>
                            <div class="header-contacts__block">
                                <h2 class="header-contacts__heading">{{ __('shop::app.contacts.head-manager') }}:<br><i>{{ __('shop::app.contacts.with-questions') }}</i>
                                </h2>
                                <div class="header-contacts__content">Benkő Attila <a href="tel:+36706102442">+3670/610 24 42 </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-contacts__col">
                            <div class="header-contacts__block">
                                <h2 class="header-contacts__heading">{{ __('shop::app.contacts.education') }}:</h2>
                                <div class="header-contacts__content">Horváth Attila <a href="tel:+36307849081">+3630/784 90 81 </a>
                                    <a href="mailto:bluebirdbaristas@gmail.com">bluebirdbaristas@gmail.com</a>
                                </div>
                            </div>
                            <div class="header-contacts__block">
                                <h2 class="header-contacts__heading">{{ __('shop::app.contacts.order') }}:</h2>
                                <div class="header-contacts__content">
                                    <a href="mailto:bluebirdroastery@gmail.com">bluebirdroastery@gmail.com</a>
                                </div>
                            </div>
                            <!-- <button class="button button_blue faq__write js-box-trigger" data-target-id="regModal">Write</button> -->
                            <button class="header-contacts__button button button_blue button_blue faq__write js-box-trigger" data-target-id="regModal">Contact Us</button>
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
                    <h2 class="title color-blue lets-work__title">{{ __('shop::app.contacts.co-operate') }}</h2>
                    <p class="lets-work__note">{{ __('shop::app.contacts.questions') }}</p>
                    <form action="{{ url('/form_sumbit') }}" class="lets-work__form form" method="POST">
                    @csrf()
                    <input type="hidden" name="page_from" value="Contacts">
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
            </section>
        </main>

        <!-- Modal - modal-->
        <div style="z-index: 999; padding-bottom: 0px; padding: 0px;" class="modal modal_reg" id="regModal">
            <button class="modal__close js-close-modal">
                <svg>
                    <use xlink:href="#rounded-close"></use>
                </svg>
            </button>
        
                <form action="{{ url('/form_sumbit') }}" method="POST" class="lets-work__form form">
                    @csrf()
                    <input type="hidden" name="page_from" value="Contacts">
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
        
@endsection