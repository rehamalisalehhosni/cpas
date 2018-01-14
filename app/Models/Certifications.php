<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class Certifications
*/
class Certifications extends Model
{
    protected $table = 'certifications';

    protected $primaryKey = 'certifications_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'image',
        'certification_type_id',
        'description',
    ];

    protected $guarded = [];
    public function type()
  {
      return $this->belongsTo('App\Models\CertificationType' , 'certification_type_id');
  }

}
