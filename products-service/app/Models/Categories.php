<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categories extends Model
{
    protected $fillable = ['name'];

    // Relação um-para-muitos (Categoria tem muitos Produtos)
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
