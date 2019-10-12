@extends('layouts.main')

@section('header')
    <header class="header header_inner">
        @include('layouts.header_menu')
    </header>
@endsection

@section('content')

    <main>
        <div class="page page_has-filter">
            <aside class="sidebar" id="sidebar">
                <div class="manage-account">
                    <h2 class="manage-account__title">FAQ</h2>
                    <ul class="manage-account__menu">

                        @foreach($faq_categories as $key => $value)
                            @if($key === $question_category)
                                <li class="manage-account__item manage-account__item_current">
                                    <a href="{{ url('/faq/'.$key) }}">{{$value}}</a>
                                </li>
                            @else
                                <li class="manage-account__item">
                                    <a href="{{ url('/faq/'.$key) }}">{{$value}}</a>
                                </li>
                            @endif
                        @endforeach

                    </ul>
                </div>
            </aside>
            <div style="min-height: 800px;" class="page__content">
                <div class="container page__container">

                    <!-- Dynamic breadcrumbs -->
                    <ul class="breadcrumb page__breadcrumb">
                        <li class="breadcrumb__item">
                            <a href="/">Home</a>
                        </li>
                    <?php $link = "" ?>
                    @for($i = 1; $i <= count(Request::segments()); $i++)
                        <?php $category_name = ucwords(str_replace('-',' ',Request::segment($i))); ?>
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
                            <form class="search__field" method="get" action="{{ url('faq') }}">
                                <button class="search__button search__button_submit">
                                    <svg>
                                        <use xlink:href="#lens"></use>
                                    </svg>
                                </button>
                                <input type="search" name="catalogSearch" placeholder="Search">
                            </form>
                        </div>
                        <div class="faq-page__content">
                            <h2 class="page__title faq-page__title">{{$category_name}}</h2>

                            <?php $i = 1; ?>
                            @foreach($faq_questions as $faq_question)
                                @if (isset($_GET['catalogSearch']) AND $_GET['catalogSearch'] !== '')
                                    @if (strripos($faq_question->question, $_GET['catalogSearch']) !== FALSE OR strripos($faq_question->answer, $_GET['catalogSearch']) !== FALSE)
                                    <div class="faq-page__item">
                                        <div class="faq-page__question">
                                            <label for="question{{$i}}">{{$faq_question->question}}</label>
                                            <button class="button button_blue button_round faq-page__show-answer js-show-hidden-block" id="question{{$i}}" data-selector="#answer{{$i}}"><span>+</span><span>-</span>
                                            </button>
                                        </div>
                                        <div class="faq-page__answer" id="answer{{$i}}">
                                            <p>{{$faq_question->answer}}</p>
                                        </div>
                                    </div>
                                    <?php $i++; ?>
                                    @endif
                                @else
                                    @if ($question_category === '')
                                    <div class="faq-page__item">
                                        <div class="faq-page__question">
                                            <label for="question{{$i}}">{{$faq_question->question}}</label>
                                            <button class="button button_blue button_round faq-page__show-answer js-show-hidden-block" id="question{{$i}}" data-selector="#answer{{$i}}"><span>+</span><span>-</span>
                                            </button>
                                        </div>
                                        <div class="faq-page__answer" id="answer{{$i}}">
                                            <p>{{$faq_question->answer}}</p>
                                        </div>
                                    </div>
                                    <?php $i++; ?>
                                    @elseif ($faq_question->category === $faq_categories[$question_category])
                                    <div class="faq-page__item">
                                        <div class="faq-page__question">
                                            <label for="question{{$i}}">{{$faq_question->question}}</label>
                                            <button class="button button_blue button_round faq-page__show-answer js-show-hidden-block" id="question{{$i}}" data-selector="#answer{{$i}}"><span>+</span><span>-</span>
                                            </button>
                                        </div>
                                        <div class="faq-page__answer" id="answer{{$i}}">
                                            <p>{{$faq_question->answer}}</p>
                                        </div>
                                    </div>
                                    <?php $i++; ?>
                                    @endif
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
