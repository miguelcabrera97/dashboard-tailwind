<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Conectaply') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="icon" href="{{ asset('images/SocialConecta.ico') }}">

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        class="antialiased font-inter bg-slate-100 text-slate-600"
        :class="{ 'sidebar-expanded': sidebarExpanded }"
        x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
        x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"    
    >

        <script>
            if (localStorage.getItem('sidebar-expanded') == 'true') {
                document.querySelector('body').classList.add('sidebar-expanded');
            } else {
                document.querySelector('body').classList.remove('sidebar-expanded');
            }
        </script>
    <!-- This is an example component -->
{{--<div>
 <style>

    .loader-dots div {
        animation-timing-function: cubic-bezier(0, 1, 1, 0);
    }
    .loader-dots div:nth-child(1) {
        left: 8px;
        animation: loader-dots1 0.6s infinite;
    }
    .loader-dots div:nth-child(2) {
        left: 8px;
        animation: loader-dots2 0.6s infinite;
    }
    .loader-dots div:nth-child(3) {
        left: 32px;
        animation: loader-dots2 0.6s infinite;
    }
    .loader-dots div:nth-child(4) {
        left: 56px;
        animation: loader-dots3 0.6s infinite;
    }
    @keyframes loader-dots1 {
        0% {
            transform: scale(0);
        }
        100% {
            transform: scale(1);
        }
    }
    @keyframes loader-dots3 {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(0);
        }
    }
    @keyframes loader-dots2 {
        0% {
            transform: translate(0, 0);
        }
        100% {
            transform: translate(24px, 0);
        }
    }
</style>
  <div class="fixed top-0 left-0 z-50 flex items-center justify-center w-screen h-screen" style="background: rgba(0, 0, 0, 0.3);">
    <div class="flex flex-col items-center px-5 py-2 bg-white border rounded-lg">
      <div class="relative block w-20 mt-2 loader-dots h-7">
        <div class="absolute top-0 w-5 h-5 mt-2 bg-green-500 rounded-full"></div>
        <div class="absolute top-0 w-5 h-5 mt-2 bg-green-500 rounded-full"></div>
        <div class="absolute top-0 w-5 h-5 mt-2 bg-green-500 rounded-full"></div>
        <div class="absolute top-0 w-5 h-5 mt-2 bg-green-500 rounded-full"></div>
      </div>
      <div class="mt-5 text-5xl font-medium text-center text-gray-500">
        Publicando Sitio
      </div>
    </div>
    </div>
  </div> --}}
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Silkscreen&display=swap');

        .text-loading{
        font-family: 'Silkscreen', cursive;
        font-size:4rem;
        }
        .text-loading:after{
        content:"...";
        font-size: 3rem;
        position:absolute;
        bottom:3px;
        }
  </style>
<section class="relative grid w-screen h-screen bg-blue-400 place-items-center">
  <div class="absolute w-48 h-48 rounded-full shadow-2xl bg-gradient-to-r from-white blur animate-ping delay-5s"></div>
  <div class="absolute w-32 h-32 rounded-full shadow-xl bg-gradient-to-l from-white animate-ping"></div>
  <div class="absolute w-24 h-24 rounded-full shadow-xl bg-gradient-to-r from-white animate-ping delay-5s"></div>
  <div class="absolute w-24 h-24 bg-white rounded-full shadow-xl"></div>
  <img src="https://claimmylawyer.com/images/logo.png" class="z-10 w-16" alt="Claim My Lawyer Logo"/>
</section>
<section class="absolute text-white transform -translate-x-1/2 bottom-40 left-1/2 text-loading blur-md invert drop-shadow-xl md:filter-none">
    Publicando Sitio
</section>
</body>
