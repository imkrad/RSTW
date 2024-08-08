<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TsrAnalysisResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'result','analysis_id','user_id'
    ];

    protected $encryptable = ['result'];
    
    public function setResultAttribute($value)
    {
        $this->attributes['result'] = Crypt::encryptString($value);
    }

    public function getResultAttribute($value)
    {
        return Crypt::decryptString($value);
    }

    public function analysis()
    {
        return $this->belongsTo('App\Models\TsrAnalysis', 'analysis_id', 'id');
    }
}
