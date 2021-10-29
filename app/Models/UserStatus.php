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

    public function users()
    {
        return $this->hasMany(Uses::class);
    }

}
