{{-- Remove @extends and @section --}}
@include('admin.includes.header')

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">
            <div class="container">
                <div class="mt-5">
                    @if($errors->any())
                    {{-- Handle errors if needed --}}
                    @endif
                </div>
                <form action="{{ route('events.store') }}" method="POST" class="ms-auto me-auto mt-auto bg-white p-4 rounded">
                    @csrf
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label mb-3">Event Name</label>
                                <input type="text" class="form-control mb-3" name="eventName" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mb-3">Event Venue</label>
                                <input type="text" class="form-control mb-2" name="venue" required>
                            </div>
                        </div>
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" name="date" required>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" required>
                            <label class="form-label">Number of Tickets</label>
                            <input type="number" class="form-control" name="ticket">
                            <label class="form-label">Description of an event</label>
                            <textarea class="form-control" name="description" cols="3"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Event</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Include the footer --}}
@include('admin.includes.footer')