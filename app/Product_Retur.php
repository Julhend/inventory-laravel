<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Retur extends Model
{
    protected $table = 'product_retur';

    protected $fillable = ['product_id','supplier_id','qty','tanggal'];

    protected $hidden = ['created_at','updated_at'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
