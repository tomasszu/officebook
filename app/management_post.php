<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class management_post extends Model
{
    public function scopeshowname($query)
    {
    	return $query->pluck('title');
    	//App\management_post::where('id','>=',2)->showname();
    }
}
