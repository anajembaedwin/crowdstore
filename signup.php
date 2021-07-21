<?php

include('templates/main.php');

?>

<!DOCTYPE html>
<html>

    <?php include('templates/header.php'); ?>

    <section class="container ">
        <h4 class="center">Sign-Up</h4>
        <form class="white" action="signup.php" method="POST">
            <label>Your Email:</label>
            <input type="text" name="email">
            <label>Name:</label>
            <input type="text" name="name">
            <label>Password:</label>
            <input type="text" name="password">
            <br>
            <br>
            <div class="center">
                <input type="submit" name="submit" value="signup" class="btn brand z-depth-0">
            </div>
        </form>
        <p class="center">If you are already a member, you can just <a href="login.php">login</a> here.</p>
    </section>

    <?php include('templates/footer.php'); ?>

</html>