<!-- Begin Page Content -->
<div class="container-fluid">
<<<<<<< HEAD

=======
    <!-- DataTales Example -->
>>>>>>> create-category
    <div class="card shadow ">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <a href="/create_items" class="btn btn-primary">Create Item</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Item ID</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Category ID</th>
                            <th>User ID</th>
                            <th>Item Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $items = getItems();
                        foreach ($items as $item) {
                        ?>
                            <tr>
                                <td><?= $item['item_id'] ?></td>
                                <td><?= $item['item_name'] ?></td>
                                <td><?= $item['price'] ?></td>
                                <td><?= $item['quantity'] ?></td>
                                <td><?= $item['category_id'] ?></td>
                                <td><?= $item['user_id'] ?></td>
                                <td><img src="<?= $item['item_image'] ?>" alt="Item Image" width="100"></td>
                                <td class="d-gride gap-5">
                                    <a href="" class="text-danger p-2"><i class="fa fa-trash"></i></a>
                                    <a href="" class="text-danger p-2"><i class="fa fa-pen"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->