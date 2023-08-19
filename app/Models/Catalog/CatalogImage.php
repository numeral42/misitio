<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogImage extends Model
{
    use HasFactory;

    protected $fillable=['url'];

    //Relación polimorfica

    public function imageable(){
        return $this->morphTo();
    }
}
