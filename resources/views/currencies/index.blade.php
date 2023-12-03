<x-layouts.app>
    <div class="container">
        <h2>Currencies</h2>

        <a href="{{ route('currencies.create') }}" class="btn btn-primary">Add Currency</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($currencies as $currency)
                    <tr>
                        <td>{{ $currency->id }}</td>
                        <td>{{ $currency->code }}</td>
                        <td>{{ $currency->name }}</td>
                        <td>
                            <a href="{{ route('currencies.edit', $currency->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('currencies.destroy', $currency->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app>