@extends('layout')
@section('title', 'Edit Event')
@section('content')
    <body>
        <div class="container">
            <div class="mt-5">
                @if($errors->any())
                    {{-- Handle errors if needed --}}
                @endif
            </div>
            <form action="{{ route('event.edit', ['id' => $event->id])  }}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px; background-color: white; padding: 20px; border-radius: 10px;">
                @csrf
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label mb-3">Event Name</label>
                            <input type="text" class="form-control mb-3" name="eventName" value="{{ $event->event_name }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label mb-3">Event Venue</label>
                            <input type="text" class="form-control mb-2" name="venue" value="{{ $event->venue }}" required>
                        </div>
                    </div>
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" name="date" value="{{ $event->date }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" value="{{ $event->price }}" required>
                    <label class="form-label">Number of Tickets</label>
                    <input type="number" class="form-control" name="ticket" value="{{ $event->no_of_tickets }}">
                    <label class="form-label">Description of an event</label>
                    <textarea class="form-control" name="description" cols="3" value="{{ $event->description }}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit Event</button>
            </form>
        </div>
    </body>
@endsection
