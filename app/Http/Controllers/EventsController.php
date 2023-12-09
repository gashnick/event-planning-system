<?php

namespace App\Http\Controllers;

use App\Models\EventHosted;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function showEvents()
    {
        $events = EventHosted::all();
        return view('events.show', compact('events'));
    }

    // ...

    public function storeEvents(Request $request)
    {
        // Validate and store the new event in the database
        EventHosted::create($request->all());

        return redirect()->route('events.show')->with('success', 'Event created successfully.');
    }

    // ...

    public function updateEvents(Request $request, $id)
    {
        // Validate and update the event in the database
        EventHosted::find($id)->update($request->all());

        return redirect()->route('events.show')->with('success', 'Event updated successfully.');
    }

    // ...

    public function destroyEvents($id)
    {
        // Delete the event from the database
        EventHosted::destroy($id);

        return redirect()->route('events.show')->with('success', 'Event deleted successfully.');
    }
}
