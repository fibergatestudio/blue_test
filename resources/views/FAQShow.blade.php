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
                    <h2 class="manage-account__title">New question for FAQ</h2>                   
                </div>
            </aside>
            <div class="page__content">
                <div class="container page__container">

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
                   
                    <h1 class="page__title">Add question</h1>

                    @if(isset($success))
                    <h3 class="page__title">{{$success}}</h3>
                    @endif
                   
                    <div class="cart faq-page">                                                
                        <div class="faq-page__content">
                            <form method="post" action="{{ url('faq-add') }}">
                            @csrf 
                                <div>
                                    <label for="question">Question</label>
                                    <input type="text" name="question" id="question" required>
                                </div>
                                <div>
                                    <label for="answer">Answer</label>
                                    <textarea name="answer" id="answer" required></textarea>
                                </div>
                                <div>
                                    <label for="category">Category</label>
                                    <select name="category" id="category">
                                        @foreach($faq_categories as $faq_category)
                                            <option value="{{ $faq_category }}">{{ $faq_category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="button button_blue">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection