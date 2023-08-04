<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kennel extends Model
{
    use HasFactory;
    use SoftDeletes; //для мягкого удаления

    protected $table = 'Kennels';
    protected $guarded = false; //нужна ли защита на запись - нет

    public $MyProperty; //$MyProperty = 'Мои личные свойства';

    public function MyTest()
    {
        return $this->MyProperty = "Nen Мои личные свойства";
    }
    
  
}
