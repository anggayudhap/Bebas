<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
    protected $table='book';
        protected $fillable = ['amount','authour_id','amount','cover'];
        protected $visible = ['amount','authour_id','amount','cover'];
        public $timistamps = true;
        public function authour()
        {
       return $this->belongsTo('App\authour', 'authour_id');
    
        }

}
