{{-- Data --}}
@php
    $page_is = 'Admin page';
@endphp
{{-- Extends --}}
@extends('base-layout')


@section('page_title', 'Люди')



@section('specific_content')
    
    <div class="admin">
        <div class="container">
            <div class="mt-4">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Login</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($people as $user)
                        <tr>
                            <th scope="row">{{ $user['id'] }}</th>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['login'] }}</td>
                            <td style="text-align:right">

                              @if($user['relationships'] == 'wish-friend')
                                <a class="btn btn-warning" href="friends/cancel/{{$user['id']}}">Отписаться</a>
                              @elseif($user['relationships'] == 'my-sub')
                                <a class="btn btn-success" href="friends/accept/{{$user['id']}}">Принять заявку</a>
                              @elseif($user['relationships'] == 'friend')
                                <a class="btn btn-danger" href="friends/breakup/{{$user['id']}}">Перестать дружить</a>
                              @else
                                <a href="friends/add/{{$user['id']}}">Добавить в друзья</a>
                              @endif
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

            </div>
        </div>
    </div>

@endsection