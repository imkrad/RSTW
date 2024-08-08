<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestserviceAddon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fee',
        'description',
        'is_additional',
        'is_active',
        'laboratory_id'
    ];

    public function typeable()
    {
        return $this->morphTo();
    }

    public function setFeeAttribute($value)
    {
        $this->attributes['fee'] = trim(str_replace(',','',$value),'₱');
    }

    public function getFeeAttribute($value)
    {
        return '₱'.$value;
    }
}
