<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EulimsProduct extends Model
{
    use HasFactory;

    protected $table = 'tbl_products';
    protected $primaryKey = 'product_id';

    protected $fillable = ['name'];

    public function entries()
    {
        return $this->hasMany('App\Models\EulimsEntry', 'product_id');
    } 
}
