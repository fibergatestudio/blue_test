@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.dashboard.title') }}
@stop

@section('content-wrapper')

<div class="inner-section">
    
    @include ('admin::layouts.nav-aside')

    <div class="content-wrapper">

        @include ('admin::layouts.tabs')
        <div class="row">
            <div >
                <h1>Add Training</h1>

                <form action="{{ route('tasks.store') }}" method="post">
                {{ csrf_field() }}
                Training name:
                <br />
                <input type="text" name="name" required/>
                <br /><br />
                Training description:
                <br />
                <textarea name="description" required></textarea>
                <br /><br />
                Start time: (format YYYY-MM-DD)
                <br />
                <input type="text" name="task_date" class="date" required/>
                <br /><br />
                <!-- <input type="text" name="training" required/> -->
                <select name="training_name" request> 
                    @foreach($trainings as $training)
                        <option value="{{ $training->training_name }}">{{ $training->training_name }}</option>
                    @endforeach
                </select>
                <br /><br />
                <input type="submit" value="Save" />
                </form>
            </div>
            <div style="width: 80%;">
                <h1>Add Training</h1>

                <form action="{{ url('admin/tasks/add_training') }}" method="post">
                {{ csrf_field() }}
                Training name:
                <br />
                <input type="text" name="training_name" required/>
                <br /><br />
                Training price:<br />
                <input type="text" name="training_price" required/>
                <br /><br />
                <input type="submit" value="Add" />
                </form>
            </div>
        </div>


        <div class="table">
                <div class="grid-container">
                    <table class="table">
                        <thead style="text-align: center;">
                            <tr class="grid_head">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Training</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center;">
                            @foreach($task_table as $task)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>{{ $task->task_date }}</td>
                                    <td>{{ $task->training_name }}</td>
                                    <td>
                                    @foreach($trai as $t)
                                        @if($task->training_name == $t->training_name)
                                            {{ $t->training_price }}
                                        @endif
                                    @endforeach
                                    </td>
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