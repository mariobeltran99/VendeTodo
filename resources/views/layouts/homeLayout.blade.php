@extends('layout')
@section('content')
    <div class="min-w-screen min-h-screen bg-gray-400 peeb-5 pt-20">
        <x-navigation
            flagR="{{ session('rol') }}"
            named="{{ session('nombre') }}"
            url="{{ session('foto') }}"
        />
        <main role="main">
            @yield('container')
        </main>
    </div>
@endsection
