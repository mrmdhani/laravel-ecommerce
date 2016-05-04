<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title', 'parent_id',
    ];

    /*
     | Relationship
     */
    public function childs()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }
}