@extends('layouts.layout')

@section('content')
 <div class='container'>
    <div class="row">
        <div class="col-md-5">
            <div class="mb-3"><h1>Изменить данные</h1></div>
            <form action="{{route ('kennel.update', $kennel->id)}}" method="post">
                @csrf
                @method('patch')

                <div class="mb-3">
                    <!--<label for="formGroupExampleInput" class="form-label">Название питомника</label>-->
                    <input type="text" name= "name" class="form-control" id="formGroupExampleInput" placeholder="Название питомника" value="{{$kennel->name}}">
                    </div>
                 <div class="mb-3">
                   <!--  <label for="formGroupExampleInput2" class="form-label">Владелец</label>-->
                    <input type="text" name="owner" class="form-control" id="formGroupExampleInput2" placeholder="Владелец" value="{{$kennel->owner}}">
                </div>
                     <div class="mb-3">
                   <!--  <label for="formGroupExampleInput2" class="form-label">сколько собак</label>-->
                    <input type="text" name="dogs" class="form-control" id="formGroupExampleInput2" placeholder="количество собак" value="{{$kennel->dogs}}">
                </div>
                </div>
                     <div class="mb-3">
                 <!--    <label for="formGroupExampleInput2" class="form-label">дата</label>-->
                    <input type="date" name="date" class="form-control" id="formGroupExampleInput2" placeholder="текущая дата" value="{{$kennel->date}}">
                </div>
                    
                <button type="submit" class="btn btn-success">Изменить</button>

            </form>
        </div>
    </div>
 </div>
 
    
@endsection