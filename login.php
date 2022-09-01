<?php session_start(); /* Starts the session */
        
        /* Check Login form submitted */        
        if(isset($_POST['Submit'])){
                /* Define username and associated password array */
                $logins = array('Djoko' => '123','username1' => 'password1','username2' => 'password2');
                
                /* Check and assign submitted Username and Password to new variable */
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                
                /* Check Username and Password existence in defined array */            
                if (isset($logins[$Username]) && $logins[$Username] == $Password){
                        /* Success: Set session variables and redirect to Protected page  */
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location:index.php");
                        exit;
                } else {
                        /*Unsuccessful attempt: Set error message */
                        $msg="<span style='title'>Invalid Login Details</span>";
                }
        }
        if(isset($_SESSION['UserData']['Username'])){
          header("location:index.php");
          exit;
  }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Ngentod gatau pusing</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="CSS/style.css">

</head>
<body>
  <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
  </div>
  <form action="" method="post">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" name="Username" id="Username"placeholder="Username">
      </div>
      <div class="input-field">
        <input type="password" name="Password" id="Password" placeholder="Password">
      </div>
    </div>
    <div class="action">
      <button type="Submit" name="Submit">Sign in</button>
    </div>
  </form>
</div>
</body>
</html>