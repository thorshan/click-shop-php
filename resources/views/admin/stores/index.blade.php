@section('title', 'All Stores')

<x-layout>
    <h1 class="my-3">All Stores</h1>
    <table class="table table-hover table-stripe">
        <thead>
            <th>#</th>
            <th>Logo</th>
            <th>Store Name</th>
            <th>Owner</th>
        </thead>
        <tbody>
            @foreach ($stores as $store)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ asset($store->image ?? 'logo/click-logo.png') }}" width="70" alt="">
                    </td>
                    <td>{{ $store->name }}</td>
                    <td>{{ $store->user->name ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
