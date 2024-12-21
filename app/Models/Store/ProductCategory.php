<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table        = 'product_categories';
    protected $primaryKey   = 'IDCategory';

    public function Children()
    {
        return $this->hasMany(ProductCategory::class, 'IDParent', 'IDCategory');
    }

    public function Parent()
    {
        return $this->belongsTo(ProductCategory::class, 'IDParent', 'IDCategory');
    }
}
