<?php

include('libs/load.php');
$email = $_POST['Email_Address'];
$password = $_POST['Password'];

$result = login_check($email, $password);

if($result == true){
    header("Location: index.php");
    exit();
  }
else{
?>
<br>
<br>
<br>
<main class="form-signin w-100 m-auto">
  <form method="post" action="login.php">
    <img class="mb-4" src="#" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal" style="font-family: 'Courier New', Courier, monospace;">Please sign in</h1>

    <div class="form-floating" style="font-family: 'Courier New', Courier, monospace;">
      <input name="Email_Address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating" style="font-family: 'Courier New', Courier, monospace;">
      <input name="Password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <a href="index.php">
    <button class="btn btn-primary w-100 py-2 hvr-bounce-in" type="submit" style="font-family: 'Courier New', Courier, monospace;">
    Login
    </button>
    </a>
  </form>
</main>
<?
}
?>