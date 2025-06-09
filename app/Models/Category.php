<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'cat_slug','description', 'photo', 'status'];


    public function subcategories()
{
    return $this->hasMany(SubCategory::class);
}


// public function products()
// {
//     return $this->belongsToMany(Product::class);
// }



}



