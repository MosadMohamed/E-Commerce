<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $table        = 'product_variants';
    protected $primaryKey   = 'IDVariant';

    public function Product()
    {
        return $this->belongsTo(Product::class, 'IDProduct', 'IDProduct');
    }
}
