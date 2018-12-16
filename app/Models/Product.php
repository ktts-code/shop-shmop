<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name','quantity','category_id'];

    public function tags(){
        return $this->belongsToMany(\App\Models\Tag::class);
    }
    
    public function category(){
        return $this->belongsTo(\App\Models\Category::class);
    }
    
    public function prices(){
        return $this->hasMany(\App\Models\Price::class);
    }
    
    public function images(){
        return $this->hasMany(\App\Models\Image::class);
    }
    
    public function mainImage(){
        return $this->images->first();
    }
    
    // $p->mainImage
}
