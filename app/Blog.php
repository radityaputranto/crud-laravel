<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
	use SoftDeletes;
    protected $table ='blogs';
    //public $timestamps = false; //tidak  ada created_at dan updated_at

    
    protected $dates = ['deleted_at']; 

    //white list = yang di perbolehkan
    protected $fillable = ['tittle' , 'description'];
    //blacklist = yang todak di perbolehkan
    //protected $guarded = ['createed_at','updated_at' ];
}
