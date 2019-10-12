@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.dashboard.title') }}
@stop

@section('content-wrapper')

<div class="inner-section">
    
    @include ('admin::layouts.nav-aside')

    <div class="content-wrapper">

        @include ('admin::layouts.tabs')

        <h1>Coffee Beans</h1>

        <div style="display:flex;">
            <div style="width: 50%;" class="table">
                <div class="grid-container">
                    <table class="table">
                        <thead style="text-align: center;">
                            <span>Something Classic:</span>
                            <select onchange="location = this.value;">
                                @foreach($products as $prod)
                                    <option value="{{ url('admin/beans/add_prod_classic/'.$prod->id) }}">{{ $prod->name }}</option>
                                @endforeach
                            </select>
                            <tr class="grid_head">
                                <th>ID</th>
                                <th>Prod Id</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody style="text-align: center;">
                            @foreach($beans_class as $beans)
                                <tr>
                                    <td>{{ $beans->id }}</td>
                                    <td>{{ $beans->prod_id }}</td>
                                    <td>
                                        <a href="{{ url('admin/beans/remove_prod/'.$beans->id) }}">
                                        Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
            <div style="width: 50%;" class="table">
                <div class="grid-container">
                    <table class="table">
                        <thead style="text-align: center;">
                        <span>Something Specialty:</span>
                        <select onchange="location = this.value;">
                            @foreach($products as $prod)
                                <option value="{{ url('admin/beans/add_prod_special/'.$prod->id) }}">{{ $prod->name }}</option>
                            @endforeach
                        </select>
                            <tr class="grid_head">
                                <th>ID</th>
                                <th>Prod Id</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody style="text-align: center;">
                            @foreach($beans_special as $beans)
                                <tr>
                                    <td>{{ $beans->id }}</td>
                                    <td>{{ $beans->prod_id }}</td>
                                    <td>
                                        <a href="{{ url('admin/beans/remove_prod/'.$beans->id) }}">
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
    
</div>


@endsection