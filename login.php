<?php


?>

<!DOCTYPE html>
<html>

    <?php include('templates/header.php'); ?>

    <section class="container ">
        <h4 class="center">Login</h4>
        <form class="white" action="" method="">
            <label>Your Email:</label>
            <input type="text" name="email">
            <label>Password:</label>
            <input type="text" name="password">
            <br>
            <br>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
        <p class="center">If you are not a member, you can <a href="signup.php">signup</a> here.</p>
    </section>

    <?php include('templates/footer.php'); ?>

</html>