<?php
include "conection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $description_product = $_POST['description_product'];
    $price = $_POST['price'];

    $insert = "INSERT INTO product (product_name, description_product, price) 
               VALUES ('$product_name', '$description_product', $price)";

               

    if (mysqli_query($conection, $insert)) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . mysqli_error($conection);
    }
}
?>
