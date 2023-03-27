<?php include ('header.php')?>
<div class="container">
<?php 
    $query = $conn->query("SELECT * FROM products");
?>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">name</th>
        <th scope="col">quantity</th>
        <th scope="col">price</th>
        <th scope="col">actions</th>
        </tr>
    </thead>
    <?php
     while ($products = $query->fetch_assoc()){
        $id= $products['id'];
        echo "<tr> 
            <td>" .$products['id'] . "</td>
            <td>" .$products['name'] . "</td>
            <td>" .$products['quantity'] . "</td>
            <td>" .$products['price'] . "</td>
            <td> <a href ='product/updateproduct.php?id=$id' class='btn
            btn-outline-primary'> Update </a>&nbsp;
            <a href ='product/deleteproduct.php?id=$id' class='btn
            btn-outline-danger' onclick='return confirm(\"Are you want to delete this record?\")'>
             Delete </a></td>
        </tr>";
     }
     $conn->close();
    ?>
    </table>
    <a class="btn btn-outline-primary" href="http://localhost/internactivities/product/addproduct.php">Add products</a>
</div>
<?php include ('footer.php')?>