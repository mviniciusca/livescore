<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}
@if(session('theme') == 'dark')
class=" dark @endif ">

<head>
    <meta charset=" utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="font-sans antialiased uppercase bg-slate-50 text-slate-500 dark:bg-zinc-950 dark:text-zinc-500">
    {{-- background image --}}
    <div class="fixed -z-10 grayscale bg w-full h-full opacity-10"></div>
    <div class="min-h-screen container mx-auto ">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="">
            <livewire:theme-switch />
            <div
                class="mx-auto  px-6 py-24 font-extrabold  text-2xl leading-tight tracking-tight">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <style>
        .bg {
            background-image:
                url('https://images.unsplash.com/photo-1579548122080-c35fd6820ecb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }
    </style>
</body>

</html>
