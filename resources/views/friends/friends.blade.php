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
                        <th scope="col">ID друга</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>

            </div>
        </div>
    </div>

@endsection