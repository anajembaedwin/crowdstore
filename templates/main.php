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
            //echo htmlspecialchars($_Get['email']);
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'email is not valid <br />';
            }
        }

        //check product
        if(empty($_POST['product'])){
            echo 'A product name is required <br />';
        } else {
            //echo htmlspecialchars($_Get['product']);
            $product = $_POST['product'];
            //this part has a regular expression
            if(!preg_match('/^[a-zA-Z\s]+$/', $product)){
                echo 'Product name must be letters and space only. <br />';
            }
        }

        //check description
        if(empty($_POST['description'])){
            echo 'A product description is required <br />';
        } else {
            //echo htmlspecialchars($_Get['description']);
            $description = $_POST['description'];
            //this part has a regular expression
            if(!preg_match('/^[a-zA-Z\s]+$/', $description)){
                echo 'Product description must be letters and space only. <br />';
            }
        }

        //check Image
        if(empty($_POST['image'])){
            echo 'A product image is required. <br />';
        } else {
            //echo htmlspecialchars($_Get['image']);
            $image = $_POST['image'];
            //this part has a regular expression
            if(!preg_match('/^[^\?]+\.(jpg|jpeg|gif|png)(?:\?|$)/', $image)){
                echo 'Product image is required. <br />';
            }
        }

    }

    //form validation for signup.php
    if(isset($_POST['signup'])){

        //check email
        if(empty($_POST['email'])){
            echo 'An email is required <br />';
        } else {
            //echo htmlspecialchars($_Get['email']);
            //$email = $_POST['email'];
            //this part has a regular expression
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'email is not valid <br />';
            }
        }

        //check name
        if(empty($_POST['name'])){
            echo 'A name is required <br />';
        } else {
            //echo htmlspecialchars($_Get['name']);
            $name = $_POST['name'];
            //this part has a regular expression
            if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
                echo 'Your name must be letters and space only. <br />';
            }
        }

        //check password
        if(empty($_POST['password'])){
            echo 'A password is required <br />';
        } else {
            //echo htmlspecialchars($_Get['password']);
            $password = $_POST['password '];
            //this part has a regular expression
            if (!preg_match('#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*@$#', $password) && strlen( $password >= 8 )){
            echo "Your password is not strong enough. <br />";
            }
        }
    } // end of POST check


    //form validation for login.php
    if(isset($_POST['login'])){

        //check email
        if(empty($_POST['email'])){
            echo 'An email is required <br />';
        } else {
            //echo htmlspecialchars($_Get['email']);
            $email = $_POST['email'];
        }
    
        //check password
        if(empty($_POST['password'])){
            echo 'A password is required <br />';
        } else {
            //echo htmlspecialchars($_Get['password']);
            $password = $_POST['password '];
        }
    } // end of POST check

?>