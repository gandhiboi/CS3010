<?php

$username = $password = $verifyPassword = $fname = $lname = $address1 = $address2 = $city = $state = $zipcode = $phonenum = $email = $gender = $maritalstatus = $dob = "";
$usernameError = $passwordError = $verifyPasswordError = $fnameError = $lnameError = $address1Error = $address2Error = $cityError = $stateError = $zipcodeError = $phonenumError = $emailError = $genderError = $maritalstatusError = $dobError = "";
$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $isValid = true;

    $username = clean_input($_POST["username"]);
    if(empty($username)) {
        $usernameError = "Required";
        $isValid = false;
    } else {
        if (strlen($username) < 6) {
            $usernameError = "Minimum length is 6";
            $isValid = false;
        } elseif (strlen($username) > 50) {
            $usernameError = "Maximum length is 50";
            $isValid = false;
        }
    }

    $password = clean_input($_POST["password"]);
    if(empty($password)) {
        $passwordError = "Required";
        $isValid = false;
    } else {
        if(strlen($password) < 8) {
            $passwordError = "Minimum length is 8";
            $isValid = false;
        } elseif(strlen($password) > 50) {
            $passwordError = "Maximum length is 50";
            $isValid = false;
        } elseif(!preg_match("/[a-z]/", $password)) {
            $passwordError = "At least one lowercase letter";
            $isValid = false;
        } elseif(!preg_match("/[A-Z]/", $password)) {
            $passwordError = "At least one uppercase letter";
            $isValid = false;
        } elseif(!preg_match("/[0-9]/", $password)) {
            $passwordError = "At least one number";
            $isValid = false;
        } elseif(!preg_match("/[^a-zA-Z0-9]/", $password)) {
            $passwordError = "At least one special character";
            $isValid = false;
        }
    }

    $verifyPassword = clean_input($_POST["verifyPassword"]);
    if(empty($verifyPassword)) {
        $verifyPasswordError = "Required";
        $isValid = false;
    } else {
        if(strlen($password) < 8) {
            $verifyPasswordError = "Minimum length is 8";
            $isValid = false;
        } elseif(strlen($password) > 50) {
            $verifyPasswordError = "Maximum length is 50";
            $isValid = false;
        } elseif(!preg_match("/[a-z]/", $password)) {
            $verifyPasswordError = "At least one lowercase letter";
            $isValid = false;
        } elseif(!preg_match("/[A-Z]/", $password)) {
            $verifyPasswordError = "At least one uppercase letter";
            $isValid = false;
        } elseif(!preg_match("/[0-9]/", $password)) {
            $verifyPasswordError = "At least one number";
            $isValid = false;
        } elseif(!preg_match("/[^a-zA-Z0-9]/", $password)) {
            $verifyPasswordError = "At least one special character";
            $isValid = false;
        } elseif(strcmp($verifyPassword, $password)) {
            $verifyPasswordError = "Passwords do not match";
            $isValid = false;
        }
    }

    $fname = clean_input($_POST["fname"]);
    if(empty($fname)) {
        $fnameError = "Required";
        $isValid = false;
    } else {
        if(strlen($fname) > 50) {
            $fnameError = "Maximum length is 50";
            $isValid = false;
        }
    }

    $lname = clean_input($_POST["lname"]);
    if(empty($lname)) {
        $lnameError = "Required";
        $isValid = false;
    } else {
        if(strlen($lname) > 50) {
            $lnameError = "Maximum length is 50";
            $isValid = false;
        }
    }

    $address1 = clean_input($_POST["address1"]);
    if(empty($address1)) {
        $address1Error = "Required";
        $isValid = false;
    } else {
        if(strlen($address1) > 100) {
            $address1Error = "Maximum length is 100";
            $isValid = false;
        }
    }

    $address2 = clean_input($_POST["address2"]);
    if(!empty($address2)) {
        if(strlen($address2) > 100) {
            $address2Error = "Maximum length is 100";
            $isValid = false;
        }
    }

    $city = clean_input($_POST["city"]);
    if(empty($city)) {
        $cityError = "Required";
        $isValid = false;
    } else {
        if(strlen($city) > 50) {
            $cityError = "Maximum length is 50";
            $isValid = false;
        }
    }

    $state = clean_input($_POST["state"]);
    if(empty($state)) {
        $stateError = "Required";
        $isValid = false;
    } else {
        if(strlen($state) > 52) {
            $stateError = "Maximum length is 52";
            $isValid = false;
        }
    }

    $zipcode = clean_input($_POST["zipcode"]);
    if(empty($zipcode)) {
        $zipcodeError = "Required";
        $isValid = false;
    } else {
        if(strlen($zipcode) < 5) {
            $zipcodeError = "Minimum length is 5";
            $isValid = false;
        } elseif(strlen($zipcode) > 10) {
            $zipcodeError = "Maximum length is 10";
            $isValid = false;
        } elseif(!preg_match("/^[0-9]{5}$/", $zipcode) AND !preg_match("/^[0-9]{5}-[0-9]{4}$/", $zipcode)) {
            $zipcodeError = "Format: xxxxx or xxxxx-xxxx";
            $isValid = false;
        }
    }

    $phonenum = clean_input($_POST["phonenum"]);
    if(empty($phonenum)) {
        $phonenumError = "Required";
        $isValid = false;
    } else {
        if(strlen($phonenum) > 12) {
            $phonenumError = "Maximum length is 12";
            $isValid = false;
        } elseif(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phonenum)) {
            $phonenumError = "Format: xxx-xxx-xxxx";
            $isValid = false;
        }
    }

    $email = clean_input($_POST["email"]);
    if(empty($email)) {
        $emailError = "Required";
        $isValid = false;
    } else {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError  = "Format: x@x.x";
            $isValid = false;
        }
    }

    if(isset($_POST["gender"])) {
        $gender = clean_input($_POST["gender"]);
        if(empty($_POST["gender"])) {
            $genderError = "Required";
            $isValid = false;
        }
    } else {
        $genderError = "Required";
        $isValid = false;
    }

    if(isset($_POST["maritalstatus"])) {
        $maritalstatus = clean_input($_POST["maritalstatus"]);
        if(empty($_POST["maritalstatus"])) {
            $maritalstatusError = "Required";
            $isValid = false;
        }
    } else {
        $maritalstatusError = "Required";
        $isValid = false;
    }

    $dob = clean_input($_POST["dob"]);
    if($dob == "" OR $dob == null) {
        $dobError = "Required";
        $isValid = false;
    } else {
        if(!preg_match("^((0|1)\d{1})\/((0|1|2)\d{1})\/((19|20)\d{2})^", $dob)) {
            $dobError = "Format: MM/DD/YYYY";
            $isValid = false;
        }
    }
}

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}





