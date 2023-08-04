<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kennel;

class KennelController extends Controller
{
    //
    public function index() {
       
       //$kennel = Kennel::find(1); //получить одну запись
       //echo $kennel->MyTest();
       //echo $kennel->name;
     
       /*   //получить все записи
            $kennels = Kennel::all(); 

        foreach($kennels as $kennel){
            dump($kennel->name);
        }
        /*

        /*  // получить первую, где условие
        $kennel = Kennel::where('dogs',2)->first();

        dump($kennel->name);
        */
        


      // dd($kennels);



       //return view('kennel');

    }

    public function create(){
        $newKennel = [
            [
                'name' => 'Хохлатки',
                'owner' => 'Милана',
                'date' => '2023-08-04',
                'dogs' => '1',
                'l_litter' => '',
                'email' => 'mail@mail.ru'


            ],
            [
                'name' => 'Новый',
                'owner' => 'Дима',
                'date' => '2023-08-04',
                'dogs' => '1',
                'l_litter' => '',
                'email' => 'mail@mail.ru'


            ]
            ];

            foreach ($newKennel as $kennel){
                Kennel::create($kennel);
            }

            dd('create all');
    }

    public function update(){
        $kennel = Kennel::find(2);
        $kennel->update([
            'name' => 'новый питомник - 2'
        ]
        );

        dd('update - 2 ');
    }

    public function delete(){
        $kennel = Kennel::find(2);
        
        $kennel->delete();

        dd('удален - 2 ');
    }

    public function restore(){ 

        $kennel = Kennel::withTrashed()->find(2);
        
        $kennel->restore();

        dd('восстановлен - 2 ');
    }
}
