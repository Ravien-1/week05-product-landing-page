<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Luzon Furniture — Dealer of modern imported and local furniture in Sta. Cruz, Laguna. Quality, Comfort, Style.">
    <title>{{ $title ?? 'Luzon Furniture — Quality, Comfort, Style' }}</title>

    {{-- Google Fonts: Bebas Neue (display) + DM Sans (body) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F3F4F5] text-[#111318] antialiased" style="font-family: 'DM Sans', sans-serif;">

    {{ $slot }}

</body>
</html>
