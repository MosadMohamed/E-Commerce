<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Model;

class ProductBrandPivot extends Model
{
    protected $table        = 'product_brand_pivot';
    protected $primaryKey   = 'IDProductBrand';

    public function Product()
    {
        return $this->belongsTo(Product::class, 'IDProduct', 'IDProduct');
    }

    public function Brand()
    {
        return $this->belongsTo(ProductBrand::class, 'IDBrand', 'IDBrand');
    }
}
