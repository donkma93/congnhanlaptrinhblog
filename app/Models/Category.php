<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'parent_id', 'icon', 'display_order'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
