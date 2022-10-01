<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=['title','image','description','user_id'];

    public function getDescriptionExcerptAttribute()
    {
        return Str::words($this->description, '2000');
    }
    
}
