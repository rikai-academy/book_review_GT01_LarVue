<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = "activities";
    protected $primaryKey = "id";

    protected $fillable = [
        'book_id',
        'user_id',
        'type_id',
        'read_status',
        'favorite_status',
        'time'
    ];

    protected $guarded = [];

    public function books()
    {
        return $this->belongsTo(Book::class,'book_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function activity_type()
    {
        return $this->belongsTo(Activity_Type::class,'type_id');
    }
}
