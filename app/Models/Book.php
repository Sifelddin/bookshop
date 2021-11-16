<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'book_id';

    protected $fillable = ['book_cat_id', 'book_user_id', 'book_title', 'book_author', 'book_release', 'ISBN', 'book_price', 'book_description', 'book_photo', 'book_stock', 'book_stock_alert'];


    public function user()
    {
        return $this->BelongsTo(User::class, 'book_user_id', 'user_id');
    }
    public function category()
    {
        return $this->BelongsTo(Category::class, 'book_cat_id', 'cat_id');
    }

    public function supplier()
    {
        return $this->belongsTo(User::class, 'book_user_id', 'user_id');
    }
}
