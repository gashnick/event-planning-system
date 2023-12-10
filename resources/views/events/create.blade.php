@extends('layout')
@section('title', 'Create Event')
@section('content')
    <body style="background-image: url('images/background.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; opacity: 0.9;">
        <div class="container">
            <div class="mt-5">
                @if($errors->any())
                    {{-- Handle errors if needed --}}
                @endif
            </div>
            <form action="{{ route('events.store') }}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px; background-color: white; padding: 20px; border-radius: 10px;">
                @csrf
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label mb-3">Event Name</label>
                            <input type="text" class="form-control mb-3" name="eventName" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label mb-3">Event Venue</label>
                            <input type="text" class="form-control mb-2" name="eventVenue" required>
                        </div>
                    </div>
                    <label class="form-label">Date of event</label>
                    <input type="date" class="form-control" name="date" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Number of tickets</label>
                    <input type="number" class="form-control" name="tickets" required>
                    <label class="form-label">Price per ticket</label>
                    <input type="number" class="form-control" name="price">
                    <label class="form-label">Description of an event</label>
                    <textarea class="form-control"  rows="3" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Event</button>
            </form>
        </div>
    </body>
@endsection
