<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'category_id',
        'price',
        'selling_price',
        'short_des',
        'description',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
