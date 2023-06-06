<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ImageService{

    public function all(){
        $images = DB::table('image')
        ->select('*')
        ->get();
    
        //$MyUrl = $images->pluck('name'); //вывести только имя файла
        $ArrayImages = $images->all(); //вывести все данные

        return $ArrayImages;
    
    }

    public function one($id){
        $collection = DB::table('image')
        ->select('*')
        ->where('id', $id)
        ->first();

        return $collection;
    }

    public function add($dataImage){
         //dd($image->store('uploads')); // сохраняет названия с хешем
        /* Если надо сохранить со своим названием, то другой метод
         storeAs(куда, имя)
          в таком случае, если такое название существует, оно перезаписывается
        */
     
        //$path = $image->storeAs('uploads', 'image3.png');
     
       $filename = $dataImage->store('uploads');
       //$filename = $request->image->storeAs('uploads', 'imagename.png');
     
         (DB::table('image')->insert( //нужен класс use Illuminate\Support\Facades\DB;
         ['name' =>  $filename ])
         );
    }

    function update($id, $image){
         //удалить файл из public/uploads прошлую
            //достать прошлую картинку
       
            $row = DB::table('image')
            ->select('*')
            ->where('id', $id)
            ->first();

         Storage::delete($row->name);  //подключить use Illuminate\Support\Facades\Storage;
        
         //заменить старую картинку на новую в базе.
         //git branch -M maingit branch -M maindd($image->store('uploads'));
     
         $filename = $image->store('uploads');
       
         DB::table('image')
            ->where('id', $id)
            ->update(['name' => $filename]);
    }
}