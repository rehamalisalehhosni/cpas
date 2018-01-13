<?php
  namespace App\Models;

  use Illuminate\Database\Eloquent\Model;

  /**
  * Class AlambnaaaIndexing
  */
  class AlambnaaaIndexing	 extends Model
  {
      protected $table = 'alambnaaa_indexing';

      protected $primaryKey = 'alambnaaa_indexing_id';

      public $timestamps = true;

      protected $fillable = [
          'title',
          'year_from',
          'year_to',
          'file',
      ];

      protected $guarded = [];

  }
