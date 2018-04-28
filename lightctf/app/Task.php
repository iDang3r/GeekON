<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    /**
     *
     */
    public function users()
    {
        $this->belongsToMany('App\User', 'tasks_users', 'user_id', 'task_id');
    }
}
