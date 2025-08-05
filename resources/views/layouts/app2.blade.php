<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'MANEVIZ')</title>

    {{-- Style khusus halaman --}}
    @yield('style')
</head>
<body>

    @include('layouts.navbar2')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')


</body>
</html>
