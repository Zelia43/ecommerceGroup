<?php
    // capturing form data using post
    
    require('../controller/customer_controller.php');
    require('../settings/core.php');
    // checking when the submit button is clicked
    if(isset($_POST['submit'])){

        // collect form data using the names field in the form

        $email = $_POST['email'];
        $password = $_POST['pass_1'];

        echo   $email, $password;

        // call the insert customer controller
        $result = viewOneCustomer_controller($email);

        if(password_verify($password,$result["customer_pass"])){
            $_SESSION['user_id'] =$result["customer_id"];
            $_SESSION['user_role']=$result["user_role"];
            
            //var_dump($_SESSION['user_role']);
            if($_SESSION['user_role']==1){
                //if role is 1 load admin index page
                header("Location: ../Admin/index.php");
            }
            //other wise user is a regular customer, laod user view index page
            else header("Location: ../view/login.php");
        }
        else{
            echo '<script>alert("Incorrect Password");
            window.location ="../view/login.php";
            </script>';

        }
        
    }
