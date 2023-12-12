<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'image'];


    // Mutator for setting the image path
    public function setImageAttribute($value)
    {
        $this->attributes['image'] = $value ? asset('storage/' . $value) : null;
    }

    
    // Automatically generate and set the slug when creating a new product
    public static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->name);
        });
    }
}
