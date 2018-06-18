<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query) // Task::incomplete('fa');
    {
        return $query->where('completed', 0);
    }
    // Add 'scope' before function name to allow methods to be used on this method. example   `App\Task::incomplete()->where('id', '>=' 2)->get();`
}
