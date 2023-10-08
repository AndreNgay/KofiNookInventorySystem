<div class="modal fade" id="addTypeModal" tabindex="-1" aria-labelledby="addTypeModalLabel" aria-hidden="true">
    <form action="{{ route('type.store') }}" method="POST">
        @csrf
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addTypeModalLabel">Add Type</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="type_name" class="form-label">Type Name</label>
                        <input type="text" class="form-control" id="type_name" name="type_name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <span class="bi bi-x-circle-fill"></span> Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <span class="bi bi-plus-square-fill"></span> Add Type
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>