<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'quantity', 'category_id'];
    
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
