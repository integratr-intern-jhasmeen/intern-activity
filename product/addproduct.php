<?php include('../header.php') ?>
<div class="container">
    <form class="form" method="POST" action="http://localhost/internactivities/product/actionsproduct.php">
        <div class="mb-3"><label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3"> <label for="quantity" class="form-label">quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity">
        </div>
        <div class="mb-3"><label for="price" class="form-label">price</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <input type="submit" name="submit_product" value="Store product" class="btn btn-outline-primary">
    </form>
</div>
<?php include('../footer.php') ?>