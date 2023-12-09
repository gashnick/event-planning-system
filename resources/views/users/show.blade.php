<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Manage Accounts</h1>
    <div style="text-align: right;">
        <a href="{{ route('create') }}" class="btn btn-success">Create User</a>
    </div>
    <table class="table caption-top">
        <caption>List of users</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->First_name }}</td>
                    <td>{{ $user->Last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <!-- Edit button -->
                        <a href="{{ route('edit', ['id' => $user->id]) }}" class="btn btn-primary">Edit</a>
                        
                        <!-- Delete button (you may want to add a confirmation dialog for delete) -->
                        <form action="{{ route('delete', ['id' => $user->id]) }}" method="post" style="display: inline;">
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
