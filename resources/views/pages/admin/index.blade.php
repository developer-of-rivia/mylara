{{-- Data --}}
@php
    $page_is = 'Admin page';
@endphp
{{-- Extends --}}
@extends('layouts/base')


@section('page_title', 'Админка')



@section('specific_content')
    
    <div class="admin">
        <div class="container">
            {{ $user_data['Main-hero'] }}
        </div>
    </div>

@endsection