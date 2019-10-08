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
                                <a href="{{ url('/') }}">Home</a>
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
                                <svg class="msg__icon" viewBox="0 0 101 100" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <clippath id="a">
                                            <path d="M44 62.927V28.073h12v34.854zm4.822-33.78C46.465 29.851 45 32.091 45 34.808c.119 1.638.218 3.297.337 4.936.336 6.243.673 12.362 1.01 18.605.118 2.115 1.683 3.65 3.703 3.65 2.02 0 3.603-1.639 3.702-3.775 0-1.286 0-2.468.12-3.775.217-4.003.455-8.006.673-12.009.118-2.592.336-5.185.455-7.778 0-.933-.119-1.763-.455-2.592-1.01-2.323-3.367-3.505-5.723-2.925z" fill="#fff"></path>
                                        </clippath>
                                    </defs>
                                    <path d="M50.058 90C47.307 90 45 92.28 45 95s2.307 5 5.058 5c2.651 0 5.059-2.28 4.937-4.88.122-2.86-2.165-5.12-4.937-5.12z" fill="#64b2db"></path>
                                    <path d="M90.672 79.925c-1.771 3.103-4.905 4.945-8.405 4.945H18.609c-3.46 0-6.574-1.8-8.303-4.841-1.75-3.083-1.771-6.765-.02-9.869l31.91-56.147c1.73-3.083 4.823-4.903 8.323-4.903 3.48 0 6.594 1.841 8.324 4.924l31.89 56.147c1.71 3.02 1.689 6.662-.061 9.744zm6.919 4.055c3.195-5.606 3.215-12.289.04-17.875L65.763 10C62.608 4.351 56.909 1 50.519 1c-6.39 0-12.088 3.372-15.243 8.979L3.366 66.147C.19 71.795.212 78.518 3.427 84.125 6.602 89.669 12.28 93 18.629 93h63.658c6.37 0 12.088-3.372 15.304-9.02z" fill="#64b2db"></path>
                                    <path d="M90.672 79.925c-1.771 3.103-4.905 4.945-8.405 4.945H18.609c-3.46 0-6.574-1.8-8.303-4.841-1.75-3.083-1.771-6.765-.02-9.869l31.91-56.147c1.73-3.083 4.823-4.903 8.323-4.903 3.48 0 6.594 1.841 8.324 4.924l31.89 56.147c1.71 3.02 1.689 6.662-.061 9.744zm6.919 4.055c3.195-5.606 3.215-12.289.04-17.875L65.763 10C62.608 4.351 56.909 1 50.519 1c-6.39 0-12.088 3.372-15.243 8.979L3.366 66.147C.19 71.795.212 78.518 3.427 84.125 6.602 89.669 12.28 93 18.629 93h63.658c6.37 0 12.088-3.372 15.304-9.02z" fill="none" stroke="#fff" stroke-miterlimit="50"></path>
                                    <g>
                                        <path d="M48.822 29.146C46.465 29.852 45 32.092 45 34.81c.119 1.638.218 3.297.337 4.936.336 6.243.673 12.362 1.01 18.605.118 2.115 1.683 3.65 3.703 3.65 2.02 0 3.603-1.639 3.702-3.775 0-1.286 0-2.468.12-3.775.217-4.003.455-8.006.673-12.009.118-2.592.336-5.185.455-7.778 0-.933-.119-1.763-.455-2.592-1.01-2.323-3.367-3.505-5.723-2.925z" fill="#64b2db"></path>
                                        <path d="M48.822 29.146C46.465 29.852 45 32.092 45 34.81c.119 1.638.218 3.297.337 4.936.336 6.243.673 12.362 1.01 18.605.118 2.115 1.683 3.65 3.703 3.65 2.02 0 3.603-1.639 3.702-3.775 0-1.286 0-2.468.12-3.775.217-4.003.455-8.006.673-12.009.118-2.592.336-5.185.455-7.778 0-.933-.119-1.763-.455-2.592-1.01-2.323-3.367-3.505-5.723-2.925z" fill="none" stroke="#fff" stroke-miterlimit="50" stroke-width="2" clip-path="url(&quot;#a&quot;)"></path>
                                    </g>
                                </svg>
                                <p class="msg__text">There are some problems with your payment, try again please!</p><br>
                               
                                <div style="text-align: center;" class="button-group low_cont">
                                    <a href="{{ url('/checkout/cart') }}">
                                    <button type="button" class="button button_blue">
                                        Try Again
                                    </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection