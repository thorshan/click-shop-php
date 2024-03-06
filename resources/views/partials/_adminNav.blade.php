<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ url()->current() }}">
            <img src="{{ asset('logo/click-logo.png') }}" width="120" alt="">
        </a>

        <div class="">
            @auth
                <div class="btn-group">
                    <button type="button" class="btn btn-white bg-transparent border-0 dropdown-toggle text-dark"
                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Cart</a></li>
                        <li><a class="dropdown-item" href="#">Dashborad</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger btn-sm">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
        </div>
    </div>
    </div>
</nav>
