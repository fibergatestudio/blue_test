<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <title>@yield('page_title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-language" content="{{ app()->getLocale() }}">
    <!-- <link rel="stylesheet" href="{{ bagisto_asset('css/shop.css') }}"> 
    <link rel="stylesheet" href="{{ asset('vendor/webkul/ui/assets/css/ui.css') }}">  -->
    <link href="{{ url('assets/css/libs.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ url('assets/css/main.css?1566387411001') }}" rel="stylesheet" type="text/css">

    @if ($favicon = core()->getCurrentChannel()->favicon_url)
        <link rel="icon" sizes="16x16" href="{{ url('assets/img/favicon.ico') }}" />
    @else
        <link rel="icon" sizes="16x16" href="{{ url('assets/img/favicon.ico') }}" />
    @endif

    @yield('head')

    @section('seo')
        <meta name="description" content="{{ core()->getCurrentChannel()->description }}"/>
    @show

    @stack('css')

    {!! view_render_event('bagisto.shop.layout.head') !!}

</head>

    <header class="header header_inner">
    @include('layouts.header_menu')
    </header>

<body> 

    {!! view_render_event('bagisto.shop.layout.body.before') !!}

    <div id="app">
        <!-- For errors enable -->
        <!-- <flash-wrapper ref='flashes'></flash-wrapper> -->

        <!-- modal - changes saved-->
        <div class="modal modal_m-sent visible" id="msgSentModal">
            <button class="modal__close js-close-modal">
                <svg>
                    <use xlink:href="#rounded-close"></use>
                </svg>
            </button>
            <svg class="modal__icon" width="47" height="49" xmlns="http://www.w3.org/2000/svg">
                <path d="M47 35.06v2.291c-.032.12-.07.238-.096.36-.159.759-.256 1.538-.48 2.275-1.996 6.552-8.55 10.319-14.938 8.607-6.58-1.764-10.561-8.6-9.015-15.486.095-.421.209-.838.324-1.3h-.611l-17.853.001c-1.47 0-2.714-.535-3.544-1.818-.364-.563-.53-1.265-.787-1.904V3.826c.266-.652.458-1.352.815-1.943C1.442.845 2.462.366 3.58.1h39.84c.638.286 1.324.494 1.904.876.983.647 1.42 1.706 1.676 2.85v24.26c-.214.846-.486 1.66-1.073 2.324-.07.08-.056.29-.015.418.168.523.404 1.026.535 1.558.217.882.372 1.781.553 2.673M2.772 4.437c-.01.172-.02.26-.02.348 0 7.529-.002 15.057.003 22.586 0 .988.596 1.575 1.576 1.575 6.516.003 13.033.004 19.55-.01.189-.001.418-.142.56-.29.874-.905 1.658-1.92 2.604-2.732 1.954-1.674 4.262-2.555 6.781-2.678 3.93-.191 7.277 1.208 9.958 4.24.106.12.163.287.243.431l.178-.145V4.46c-.2.15-.36.267-.515.39L24.735 19.753c-1.025.806-1.439.81-2.448.017L4.101 5.471c-.421-.33-.846-.658-1.33-1.034m38.677-1.434H5.553L23.5 17.108 41.448 3.003M34.55 26.082c-5.362.082-9.746 4.623-9.667 10.064.084 5.712 4.486 10.026 9.78 9.975 5.465-.054 9.596-4.565 9.565-10.07-.031-5.623-4.366-9.934-9.678-9.97" fill="#64b2db"></path>
                <path d="M33.58 38.522c1.984-2.009 3.92-3.986 5.882-5.936.261-.26.63-.475.982-.557.575-.133 1.129.202 1.383.721.276.563.22 1.102-.161 1.597-.095.124-.209.233-.319.344-2.208 2.237-4.415 4.473-6.625 6.708-.795.804-1.54.801-2.33-.007-1.31-1.343-2.627-2.68-3.926-4.035-.806-.84-.526-2.105.525-2.438.573-.181 1.059-.001 1.473.426.915.943 1.832 1.883 2.749 2.824.107.11.22.213.367.353" fill="#64b2db"></path>
            </svg>
            <h2 class="modal__title">Password Reset</h2>
            <p class="modal__text">Your message has been sent!</p>
        </div>

        <div class="main-container-wrapper">

            <!-- {!! view_render_event('bagisto.shop.layout.header.before') !!}

            @include('shop::layouts.header.index')

            {!! view_render_event('bagisto.shop.layout.header.after') !!} -->

            @yield('slider')
<main>
            <div class="content-container">

                {!! view_render_event('bagisto.shop.layout.content.before') !!}

                @yield('content-wrapper')

                {!! view_render_event('bagisto.shop.layout.content.after') !!}

            </div>
</main>

        </div>

        {!! view_render_event('bagisto.shop.layout.footer.before') !!}

        @include('layouts.footer')

        {!! view_render_event('bagisto.shop.layout.footer.after') !!}


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

    {!! view_render_event('bagisto.shop.layout.body.after') !!}

    <div class="modal-overlay"></div>

</body>

</html>