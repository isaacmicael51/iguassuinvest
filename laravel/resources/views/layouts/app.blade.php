<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Iguassu Invest</title>
        @push('scripts')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="/css/app.css">
            <script src="/assets/js/api.js"></script>
            <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>

        @endpush
        @stack('scripts')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="d-flex flex-column">
        <div id="page-content">
            @include('layouts.header')
                <div class="hero"></div>
                <div class="container">
                    @yield('content')
                </div>
        </div>
      @include('layouts.footer')
    </body>
</html>
