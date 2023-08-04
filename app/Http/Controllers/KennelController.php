<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kennel;

class KennelController extends Controller
{
    //
    function index() {
       
       //$kennel = Kennel::find(1);

       //echo $kennel->MyTest();
       //echo $kennel->name;
        $kennels = Kennel::all();
       dd($kennels);



       //return view('kennel');

    }
}
