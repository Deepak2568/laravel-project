<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <body>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('del_msg'))
            <div class="alert alert-danger">
                {{ session('del_msg') }}
            </div>
        @endif
        <h1>Student List</h1>
        <a href="{{ url('create') }}">
            <button type="button">Add New</button>
        </a>
        <table border=1 style="border-collapse:collapse;">
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @foreach($data as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a href="{{ url('edit', $student->id) }}">
                            <button type="button">Edit</button>
                        </a>
                        <form action="{{ url('delete', $student->id) }}" method="POST" style="display:inline;"> 
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        
    </body>
</html>