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
    </head>

    <body>
        
        @include('admin.layout.header')
        <main>
            @yield('content')
        </main>
        <footer>
            <!-- place footer here -->
        </footer>

        <script src="/js/app.js"></script>
        <script src="/js/init.js"></script>
        @stack('custom_js')
    </body>
</html>
