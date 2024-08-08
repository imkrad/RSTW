<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Services\DropdownService;

class WelcomeController extends Controller
{
    public function __construct(DropdownService $dropdown){
        $this->dropdown = $dropdown;
    }

    public function index(Request $request){
        return inertia('Welcome',[
            'events' => $this->events(),
            'regions' => $this->dropdown->regions()
        ]); 
    }

    public function events(){
        $data = Event::all();
        return $data;
    }
}
