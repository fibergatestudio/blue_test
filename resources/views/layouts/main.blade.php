<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title') The best coffe in the heart of Budapest</title>

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

    <script type="text/javascript" src="{{ bagisto_asset('js/shop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/webkul/ui/assets/js/ui.js') }}"></script>

    @stack('scripts')