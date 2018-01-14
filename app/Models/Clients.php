<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Clients;
use Validator;

/**
* Class ClientsTypes
*/
class Clients extends Model
{
    protected $table = 'clients';

    protected $primaryKey = 'clients_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'logo',
        'type_id',
    ];

    protected $guarded = [];
    public function types()
  {
      return $this->belongsTo('App\Models\ClientsTypes' , 'type_id');
  }

}
