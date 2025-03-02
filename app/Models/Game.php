<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cohensive\Embed\Facades\Embed;
use Str;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'video_url',
        'image'
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getVideoHtmlAttribute()
    {
        $embed = Embed::make($this->video_url)->parseUrl();

        if (!$embed)
            return '';

        $embed->setAttribute([
            'width' => 750,
            'show_info' => 0,
            // 'onload' => "resizeIframe(this)",
            'id' => 'iframe'
        ]);
        return $embed->getHtml();
    }

    public function getVideoFrontHtmlAttribute()
    {
        $embed = Embed::make($this->video_url)->parseUrl();

        if (!$embed)
            return '';

        $embed->setAttribute(['width' => 650]);
        return $embed->getHtml();
    }

    public function getDescriptionExcerptAttribute()
    {
        return Str::words($this->description, '20');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
