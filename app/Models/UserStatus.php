<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserStatus extends Model
{
    use HasFactory;

    protected $primaryKey = 'status_id';
    public $timestamps = false;

    protected $fillable = ['general_status_id','status_name'];


    // general_statuses : Customer , Employe , Supplier
    // statuses : Private , Professional, Adminstrateur , Commercial , Importer , Constructor



    public function users()
    {
        return $this->hasMany(User::class,'user_status_id');
    }

}
