<div class="d-flex flex-column justify-content-between" style="height:100%; background-color:#eee;">
    <div class="d-flex flex-column px-2">
        <a href="#" class="btn btn-light shadow-sm rounded-0 mt-2 mb-1 d-flex align-items-center">
            <i class="fa-solid fa-gauge-high mx-4 me-3 text-danger"></i>Dashboard</a>
        <button class="btn btn-light shadow-sm rounded-0 mb-1 d-flex align-items-center" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i
                class="fa-solid fa-layer-group mx-4 me-3 text-danger"></i>Stores
        </button>
        <div class="collapse" id="collapseOne">
            <div class="d-flex flex-column mx-5 my-2">
                <a href="{{route('stores.index')}}" class="text-decoration-none text-secondary">All Stores</a>
            </div>
        </div>
    </div>
    <div class="mx-3 my-3">
        Login as : {{ auth()->user()->name }}
    </div>
</div>
