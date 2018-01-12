<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class News
*/
class News extends Model
{
    protected $table = 'news';

    protected $primaryKey = 'news_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'text',
        'main_image',
        'publish_date',
    ];

    protected $guarded = [];
    public function newsImage() {
        return $this->hasMany("App\Models\NewsImages");
    }

}
