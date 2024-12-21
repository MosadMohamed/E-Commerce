<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Model;

class ProductTagPivot extends Model
{
    protected $table        = 'product_tag_pivot';
    protected $primaryKey   = 'IDProductTag';

    public function Product()
    {
        return $this->belongsTo(Product::class, 'IDProduct', 'IDProduct');
    }

    public function Tag()
    {
        return $this->belongsTo(ProductTag::class, 'IDTag', 'IDTag');
    }
}
