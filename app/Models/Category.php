<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function posts()
    {
        return $this->hasMany(post::class);
    }
    public function getbycategory(int $limit_count = 5)
    {
        return $this->posts()->with('category')->orderby('updated_at', 'desc')->paginate($limit_count);
    }
}
