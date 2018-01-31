<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
     public $timestamps = false;
    protected $table = 'tbl_sub_category';
    protected $primaryKey  = 'sub_cat_id';
    protected $fillable = ['cat_name','parent_id'];
}
