<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    protected $table = "follows";
    protected $primaryKey = "id";

    protected $fillable = [
        'user_id',
        'follow_id'
    ];

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','follow_id');
    }
}
