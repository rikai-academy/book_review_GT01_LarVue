<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = "reviews";
    protected $primaryKey = "id";

    protected $fillable = [
        'content',
        'rating',
        'book_id',
        'user_id'
    ];

    protected $guarded = [];

    public function like_review()
    {
        return $this->hasMany(Like_Review::class,'review_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'review_id');
    }

    public function books()
    {
        return $this->belongsTo(Book::class,'book_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
