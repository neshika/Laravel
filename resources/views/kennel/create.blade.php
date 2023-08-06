@extends('layouts.layout')

@section('content')
 <div class='container'>
    <div class="row">
        <div class="col-md-5">
            <div class="mb-3"><h1>Создать питомник</h1></div>
            <form action="{{route ('kennel.store')}}" method="post">
                @csrf

                <div class="mb-3">
                    <!--<label for="formGroupExampleInput" class="form-label">Название питомника</label>-->
                    <input type="text" name= "name" class="form-control" id="formGroupExampleInput" placeholder="Название питомника">
                    </div>
                 <div class="mb-3">
                   <!--  <label for="formGroupExampleInput2" class="form-label">Владелец</label>-->
                    <input type="text" name="owner" class="form-control" id="formGroupExampleInput2" placeholder="Владелец">
                </div>
                     <div class="mb-3">
                   <!--  <label for="formGroupExampleInput2" class="form-label">сколько собак</label>-->
                    <input type="text" name="dogs" class="form-control" id="formGroupExampleInput2" placeholder="количество собак">
                </div>
                </div>
                     <div class="mb-3">
                 <!--    <label for="formGroupExampleInput2" class="form-label">дата</label>-->
                    <input type="date" name="date" class="form-control" id="formGroupExampleInput2" placeholder="текущая дата">
                </div>
                    
                <button type="submit" class="btn btn-success">Внести</button>

            </form>
        </div>
    </div>
 </div>
 
    
@endsection