@props(['currency'])
<tr>
    <td>
        <div class="d-flex px-2 py-1">
            <div class="d-flex flex-column justify-content-center">
                <p class="mb-0 text-sm">{{$currency->id}}</p>
            </div>
        </div>
    </td>
    
    <td class="align-middle text-center">
        <p class="text-xs text-secondary mb-0">{{$currency->code}}
        </p>
    </td>
    <td class="align-middle text-center">
        <p class="text-xs text-secondary mb-0">{{$currency->name}}
        </p>
    </td>
    <td class="align-middle text-center">
        <span class="text-secondary text-xs font-weight-bold">{{$currency->rate}}</span>
    </td>
   
    <td class="align-middle">
        <a rel="tooltip" class="btn btn-success btn-link"
        href="{{ route('currencies.edit', $currency->id) }}" data-original-title=""
            title="">
            <i class="material-icons">edit</i>
            <div class="ripple-container"></div>
        </a>
        <form action="{{ route('currencies.destroy', $currency->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </td>
    {{-- <td>
        <form action="{{ route('currencies.destroy', $currency->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </td> --}}
</tr>