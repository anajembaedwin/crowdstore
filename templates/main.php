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

    //form validation for signup.php
    if(isset($_POST['signup'])){

        //check email
        if(empty($_POST['email'])){
            echo 'An email is required <br />';
        } else {
            echo htmlspecialchars($_Get['email']);
        }

        //check name
        if(empty($_POST['name'])){
            echo 'A name is required <br />';
        } else {
            echo htmlspecialchars($_Get['name']);
        }

        //check password
        if(empty($_POST['password'])){
            echo 'A password is required <br />';
        } else {
            echo htmlspecialchars($_Get['password']);
        }
    } // end of POST check


    //form validation for login.php
    if(isset($_POST['login'])){

        //check email
        if(empty($_POST['email'])){
            echo 'An email is required <br />';
        } else {
            echo htmlspecialchars($_Get['email']);
        }
    
        //check name
        if(empty($_POST['name'])){
             echo 'A name is required <br />';
        } else {
            echo htmlspecialchars($_Get['name']);
        }
    
        //check password
        if(empty($_POST['password'])){
            echo 'A password is required <br />';
        } else {
            echo htmlspecialchars($_Get['password']);
        }
    } // end of POST check

?>