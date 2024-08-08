<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryEquipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'brand',
        'model',
        'serial_no',
        'year',
        'price',
        'supplier_id',
        'laboratory_type',
        'laboratory_id',
        'user_id',
        'acquired_at'
    ];

    public function supplier()
    {
        return $this->belongsTo('App\Models\InventorySupplier', 'supplier_id', 'id');
    }

    public function laboratory()
    {
        return $this->belongsTo('App\Models\Laboratory', 'laboratory_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\ListLaboratory', 'laboratory_type', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = trim(str_replace(',','',$value),'₱');
    }

    public function getPriceAttribute($value)
    {
        return '₱'.number_format($value,2,'.',',');
    }

}
