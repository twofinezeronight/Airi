<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'first_name', 'last_name', 'street_address', 'city', 'phone', 'email', 'order_notes'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
