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
        <input type="text" name="name" required/>
        <br /><br />
        Task description:
        <br />
        <textarea name="description" required></textarea>
        <br /><br />
        Start time: (format YYYY-MM-DD)
        <br />
        <input type="text" name="task_date" class="date" required/>
        <br /><br />
        <input type="submit" value="Save" />
        </form>


        <div class="table">
                <div class="grid-container">
                    <table class="table">
                        <thead style="text-align: center;">
                            <tr class="grid_head">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Date</th>
                            </tr>
                        </thead>

                        <tbody style="text-align: center;">
                            @foreach($task_table as $task)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>{{ $task->task_date }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>





            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $('.date').datepicker({
                autoclose: true,
                dateFormat: "yy-mm-dd"
            });
        </script>

    </div>
    
</div>


@endsection