{{-- views/layouts/guest.blade.php --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            /* Noto Sans JPを優先的に適用 */
            body {
                font-family: 'Noto Sans JP', 'Figtree', sans-serif;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        {{-- 背景色を新しいデザインに合わせて変更 --}}
        <div class="min-h-screen bg-smartfit-bg text-smartfit-text-primary">
            {{ $slot }}
        </div>
    </body>
</html>