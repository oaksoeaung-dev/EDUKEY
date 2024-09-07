<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ config("app.name", "Laravel") }}</title>
        @stack('styles')
        @vite("resources/css/app.css")
    </head>
    <body>
        @include("layouts.nav")

        @yield("contents")

        @include("layouts.footer")
        @stack('scripts')
    </body>
</html>
