<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Model;

class ProductAttributeValue extends Model
{
    protected $table        = 'product_attribute_values';
    protected $primaryKey   = 'IDValue';

    public function Attribute()
    {
        return $this->belongsTo(ProductAttribute::class, 'IDAttribute', 'IDAttribute');
    }
}
