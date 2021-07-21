<?php 
include('main.php'); 
?>

<!DOCTYPE html>
<html>

    <?php include('templates/header.php'); ?>

    <section class="container ">
        <h4 class="center">Add a Product</h4>
        <form class="white" action="add.php" method="POST">
            <label>Your Email:</label>
            <input type="text" name="email">
            <label>Product Name:</label>
            <input type="text" name="product">
            <label>Product Description:</label>
            <input type="text" name="description">
            
            <label for="img" >Product Image:</label>
            <div class="center">
            <input type="image" id="image" name="image" alt="upload image" accept="image/*">
            </div>
            <br>
            <br>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php'); ?>

</html>