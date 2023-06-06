<?php

use Illuminate\Support\Facades\DB;
 
$users = DB::table('users')->get();
 
foreach ($users as $user) {
    echo $user->name;
}