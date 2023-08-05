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


        $kennels = Kennel::all();
       return view('kennel', compact('kennels'));

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


            ],
            [
                'name' => 'Пушистики',
                'owner' => 'Закирия',
                'date' => '2023-08-05',
                'dogs' => '1',
                'l_litter' => '',
                'email' => 'pushiskti@mail.ru'
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

    public function firstOrCreate(){

        $findKennel = [
            'name' => 'Пушистики',
            'owner' => 'Милана',
            'date' => '2023-08-04',
            'dogs' => '1',
            'l_litter' => '',
            'email' => 'mail@mail.ru'

        ];
        $kennel = Kennel::firstOrCreate([
            'name' => 'Пушистики',
        ],[
            'name' => 'Пушистики',
            'owner' => 'Закирия',
            'date' => '2023-08-04',
            'dogs' => '1',
            'l_litter' => '',
            'email' => 'pushiskti@mail.ru'
        ]);
        
        dump($kennel);
        

        dd('firstOrCreate');
    } 

    public function updateOrCreate(){

        $findKennel = [
            'name' => 'Пушистики',
            'owner' => 'Милана',
            'date' => '2023-08-04',
            'dogs' => '1',
            'l_litter' => '',
            'email' => 'mail@mail.ru'

        ];
        $kennel = Kennel::updateOrCreate([
            'name' => 'Пушистики',
        ],[
            'name' => 'Пушистики',
            'owner' => 'Закирия',
            'date' => '2023-08-04',
            'dogs' => '1',
            'l_litter' => '',
            'email' => 'pushiskti@mail.ru'
        ]);
        
        dump($kennel);
        

        dd('updateOrCreate');
    } 
}
