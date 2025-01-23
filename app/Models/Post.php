<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes as EloquentSoftDeletes;
use Illuminate\datebase\eloquent\softdeletes;

class Post extends Model
{
    use EloquentSoftDeletes;

    protected $fillable = [
        "title",
        "body",
    ];
    use HasFactory;

    public function getbylimit(int $limit_count = 10)
    {
        //updated_atで降順に並べたのち、limitで件数制限する
        return $this->orderby('updated_at', 'desc')->limit($limit_count)->get();
    }

    public function getpaginatebylimit(int $limit_count = 10)
    {
        return $this->orderby('updated_at', 'desc')->paginate($limit_count);
    }
}
