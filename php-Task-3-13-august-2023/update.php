<!-- update.php -->
<?php
include "conection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $select = "SELECT * FROM product WHERE id = '$id'";
    $query = mysqli_query($conection, $select);
    $product = mysqli_fetch_assoc($query);

    if (isset($_POST['update'])) {
        $product_name = $_POST['product_name'];
        $description_product = $_POST['description_product'];
        $price = $_POST['price'];

        $update_query = "UPDATE product SET product_name = '$product_name', description_product = '$description_product', price = '$price' WHERE id = '$id'";
        $update_result = mysqli_query($conection, $update_query);

        if ($update_result) {
            header("Location: view.php"); 
            exit();
        } else {
            echo "Error updating product: " . mysqli_error($conection);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update Product</title>
</head>
<body>
    <form method="post">
        <h1>Update Product</h1>
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" value="<?php echo $product['product_name']; ?>" required><br>

        <label for="description_product">Description:</label>
        <textarea name="description_product" required><?php echo $product['description_product']; ?></textarea><br>

        <label for="price">Price:</label>
        <input type="number" name="price" value="<?php echo $product['price']; ?>" required><br>

        <input class="update" type="submit" name="update" value="Update">
    </form>
</body>
</html>
