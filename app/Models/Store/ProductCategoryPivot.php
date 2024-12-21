<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryPivot extends Model
{
    protected $table        = 'product_category_pivot';
    protected $primaryKey   = 'IDProductCategory';

    public function Product()
    {
        return $this->belongsTo(Product::class, 'IDProduct', 'IDProduct');
    }

    public function Category()
    {
        return $this->belongsTo(ProductCategory::class, 'IDCategory', 'IDCategory');
    }
}
