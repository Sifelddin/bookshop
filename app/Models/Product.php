<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'pro_id';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
}


