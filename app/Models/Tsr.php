<?php

namespace App\Models;

use App\Models\TargetBreakdown;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Tsr extends Model
{
    use HasFactory,LogsActivity;

    protected $fillable = [
        'code',
        'laboratory_id',
        'laboratory_type',
        'status_id',
        'customer_id',
        'conforme_id',
        'received_by',
        'due_at',
        'released_at'
    ];

    public function payment()
    {
        return $this->hasOne('App\Models\TsrPayment', 'tsr_id');
    }

    public function samples()
    {
        return $this->hasMany('App\Models\TsrSample', 'tsr_id');
    }

    public function report()
    {
        return $this->hasOne('App\Models\TsrReport', 'tsr_id');
    }

    public function laboratory()
    {
        return $this->belongsTo('App\Models\Laboratory', 'laboratory_id', 'id');
    }

    public function laboratory_type()
    {
        return $this->belongsTo('App\Models\ListLaboratory', 'laboratory_type', 'id');
    }

    public function lab_type()
    {
        return $this->belongsTo('App\Models\ListLaboratory', 'laboratory_type', 'id');
    }

    // public function purpose()
    // {
    //     return $this->belongsTo('App\Models\ListDropdown', 'purpose_id', 'id');
    // }

    public function status()
    {
        return $this->belongsTo('App\Models\ListStatus', 'status_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }

    public function conforme()
    {
        return $this->belongsTo('App\Models\CustomerConforme', 'conforme_id', 'id');
    }

    public function received()
    {
        return $this->belongsTo('App\Models\User', 'received_by', 'id');
    }

    public function transaction()
    {
        return $this->morphOne('App\Models\WalletTransaction', 'transacable');
    }

    public function service()
    {
        return $this->morphOne('App\Models\TsrService', 'typeable');
    }

    public function itemable()
    {
        return $this->morphOne('App\Models\FinanceOpItem', 'itemable');
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getDueAtAttribute($value)
    {

        return ($value) ? date('F d, Y', strtotime($value)) : null;
    }

    public function getReleasedAtAttribute($value)
    {
        return ($value) ? date('M d, Y g:i a', strtotime($value)) : null;
    }

    public function updateIfDirty(array $attributes){
        $this->fill($attributes);
        $dirtyAttributes = $this->getDirty();
        if(!empty($dirtyAttributes)) {
            $originalAttributes = array_intersect_key($this->getOriginal(), $dirtyAttributes);
            $updated = $this->update($dirtyAttributes);
            return $updated;
        }
        return false;
    }

    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
        ->logOnly(['customer_id','conforme_id','purpose_id','laboratory_type','received_by','status_id'])
        ->setDescriptionForEvent(fn(string $eventName) => "{$eventName}")
        ->useLogName('Customer')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
