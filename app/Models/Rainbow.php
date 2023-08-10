<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rainbow extends Model
{
    use HasFactory;
    use SoftDeletes; //для мягкого удаления

    protected $table = 'Kennels';

}
