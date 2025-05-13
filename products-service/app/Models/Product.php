<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'name', 
        'description', 
        'price', 
        'stock', 
        'category_id'
    ];

    // Relação muitos-para-um (Produto pertence a uma Categoria)
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
