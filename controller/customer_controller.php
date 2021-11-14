<?php
    // create an instance of customer class 
    // in customer_class.php to run the methods
    require('../class/customer_class.php');

    function add_customer_controller($fullName,$email, $password, $country, $city,
    $contact){
        // create an instance of the customer class
        $customer0 = new customer();
        // call the method from the class
        return $customer0->addCustomer($fullName,$email, $password, $country, $city,
		$contact);
    
    }
    
    function delete_customer_controller($id){
        // create an instance of the customer class
        $customer0 = new customer();
        // call the method from the class
        return $customer0->deleteCustomer($id);
    
    }
    
    function update_customer_controller($id, $customer_name,$customer_email, $customer_pass, $customer_country, $customer_city,
    $customer_contact){
        // create an instance of the customer class
        $customer0 = new customer();
        // call the method from the class
        return $customer0->updateCustomer($id, $fullName,$email, $password, $country, $city,
			$contact);
    
    }
    
    function viewAllCustomers_controller(){
        // create an instance of the customer class
        $customer0 = new customer();
        // call the method from the class
        return $customer0->	viewAllCustomers();
    
    }

    function viewOneCustomer_controller($email){
        // create an instance of the customer class
        $customer0 = new customer();
        // call the method from the class
        return $customer0->viewOneCustomer($email);
    }
    
    ?>