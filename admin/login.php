<?php 
session_start();
if(isset($_POST['login'])){
    if($_POST['username'] == "admin" && $_POST['password']=="123456"){
        $_SESSION['user'] = "admin";
        header("location:index.php");
    }
}
?>

<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Login Amin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="shortcut icon" href="favicon.webp" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">
<div class="login-page">
  <div class="form">
    <form action="login.php" method="post">
      <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
      <input type="text" placeholder="&#xf007;  username" name = "username"/>
      <input type="password" id="password" placeholder="&#xf023;  password" name="password"/>
      <i class="fas fa-eye" onclick="show()"></i> 
      <br>
      <br>
      <button type="submit" name="login">LOGIN</button>
      <p class="message"></p>
    </form>
  </div>
</div>
  <script>
    function show(){
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")

      // ========== Checking type of password ===========
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };
  </script>
</body>
</html>