<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <body>
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1>Home Page</h1>
                </div>
                <div class="col-md-4">
                    <a href="{{ url('create') }}" class="btn btn-success">Add New</a>
                </div>
            </div>
        </div>
    </body>
</head>