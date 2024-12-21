<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Model;

class ProductAttributePivot extends Model
{
    protected $table        = 'product_attribute_pivot';
    protected $primaryKey   = 'IDProductAttribute';

    public function Product()
    {
        return $this->belongsTo(Product::class, 'IDProduct', 'IDProduct');
    }

    public function Attribute()
    {
        return $this->belongsTo(ProductAttribute::class, 'IDAttribute', 'IDAttribute');
    }
}
