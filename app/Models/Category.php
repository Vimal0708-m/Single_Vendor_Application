<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'status',
    ];

    public function getStatusAttribute(): string
    {
        return $this->attributes['status'] ? 'active' : 'inactive';
    }

    public function setStatusAttribute(string $value): void
    {
        $this->attributes['status'] = $value === 'active';
    }

    public static function boot(): void
    {
        parent::boot();

        static::creating(function (Category $category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }
        });

    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

}
