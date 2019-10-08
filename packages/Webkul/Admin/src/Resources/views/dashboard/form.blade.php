@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.dashboard.title') }}
@stop

@section('content-wrapper')

<div class="inner-section">
    
    @include ('admin::layouts.nav-aside')

    <div class="content-wrapper">

            <div class="page-header">
                <div class="page-title">
                    <h1>Form Users</h1>
                </div>
            </div>

            <div class="page-content">
                <div class="table">
                    <div class="grid-container">
                        <table class="table">
                            <thead style="text-align: center;">
                                <tr class="grid_head">
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                </tr>
                            </thead>

                            <tbody style="text-align: center;">
                                @foreach($contact_form as $form)
                                    <tr>

                                        <td>{{ $form->name }}</td>


                                        <td>{{ $form->email}}</td>

                                        <td>{{ $form->phone }}</td>
                                        <td>                                             
                                            {{ $form->symptom }}
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