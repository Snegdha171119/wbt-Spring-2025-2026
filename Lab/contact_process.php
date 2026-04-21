<?php

$firstnameErr = $lastnameErr = $genderErr = $emailErr = $companyErr = $reasonErr  = $consultationDateErr = "";

$firstname = $lastname = $gender = $email = $company = $reason_of_contact = $consultation_date = "";


 
function cleanInput($data) {

    return htmlspecialchars(stripslashes(trim($data)));

}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    if (empty($_POST["firstname"])) {

        $firstnameErr = "First name is required";

    } else {

        $firstname = cleanInput($_POST["firstname"]);

        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {

            $firstnameErr = "Only letters and white space allowed";

        }

    }
 
    if (empty($_POST["lastname"])) {

        $lastnameErr = "Last name is required";

    } else {

        $lastname = cleanInput($_POST["lastname"]);

        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {

            $lastnameErr = "Only letters and white space allowed";

        }

    }
 
    if (empty($_POST["gender"])) {

        $genderErr = "Gender is required";

    } else {

        $gender = cleanInput($_POST["gender"]);

    }
 
    if (empty($_POST["email"])) {

        $emailErr = "Email is required";

    } else {

        $email = cleanInput($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $emailErr = "Invalid email format";

        }

    }
 
    if (empty($_POST["company"])) {

        $companyErr = "Company is required";

    } else {

        $company = cleanInput($_POST["company"]);

        if (!preg_match("/^[a-zA-Z0-9 .,&'-]*$/", $company)) {

            $companyErr = "Invalid company name";

        }

    }
 
    if (empty($_POST["reason_of_contact"])) {

        $reasonErr = "Reason of contact is required";

    } else {

        $reason_of_contact = cleanInput($_POST["reason_of_contact"]);

    }
 
    
 
    if (empty($_POST["consultation_date"])) {

        $consultationDateErr = "Consultation date is required";

    } else {

        $consultation_date = cleanInput($_POST["consultation_date"]);

    }

}

?>
 