@extends('layouts.main')

@section('header')

<header class="header header_inner">

                @include('layouts.header_menu')

</header>

@endsection

@section('content')

<!-- Open Graph Generated: a.pr-cy.ru -->
<meta name="og:title" content="{{ $meta_title }}">
<meta name="og:description" content="{{ $meta_descr }}">
<meta name="og:type" content="{{ URL::asset('/storage/'.$filename) }}">
<!-- Open Graph: Article -->


<main>
    <div class="page">
        <div class="page__content">
            <div class="container page__container">
                <ul class="breadcrumb page__breadcrumb">
                    <li class="breadcrumb__item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb__item">
                        <a href="terms.html">{{ $page_title }}</a>
                    </li>
                </ul>
                <a class="back-button page__back-button" href="#">
                    <svg>
                        <use xlink:href="#long-arrow"></use>
                    </svg>
                </a>
                <h1 class="page__title">{{ $page_title }}</h1>
                <div class="cart">
                    <div class="cart-settings__box cart-settings__box_p-100 terms">
                        {!! $page_body !!} 
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection