<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class NewsImages
*/
class NewsImages extends Model
{
    protected $table = 'news_images';

    protected $primaryKey = 'news_images_id';

    public $timestamps = true;

    protected $fillable = [
        'image',
        'news_id',
    ];

    protected $guarded = [];

    public function news()
    {
        return $this->belongsTo('App\Models\News' , 'news_id');
    }

}
