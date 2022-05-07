<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kegan Lester</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


    <!-- Styles -->

</head>
<body class="antialiased bg-gray-100 bg-no-repeat">
<div id="app">
    <kl-app></kl-app>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
