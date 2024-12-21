<?php

namespace App\Models\Store;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    protected $table        = 'product_reviews';
    protected $primaryKey   = 'IDReview';

    public function Product()
    {
        return $this->belongsTo(Product::class, 'IDProduct', 'IDProduct');
    }

    public function Customer()
    {
        return $this->belongsTo(Customer::class, 'IDCustomer', 'IDCustomer');
    }
}
