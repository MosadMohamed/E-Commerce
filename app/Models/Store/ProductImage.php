<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table        = 'product_images';
    protected $primaryKey   = 'IDImage';

    public function Product()
    {
        return $this->belongsTo(Product::class, 'IDProduct', 'IDProduct');
    }
}
