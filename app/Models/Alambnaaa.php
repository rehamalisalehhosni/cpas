<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class alambnaaa
*/
class Alambnaaa	 extends Model
{
    protected $table = 'alambnaaa';

    protected $primaryKey = 'alambnaaa_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'image',
        'file',
    ];

    protected $guarded = [];

}
