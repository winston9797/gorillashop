<?php

namespace App\Models;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name', 'content'];
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }

}
