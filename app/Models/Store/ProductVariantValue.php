<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Model;

class ProductVariantValue extends Model
{
    protected $table        = 'product_variant_values';
    protected $primaryKey   = 'IDVariantValue';

    public function Product()
    {
        return $this->belongsTo(Product::class, 'IDProduct', 'IDProduct');
    }

    public function Variant()
    {
        return $this->belongsTo(ProductVariant::class, 'IDVariant', 'IDVariant');
    }

    public function Value()
    {
        return $this->belongsTo(ProductAttributeValue::class, 'IDValue', 'IDValue');
    }
}
