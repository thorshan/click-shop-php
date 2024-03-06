@section('title', 'All Users')

<x-layout>
    <h1 class="my-3">All Users</h1>
    {{-- Alert Box Function --}}
    @if (session('success'))
        <div class="alert alert-secondary alert-dismissible fade show my-3 border-0" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-hover">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Sign-up date</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-dark">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post"
                                onclick="return confirm('Are you sure want to delete?');" class="ms-3">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
