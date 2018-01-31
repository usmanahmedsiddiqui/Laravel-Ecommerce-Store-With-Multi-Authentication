<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        public $timestamps = false;
         protected $table = 'product';
        
	    protected $fillable = ['cat_id','sub_cat_id','imagePath','title','description','price'];
	}
