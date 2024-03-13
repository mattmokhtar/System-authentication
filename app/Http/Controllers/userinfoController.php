<?php
   /**
    BCS3453 [PROJECT]-SEMESTER 2324/1
    Student ID: CB21032
    Student Name: MUHAMMAD BIN MOKHTAR 
    */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\userinfo;

class userinfoController extends Controller
{
   

    public function displayevent()
{
    $userinfo = userinfo::all();
    $userType = auth()->user()->usertype;

    if ($userType === 'participant') {
     
        return view('participant.event_list', compact('userinfo'));
    } elseif ($userType === 'organizer') {
      
        return view('organizer.event_list', compact('userinfo'));
    } else {
      
        return abort(403); 
    }
}

    public function publicshow()
    {
        $userinfo = userinfo::all();
        return view('events', compact('userinfo'));
    }

    public function showOrganizerEvents()
    {

        $userId = Auth::id();
        $userinfo = userinfo::where('user_id', $userId)->get();

        return view('organizer.create_event', compact('userinfo'));
    }

    public function store(Request $request)
    {
        userinfo::create([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'gender' => $request->dgender,
            'phonenum' => $request->phonenum,	
            'user_id' => Auth::user()->id,
        ]);

        session()->flash('success', 'Event created successfully!');

        return redirect()->route('organizer.create_event');
    }

    public function delete($id)
    {
        $userinfo = userinfo::find($id);
        $userinfo->delete();
        
    return redirect()->route('organizer.create_event')->with('success', 'Event deleted');
    }

    public function edit($id)
    {
        $userinfo = userinfo::find($id);
    
        return view('organizer.edit_event', compact('userinfo'));
    }
    
    public function update(Request $request, $id)
{
    $userinfo = userinfo::find($id);
    $userinfo -> update($request->all());
    return redirect()->route('organizer.create_event')->with('success', 'Event updated successfully');
}

}





