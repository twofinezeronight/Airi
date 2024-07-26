<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'category_id', 'img'];
    public function scopeNewProducts($query, $limit)
    {
        return $query->orderBy('id', 'desc')->limit($limit)->with(['category']);
    }
    public function scopeBestsellerProducts($query, $limit)
    {
        return $query->where('sold', '>',0)->orderBy('id', 'desc')->limit($limit)->with(['category']);
    }
    public function scopeInStockProducts($query, $limit)
    {
        return $query->where('quantity', '>', 0)->orderBy('id', 'desc')->limit($limit)->with(['category']);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public static function getProductsByCategory($category_id)
    {
        return self::where('category_id', $category_id);
    }

    public function scopeSearch($query, $term)
    {
        if ($term) {
            $query->where('name', 'like', '%' . $term . '%');
        }

        return $query;
    }
    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }


    public static function getLatestProducts($limit = 6)
    {
        return self::orderBy('created_at', 'desc')->take($limit)->get();
    }

}
