<form action="{{ route('account.store') }}" method="POST">
    @csrf
    <div class="modal fade" id="addAccountModal" tabindex="-1" aria-labelledby="addAccountModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addAccountModalLabel">Generate Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>

                    <div class="form-group mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>

                    <div class="form-group mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-control" id="role" name="role">
                            <option value="employee">Employee</option>
                            <option value="owner">Owner</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <span class="bi bi-x-circle-fill"></span> Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <span class="bi bi-plus-square-fill"></span> Generate Account
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
