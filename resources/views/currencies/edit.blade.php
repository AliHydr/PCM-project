<x-layouts.app>
    <div class="container">
        <h2>Edit Currency</h2>

        <form action="{{ route('currencies.update', $currency->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="code" class="form-label">Currency Code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{ $currency->code }}" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Currency Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $currency->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Currency</button>
        </form>
    </div>
</x-layouts.app>