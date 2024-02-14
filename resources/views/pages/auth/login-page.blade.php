{{-- Data --}}
@php
    $page_is = 'Login page';
@endphp
{{-- Extends --}}
@extends('layouts/base')


@section('page_title', 'Страница авторизации')



@section('specific_content')
    
    <div class="login">
        <div class="container">
            <h2 class="mt-4">
                Авторизация
            </h2>
            <form method="POST" action="login/auth">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputlogin1" class="form-label">Логин</label>
                  <input type="name" class="form-control" id="exampleInputlogin1" name="login">
                  <div id="emailHelp" class="form-text">Ну же, введите его.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Пароль</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>
    </div>

@endsection