<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $primaryKey = 'user_id';


    protected $fillable = [
        'user_firstname',
        'user_lastname',
        'user_address',
        'user_zipcode',
        'user_city',
        'user_phone',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    public function status()
    {
        return $this->belongsTo(UserStatus::class, 'user_status_id', 'status_id');
    }
    public function departement()
    {
        return $this->belongsTo(Department::class, 'user_dep_id', 'dep_id');
    }

    public function books()
    {
        return $this->HasMany(Book::class, 'book_user_id');
    }
}
