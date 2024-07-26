<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id', 'customer_id', 'total', 'status', 'payment_method'
    ];

    public static function generateCustomId()
    {
        $prefix = 'AIRI';
        $randomNumbers = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
        return $prefix . $randomNumbers;
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = self::generateCustomId();
        });
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    
    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }
}
