<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = false;

    public function Category() {
        return $this->belongsTo(Category::class);
    }

    public function Tag() {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }
}
