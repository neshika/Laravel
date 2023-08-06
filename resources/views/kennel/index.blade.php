<?php $user = 'admin';?>

@extends('layouts.layout')

@section ('content')
    <div class="container-xxl">
       <a href="{{ route('kennel.create')}}" class="btn btn-dark">создать питомник</a>
        <div class="text-center">все питомники в базе</div>

       @foreach ($kennels as $kennel)
           <div><a href="{{ route('kennel.show', $kennel->id)}}"><strong>Питомник: </strong>{{$kennel->name}}; <strong>Владелец:</strong> {{$kennel->owner}}</a></div>
       @endforeach
  
              
       
    </div>
@endsection
