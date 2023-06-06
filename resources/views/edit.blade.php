@extends('layout')

@section('content')
 <div class='container'>
    <div class="row">
        <div class="col-md-5">
            <h1>Edit image</h1>
            <form action="/update/{{$MyImg->id}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
             <img src="/{{$MyImg->name}}" alt="" class="img-thumbnail gallery-image">
            <div class="form-control bg-dark">
                <input type="file" name="image" class="text-white bg-dark">
            </div>
                
            <button type="submit" class="btn btn-warning">Изменить</button>

            </form>
        </div>
    </div>
 </div>
 
    
@endsection