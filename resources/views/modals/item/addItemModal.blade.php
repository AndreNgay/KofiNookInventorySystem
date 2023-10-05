<div class="modal fade" id="newProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Item</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Item Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image</label>  
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Description</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Stock</label>
                          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Unit</label>                          
                            <select class="form-select" aria-label="Default select example">
                                <option value="" selected>Select Unit</option>
                                <option value="Cold Beverage">Liter/s</option>
                                <option value="Hot Beverage">Piece/s</option>
                                <option value="Pastries">Kilogram/s</option>
                            </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Cost</label>
                          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Category</label>                          
                            <select class="form-select" aria-label="Default select example">
                                <option value="" selected>Select Category</option>
                                <option value="Cold Beverage">Ingredient</option>
                                <option value="Hot Beverage">Pastry</option>
                                <option value="Pastries">Material</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Add</button>
                </div>
            </div>
        </div>
    </div>