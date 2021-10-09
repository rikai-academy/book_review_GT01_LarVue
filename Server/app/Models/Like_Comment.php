<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like_Comment extends Model
{
    use HasFactory;

    protected $table = "like_comment";
    protected $primaryKey = "id";

    protected $fillable = [
        'user_id',
        'comment_id',
    ];

    protected $guarded = [];

    public function comments()
    {
        return $this->belongsTo(Comment::class,'comment_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
