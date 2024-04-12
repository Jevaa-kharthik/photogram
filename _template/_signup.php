<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$signing = false;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (
        isset($_POST['Username']) &&
        isset($_POST['Email_Address']) &&
        isset($_POST['Password']) &&
        isset($_POST['Phonenumber']) &&
        isset($_POST['dob'])
    ) {
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $email = $_POST['Email_Address'];
        $phonenumber = $_POST['Phonenumber'];
        $dob = $_POST['dob'];
        $error = signup($username, $password, $email, $phonenumber, $dob);
        $signing = true;
    }
}

if ($signing) {
    if (!$error) {
        ?>
        <main class="container">
            <div class="bg-body-tertiary p-5 rounded mt-3">
                <h1>Login Successfully</h1>
                <p class="lead">Redirecting to login page...<a href="Photogram/login.php"></a></p>
            </div>
        </main>
        <?php
    } else {
        ?>
        <main class="container">
            <div class="bg-body-tertiary p-5 rounded mt-3">
                <h1>Login Unsuccessfully</h1>
                <p class="lead">Something went wrong</p>
            </div>
        </main>
        <?php
    }
} else {
    ?>
    <main class="form-signup w-100 m-auto">
        <form method="post" action="signup.php">
            <img class="mb-4" src="#" alt="" width="72" height="57">
    
            <h1 class="h3 mb-3 fw-normal" style="text-align: center; font-family: 'Courier New', Courier, monospace;">SignUp</h1>
    
            <div class="form-floating" style="font-family: 'Courier New', Courier, monospace;">
                <input name="Username" type="text" class="form-control" id="floatingInputUsername" placeholder="username">
                <label for="floatingInputUsername">Username</label>
            </div>
            <div class="form-floating" style="font-family: 'Courier New', Courier, monospace;">
                <input name="Email_Address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating" style="font-family: 'Courier New', Courier, monospace;">
                <input name="Password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating" style="font-family: 'Courier New', Courier, monospace;">
                <input name="Phonenumber" type="text" class="form-control" id="floatingInputUsername" placeholder="username">
                <label for="floatingInputUsername">Phone Number</label>
            </div>
            <div class="form-floating" style="font-family: 'Courier New', Courier, monospace;">
                <input name="dob" type="date" class="form-control" id="floatingInputUsername" placeholder="username">
                <label for="floatingInputUsername">Date of Birth</label>
            </div>
            <br>
            <button class="btn btn-primary w-100 py-2 hvr-grow" type="submit" style="font-family: 'Courier New', Courier, monospace;">Sign Up</button>
        </form>
    </main>
    <?php
}
?>