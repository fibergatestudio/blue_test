@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.dashboard.title') }}
@stop

@section('content-wrapper')

<div class="inner-section">

    @include ('admin::layouts.nav-aside')

    <div class="content-wrapper">

        @include ('admin::layouts.tabs')

        <h1>FAQ Questions</h1>


         <h1 class="page__title">Add question</h1>

                    @if(isset($success))
                    <h3 class="page__title">{{$success}}</h3>
                    @endif
                <div style="display:flex;">
                    <div class="cart faq-page">
                        <div class="faq-page__content">
                            <form method="post" action="{{ url('admin/faq/faq-add') }}">
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
                    <div class="cart faq-page">
                        <div class="faq-page__content">
                            <span>Add Category</span>
                            <form method="post" action="{{ url('admin/faq/faq-add-category') }}">
                            @csrf
                                <div>
                                    <label for="category">Category</label>
                                    <input name="category_name" id="category" required>
                                </div>
                                <div>
                                    <label for="slug">Slug</label>
                                    <input name="slug" id="slug" required>
                                </div>
                                <button type="submit" class="button button_blue">Add</button>
                            </form>
                        </div>
                    </div>
                </div>

                    <div class="table">
                <div class="grid-container">
                    <table class="table">
                        <thead style="text-align: center;">
                            <tr class="grid_head">
                                <th>ID</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Cetrgory</th>
                            </tr>
                        </thead>

                        <tbody style="text-align: center;">
                            @foreach($faq_table as $faq)
                                <tr>
                                    <td>{{ $faq->id }}</td>
                                    <td>{{ $faq->question }}</td>
                                    <td>{{ $faq->answer }}</td>
                                    <td>{{ $faq->category }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>

    </div>

</div>


@endsection
