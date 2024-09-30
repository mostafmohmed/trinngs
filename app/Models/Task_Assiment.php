<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task_Assiment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'task_id'
      
    ];
    protected $table='taske_assignments';
}
