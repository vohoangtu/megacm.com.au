<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['service_type', 'firstname', 'lastname', 'email', 'phone', 'address', 'city', 'apt_suite',
        'post_code', 'state', 'uuid', 'total_price'];
}
