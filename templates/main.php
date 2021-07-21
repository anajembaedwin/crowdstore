<?php

    //form validation for add.php
    if(isset($_POST['submit'])){
        //echo htmlspecialchars($_Get['email']);
        //echo htmlspecialchars($_Get['product']);
        //echo htmlspecialchars($_Get['description']);

        //check email
        if(empty($_POST['email'])){
            echo 'An email is required <br />';
        } else {
            echo htmlspecialchars($_Get['email']);
        }

        //check product
        if(empty($_POST['product'])){
            echo 'A product name is required <br />';
        } else {
            echo htmlspecialchars($_Get['product']);
        }

        //check description
        if(empty($_POST['description'])){
            echo 'A product description is required <br />';
        } else {
            echo htmlspecialchars($_Get['description']);
        }
    }
    

?>