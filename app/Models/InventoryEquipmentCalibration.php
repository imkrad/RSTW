<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryEquipmentCalibration extends Model
{
    use HasFactory;

    protected $fillable = [
        'calibrator',
        'type_id',
        'equipment_id',
        'user_id',
        'calibrated_at',
        'due_at'
    ];

    public function type()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'type_id', 'id');
    }

    public function equipment()
    {
        return $this->belongsTo('App\Models\InventoryEquipment', 'equipment_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
