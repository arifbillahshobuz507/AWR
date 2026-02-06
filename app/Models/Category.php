<?php
// app/Models/Category.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'parent_id',
        'priority',
        'user_id'
    ];
    protected $casts = [
        'priority' => 'integer',
        'parent_id' => 'integer',
        'user_id' => 'integer'
    ];
    // Get the parent category
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    // Get the child categories
    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    //Get the user who created the category
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    //Scope to get categories with their children
    public function scopeWithChildren($query)
    {
        return $query->with(['children' => function ($q) {
            $q->orderBy('priority', 'asc')->orderBy('name', 'asc');
        }]);
    }
    //Scope to get root categories (no parent)
    public function scopeRoot($query)
    {
        return $query->whereNull('parent_id');
    }
    //Scope to order by priority
    public function scopeOrderByPriority($query, $direction = 'asc')
    {
        return $query->orderByRaw('priority IS NULL, priority ' . $direction);
    }
}
