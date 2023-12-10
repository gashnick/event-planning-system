<?php

namespace App\Http\Controllers;

use App\Models\EventHosted;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function createEvent()
    {
        return view('events.create'); // Assuming your view file is named 'create.blade.php'
    }

    public function storeEvent(Request $request)
    {
        // Validate and store the new event

        $request->validate([
            'eventName' => 'required',
            'eventVenue' => 'required',
            'date' => 'required|date',
            'tickets' => 'required|numeric',
            'price' => 'numeric',
            'description' => 'nullable',
        ]);

        // Create a new event
        EventHosted::create([
            'event_name' => $request->input('eventName'),
            'event_venue' => $request->input('eventVenue'),
            'date' => $request->input('date'),
            'number_of_tickets' => $request->input('tickets'),
            'price_per_ticket' => $request->input('price'),
            'description' => $request->input('description'),
            // Add other fields as needed
        ]);

        // Redirect to the route that displays the list of events
        return redirect()->route('events.show')->with('success', 'Event created successfully');
    }


    public function editEvent($id)
    {
        $event = EventHosted::find($id);

        // Add any additional logic you need

        return view('events.edit', ['event' => $event]);
    }

    public function deleteEvent($id)
    {
        $event = EventHosted::find($id);

        // Perform any additional checks or logic before deleting, if needed

        $event->delete();

        // Redirect to the events listing or show page
        return redirect()->route('events.show')->with('success', 'Event deleted successfully!');
    }

    public function showEvents() {
        $events = EventHosted::all();
        return view('events.show', compact('events'));
    }
}
