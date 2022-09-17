<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class News extends Model
{
    use HasFactory;
    protected $fillable=['title','image','description','user_id'];

    public function getDescriptionExcerptAttribute()
    {
        return Str::words($this->description, '20');
    }

    public function user()
    {
       return $this->belongsTo(User::class);
    }
    
}
