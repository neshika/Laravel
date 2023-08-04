<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kennel extends Model
{
    use HasFactory;
    protected $table = 'Kennels';

    public $MyProperty; //$MyProperty = 'Мои личные свойства';

    public function MyTest()
    {
        return $this->MyProperty = "Nen Мои личные свойства";
    }
    
  
}
