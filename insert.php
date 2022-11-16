<?php include "./db_connect.php"; ?>

<?php

if(isset($_POST['submit'])){
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $fullname = $_POST['full_name'];
    $designation = $_POST['designation'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $joiningdate = $_POST['joining'];


    if(empty($firstname)){
        $error = "Plz Type First Name";
    }
    else if(empty($lastname)){
        $error = "Plz Type Last Name";
    }else if(empty($fullname)){
        $error = "Plz Type Your Full Name";
    }
    else if(empty($designation)){
        $error = "Plz Type Your Designation";
    }
    else if(empty($email)){
        $error = "Plz Type Email";
    } else if(empty($address)){
        $error = "Plz Type Your Address";
    } else if(empty($joiningdate)){
        $error = "Plz Select Your Joining Date";
    }
    
    else{
            $error = "";
            $conn->query("INSERT INTO `employees_info`( `first_name`, `last_name`,`name`, `designation`, `email`, `address`, `joining_date`) VALUES ('$firstname','$lastname','$fullname','$designation','$email','$address','$joiningdate')");         
             
            $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is created.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
          
            $firstname= "";
            $lastname = "";
            $fullname = "";
            $designation = "";
            $email = "";
            $address = "";
            $joiningdate = "";
        }
    }

   