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
                    <th>Rate</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($currencies as $currency)
                <x-curremcy-row :currency="$currency"/>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app>