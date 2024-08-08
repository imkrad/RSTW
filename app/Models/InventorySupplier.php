<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class InventorySupplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact_no',
        'address',
        'barangay_code',
        'municipality_code',
        'is_active',
        'user_id',
        'laboratory_id'
    ];

    public function laboratory()
    {
        return $this->belongsTo('App\Models\Laboratory', 'laboratory_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function municipality()
    {
        return $this->belongsTo('App\Models\LocationMunicipality', 'municipality_code', 'code');
    }

    public function barangay()
    {
        return $this->belongsTo('App\Models\LocationBarangay', 'barangay_code', 'code');
    }

    protected $encryptable = ['name','contact_no','email'];
    
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

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = Crypt::encryptString(strtolower($value));
    }

    public function getEmailAttribute($value)
    {
        return Crypt::decryptString($value);
    }

}
