<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>ONELAB</title>
        <meta name="description" content="EULIMS - DOST IX | KRAD">
        <meta name="keywords" content="DOST, EULIMS, ONELAB, KRAD">
        <meta name="author" content="Krad">
        <meta property="og:title" content="EULIMS - Enhanced Unified Laboratory Information Management System">
        <meta property="og:description" content="Laboratory Management System">
        <meta property="og:image" content="URL to the template's logo or featured image">
        <meta property="og:url" content="URL to the template's webpage">
        <meta name="twitter:card" content="summary_large_image">
        <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}">
        @vite(['resources/js/app.js'])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>