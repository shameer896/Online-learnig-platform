<?php

include "db.php";
 $user=$_POST['user'];
 $pass=$_POST['password'];



$q1 = "select * from credentials where username = '$user' and password = '$pass'";
$result = mysqli_query($c,$q1);

if(mysqli_num_rows($result)==1)
{
    header("Location: afterlogin.html");
    exit();
}
else
{
    header("Location: login.php?error=Invalid user name or password or try signup");
    exit();
}


// $a= mysqli_fetch_assoc($result);

// echo $a['id'];
// echo $a['password'];


?>