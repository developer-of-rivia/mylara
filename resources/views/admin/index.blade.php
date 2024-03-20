{{-- Data --}}
@php
    $page_is = 'Admin page';
@endphp
{{-- Extends --}}
@extends('base-layout')


@section('page_title', 'Админка')



@section('specific_content')
    
    <div class="admin">
        <div class="container">
            <div class="row mt-4">
                <div class="col-3">
                    <div class="card " style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Мои персонажи</h5>
                          <p class="card-text">Список моих персонажей</p>
                          <a href="my-heroes" class="btn btn-primary">Посмотреть</a>
                        </div>
                      </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Все персонажи</h5>
                          <p class="card-text">Посмотреть список персонажей</p>
                          <a href="#" class="btn btn-primary">Посмотреть</a>
                        </div>
                      </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Настройки аккаунта</h5>
                          <p class="card-text">Отредоктируйте свои данные</p>
                          <a href="settings" class="btn btn-primary">Зайти</a>
                        </div>
                      </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Друзья</h5>
                          <p class="card-text">Посмотрите ваших друзей</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary">Посмотреть</a>
                            <a href="/people" class="">Найти друзей</a>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

@endsection