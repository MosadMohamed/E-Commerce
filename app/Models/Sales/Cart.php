<?php

namespace App\Models\Sales;

use App\Models\Customer;
use App\Models\Store\Product;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table        = 'carts';
    protected $primaryKey   = 'IDCart';

    public function Product()
    {
        return $this->belongsTo(Product::class, 'IDProduct', 'IDProduct');
    }

    public function Customer()
    {
        return $this->belongsTo(Customer::class, 'IDCustomer', 'IDCustomer');
    }
}
