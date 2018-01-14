<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class News
*/
class OrganisationCharts extends Model
{
    protected $table = 'organisation_charts';

    protected $primaryKey = 'organisation_charts_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'image',
    ];

    protected $guarded = [];

}
