<?php

namespace App\Http\Controllers;

use App\Models\EventHosted;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
        $allEvents = new EventHosted();
        $allEvents->event_name = $request->input('eventName');
        $allEvents->venue = $request->input('venue');
        $allEvents->date = $request->input('date');
        $allEvents->no_of_tickets = $request->input('ticket');
        $allEvents->price = $request->input('price');
        $allEvents->description = $request->input('description');
        $allEvents->save();
        return redirect('show')->with('status', "Event created successfully");
    }

    public function editEvent($id)
    {
        $allEvents = EventHosted::find($id);
        return view('event.edit', compact('allEvents'));
    }


    public function update(Request $request, $id)
    {
        $allEvents = EventHosted::find($id);
        $allEvents->event_name = $request->input('eventName');
        $allEvents->venue = $request->input('venue');
        $allEvents->date = $request->input('date');
        $allEvents->no_of_tickets = $request->input('ticket');
        $allEvents->price = $request->input('price');
        $allEvents->description = $request->input('description');
        $allEvents->update();
        return redirect('event.show')->with('status', "Event updated successfully");
    }

    public function deleteEvent($id)
    {
        // Find the event by ID and delete it
        $allEvents = EventHosted::find($id);
        $allEvents->delete();

        // Redirect to the show events page 
        return redirect()->route('event.show')->with('success', 'Event deleted successfully');
    }

    public function showEvent()
    {
        $allEvents = EventHosted::all();

        // Check and update event statuses based on current time
        foreach ($allEvents as $event) {
            $this->updateEventStatus($event);
        }

        return view('event.show', compact('allEvents'));
    }

    protected function updateEventStatus(EventHosted $event)
    {
        $now = Carbon::now();

        if ($event->date && $now >= $event->date) {
            $event->status = 'completed';
        } elseif ($event->date && $now < $event->date) {
            $event->status = 'pending';
        }

        // Add any other status conditions as needed

        $event->save();
    }
}
