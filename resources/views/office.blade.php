
<?php $user = 'admin';?>

@extends('layouts.layout')

@section ('content')
    <div class="container-xxl">
    <li>Добрый день, {{$user}} ! Сегодня {{ now()->format('d-m-Y') }}</li>
    <li>Количесвтво посещений:</li>
    <li>Количество собак в питомнике:</li>
    <h1>Важные новости:</h1>

    </div>



     <div class="container-xxl">
        <div class="text-center">Питомник: Чарующий соблазн: Количесвто собак: 5</div>
        <div class="row">
                 @foreach ($ArrayURL as $img)
                <div class="col-md-3 p-2">
                    <div><img src="/{{$img->name}}" class = "img-thumbnail" alt="" width=100></div>
                
                    <div class="d-grid gap-1">
                        <a href="/show/{{$img->id}}" class="btn btn-info btn-sm">Show</a>
                        <a href="/edit/{{$img->id}}" class="btn btn-warning btn-sm">Edit</button>
                        <a href="/delete/{{$img->id}}" onclick="return confirm('Точно удалять?')" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                            
                </div>
            @endforeach
           
        </div>
        
    </div>

@endsection
