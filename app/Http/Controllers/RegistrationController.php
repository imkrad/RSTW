<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DropdownService;

class RegistrationController extends Controller
{
    public function __construct(DropdownService $dropdown){
        $this->dropdown = $dropdown;
    }

    public function index(Request $request){
        return inertia('Registration/Index',[
            'regions' => $this->dropdown->regions()
        ]); 
    }
}
