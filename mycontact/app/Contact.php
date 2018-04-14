<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    public function phones()
    {
        return $this->hasMany('App\Phone', 'contact_id', 'id');
    }
    public function sites()
    {
        return $this->hasMany('App\site', 'contact_id', 'id');
    }
}
