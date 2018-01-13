<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Class CpasBooks
*/
class CpasBooks extends Model
{
    protected $table = 'cpas_books';

    protected $primaryKey = 'cpas_books_id';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'author',
        'image',
        'publication_date',
        'no_pages',
        'subject',
        'price',
    ];

    protected $guarded = [];

}
