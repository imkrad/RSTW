<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerName extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->hasMany('App\Models\Customer', 'name_id');
    }
}
