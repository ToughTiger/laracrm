<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    use softDeletes;

   /***
    * 
    */
    protected $fillable = [
        'uuid',
        'name',
        'department_id'
    ];
}
