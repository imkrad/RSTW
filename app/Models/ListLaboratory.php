<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListLaboratory extends Model
{
    use HasFactory;

    public function services()
    {
        return $this->morphMany('App\Models\TestserviceAddon', 'typeable');
    }

    public function messages()
    {
        return $this->morphMany('App\Models\ChatMessage', 'receivable');
    }
}
