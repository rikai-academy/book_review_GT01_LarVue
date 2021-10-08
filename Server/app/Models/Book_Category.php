<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Category extends Model
{
    use HasFactory;

    protected $table = "book_category";
    protected $primaryKey = "id";

    protected $fillable = [
        'book_id',
        'category_id'
    ];

    protected $guarded = [];

    public function books()
    {
        return $this->belongsTo(Book::class,'book_id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
