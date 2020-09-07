<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    @yield('title')
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Todos App</a>
       <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/todos">todos <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="/new-todos">Create Todo <span class="sr-only">(current)</span></a>
        </div>
       
    </nav>

    <div class="container">

        @if(session()->has('success'))
            @if(session()->get('success') == 'Todo deleted succesfully')
                <div class="alert alert-danger">
                    {{ session()->get('success') }}
                </div>
                @else
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
            @endif
        @endif

        @yield('content')
    </div>
</body>

</html>