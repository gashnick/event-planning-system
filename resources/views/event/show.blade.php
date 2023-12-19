@include('admin.includes.header')

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">
            <div class="container mt-5">
                <h1>Manage Events</h1>
                <div style="text-align: right;">
                    <a href="{{ route('events.create') }}" class="btn btn-success">Create Event</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-width caption-top">
                        <caption>List of Events</caption>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Event Name</th>
                                <th scope="col">Venue</th>
                                <th scope="col">Date</th>
                                <th scope="col">Tickets</th>
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                <th scope="col">Start Time</th>
                                <th scope="col">End Time</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allEvents as $event)
                            <tr>
                                <th scope="row">{{ $event->id }}</th>
                                <td>{{ $event->event_name }}</td>
                                <td>{{ $event->venue }}</td>
                                <td>{{ $event->date }}</td>
                                <td>{{ $event->no_of_tickets }}</td>
                                <td>{{ $event->price }}</td>
                                <td>{{ $event->description }}</td>
                                <td>{{ $event->start_time }}</td>
                                <td>{{ $event->end_time }}</td>
                                <td>{{ $event->status }}</td>
                                <td>
                                    <div class="btn-group mr-2"> <!-- Added mr-2 for margin-right -->
                                        <!-- Edit button -->
                                        <a href="{{ url('edit/',$event->id ) }}" class="btn btn-primary">Edit</a>

                                        <!-- Delete button (you may want to add a confirmation dialog for delete) -->
                                        <form action="{{ route('events.destroy', ['id' => $event->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Include Bootstrap JS (optional, for certain features) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </div>
    </div>
</div>

@include('admin.includes.footer')