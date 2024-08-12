<?php

namespace App\Http\Controllers;

use Hashids\Hashids;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Participant;
use App\Services\DropdownService;
use App\Traits\HandlesTransaction;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmissionMail;

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
                    $event = $data->events()->create([
                        'event_id' => $list
                    ]);
                    if($event){
                        Event::where('id',$list)->increment('count', 1);
                    }
                }
                $hashids = new Hashids('krad',10);
                $code = $hashids->encode($data->id);
                $name = $request->firstname.' '.$request->lastname;
                Mail::to($request->email)->queue(new FormSubmissionMail($name,$code));
            }

            return [
                'data' => $data,
                'message' => 'Registration was completed!', 
                'info' => "A confirmation has been sent to your email. Please keep the email as proof of registration."
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
