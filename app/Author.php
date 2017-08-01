<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
     protected$table='author';
    protected $fillable = ['nama'];
    protected $visible = ['nama'];
    public $timestamps = true;

    public function book()
    {
    	return $this->hasMany('App\book', 'author_id');
    }
}
