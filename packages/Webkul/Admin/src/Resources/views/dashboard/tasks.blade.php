@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.dashboard.title') }}
@stop

@section('content-wrapper')

<div class="inner-section">
    
    @include ('admin::layouts.nav-aside')

    <div class="content-wrapper">

        @include ('admin::layouts.tabs')

        <h1>Add Task</h1>

        <form action="{{ route('tasks.store') }}" method="post">
        {{ csrf_field() }}
        Task name:
        <br />
        <input type="text" name="name" />
        <br /><br />
        Task description:
        <br />
        <textarea name="description"></textarea>
        <br /><br />
        Start time:
        <br />
        <input type="text" name="task_date" class="date" />
        <br /><br />
        <input type="submit" value="Save" />
        </form>


        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
        <script>
            $('.date').datepicker({
                autoclose: true,
                dateFormat: "yy-mm-dd"
            });
        </script>

    </div>
    
</div>


@endsection