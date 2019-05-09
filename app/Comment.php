<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'id_post',
    	'name',
    	'description',
    	'author'
    	
    ];
}
