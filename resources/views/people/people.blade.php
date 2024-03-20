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

                              
                              <a href="friends/add/{{$user['id']}}">Добавить в друзья</a>    
                              {{ $user['relationships'] }}
                              

                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

            </div>
        </div>
    </div>

@endsection