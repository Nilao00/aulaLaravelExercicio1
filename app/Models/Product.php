<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table = 'categories';
   protected $fillable = ['name','description'];

   public function categories()
   {
      return $this->belongsToMany(Category::class,'products_categories');
   }

   public function images()
   {
      return $this->hasMany(ProductImages::class);
   }
}