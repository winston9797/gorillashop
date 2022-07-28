<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catrgory;
use App\Models\Comment;
use App\Models\Tag;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'title',
        'price',
        'description',
        'slug',
        'products_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function category(){
        return  $this->belongsto(Category::class,'cat_id');
    }

    /**
     * The products that belong to the Tag
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'products_tag','products_id');
    }

   /**
    * Get all of the comments for the Products
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function comments()
   {
       return $this->hasMany(comment::class);
   }

}
