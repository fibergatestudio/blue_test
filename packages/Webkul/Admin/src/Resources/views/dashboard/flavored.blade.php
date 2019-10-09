@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.dashboard.title') }}
@stop

@section('content-wrapper')

<div class="inner-section">
    
    @include ('admin::layouts.nav-aside')

    <div class="content-wrapper">

        @include ('admin::layouts.tabs')

        <h1>Flavored Сoffee</h1>

        <label>Something Classic</label><br>
        <select onchange="location = this.value;">
            @foreach($products as $prod)
                <option value="{{ url('admin/flavored/add_prod/'.$prod->id) }}">{{ $prod->name }}</option>
            @endforeach

        </select>

        <div class="table">
                <div class="grid-container">
                    <table class="table">
                        <thead style="text-align: center;">
                            <tr class="grid_head">
                                <th>ID</th>
                                <th>Prod Id</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody style="text-align: center;">
                            @foreach($flavored as $flavored)
                                <tr>
                                    <td>{{ $flavored->id }}</td>
                                    <td>{{ $flavored->prod_id }}</td>
                                    <td>
                                        <a href="{{ url('admin/flavored/remove_prod/'.$flavored->id) }}">
                                        Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>      

       
    </div>
    
</div>


@endsection