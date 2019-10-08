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
                    <div class="container">
                        <!-- <ul class="breadcrumb page__breadcrumb">
                            <li class="breadcrumb__item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="{{ url('/checkout/cart') }}">Shopping cart</a>
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
                        <h1 class="page__title">Check out</h1>
                        <div class="cart">
                            <div class="cart__msg msg">
                                <svg class="msg__icon" viewBox="0 0 102 102" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M78.81 98.692H52.636V87.115h-3.272v11.577H23.19V72.231h23.914l2.26-4.572v14.495h3.272V67.659l2.26 4.572H78.81zM22.566 62.308h25.787l-3.272 6.605H19.294zm56.868 0l3.272 6.605H56.919l-3.272-6.605zM81.457 59H20.543L14 72.23h5.919V102H82.08V72.23H88z" fill="#64b2db"></path>
                                    <path d="M26 86h10v3H26z" fill="#64b2db"></path>
                                    <path d="M26 92h10v3H26z" fill="#64b2db"></path>
                                    <path d="M40 92h3v3h-3z" fill="#64b2db"></path>
                                    <path d="M48.016 10.83L51 7.137l2.985 3.694 4.387 1.902-2.497 4.27-.359 4.914-4.516-1.152-4.517 1.15L46.126 17l-2.498-4.27zM43.546 26L51 24.098l7.455 1.9.584-8.012 3.96-6.77-7.004-3.035L51 2l-4.997 6.181L39 11.215l3.96 6.771z" fill="#64b2db"></path>
                                    <path d="M14.602 29.356l-.12 1.646-1.487-.379-1.486.38-.121-1.647-.862-1.478 1.502-.653.967-1.197.966 1.199 1.502.653zm3.103.965L20 26.398l-4.065-1.763L13 21l-2.935 3.633L6 26.397l2.295 3.923.339 4.678L13 33.887 17.368 35z" fill="#64b2db"></path>
                                    <path d="M90.602 29.356l-.12 1.646-1.487-.379-1.486.38-.12-1.647-.862-1.478 1.502-.653.966-1.197.966 1.199 1.502.653zm3.103.965L96 26.398l-4.065-1.763L89 21l-2.935 3.633L82 26.397l2.295 3.923.339 4.678L89 33.887 93.368 35z" fill="#64b2db"></path>
                                    <path d="M24.953 34.068a17.702 17.702 0 0 1 5.318 9.862 39.748 39.748 0 0 0-7.037-6.446zM20.21 39.38a36.406 36.406 0 0 1 8.272 7.531L35 55l-1.349-10.709c-.704-5.59-3.71-10.737-8.25-14.117L23.824 29 19 38.579z" fill="#64b2db"></path>
                                    <path d="M78.768 37.485a39.634 39.634 0 0 0-7.039 6.446 17.71 17.71 0 0 1 5.319-9.861zM67 55l6.52-8.09a36.442 36.442 0 0 1 8.272-7.53L83 38.577 78.175 29l-1.577 1.177c-4.538 3.38-7.547 8.524-8.25 14.115z" fill="#64b2db"></path>
                                    <path d="M58 56h3.25v-6.968c0-7.988 2.751-15.765 7.75-21.903L66.502 25C61.02 31.734 58 40.269 58 49.032z" fill="#64b2db"></path>
                                    <path d="M70 20h3v3h-3z" fill="#64b2db"></path>
                                    <path d="M74 13h3v3h-3z" fill="#64b2db"></path>
                                    <path d="M40.75 56H44v-6.968c0-8.765-3.02-17.298-8.502-24.032L33 27.13c4.998 6.137 7.75 13.914 7.75 21.902z" fill="#64b2db"></path>
                                    <path d="M29 20h3v3h-3z" fill="#64b2db"></path>
                                    <path d="M25 13h3v3h-3z" fill="#64b2db"></path>
                                    <path d="M50 28h3v3h-3z" fill="#64b2db"></path>
                                    <path d="M50 35h3v21h-3z" fill="#64b2db"></path>
                                    <g>
                                        <path d="M95 44h3v3h-3z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M95 51h3v3h-3z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M99 48h3v3h-3z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M92 48h3v3h-3z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M91 0h3v3h-3z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M91 7h3v3h-3z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M94 4h3v3h-3z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M87 4h3v3h-3z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M4 51h3v3H4z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M4 58h3v3H4z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M7 55h3v3H7z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M0 55h3v3H0z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M4 0h3v3H4z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M4 7h3v3H4z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M7 4h3v3H7z" fill="#64b2db"></path>
                                    </g>
                                    <g>
                                        <path d="M0 4h3v3H0z" fill="#64b2db"></path>
                                    </g>
                                </svg>
                                <p class="msg__text">Your payment is successfull!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection