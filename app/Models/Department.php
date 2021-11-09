<?php

namespace App\Models;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;
    

    protected $primaryKey = 'dep_id';

    protected $fillable = ['dep_name'];
    public $timestamps = false;



    public function users()
    {
        return $this->HasMany(User::class,'user_dep_id');
    }
}
