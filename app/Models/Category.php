<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['cat_parent_id','cat_name'];
    protected $primaryKey = 'cat_id';
    public $timestamps = false;



    public function parent(){
      return  $this->belongsTo(Category::class,'cat_parent_id','cat_id');
    }

   
}
