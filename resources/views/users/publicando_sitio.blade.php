
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
<form action="{{route('publicar')}}" method="post">
    @csrf
    <input type="hidden" value="{{$sitioId}}" name="sitioId">
    <button type="submit" id="btn" onmouseover="mifuncion()" >
</form>
<script>
    window.addEventListener("load",function mifuncion(){
        document.getElementById("btn").click();
    })

</script>
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



