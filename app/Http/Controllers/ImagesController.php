<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;




class ImagesController extends Controller
{
    private $image;

    function __construct(ImageService $imageService){
        
        $this->image = new $imageService;
        
    }
    
    function index() {
    
        $images = $this->image->all();

        return view('office',  ['ArrayURL' =>  $images]);
    
    }

    function office() {

        $images = $this->image->all();

        return view('office',  ['ArrayURL' =>  $images]);
    
    }
    
    function kennel() {
        return view('kennel');
    }

    function create(){
        return view('create');
    }

    function store(Request $request){ // нужен use Illuminate\Http\Request;
        // dd($request->all());
     
        $dataImage = $request->file('image');  //получаем данные по текущему файлу

       $this->image->add($dataImage);
     
         return redirect('/');     
     }

     function show($id){
        //dd($id);
    
        $row = $this->image->one($id);
           
      //  $MyImg = $row->name;        //name
    
        return view('show', ['MyImg' => $row->name]);
    }

    function edit($id){

        $row = $this->image->one($id);
    
        //$MyImg = $collection;  // id, name, created_at, updated_at        
    
        return view('edit', ['MyImg' => $row]);
    
    }

    function update(Request $request, $id){
   
       
        $this->image->update($id, $request->image);
             
        return redirect('/');  
    
    }

    function delete($id){

        //достать прошлую картинку
        $imageOld = DB::table('image')
        ->select('*')
        ->where('id', $id)
        ->first();
    
        //удалить файл из public/uploads прошлую
        Storage::delete($imageOld->name);  //подключить use Illuminate\Support\Facades\Storage;
   
        //удаить из базы
        $deleted = DB::table('image')
        ->where('id',$id)
        ->delete();
   
        return redirect('/');  
   
   }
}
