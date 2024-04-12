<?php


function load_template($name){
    include __DIR__."/../_template/$name.php";
}

function validate_crendiatials($email, $password){
    if($email == "jevaasureka@gmail.com" && $password == "12345"){
        return true;
    }
    else{
        return false;;
    }

}

function signup( $email, $password, $username , $phone, $dob){

    $servername = "mysql.selfmade.ninja";
    $dbusername = "Jevaa_kharthik_n";
    $dbpassword = "jevaa@iitm";
    $dbname = "Jevaa_kharthik_n_NewDB";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `Authentication` (`username`, `email`, `password`, `phone`, `DOB`, `Blocked`, `active`)
    VALUES ('$username', '$email', '$password', '$phone', '$dob', '0', '1');";
    $error = false;
    if ($conn->query($sql) === true && error_reporting(0)) {
        $error = false;
    } elseif($conn->query($sql) === false){
        // echo "Error: " . $sql . "<br>" . $conn->error;
        $error = $conn->error;
    }

    $conn->close();
    return $error;
}

function login_check($email, $password){
    $access = false;
    if($_POST['Email_Address'] == $email){
        if($_POST['Password'] == $password){
            $access = true;
        }
    }
    return $access;
}
