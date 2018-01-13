<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class Services
*/
class Services extends Model
{
    protected $table = 'services';

    protected $primaryKey = 'services_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    protected $guarded = [];


}
