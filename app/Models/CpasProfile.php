<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class CpasBooks
*/
class CpasProfile extends Model
{
    protected $table = 'cpas_profile';

    protected $primaryKey = 'cpas_profile_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
        'image',
        'sort',
    ];

    protected $guarded = [];

}
