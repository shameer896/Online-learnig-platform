<?php

include "db.php";
 $user=$_POST['user'];
 $pass=$_POST['password'];

 $q1 = "select * from credentials where username = '$user' and password = '$pass'";
 $result = mysqli_query($c,$q1);

 if(mysqli_num_rows($result)==1)
{
    header("Location: index.php?error=Account already available try sign in");
    exit();
}
else if(mysqli_num_rows($result)==0)
{
    session_start();
    $_SESSION['id']+=1;
    $id=$_SESSION['id'];
    $q2="insert into credentials values('$id','$user','$pass','n')";
    if(mysqli_query($c,$q2))
    {
        header("Location: login.php?error=Account created successfully try sign in");
        exit();
    }
    else
    {
        echo "kureghwreivbhsidug";
    }
}

?>