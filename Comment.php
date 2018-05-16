<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=["post_id","user_name","body"];
	public function post(){
		return $this->belongsTo("App\Post");
	}
}
