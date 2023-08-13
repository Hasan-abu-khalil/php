<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Product</title>
</head>

<body>
    
    <form action="process.php" method="post">
    <h1>Add Product</h1>
        
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" required><br>
        <label for="description_product">Description:</label>
        <input type="text" name="description_product" required><br>
        <label for="price">Price:</label>
        <input type="number" name="price" required><br>
        
        
        <button type="submit">Add Product</button>
    </form>
    
    <!-- <?php include "view.php"; ?> -->

</body>

</html>