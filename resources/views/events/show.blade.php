<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event List</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Manage Events</h1>
    <div style="text-align: right;">
        <a href="{{ route('events.create') }}" class="btn btn-success">Create New Event</a>
    </div>
    <table class="table caption-top">
        <caption>List of events</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Events Name</th>
                <th scope="col">Venue</th>
                <th scope="col">Date</th>
                <th scope="col">Number of Tickets</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <th scope="row">{{ $event->id }}</th>
                    <td>{{ $event->event_name }}</td>
                    <td>{{ $event->venue }}</td>
                    <td>{{ $event->date }}</td>
                    <td>{{ $event->no_of_tickets }}</td>
                    <td>{{ $event->description }}</td>
                    <td>
                        <!-- Edit button -->
                        <a href="{{ route('edit', ['id' => $event->id]) }}" class="btn btn-primary">Edit</a>
                        
                        <!-- Delete button (you may want to add a confirmation dialog for delete) -->
                        <form action="{{ route('destroy', ['id' => $event->id]) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


    <!-- Include Bootstrap JS (optional, for certain features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
