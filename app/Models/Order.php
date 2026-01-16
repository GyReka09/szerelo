<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
       
    protected $fillable = [
        'order_number',
        'product_id',
        'quantity',
        'date'
    ];
    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('product_id', '=', $this->getAttribute('product_id'))
            ->where('order_number', '=', $this->getAttribute('order_number'));
            


        return $query;
    }

}
