<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_empleados extends Model
{
    use HasFactory;
    protected  $fillable=[
        'nombres'
    ];
}
