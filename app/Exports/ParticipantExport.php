<?php

namespace App\Exports;

use App\Models\Event;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ParticipantExport implements FromView
{
    protected $id;

    function __construct($id) {
            $this->id = $id;
    }

    public function view(): View
    {
        return view('exports.participants', [
            'event' => Event::where('id',$this->id)->with('participants.participant.region:code,name,region','participants.participant.province:code,name','participants.participant.municipality:code,name','participants.participant.barangay:code,name')->get()
        ]);
        // region:code,name,region','province:code,name','municipality:code,name','barangay:code,name
    }
}
