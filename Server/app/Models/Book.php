<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = "books";
    protected $primaryKey = "id";

    protected $fillable = [
        'title',
        'publish_date',
        'author',
        'image',
        'description',
        'slug',
        'status'
    ];

    protected $guarded = [];

    public function book_category()
    {
        return $this->hasMany(Book_Category::class,'book_id');
    }

    public function activities()
    {
        return $this->hasMany(Activity::class,'book_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class,'book_id');
    }
}
