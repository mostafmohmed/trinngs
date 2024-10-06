<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Task extends Model
{
    use Searchable;
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'desc'
      
    ];
    public function users(){
        return $this->belongsToMany(Task::class,'taske_assignments','task_id','user_id',);
    }
    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'desc' => $this->desc,
            // Add other searchable attributes
        ];
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

}
