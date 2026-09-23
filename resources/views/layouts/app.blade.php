<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'GPIB Jemaat')
    </title>

    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <script src="/js/app.js"></script>
</body>

</html>