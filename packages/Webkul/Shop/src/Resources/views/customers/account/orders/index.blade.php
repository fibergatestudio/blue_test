@extends('layouts.main')

@section('header')
<header class="header header_inner">

            @include('layouts.header_menu')
</header>
@endsection

@section('content')

 <main>
            <div class="page page_has-filter">
            @include('shop::customers.account.partials.new_sidemenu')
                <div class="page__content">
                    <div class="container page__container">
                        <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="#">Your Purchases</a>
                            </li>
                        </ul>
                        <a class="back-button page__back-button" href="#">
                            <svg>
                                <use xlink:href="#long-arrow"></use>
                            </svg>
                        </a>
                        <h1 class="page__title">Your Purchases</h1>
                        <div class="purchases">
                            <div class="purchases__mob-btns">
                                <button class="purchases__menu-trigger js-box-trigger" data-target-id="sidebar">Manage account</button>
                            </div>
                            <ul class="purchases__tabs">
                                <li class="purchases__tab">
                                    <button class="purchases__button">Current purchases</button><span class="purchases__items">0</span>
                                </li>
                                <li class="purchases__tab purchases__tab_active">
                                    <button class="purchases__button">All purchases</button><span class="purchases__items">2</span>
                                </li>
                            </ul>
                            <div class="purchases__list">
                                <div class="purchase">
                                    <div class="purchase__main">
                                        <div class="purchase__order-number"><span>181217-063424-ANU</span>
                                        </div>
                                        <div class="purchase__price"><span>3 300 HUF</span>
                                        </div>
                                        <div class="purchase__date"><span>15.07.2019</span>
                                        </div>
                                        <div class="purchase__status"><span class="status status_delivered">Delivered</span>
                                        </div>
                                        <div class="purchase__btn">
                                            <button class="button button_blue button_round purchase__show-details js-show-hidden-block" data-selector="#purchaseDeatails1"><span>+</span><span>-</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="purchase__details" id="purchaseDeatails1">
                                        <div class="cart-product purchase__product">
                                            <div class="cart-product__image">
                                                <picture>
                                                    <source srcset="img/tmp/goods/blue.webp" type="image/webp">
                                                    <source srcset="img/tmp/goods/blue.png" type="image/png">
                                                    <img src="img/tmp/goods/blue.png" alt="Picture alt text">
                                                </picture>
                                            </div>
                                            <div class="cart-product__info">
                                                <div class="cart-product__text">
                                                    <h3 class="cart-product__title">Ethiopia</h3>
                                                    <p class="cart-product__desc">Spice, Nutty, Dark chocolate, Cocoa, Bitter sweet</p>
                                                </div>
                                                <div class="cart-product__price"><span class="cart-product__mob-quantity">4&nbsp;x&nbsp;</span><span>3 300 HUF</span>
                                                </div>
                                                <div class="cart-product__quantity"><span>Q-ty: 4</span>
                                                </div>
                                                <div class="cart-product__total-price"><span>13 200 HUF</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection