<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    use HasFactory;

    protected $primaryKey = 'status_id';
    public $timestamps = false;

    protected $fillable = ['general_status_id','status_name'];

}
