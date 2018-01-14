<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class ClientsTypes
*/
class ClientsTypes extends Model
{
    protected $table = 'clients_types';

    protected $primaryKey = 'clients_types_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
    ];

    protected $guarded = [];
    public function clients() {
        return $this->hasMany("App\Models\Clients");
    }


}
