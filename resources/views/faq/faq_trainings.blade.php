@extends('layouts.main')

@section('header')
    <header class="header header_inner">
        @include('layouts.header_menu')
    </header>
@endsection

@section('content')

<main>
            <div class="page page_has-filter">
                <!-- <aside class="sidebar" id="sidebar">
                    
                </aside> -->
                <aside class="sidebar" id="sidebar">
                    <div class="manage-account">
                        <h2 class="manage-account__title">FAQ</h2>
                        <ul class="manage-account__menu">
                            <li class="manage-account__item">
                                <a href="{{ url('/faq/registration') }}">Registration</a>
                            </li>
                            <li class="manage-account__item ">
                                <a href="{{ url('/faq/subscribe') }}">Subscribe</a>
                            </li>
                            <li class="manage-account__item">
                                <a href="{{ url('/faq/coffee-shop') }}">Coffee Shop</a>
                            </li>
                            <li class="manage-account__item m">
                                <a href="{{ url('/faq/blue-box') }}">Blue Box</a>
                            </li>
                            <li class="manage-account__item">
                                <a href="{{ url('/faq/loyalty-program') }}">Loyalty Program</a>
                            </li>
                            <li class="manage-account__item">
                                <a href="{{ url('/faq/payment-and-shipping') }}">Payment and Shipping</a>
                            </li>
                            <li class="manage-account__item manage-account__item_current">
                                <a href="{{ url('/faq/trainings') }}">Trainings</a>
                            </li>
                            <li class="manage-account__item">
                                <a href="{{ url('/faq/for-business') }}">For Business</a>
                            </li>
                        </ul>
                    </div>
                </aside>
                <div class="page__content">
                    <div class="container page__container">
                        <!-- <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="{{ url('/faq') }}">FAQ </a>
                            </li>
                        </ul> -->

                        <!-- Dynamic breadcrumbs -->
                        <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>                
                        <?php $link = "" ?>
                        @for($i = 1; $i <= count(Request::segments()); $i++)
                            @if($i < count(Request::segments()) & $i > 0)
                            <?php $link .= "/" . Request::segment($i); ?>
                            <li class="breadcrumb__item">
                            <a href="<?= $link ?>">{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a>
                            </li>
                            @else 
                            <li class="breadcrumb__item">
                            {{ucwords(str_replace('-',' ',Request::segment($i)))}}
                            </li>
                            @endif
                        @endfor
                        </ul>
                        <!-- End Dynamic breadcrumbs --> 
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
                                <h2 class="page__title faq-page__title">Trainings</h2>
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

@endsection