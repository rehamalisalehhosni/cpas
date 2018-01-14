<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class CertificationTypes
*/
class CertificationType extends Model
{
    protected $table = 'certification_type';

    protected $primaryKey = 'certification_type_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
    ];

    protected $guarded = [];
    public function clients() {
        return $this->hasMany("App\Models\Certifications");
    }


}
