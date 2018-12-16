<?php
//

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
//определяет какие поля можно добавлять массова
  protected $fillable = ['name','category_id'];



//RELATION
  public function products(){
    return $this->hasMany(\App\Models\Product::class);
  }
  
  //RELATION
  public function parent(){
    return $this->belongsTo(\App\Models\Category::class);
  }
  
  public function children(){
    return $this->hasMany(\App\Models\Category::class);
  }

  // $cat1->parent
  // $cat1->children
}
