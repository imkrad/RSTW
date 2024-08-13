<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Exports\ParticipantExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Resources\ParticipantResource;

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

    public function participants(Request $request){
        $data = ParticipantResource::collection(
            Participant::query()
            ->with('events')
            ->with('region:code,name,region','province:code,name','municipality:code,name','barangay:code,name')
            ->when($request->keyword, function ($query, $keyword) {
                $query->where('firstname', 'LIKE', "%{$keyword}%")->orWhere('lastname', 'LIKE', "%{$keyword}%");
            })
            ->when($request->event, function ($query, $event) {
                $query->whereHas('events',function ($query) use ($event) {
                    $query->where('event_id',$event);
                });
            })
            ->get()
        );
        return $data;
    }

    public function export(Request $request){
        $id = $request->id;
        $name = Event::where('id',$id)->value('name');
        return Excel::download(new ParticipantExport($id), $name.'.xlsx');
    }
}
