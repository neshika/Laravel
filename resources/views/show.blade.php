@extends('layouts.layout')

@section('content')
<div class='container'>
    <div class="row">
        <div class="col-md-12">

        <p><button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
            тут будет отображение картинки
         </button></p>
<div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 300px;">
       <!--<img src="/{{$MyImg}}" alt="" class="img-thumbnail gallery-image">-->
            <img src="/{{$MyImg}}" class = "img-thumbnail" alt="" width=300>
    </div>
  </div>
</div>
         

@endsection