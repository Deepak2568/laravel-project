<!DOCTYPE html>
<html>
<head>
    <title>Employee Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Employee Registration</h4>
                </div>
                <div class="card-body">
                    <!-- @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li class='text-danger'>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif -->
                    <form action="{{ url('store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="department">Department:</label>
                            <select id="department" name="department" class="form-control">
                                <option value="">Select</option>
                                <option value="HR" {{old('department') == 'HR' ? 'selected' : ''}}>HR</option>
                                <option value="IT" {{old('department') == 'IT' ? 'selected' : ''}}>IT</option>
                                <option value="Finance" {{old('department') == 'Finance' ? 'selected' : ''}}>Finance</option>
                            </select>
                            @error('department')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Skills:</label><br>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" id="php" name="skills[]" value="PHP" class="form-check-input" {{ in_array('PHP', old('skills', [])) ? 'checked' : '' }}>
                                <label for="php" class="form-check-label">PHP</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" id="js" name="skills[]" value="JavaScript" class="form-check-input" {{ in_array('JavaScript', old('skills', [])) ? 'checked' : '' }}>
                                <label for="js" class="form-check-label">JavaScript</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" id="css" name="skills[]" value="CSS" class="form-check-input" {{ in_array('CSS', old('skills', [])) ? 'checked' : '' }}>
                                <label for="css" class="form-check-label">CSS</label>
                            </div>
                            @error('skills')
                                <br/><span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
