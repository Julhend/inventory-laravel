<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Po extends Model
{
    protected $table = 'product_po';

    protected $fillable = ['product_id','qty','tanggal'];

    protected $hidden = ['created_at','updated_at'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
