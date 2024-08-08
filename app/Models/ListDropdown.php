<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListDropdown extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'classification',
        'type',
    ];

    public function payment()
    {
        return $this->hasMany('App\Models\TsrPayment', 'payment_id');
    } 

    public function customer_industry()
    {
        return $this->hasMany('App\Models\Customer', 'industry_id');
    } 

    public function tsrs()
    {
        return $this->hasMany('App\Models\Tsr', 'laboratory_type');
    }

    public function inventory_category()
    {
        return $this->hasMany('App\Models\InventoryItem', 'category_id');
    } 
}
