@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.dashboard.title') }}
@stop

@section('content-wrapper')

<div class="inner-section">
    
    @include ('admin::layouts.nav-aside')

    <div class="content-wrapper">

        @include ('admin::layouts.tabs')

        <h1>Coffee Capsules</h1>

        <label>Recomended Products</label><br>
        <select onchange="location = this.value;">
            @foreach($products as $prod)
                <!-- <option value="{{ $prod->id }}">{{ $prod->name }}</option> -->
                <option value="{{ url('admin/capsules/add_prod/'.$prod->id) }}">{{ $prod->name }}</option>
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
                            @foreach($capsules as $capsule)
                                <tr>
                                    <td>{{ $capsule->id }}</td>
                                    <td>{{ $capsule->prod_id }}</td>
                                    <td>
                                        <a href="{{ url('admin/capsules/remove_prod/'.$capsule->id) }}">
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