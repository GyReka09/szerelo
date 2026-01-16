<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{

    use HasFactory;
     protected $fillable = [
        'product_id',
        'part_id',
        'amount'
    ];
       protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('product_id', '=', $this->getAttribute('product_id'))
            ->where('part_id', '=', $this->getAttribute('part_id'));

        return $query;
    }
}
