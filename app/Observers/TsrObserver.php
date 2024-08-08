<?php

namespace App\Observers;

use App\Models\Tsr;
use App\Models\TargetBreakdown;

class TsrObserver
{
    public function updated(Tsr $tsr): void
    {
        if ($tsr->isDirty('status_id') && $tsr->status_id == 2) {
            $this->updateTargetBreakdown($tsr);
        }
    }

    private function updateTargetBreakdown(Tsr $tsr)
    {
        $laboratory_id = $tsr->laboratory_id;
        $laboratory_type = $tsr->laboratory_type;
        $year = now()->year;

        $count = $tsr->samples()->count();
                    
        $targetBreakdown = TargetBreakdown::where('name','Samples Received')->where('laboratory_type',$tsr->laboratory_type)
        ->whereHas('target',function ($query) use ($laboratory_id,$year) {
            $query->where('year',$year)->where('laboratory_id',$laboratory_id);
        })->first();

        if ($targetBreakdown) {
            $targetBreakdown->increment('accom', $count);
        }

        $count = $tsr->samples()->withCount('analyses')->get()->sum('analyses_count');
        
        $targetBreakdown = TargetBreakdown::where('name','Services Conducted')->where('laboratory_type',$tsr->laboratory_type)
        ->whereHas('target',function ($query) use ($laboratory_id,$year) {
            $query->where('year',$year)->where('laboratory_id',$laboratory_id);
        })->first();

        if ($targetBreakdown) {
            $targetBreakdown->increment('accom', $count);
        }
    }
}
