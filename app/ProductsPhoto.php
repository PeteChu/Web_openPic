<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsPhoto extends Model
{
    protected $fillable = ['photo_path','album_name','grid','uid'];
}
