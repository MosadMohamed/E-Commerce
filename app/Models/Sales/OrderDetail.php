<?php

namespace App\Models\Sales;

use App\Models\Store\Product;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table        = 'order_details';
    protected $primaryKey   = 'IDDetail';

    public function Order()
    {
        return $this->belongsTo(Order::class, 'IDOrder', 'IDOrder');
    }

    public function Product()
    {
        return $this->belongsTo(Product::class, 'IDProduct', 'IDProduct');
    }
}
