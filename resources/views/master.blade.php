<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{__('Certainty - Landing Page - > URL GENERATOR')}}</title>
    </head>
    <body class="min-h-screen bg-gray-100 m-5">
        @yield('content')
    </body>
</html>