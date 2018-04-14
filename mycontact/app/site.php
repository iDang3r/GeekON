<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class site extends Model
{
  protected $table = 'sites';
  public function contact()
  {
      return $this->hasOne('App\Contact', 'id', 'contact_id');
  }
}
