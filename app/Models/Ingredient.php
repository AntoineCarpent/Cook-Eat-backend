<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

        public function recipe(): BelongsToMany
        {
            return $this->belongsToMany(Recipe::class, 'recipe_ingredients')
                        ->withPivot('quantity', 'unit');
        }
    }

