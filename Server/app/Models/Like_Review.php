<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like_Review extends Model
{
    use HasFactory;

    protected $table = "like_review";
    protected $primaryKey = "id";

    protected $fillable = [
        'review_id',
        'user_id',
    ];

    protected $guarded = [];

    public function reviews()
    {
        return $this->belongsTo(Review::class,'review_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
