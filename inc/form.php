<?php
$firstname =  $_POST["firstname"] ??"";
$lastname =   $_POST["lastname"]??"";
$email =      $_POST["email"]??"";

$errors = [
    "firstnameError" => "",
    "lastnameError" => "",
    "emailError" => "",
];
if (isset($_POST['submit'])){


if(empty($firstname)){
    $errors["firstnameError"] = 'يرجى ادخال الاسم الاول';
}if(empty($lastname)){
    $errors["lastnameError"] = 'يرجى ادخال الاسم الاخير';
    }if(empty($email)){
        $errors["emailError"] = 'يرجى ادخال الايميل';
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors["emailError"] = 'يرجى ادخال ايميل صحيح';
        } 
        
        if(!array_filter($errors)){
            $firstname =  mysqli_real_escape_string($conn, $_POST["firstname"]);
            $lastname =   mysqli_real_escape_string($conn, $_POST["lastname"]);
            $email =      mysqli_real_escape_string($conn,$_POST["email"]);
       
            $sql = " INSERT INTO users(firstname, lastname, email) 
VALUES ('$firstname' , '$lastname', '$email' )";

if(mysqli_query($conn, $sql)){
    header('location: ' . $_SERVER["PHP_SELF"]);
}else{
echo 'Error:' . mysqli_error($conn);

        }
        
        
        

    }
}




