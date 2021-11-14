<?php
    require ('../settings/db_class.php');

    class customer extends connection {

		function addCustomer($fullName,$email, $password, $country, $city,
		$contact){
			// return true or false
			return $this->query("insert into 
			customer(customer_name,customer_email, customer_pass, customer_country, customer_city,
			customer_contact) values('$fullName', '$email', '$password', '$country', 
			'$city', '$contact')");
		}

		function deleteCustomer($id){
			// return true or false
			return $this->query("delete from customer where id = '$id'");
		}

		function updateCustomer($id, $fullName,$email, $password, $country, $city,
			$contact){
			// return true or false
			return $this->query("update customer set customer_name='$fullName', customer_email='$email', customer_pass='$password',
			customer_country='$country', customer_city='$city', customer_contact='$contact'
			 where id = '$id'");
		}

		function viewAllCustomers(){
			// return array or false
			return $this->fetch("select * from customer");
		}
		function viewOneCustomer($email){
			// return associative array or false
			return $this->fetchOne("select * from customer where customer_email='$email'");
		}
	}

?>

            
	