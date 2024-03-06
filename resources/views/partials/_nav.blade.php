<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ url()->current() }}">
            <img src="{{ asset('logo/click-logo.png') }}" width="120" alt="">
        </a>
        <div class="navbar-nav mx-auto">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('stores') }}">Shops</a>
            <a class="nav-link" href="#">Items</a>
            <a class="nav-link" href="#">Features</a>
            @if (!auth()->check())
                <a class="nav-link" href="{{ route('sell.products') }}">Sell products</a>
            @endif
        </div>

        <div class="">
            @if (auth()->check())
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
            @else
                <a class="text-secondary text-decoration-none" href="{{ route('login') }}">Login</a>
                <span class="text-danger mx-2">|</span>
                <a class="text-secondary text-decoration-none" href="{{ route('register') }}">Sign Up</a>
                <a class="text-danger ms-3" href="#">
                    <i class="fa-solid fa-cart-shopping fs-4"></i>
                </a>
            @endif
        </div>
    </div>
    </div>
</nav>
