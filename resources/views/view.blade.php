<!-- resources/views/view.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Register Profiles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Register Profiles</h2>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>DOB</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profiles as $profile)
            <tr>
                <td>{{ $profile->id }}</td>
                <td>{{ $profile->full_name }}</td>
                <td>{{ $profile->dob }}</td>
                <td>{{ $profile->location }}</td>
                <td>
                    <!-- View Button -->
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal"
                        data-id="ISM{{ $profile->id }}"
                        data-name="{{ $profile->full_name }}"
                        data-dob="{{ $profile->dob }}"
                        data-location="{{ $profile->location }}">
                        View
                    </button>
                    <!-- Edit Button -->
                    <a href="{{ url('edit', $profile->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <!-- Delete Button -->
                    <form action="{{ url('destroy', $profile->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this profile?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- View Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewModalLabel">Profile Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Id:</strong> <span id="modal-id"></span></p>
        <p><strong>Name:</strong> <span id="modal-name"></span></p>
        <p><strong>DOB:</strong> <span id="modal-dob"></span></p>
        <p><strong>Location:</strong> <span id="modal-location"></span></p>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var viewModal = document.getElementById('viewModal');
    viewModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        document.getElementById('modal-id').textContent = button.getAttribute('data-id');
        document.getElementById('modal-name').textContent = button.getAttribute('data-name');
        document.getElementById('modal-dob').textContent = button.getAttribute('data-dob');
        document.getElementById('modal-location').textContent = button.getAttribute('data-location');
    });
});
</script>
</body>
</html>