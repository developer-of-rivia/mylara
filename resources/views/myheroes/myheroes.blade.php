{{-- Data --}}
@php
    $page_is = 'myheroes';
@endphp
{{-- Extends --}}
@extends('base-layout')




{{-- section --}}
@section('page_title', 'Главная страница welcome')

{{-- section --}}
@section('specific_content')
    <div class="welcome">
        <div class="container">
            <h2 class="mt-4">
                Мои персонажи
                {{-- @foreach($heroes as $hero)
                    {{ $hero->nickname }}
                @endforeach --}}
            </h2>
        </div>
    </div>
@endsection