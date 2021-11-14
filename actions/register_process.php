<?php
    // capturing form data using post

    require('../controller/customer_controller.php');

    // checking when the submit button is clicked
    if(isset($_POST['submit'])){
        // collect form data using the names field in the form
        $fullName = $_POST['Fname']." ".$_POST['Lname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['pass_1'],PASSWORD_DEFAULT);
        $country = $_POST['country'];
        $city = $_POST['city'];
        $contact = bin2hex($_POST['contact']);

        echo $fullName, $email, $password, $country, $city, $contact;

        //check if form fields are empty
        //else{
            
            // call the insert customer controller
            $result = viewOneCustomer_controller($email);

            if ($email===$result["customer_email"]){
            header("Location: ../view/register.php?register=error");
            }
            else{
                $result = add_customer_controller($fullName,$email, $password, $country, $city,
                $contact);
                if($result === true) header("Location: ../view/login.php");
                else echo "Unable to add customer";
            }
       

    }
    

        
