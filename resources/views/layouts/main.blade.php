<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title') The best coffe in the heart of Budapest</title>
    <link rel="icon" sizes="16x16" href="{{ url('assets/img/favicon.ico') }}" />

    <!-- Webp support detection-->
    <script>
        (function() {
            var webP = new Image();
            webP.onload = webP.onerror = function() {
                var result = webP.height == 2;
                window.hasWebp = result;
                document.documentElement.classList.add(result ? 'webp' : 'nowebp');
            };
            webP.src = 'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
        })();
    </script>


    
    <link href="{{ url('assets/css/libs.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/main.css?1566387411001') }}" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
    <style>
    .fc-content{
        padding-top: 15px;
    }
    .fc-toolbar.fc-header-toolbar{
        margin-top: -35px;
    }
    .fc-toolbar h2{
        /* margin-left: 0px !important; */
        margin-right: 0px !important;
        font-size: 1.11111em;
        font-weight: 600;
        color: #64b2db;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        margin-top: 5px;
    }
    .fc-day-header{
        padding-top: 1.11111em !important;
        padding-bottom: 1.11111em !important;
        text-align: center !important;
        white-space: nowrap;
    }
    .fc-widget-header{
        background-color: #64b2db !important;
        color: #fff !important;
    }
    .fc-today{
        background-color: #f6fafc !important;
    }
    .fc-day{
        -webkit-flex-basis: 14.28571%;
        -ms-flex-preferred-size: 14.28571%;
        flex-basis: 14.28571%;
        max-width: 14.28571%;
        box-sizing: border-box;
        border-right: 1px solid #cdd8df !important;
        border-bottom: 1px solid #cdd8df !important;
    }
    .fc-view{
        border: 1px solid #cdd8df;
        background-color: #f6fafc;
        box-sizing: border-box;
    }
    .fc-day-number{
        font-size: 1.27778em;
        text-align: right;
    }
    /* .fc-day-top{
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 1.11111em;
    } */
    .fc-row .fc-content-skeleton td {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /* display: flex;
        flex-direction: column;
        justify-content: space-between; */
        padding: 1.11111em;
    }
    .fc-icon-right-single-arrow:after{
        font-size: 100% !important;
    }
    .fc-next-button:hover{
        background-color: #64b2db !important;
        color: #fff !important;
    }
    .fc-next-button{
        display: -webkit-inline-flex !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
        -webkit-justify-content: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important;
        -webkit-align-items: center !important;
        -ms-flex-align: center !important;
        align-items: center !important;
        width: 30px !important;
        height: 30px !important;
        padding: 0 !important;
        border: 1px solid #dadfea !important;
        box-sizing: border-box !important;
        border-radius: 50% !important;
        background-color: #ffffff !important;
        color: #64b2db !important;
        -webkit-appearance: none !important;
        appearance: none !important;
        background-image: none !important;
    }
    .fc-icon-left-single-arrow:after{
        font-size: 100% !important;
    }
    .fc-prev-button:hover{
        background-color: #64b2db !important;
        color: #fff !important;
    }
    .fc-prev-button{
        display: -webkit-inline-flex !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
        -webkit-justify-content: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important;
        -webkit-align-items: center !important;
        -ms-flex-align: center !important;
        align-items: center !important;
        width: 30px !important;
        height: 30px !important;
        padding: 0 !important;
        border: 1px solid #dadfea !important;
        box-sizing: border-box!important;
        border-radius: 50% !important;
        background-color: #ffffff !important;
        color: #64b2db !important;
        -webkit-appearance: none!important;
        appearance: none !important;
        background-image: none !important;
    }
    .fc-event{
        font-weight: 700 !important;
        font-size: 0.77778em !important;
        font-weight: 300 !important;
        line-height: 1.42857 !important;
        color: #64b2db !important;
        background-color: #f6fafc !important;
        border: none !important;
    }
    .fc-title{
        /* font-weight: 700; */
    }
    .fc-basic-view .fc-body .fc-row{
        min-height: 9em !important;
    }
    .fc-scroller{
        height: auto !important;
        overflow: auto !important;
    }
    .fc-h-event::after{
        content: '';
        position: absolute;
        right: -10px;
        top: -76px;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background-color: #64b2db;
    }
    </style>



</head>

<body>
    <div class="wrapper">

        @yield('header')

        @yield('content')


        @include('layouts.footer')

    </div>

    <script type="text/javascript">
        window.flashMessages = [];

        @if ($success = session('success'))
            window.flashMessages = [{'type': 'alert-success', 'message': "{{ $success }}" }];
        @elseif ($warning = session('warning'))
            window.flashMessages = [{'type': 'alert-warning', 'message': "{{ $warning }}" }];
        @elseif ($error = session('error'))
            window.flashMessages = [{'type': 'alert-error', 'message': "{{ $error }}" }
            ];
        @elseif ($info = session('info'))
            window.flashMessages = [{'type': 'alert-info', 'message': "{{ $info }}" }
            ];
        @endif

        window.serverErrors = [];
        @if(isset($errors))
            @if (count($errors))
                window.serverErrors = @json($errors->getMessages());
            @endif
        @endif
    </script>


    @stack('scripts')