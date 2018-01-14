<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class Seniors
*/

class Seniors extends Model
{
    protected $table = 'seniors';

    protected $primaryKey = 'seniors_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
        'category',
        'general_experience',
        'experience_cpas',
        'sort',
        'image',
    ];

    protected $guarded = [];


}
