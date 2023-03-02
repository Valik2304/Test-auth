<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<div class="container">
{{--    <header class="d-flex justify-content-center py-3">--}}
{{--        <ul class="nav nav-pills">--}}
{{--            <li class="nav-item"><a href="/" class="nav-link " aria-current="page">Products</a></li>--}}
{{--            <li class="nav-item"><a href="{{route('groups.index')}}" class="nav-link">Groups</a></li>--}}
{{--            <li class="nav-item"><a href="{{route('orders.index')}}" class="nav-link">Orders</a></li>--}}
{{--        </ul>--}}
{{--    </header>--}}
</div>

<body class="bg-light">
<div class="container">
    <h2>@yield('title')</h2>
    <main>
        @yield('content')
    </main>
</div>
</body>
</html>

{{--    <!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>@yield('title')</title>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"--}}
{{--          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>@yield('title')</h1>--}}
{{--<main>--}}
{{--    @yield('content')--}}
{{--</main>--}}

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"--}}
{{--        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}

