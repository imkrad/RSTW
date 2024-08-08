<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class TsrReport extends Model
{
    use HasFactory;

    protected $fillable = ['information','tsr_id'];

    public function tsr()
    {
        return $this->belongsTo('App\Models\Tsr', 'tsr_id', 'id');
    }

    public function setInformationAttribute($value)
    {
        $this->attributes['information'] = Crypt::encryptString($value);
    }

    public function getInformationAttribute($value)
    {
        return Crypt::decryptString($value);
    }
}
