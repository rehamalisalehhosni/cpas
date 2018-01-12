<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class News
*/
class Projects extends Model
{
    protected $table = 'projects';

    protected $primaryKey = 'projects_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
        'main_image',
        'projects_category_id',
        'lat',
        'long',
    ];

    protected $guarded = [];
    public function ProjectsImages() {
        return $this->hasMany("App\Models\ProjectsImages");
    }
    public function ProjectsCategory() {
        return $this->belongsTo('App\Models\ProjectsCategory' , 'projects_category_id');
    }

}
