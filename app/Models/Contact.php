<?php
declare(strict_type=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'title',
        'first_name',
        'moddle_name',
        'last_name',
        'preferred_name',
        'email',
        'phone'

    ];
}
