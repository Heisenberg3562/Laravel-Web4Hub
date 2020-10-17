<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController1 extends Controller
{
    public function index(){
        $events = Event::where('user_id',auth()->user()->id)
        ->get();
        return view('events.index',[
            'events' => $events
            ]);
    }

    public function show(Event $event){
        return view('events.show', [
            'event' => $event
        ]);
    }
}
