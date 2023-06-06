@extends('layout')

@section('content')

<div class='container'>
    <div class="row">
        <div class="col-md-12">
            тут будет отображение картинки
            <!--<img src="/{{$MyImg}}" alt="" class="img-thumbnail gallery-image">-->
            <img src="/{{$MyImg}}" class = "img-thumbnail" alt="" width=300>
        </div>
    </div>
</div>

@endsection