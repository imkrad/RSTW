<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'old_code',
        'name',
        'img',
        'reorder',
        'unit_id',
        'category_id',
        'laboratory_id',
        'user_id',
        'is_equipment'
    ];

    public function stocks()
    {
        return $this->hasMany('App\Models\InventoryStock', 'item_id');
    }

    public function laboratory()
    {
        return $this->belongsTo('App\Models\Laboratory', 'laboratory_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'category_id', 'id');
    }

    public function unittype()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'unit_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function isBelowReorderLevel()
    {
        $totalStock = $this->stocks()->sum('onhand');
        return $totalStock <= $this->reorder && $totalStock != 0;
    }
}
