<?php
include "conection.php";


$sql = "CREATE TABLE IF NOT EXISTS product (
    id int(11) NOT NULL primary key AUTO_INCREMENT, 
    product_name varchar(255),
    description_product varchar(255),
    price int(11)
)";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = mysqli_query($conection, "DELETE FROM `product` WHERE `id`= '$id'");
}
$select = "SELECT * FROM product";

$query = mysqli_query($conection, $select);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view.css">
    <title>Product</title>
</head>

<body>



    <h1> Product</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Operation</th>

        </tr>
        <?php
        $num = mysqli_num_rows($query);
        if ($num > 0) {
            while ($result = mysqli_fetch_assoc($query)) {
                echo "
                <tr>
                  <td>" . $result['id'] . "</td>
                  <td>" . $result['product_name'] . "</td>
                  <td>" . $result['description_product'] . "</td>
                  <td>" . $result['price'] . "</td>
                  <td>
                  <a href='update.php?id= " . $result['id'] . "'>Update</a>
                  <a href='view.php?id=" . $result['id'] . "'>Delete</a>
                  
                  </td>
                </tr>";
            }
        }
        ?>
    </table>
    <a class="add" href="create-product.php">add product</a>


</body>

</html>