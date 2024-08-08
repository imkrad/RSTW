<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CsfEntry extends Model
{
    use HasFactory;

    protected $fillable = [
       'tsr_id', 'comment', 'attribute'
    ];

    public function tsr()
    {
        return $this->belongsTo('App\Models\Tsr', 'tsr_id', 'id');
    }
}
