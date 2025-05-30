<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'name',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function users(){
        return $this->hasMany(User::class, 'subcategory_id');
    }
}
