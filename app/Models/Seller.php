<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Seller extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table        = 'sellers';
    protected $primaryKey   = 'IDSeller';

    protected $hidden = [
        'SellerPassword',
    ];
}
