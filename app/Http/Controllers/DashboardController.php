<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        if(!\Auth::check()){
            return inertia('Auth/Login');
        }else{
            return inertia('Dashboard/Index',[
                'events' => $this->events()
            ]);
        }
    }

    private function events(){
        $data = Event::with('list')->withCount('participants')->get();
        return $data;
    }
}
