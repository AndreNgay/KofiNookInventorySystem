@foreach($items as $item)
<form action="{{ route('item.updateStock', ['item' => $item->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal fade" id="updateStockModal{{ $item->id }}" tabindex="-1"
        aria-labelledby="updateStockModal{{ $item->id }}Label" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateStockModal{{ $item->id }}Label">Update Stock</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3">
                        <img class="card-img-top" src="{{ asset('storage/' . $item->image) }}"
                            alt="Image">
                        <div class="card-body">
                            <p class="card-text"><b>{{ $item->item_name }}:</b> {{ $item->description }}</p>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" value="{{ $item->stock }}" disabled>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="add_or_reduce_stock" class="form-label">Add/Reduce</label>
                        <select class="form-control" id="add_or_reduce_stock" name="add_or_reduce_stock">
                            <option value="add">Add</option>
                            <option value="reduce">Reduce</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount">
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