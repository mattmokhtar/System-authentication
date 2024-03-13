<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- 
    BCS3453 [PROJECT]-SEMESTER 2324/1
    Student ID: CB21032
    Student Name: MUHAMMAD BIN MOKHTAR 
--}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Malaysia Chess Event List')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <style>
        img {
            width: 100px;
            margin-top: 5px;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
        }
    </style>
</head>

<body>

    <header class="bg-dark text-white">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <img src="{{ asset('images/logov3.png') }}" alt="Logo"> <a />
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="events">Events</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contacts">Contact</a>
                        </li>
                    </ul>
                    <div class="ml-auto">
                        @if (Route::has('login'))
                            <div class="ml-4">
                                @auth
                                    <a href="{{ url('/home') }}" class="btn btn-outline-light">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-outline-light">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-outline-light ml-2">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="bg-dark text-white py-5">
        <div class="container text-center">
            <h1 class="display-4">Discover Exciting Chess Events in Malaysia</h1>
            <p class="lead">Stay updated on upcoming chess tournaments, competitions, and gatherings.</p>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy;Malaysia Chess Event List. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
