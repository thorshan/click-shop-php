@section('title', 'Edit User | ' . $user->name)

<x-layout>
    <h1 class="my-3">Edit {{ $user->name }}</h1>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-floating mb-3">
            <input type="text" placeholder="Name" id="name" name="name" class="form-control"
                value="{{ $user->name }}">
            <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" placeholder="Email" id="email" name="email" class="form-control"
                value="{{ $user->email }}">
            <label for="email">Email</label>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
        <button class="btn btn-danger">Update</button>
    </form>
</x-layout>
