<!doctype html>
<html lang="en">
    <head>
        <title>Admin</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="/css/app.css" rel="stylesheet"/>
        @stack('custom_css')
    </head>

    <body>
        
        @include('admin.layout.header')
        @if (session()->has('success_message'))
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success">
                        <strong>Success!</strong> {{ session('success_message', '') }}.
                    </div>

                </div>
            </div>
        </div>
        @endif
        <main>
            @yield('content')
        </main>
        <footer class="py-3 mt-3">
            <div class="text-center">QM production</div>
        </footer>

        <script src="/js/app.js"></script>
        <script src="/js/init.js"></script>
        @stack('custom_js')
    </body>
</html>
