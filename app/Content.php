<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function category(){
      return  $test =  $this->belongsTo('App\Category', 'category_id ');

    }


}
