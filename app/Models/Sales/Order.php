<?php

namespace App\Models\Sales;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table        = 'orders';
    protected $primaryKey   = 'IDOrder';

    public function Customer()
    {
        return $this->belongsTo(Customer::class, 'IDCustomer', 'IDCustomer');
    }

    public function Status()
    {
        return $this->belongsTo(OrderStatus::class, 'IDStatus', 'IDStatus');
    }
}
