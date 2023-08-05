<?php $user = 'admin';?>

@extends('layouts.layout')

@section ('content')
    <div class="container-xxl">
        <div class="text-center">все питомники в базе</div>
        @foreach ($kennels as $kennel)
            <div><strong>Питомник: </strong>{{$kennel->name}}; <strong>Владелец:</strong> {{$kennel->owner}}</div>            
        @endforeach
        
    </div>
@endsection
