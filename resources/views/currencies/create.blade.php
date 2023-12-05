<x-layouts.app>
    <div class="container">
        <h2>Create Currency</h2>

        <form action="{{ route('currencies.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="code" class="form-label">Currency Code</label>
                <input type="text" class="form-control" id="code" name="code" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Currency Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="rate" class="form-label">Currency Rate</label>
                <input type="number" class="form-control" id="name" name="rate" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Currency</button>
        </form>
    </div>
</x-layouts.app>