<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class News
*/
class ProjectsCategory extends Model
{
    protected $table = 'projects_category';

    protected $primaryKey = 'projects_category_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'projects_category_id',
    ];

    protected $guarded = [];
    public function Projects() {
        return $this->hasMany("App\Models\Projects");
    }
}
