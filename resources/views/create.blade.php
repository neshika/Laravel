@extends('layout')

@section('content')
 <div class='container'>
    <div class="row">
        <div class="col-md-5">
            <h1>Add image</h1>
            <form action="/store" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-control bg-dark">
                    <input type="file" class="text-white bg-dark" name="image">
                </div>
                    
                <button type="submit" class="btn btn-success">Добавить</button>

            </form>
        </div>
    </div>
 </div>
 
    
@endsection