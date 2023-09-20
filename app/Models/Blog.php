<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Str;

// class Blog extends Model
class Blog extends Model implements HasMedia
{
    use InteractsWithMedia;
    // use HasFactory;
    protected $fillable=['title','image','description','user_id','category_id'];

    public function getDescriptionExcerptAttribute()
    {
        return Str::words($this->description, '2000');
    }
         // Relation
         public function category()
         {
             return $this->belongsTo(Category::class, 'category_id');
         }


  


         // Accessors
    public function getNetworkImageAttribute()
    {
        return isset($this->image) ? url('storage/' . $this->image) : null;
    }

    public function getImageAttribute($attribute)
    {
        if (isset($attribute)) {
            if (file_exists(public_path('storage/' . $attribute))) {
                return asset('storage/' . $attribute);
            } elseif (file_exists(public_path($attribute))) {
                return asset($attribute);
            } else {
                return asset('assets/img/1.jpg');
            }
        } else {
            return asset('assets/img/1.jpg');
        }
    }
    // {{ asset('assets/css/style.css') }}
       
     
     
}
