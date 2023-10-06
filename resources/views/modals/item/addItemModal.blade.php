<form action="{{ route('inventory.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addItemModalLabel">Add Item</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="item_name" class="form-label">Item Name</label>
                        <input type="text" class="form-control" id="item_name" name="item_name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <div class="form-group mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock">
                    </div>
                    <div class="form-group mb-3">
                        <label for="required_stock" class="form-label">Required Stock</label>
                        <input type="number" class="form-control" id="required_stock" name="required_stock">
                    </div>
                    <div class="form-group mb-3">
                        <label for="cost" class="form-label">Cost</label>
                        <input type="number" class="form-control" id="cost" name="cost">
                    </div>
                    <div class="form-group mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type">
                    </div>
                    <div class="form-group mb-3">
                        <label for="unit_id" class="form-label">Unit</label>
                        <select class="form-control" id="unit_id" name="unit_id">
                            <option selected>Choose Unit</option>
                            @foreach($units as $unit)
                            <option value="{{ $unit->id }}">{{ $unit->id }} - {{ $unit->unit_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-control" id="category_id" name="category_id">
                            <option selected>Choose Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->id }} - {{ $category->category_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <span class="bi bi-x-circle-fill"></span> Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <span class="bi bi-plus-square-fill"></span> Add
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>