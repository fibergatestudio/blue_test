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
                                <a href="#">Manage Account</a>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="#">Refer a friend</a>
                            </li>
                        </ul>
                        <a class="back-button page__back-button" href="#">
                            <svg>
                                <use xlink:href="#long-arrow"></use>
                            </svg>
                        </a>
                        <h1 class="page__title">Refer a friend</h1>
                        <div class="cart">
                            <div class="cart__mob-btns">
                                <button class="cart__menu-trigger js-box-trigger" data-target-id="sidebar">Manage account</button>
                            </div>
                            <div class="referral">
                                <div class="referral__box"><span>Your referral link:</span>
                                    <div class="referral__link">
                                        <div class="ref-link">
                                            <svg class="ref-link__icon" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.536 9.712a5.464 5.464 0 0 0-.933-.79A5.362 5.362 0 0 0 10.605 8c-1.474-.003-2.89.613-3.93 1.712l-5.05 5.314A6.001 6.001 0 0 0 0 19.151C-.002 22.38 2.485 24.998 5.555 25c1.473.005 2.886-.608 3.927-1.703l4.169-4.384a.429.429 0 0 0 .117-.299.407.407 0 0 0-.4-.415h-.158a6.398 6.398 0 0 1-2.541-.518.383.383 0 0 0-.433.092L7.24 20.93c-.931.98-2.44.98-3.371 0a2.598 2.598 0 0 1 0-3.544l5.07-5.327a2.3 2.3 0 0 1 3.367 0 1.57 1.57 0 0 0 2.231 0 1.72 1.72 0 0 0 0-2.346z" fill="#64b2db"></path>
                                                <g>
                                                    <path d="M23.373 1.712c-2.17-2.283-5.688-2.283-7.858 0l-4.162 4.375a.434.434 0 0 0-.084.46c.063.156.211.257.373.254h.147a6.38 6.38 0 0 1 2.536.522c.148.064.32.028.432-.092l2.989-3.14a2.3 2.3 0 0 1 3.369 0 2.6 2.6 0 0 1 0 3.545l-3.723 3.912-.031.037-1.302 1.361a2.299 2.299 0 0 1-3.365 0 1.569 1.569 0 0 0-2.23 0 1.71 1.71 0 0 0-.46 1.069 1.72 1.72 0 0 0 .46 1.286c.459.485.996.88 1.587 1.169.083.042.167.075.25.113.083.037.17.066.254.1.083.033.17.062.254.087l.234.067c.159.042.317.075.48.105.196.03.393.05.591.058H14.416l.238-.03c.087-.003.179-.024.282-.024h.135l.274-.042.127-.025.23-.05h.043a5.492 5.492 0 0 0 2.576-1.536l5.052-5.315c2.17-2.283 2.17-5.983 0-8.266z" fill="#64b2db"></path>
                                                </g>
                                            </svg>
                                            <input class="ref-link__link" id="refLink" type="text" value="{{ url('/referal/' . $cust_id) }}">
                                            <button class="ref-link__button button button_blue" onclick="copy()">Copy</button>
                                            <script>
                                                function copy() {
                                                    document.getElementById('refLink').select();
                                                    document.execCommand('copy');
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="referral__subtitle">Referrals History</h2>
                                <p class="referral__desc">Here you can see the last 10 accounts you’ve referred.</p>
                                <div class="referral__table table">
                                    <div>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Referrer</th>
                                                    <th>Account email</th>
                                                    <th>Code</th>
                                                    <th>Sign Up Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($refers as $ref)

                                                <tr>
                                                    <th>{{ $ref->ref_name }}</th>
                                                    <td>{{ $ref->ref_email }}</td>
                                                    <td>{{ $ref->code }}</td>
                                                    <td>{{ $ref->created_at }}</td>
                                                </tr>

                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@endsection
