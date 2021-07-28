@extends('layouts.master')

@section('body')

    @yield('content')
    @isset($slot)
        {{ $slot }}
    @endisset

@endsection
