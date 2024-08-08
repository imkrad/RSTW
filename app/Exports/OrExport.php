<?php

namespace App\Exports;

use App\Models\FinanceReceipt;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class OrExport implements FromView
{
    protected $id;

    function __construct($id) {
            $this->id = $id;
    }

    public function view(): View
    {
        return view('exports.or', [
            'receipt' => FinanceReceipt::with('payor.customer_name','laboratory','op.collection','op.items.tsr.payment')->where('id',$this->id)->first()
        ]);
    }
}
