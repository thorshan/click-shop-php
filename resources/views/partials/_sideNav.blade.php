<div class="d-flex flex-column justify-content-between" style="height:100%; background-color:#eee;">
    <div class="d-flex flex-column px-2">
        <a href="{{ route('dashboard') }}" class="btn btn-light shadow-sm rounded-0 mt-2 mb-1 d-flex align-items-center">
            <i class="fa-solid fa-gauge-high mx-4 me-3 text-danger"></i>Dashboard</a>

        {{-- Dashboard --}}
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i
                class="fa-solid fa-layer-group mx-4 me-3 text-danger"></i>Stores
        </button>
        <div class="collapse" id="collapseOne">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('stores.index') }}" class="text-decoration-none text-secondary">All Stores</a>
            </div>
        </div>
        {{-- Dashboard --}}

        {{-- Users --}}
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2"><i
                class="fa-solid fa-user mx-4 me-3 text-danger"></i>Users
        </button>
        <div class="collapse" id="collapse2">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{ route('users.index') }}" class="text-decoration-none text-secondary">All Users</a>
            </div>
        </div>
        {{-- Users --}}
    </div>
    <div class="mx-3 my-3">
        Login as : {{ auth()->user()->name }}
    </div>
</div>
