<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'slug',
        'status'
    ];

    protected $guarded = [];

    public function book_category()
    {
        return $this->hasMany(Book_Category::class,'category_id');
    }
}
