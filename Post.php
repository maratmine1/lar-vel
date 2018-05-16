<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
	
{	protected $fillable=["id_categories","title","body","image"];
    public function comments(){
	return $this->hasMany("App\Comment");
	}
}
