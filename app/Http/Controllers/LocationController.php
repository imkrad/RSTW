<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DropdownService;
use App\Http\Resources\DefaultResource;


class LocationController extends Controller
{
    public function __construct(DropdownService $dropdown){
        $this->dropdown = $dropdown;
    }

    public function index(Request $request){
        $options = $request->option;
        switch($options){
            case 'province':
                return $this->dropdown->provinces($request->code);
            break;
            case 'municipality':
                return $this->dropdown->municipalities($request->code);
            break;
            case 'barangay':
                return $this->dropdown->barangays($request->code);
            break;
        }
    }

}
