<!DOCTYPE html>
<html>
<head>
<title>Login & Registration Form</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <form action="s.php" method="post" class="form sign-in">
      <h2>Sign In</h2>
      <?php 
                  if(isset($_GET['error']))
                  {
                    $error=$_GET['error'];
                    echo "<p class='error'>$error</p>";
                  }
                  ?>
      <label>
        <span>User Name</span>
        <input type="" name="user" required>
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" required>
      </label>
      <button class="submit" type="submit">Sign In</button>
     

     
    </form>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h1>New here?</h1>
          <p>sign up and discover</p>
        </div>
        <div class="img-text m-in">
          <h1>One of us?</h1>
          <p>just sign in</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
        <form action="s1.php" method="post" class="form sign-up">
        <h2>Sign Up</h2>
        <?php 
                  if(isset($_GET['error']))
                  {
                    $error=$_GET['error'];
                    echo "<p class='error'>$error</p>";
                  }
                  ?>
        <label>
          <span>User Name</span>
          <input type="text" name="user" required>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password" required> 
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password"  name="cpassword">
        </label>
        <button type="submit" class="submit">Sign Up Now</button>
      </form>
    </div>
  </div>
<script type="text/javascript" src="script.js"></script>
<?php

    session_start();
    $_SESSION['id']=1;

?>
</body>
</html>
