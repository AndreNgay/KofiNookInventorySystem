@foreach($items as $item)
<form action="{{ route('inventory.update', ['inventory' => $item->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal fade" id="updateItemModal{{ $item->id }}" tabindex="-1"
        aria-labelledby="updateItemModal{{ $item->id }}Label" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateItemModal{{ $item->id }}Label">Update Item</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="item_name" class="form-label">Item Name</label>
                        <input type="text" class="form-control" id="item_name" name="item_name"
                            value="{{ $item->item_name }}">
                    </div>
                    <div class="form-group mb-3">
                        <div class="card mb-3">
                            <img class="card-img-top" src="{{ asset('storage/' . $item->image) }}" alt="Image">
                            <div class="card-body">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/"
                                    value="{{ $item->image }}">
                            </div>
                        </div>


                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ $item->description }}">
                    </div>
                    <div class="form-group mb-3">

                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" value="{{ $item->stock }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="required_stock" class="form-label">Required Stock</label>
                        <input type="number" class="form-control" id="required_stock" name="required_stock"
                            value="{{ $item->required_stock }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="cost" class="form-label">Cost</label>
                        <input type="number" class="form-control" id="cost" name="cost" value="{{ $item->cost }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ $item->type }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="unit_id" class="form-label">Unit</label>
                        <select class="form-control" id="unit_id" name="unit_id">
                            <option selected>Choose Unit</option>
                            @foreach($units as $unit)
                            @if($unit->id == $item->unit_id)
                            <option value="{{ $unit->id }}" selected>{{ $unit->id }} - {{ $unit->unit_name  }}</option>
                            @else
                            <option value="{{ $unit->id }}">{{ $unit->id }} - {{ $unit->unit_name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-control" id="category_id" name="category_id">
                            <option selected>Choose Category</option>
                            @foreach($categories as $category)
                            @if($category->id == $item->category_id)
                            <option value="{{ $category->id }}" selected>{{ $category->id }} -
                                {{ $category->category_name }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->id }} - {{ $category->category_name }}
                            </option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span
                            class="bi bi-x-circle-fill"></span> Close</button>
                    <button type="submit" class="btn btn-success"><span class="bi bi-pencil-square"></span> Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach