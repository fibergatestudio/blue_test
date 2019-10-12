@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.dashboard.title') }}
@stop

@section('content-wrapper')

<div class="inner-section">
    
    @include ('admin::layouts.nav-aside')

    <div class="content-wrapper">

        @include ('admin::layouts.tabs')

        <h1>Turkish Coffee</h1>

        <form action="{{ url('admin/turkish/turk_apply_settings') }}" method="POST">
        @csrf()
            <label>Cezve link: (exmpl 'categories/coffee')</label><br>
            <input type="text" name="cezve" @if($cezve_link) value="{{ $cezve_link }} @endif"></input><br>

            <label>Coffee link: (exmpl 'categories/coffee')</label><br>
            <input type="text" name="coffee" @if($coffee_link) value="{{ $coffee_link }} @endif"></input><br>

            <button type="submit">Save</button>
        </form>
       
    </div>
    
</div>

@endsection