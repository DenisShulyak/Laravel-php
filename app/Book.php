<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 * @package App\Model
 *
 * @property $name
 * @property $autor
 * @property $company
 * @property $price
 * @property $count
 * @property $width
 */
class Book extends Model
{
    public $fillable = [
      'name','autor','company','price','count','width'
    ];
}
