<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = "comments";
    protected $primaryKey = "id";

    protected $fillable = [
        'review_id',
        'user_id',
        'content'
    ];

    protected $guarded = [];

    public function like_comment()
    {
        return $this->hasMany(Like_Comment::class,'comment_id');
    }

    public function reviews()
    {
        return $this->belongsTo(Review::class,'review_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
