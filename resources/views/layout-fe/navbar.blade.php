<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/pakuwon.png') }}" alt="" width="60" height="55">
        </a>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav gap-5 ">
                @auth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/user-home') }}">Home</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                @endauth

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/user-booking/create') }}">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/user-booking') }}">My Booking</a>
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/user/about-us') }}">About Us</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
                    </li>
                @endauth
            </ul>
        </div>

        @if (Auth::check())
            <a href="{{ url('/logout') }}">
                <button type="submit" class="btn btn-danger">Logout</button>
            </a>
        @else
            <a href="{{ url('/login') }}">
                <button type="button" class="btn btn-login">Log in / Sign Up</button>
            </a>
        @endif

    </div>
</nav>
