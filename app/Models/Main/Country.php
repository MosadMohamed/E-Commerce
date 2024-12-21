<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table        = 'countries';
    protected $primaryKey   = 'IDCountry';

    public function Currency()
    {
        return $this->belongsTo(Currency::class, 'IDCurrency', 'IDCurrency');
    }
}
