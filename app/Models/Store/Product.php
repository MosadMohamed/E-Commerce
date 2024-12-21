<?php

namespace App\Models\Store;

use App\Models\Main\Country;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table        = 'products';
    protected $primaryKey   = 'IDProduct';

    public function Seller()
    {
        return $this->belongsTo(Seller::class, 'IDSeller', 'IDSeller');
    }

    public function Country()
    {
        return $this->belongsTo(Country::class, 'IDCountry', 'IDCountry');
    }
}
