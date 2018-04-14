<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';
    public function contact()
    {
        return $this->hasOne('App\Contact', 'id', 'contact_id');
    }
}
