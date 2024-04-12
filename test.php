<pre>
<?php
include("libs/load.php");
// print_r($_SERVER);
// echo "GET\n";
// print_r($_GET);
// echo "POST\n";
// print_r($_POST);
// echo "COOKIE\n";
// print_r($_COOKIE);
echo "test.php";

if(signup("jevaa@123.com","12121212","jevaa","1231231231","2003-01-01")){
    echo "Success";
}
else{
    echo "fail";
}

?>
</pre>

