<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Participant;
use App\Services\DropdownService;
use App\Traits\HandlesTransaction;
use App\Http\Requests\RegistrationRequest;

class WelcomeController extends Controller
{
    use HandlesTransaction;
    
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
        $data = Event::with('list')->get();
        return $data;
    }

    public function store(RegistrationRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            $data = Participant::create($request->all());
            if($data){
                foreach($request->lists as $list){
                    $data->events()->create([
                        'event_id' => $list
                    ]);
                }
            }

            return [
                'data' => $data,
                'message' => 'Registration was completed!', 
                'info' => "You've successfully created the new request."
            ];
        });

        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }
}
