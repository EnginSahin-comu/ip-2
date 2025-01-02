<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'image_url',
        'description',
        'slug',
        'category_id',
    ];

    public function productGallery()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }

    public function cart()
    {
        return $this->hasOne(Cart::class, 'product_id', 'id');
    }

    public function transactionItem()
    {
        return $this->hasMany(TransactionItem::class, 'product_id', 'id');
    }

    // Yeni ilişki: Tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
