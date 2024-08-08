<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name','acronym','sample_count','tsr_count','laboratories','samplecode_year','laboratory_id'
    ];

    public function laboratory()
    {
        return $this->belongsTo('App\Models\Laboratory', 'laboratory_id', 'id');
    }
}
