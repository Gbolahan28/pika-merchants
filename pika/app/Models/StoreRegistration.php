<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'storename',
        'ownername',
        'stateOfOperation',
        'businessAddress',
        'email',
        'phone_number',
        'instagram',
        'twitter',
        'website',
        'referralink',
        'email_verification_token',
        'email_verified_at'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}