<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table        = 'users';
    protected $primaryKey   = 'IDUser';

    protected $hidden = [
        'UserPassword',
    ];

    public function Role()
    {
        return $this->belongsTo(UserRole::class, 'IDRole', 'IDRole');
    }
}
