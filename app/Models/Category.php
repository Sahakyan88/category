<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;


class Category extends Model
{
    use HasFactory;
    use NodeTrait;

    protected $guarded = [];


    public function product()
    {
        return $this->hasMany(Product::class,'category_id','id');
    }
}