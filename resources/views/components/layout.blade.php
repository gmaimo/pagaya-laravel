<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? 'Rapido.es'}}</title>
    @livewireStyles
    @vite(['resources/css/app.css'])
</head>

<body>
    <x-nav-bar />

    @if (session()->has('message'))
    <x-alert :type="session('message')['type']" :message="session('message')['text']"/>
    @endif



    {{$slot}}




<x-footer />

    @vite(['resources/js/app.js'])
    @livewireScripts
</body>
</html>
