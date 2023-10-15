@foreach($item_batches as $item_batch)
<div class="modal fade" id="updateStockModal{{ $item_batch->id }}" tabindex="-1"
    aria-labelledby="updateStockModal{{ $item_batch->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('batch.update', $item_batch->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-header bg-wheat">
                    <h1 class="modal-title fs-5" id="updateStockModal{{ $item_batch->id }}Label">Update Stock</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="item_id" value="{{ $item_batch->item_id }}">
                    <div class="form-group mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" value="{{ $item_batch->stock }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label for="add_reduce" class="form-label">Add/Reduce</label>
                        <select class="form-select" aria-label="Default select example" id="add_reduce"
                            name="add_reduce">
                            <option value="add">Add</option>
                            <option value="reduce">Reduce</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount">
                    </div>
                    <div class="form-group mb-3">
                        <label for="expiration_date" class="form-label">Expiration Date</label>
                        <input type="date" class="form-control" id="expiration_date" name="expiration_date"
                            value="{{ $item_batch->expiration_date }}">
                    </div>
                </div>

                <div class="modal-footer bg-wheat">
                    <button type="submit" class="btn btn-success ms-2"><span class="bi bi-pencil-square"></span>
                        Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
