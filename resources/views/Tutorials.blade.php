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
                        </ul>
                        <div class="page__header">
                            <a class="back-button page__back-button" href="#">
                                <svg>
                                    <use xlink:href="#long-arrow"></use>
                                </svg>
                            </a>
                            <h1 class="page__title">Tutorials</h1>
                        </div>
                        <div class="tutorials">
                            <div class="tutorials__item">
                                <div class="tutorial-tile" style="background-image: url(assets/img/tutorials/card-img-1.jpg)">
                                    <div class="tutorial-tile__wrapper">
                                        <div class="tutorial-tile__title">AEROPRESS</div>
                                        <div class="tutorial-tile__desc">Coffee liberated from the constraints of gravity</div>
                                        <a class="button button_blue tutorial-tile__button" href="{{ url('tutorials/aeropress') }}">Start guide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tutorials__item">
                                <div class="tutorial-tile" style="background-image: url(assets/img/tutorials/card-img-2.jpg)">
                                    <div class="tutorial-tile__wrapper">
                                        <div class="tutorial-tile__title">BIALETTI MOKA POT</div>
                                        <div class="tutorial-tile__desc">Preparation guide</div>
                                        <a class="button button_blue tutorial-tile__button" href="tutorial.html">Start guide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tutorials__item">
                                <div class="tutorial-tile" style="background-image: url(assets/img/tutorials/card-img-3.jpg)">
                                    <div class="tutorial-tile__wrapper">
                                        <div class="tutorial-tile__title">CHEMEX</div>
                                        <div class="tutorial-tile__desc">Coffee liberated from the constraints of gravity</div>
                                        <a class="button button_blue tutorial-tile__button" href="tutorial.html">Start guide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tutorials__item">
                                <div class="tutorial-tile" style="background-image: url(assets/img/tutorials/card-img-4.jpg)">
                                    <div class="tutorial-tile__wrapper">
                                        <div class="tutorial-tile__title">Cold brew coffee</div>
                                        <div class="tutorial-tile__desc">Preparation guide</div>
                                        <a class="button button_blue tutorial-tile__button" href="tutorial.html">Start guide</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection