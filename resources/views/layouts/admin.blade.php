<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Inner Beauty HK</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <!-- <link rel="stylesheet" href="assets/css/js_composer.min.css"> -->
        <link rel="stylesheet" href="{{ asset('assets/css/grid.min.css') }}">
        <!-- <link rel="stylesheet" href="assets/css/aos.css"> -->
        <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
        <!-- <link rel="stylesheet" href="assets/css/select2.min.css)"> -->
        <link rel="stylesheet" href="{{ asset('assets/style.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/custom.min.css') }}">
</head>

<body>
    <div id="app">
        @yield('content')
        {{-- @yield('aside') --}}
        @include('components.aside')
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('/assets/js/libs/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/assets/js/vue.js') }}"></script>

    <!-- <script src="/assets/js/main.js"></script> -->
    @yield('script')

</body>

</html>
