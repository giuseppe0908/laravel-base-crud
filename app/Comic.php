<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
  /**
* The table associated with the model.
*
* @var string
*/
// protected $table = 'comics';

protected $fillable = [
  'title',
  'description',
  'thumb',
  'price',
  'series',
  'sale_date',
  'type'
];

}
