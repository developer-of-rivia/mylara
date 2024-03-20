{{-- Data --}}
@php
    $page_is = 'Welcome';
@endphp
{{-- Extends --}}
@extends('base-layout')


@section('page_title', 'Главная страница welcome')



@section('specific_content')
    
    <div class="welcome">
        <div class="container">
            <h2 class="mt-4">
                Контент на главной
            </h2>
        </div>
    </div>

@endsection