<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Job Board</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="mx-auto mt-10 max-w-2xl bg-gradient-to-r from-indigo-200 from-10% via-sky-200 via-30% to-emerald-200 to-90% text-slate-900">
        {{ $slot }}
    </body>
</html>
