<?php

namespace App\Http\Controllers;

use App\Models\EventHosted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EventsController extends Controller
{
    public function createEvent()
    {
        // Your code to show the form for creating events
        return view('event.create');
    }
    public function storeEvent(Request $request)
{
    // Validate the request data
    $request->validate([
        'eventName' => 'required',
        'venue' => 'required',
        'date' => 'required|date',
        'ticket' => 'required|numeric',
        'price' => 'nullable|numeric',
        'description' => 'nullable',
    ]);

    try {
        // Create and store the new event in the database
        EventHosted::create([
            'event_name' => $request->input('eventName'),
            'venue' => $request->input('venue'),
            'date' => $request->input('date'),
            'no_of_tickets' => $request->input('ticket'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('event.show')->with('success', 'Event created successfully.');
    } catch (\Exception $e) {
        Log::error('Error creating event: ' . $e->getMessage());

        // Redirect back with an error message
        return back()->with('error', 'Error creating event');
    }
}

    public function editEvent($id)
    {
        // Fetch event by ID and show the edit form
        $event = EventHosted::find($id);

        return view('event.edit', compact('event'));
    }

    public function deleteEvent($id)
    {
        // Find the event by ID and delete it
        $event = EventHosted::find($id);
        $event->delete();

        // Redirect to the show events page 
        return redirect()->route('event.show')->with('success', 'Event deleted successfully');
    }

    public function showEvent() {
        $events = EventHosted::all();
        return view('event.show', compact('events'));
    }

}
