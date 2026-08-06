<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- HereUp --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>HereUp | Dimensional Attendance Solutions</title>
    {{-- Tailwind CSS --}}
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="font-sans bg-[#FFFFFF]">
    {{-- Navigation Bar --}}
    <header class="flex items-center justify-between fixed top-0 z-50 h-20.25 bg-white w-full border-b
border-[#DEDFE3] mx-auto">
        <x-landing-navigation-bar></x-landing-navigation-bar>
    </header>
    {{-- Main Content --}}
    <main>
        {{-- Hero Section --}}
        <section id="hero" class="flex items-center justify-between mt-43.75 mx-[116.1px]">
            <x-landing-hero-section></x-landing-hero-section>
        </section>
    </main>
</body>
</html>