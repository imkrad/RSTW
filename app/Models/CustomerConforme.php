<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class CustomerConforme extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact_no',
        'customer_id'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Crypt::encryptString($value);
    }

    public function getNameAttribute($value)
    {
        return Crypt::decryptString($value);
    }

    public function setContactNoAttribute($value)
    {
        $this->attributes['contact_no'] = Crypt::encryptString($value);
    }

    public function getContactNoAttribute($value)
    {
        return Crypt::decryptString($value);
    }
}
