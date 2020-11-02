<?php

namespace App\Http\Controllers;

use App\Enroll;
use App\Event;
use App\User;
//use http\Client\Curl\User;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{

    /**
     * Display a listing of the resource.
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function enrollments(Event $event)
    {
        if (auth()->user()->role == 'user') {
            $enroll = Enroll::where([
                ['event_id', $event->getAttributes('id')]
            ])
                ->get();
            $user = DB::table('users')
                ->get();
//        dd($event.value(''));
            return view('events.enrollments', [
                'user' => $user,
                'enroll' => $enroll
            ]);
        }else{
            $enroll = Enroll::where([
                ['event_id', $event->getAttributes('id')]
            ])
                ->get();
            $user = DB::table('users')
                ->get();
//        dd($event.value(''));
            return view('events.enrollmanager', [
                'user' => $user,
                'enroll' => $enroll
            ]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role == 'user') {
            $events = Event::where('user_id', auth()->user()->id)
                ->get();
            $enroll = DB::table('enrolls')
                ->get();
//        dd($enroll);
            return view('events.index', [
                'events' => $events,
                'enroll' => $enroll
            ]);
        }else{
            $events = Event::where('status','1')
                ->get();
            $enroll = DB::table('enrolls')
                ->get();
//        dd($enroll);
            return view('events.moderateEvents',[
                'events' => $events,
                'enroll' => $enroll
            ]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allEvents()
    {
        $events = Event::where('status','1')
            ->get();
        $enroll = DB::table('enrolls')
            ->get();
//        dd($enroll);
        return view('events.allEvents',[
            'events' => $events,
            'enroll' => $enroll
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alluser()
    {
        $events = DB::table('events')
            ->get();
        $enroll = DB::table('enrolls')
            ->get();
        $users = DB::table('users')
            ->get();
//        dd($enroll);
        return view('events.alluser',[
            'events' => $events,
            'enroll' => $enroll,
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'type' => 'required',
            'status' => 'required',
            'date' => 'required',
            'fees' => 'required',
            'poster' => 'required',
        ]);
        if($request->hasFile('poster')){
            $file = $request->file('poster');
            $extension = $file->getClientOriginalExtension();
            $filename = auth()->user()->id.time().'.'.$extension;
            $file->move('assets/img/event/',$filename);
            $data['poster'] = $filename;
//            dd($filename);
        }

        auth()->user()->events()->create($data);

        return redirect()->route('events.index')->with('status', 'Event Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $enroll = Enroll::where([
            ['user_id',auth()->user()->id],
            ['event_id',$event->getAttribute('id')]
        ])
            ->get();
//        dd($event.value(''));
        return view('events.show', [
            'event' => $event,
            'enroll' => $enroll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit',[
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'type' => 'required',
            'status' => 'required',
            'date' => 'required',
            'fees' => 'required',
            'poster' => 'sometimes',
        ]);

        if($request->hasFile('poster')){
            $image_path = "assets/img/event/".$event->poster;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $file = $request->file('poster');
            $extension = $file->getClientOriginalExtension();
            $filename = auth()->user()->id.time().'.'.$extension;
            $file->move('assets/img/event/',$filename);
            $data['poster'] = $filename;
//            dd($filename);
        }else{
            $data['poster'] = $event->poster;
        }

        $event->update($data);
        return redirect()->route('events.index')->with('status', 'Event Updated Successfully!');
    }

    /**
     * Display a listing of the resource.
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function roles($user)
    {

//        $test = User::where([['id', $user]])->get();
        $test = User::find($user);
//        dd($test[0]);
        if ($test['role'] == 'user'){
            $data['role'] = 'moderator';
//            dd($data);
            $test->update($data);
//            $this->up($test,$data);
        }else{
            $data['role'] = 'user';
//            $this->up($test,$data);
            $test->update($data);
        }
        return redirect()->route('events.alluser')->with('status', 'Role Updated Successfully!');
    }

    public function up(User $user,$data){
        $user->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //

        $image_path = "assets/img/event/".$event->poster;  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        //dd($image_path);
        $event->delete();
        return redirect()->route('events.index')->with('status', 'Event Deleted Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroyuser($id)
    {
        //
//        $user->delete();
//        return redirect()->route('events.index')->with('status', 'User Deleted Successfully!');

//        dd($id);
        $users = User::where('id',$id);
//        dd($users);
        $users->delete();

        return redirect()->route('events.index')->with('status', 'User Deleted Successfully!');
    }
}
