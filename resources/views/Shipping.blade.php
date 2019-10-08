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
                                <a href="{{ url('/shipping') }}">shipping</a>
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
                        <h1 class="page__title">Shipping</h1>
                        <div class="cart-settings">
                            <div class="cart-settings__box cart-settings__box_p-100 shipping">
                                <h2 class="shipping__title">Free shipping:</h2>
                                <p class="shipping__text">For any purchase above 14000 HUF we will release the standard Hungarian shipping fee! If you order a Blue Box, the minimum order price is 14000 HUF, shipping is free!</p>
                                <h3 class="shipping__subtitle">Gifts Included With Blue Box and with Registration:</h3>
                                <ul class="shipping__list list">
                                    <li>Promotional gift</li>
                                    <li>Loyalty Card</li>
                                    <li>Gift Box</li>
                                </ul>
                                <p class="shipping__text">In case of a coffee payment, the indicated price includes the home delivery fee. Minimum order item: 3x250g <br>All prices include 3x250g of coffee, packing and shipping!</p>
                                    <div class="shipping__table">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td></td>
                                                    <th>3 months</th>
                                                    <th>6 months</th>
                                                    <th>9 months</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Classic</th>
                                                    <td>7000</td>
                                                    <td>6500</td>
                                                    <td>6000</td>
                                                </tr>
                                                <tr>
                                                    <th>Our offer</th>
                                                    <td>8000</td>
                                                    <td>7500</td>
                                                    <td>7000</td>
                                                </tr>
                                                <tr>
                                                    <th>Specialty</th>
                                                    <td>9000</td>
                                                    <td>8500</td>
                                                    <td>8000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
@endsection