<?php $user = 'admin';?>

@extends ('layout')

@section ('content')
    <div class="container-xxl">
        <div class="text-center">Питомник: Чарующий соблазн: Количесвто собак: 5</div>
        <div class="row">
            <div class="col-md-3 p-2">
                <div><img src="{{asset('images/image.png')}}" class = "img-thumbnail" alt="" width=100></div>
             
                <div class="d-grid gap-1">
                    <a href="/show" class="btn btn-info btn-sm">Show</a>
                    <a href="/edit" class="btn btn-warning btn-sm">Edit</button>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
                <div class="col-md-3 p-2">
                <div><img src="{{asset('images/image.png')}}" alt="" width=100></div>
                 <div class="d-grid gap-1">
                    <button class="btn btn-info btn-sm" type="button">Show</button>
                    <button class="btn btn-warning btn-sm" type="button">Edit</button>
                    <button class="btn btn-danger btn-sm" type="button">Delete</button>
                </div>
               
            </div>
                <div class="col-md-3 p-2">
                <div><img src="{{asset('images/image.png')}}" alt="" width=100></div>
                 <div class="d-grid gap-1">
                    <button class="btn btn-info btn-sm" type="button">Show</button>
                    <button class="btn btn-warning btn-sm" type="button">Edit</button>
                    <button class="btn btn-danger btn-sm" type="button">Delete</button>
                </div>
                
            </div>
                <div class="col-md-3 p-2">
                <div><img src="{{asset('images/image.png')}}" alt="" width=100></div>
                 <div class="d-grid gap-1">
                    <button class="btn btn-info btn-sm" type="button">Show</button>
                    <button class="btn btn-warning btn-sm" type="button">Edit</button>
                    <button class="btn btn-danger btn-sm" type="button">Delete</button>
                </div>
             
            </div>
            <div class="col-md-3 p-2">
                <div><img src="{{asset('images/image.png')}}" alt="" width=100></div>
                 <div class="d-grid gap-1">
                    <button class="btn btn-info btn-sm" type="button">Show</button>
                    <button class="btn btn-warning btn-sm" type="button">Edit</button>
                    <button class="btn btn-danger btn-sm" type="button">Delete</button>
                </div>
              
            </div>
          
        </div>
        
    </div>
@endsection
