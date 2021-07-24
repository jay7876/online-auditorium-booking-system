<?php
if(!session_id()){
  session_start();
}

if(isset($_SESSION['user_data']) && !empty($_SESSION['user_data'])){
  header('Location: hall.php');
  exit; 
  }

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $login=false;
    $showAlert=false;
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
  
      $sql = "select * from users where user_name = '".$username."' AND password = '".md5($password)."' ";
    $result = mysqli_query($mysqli,$sql);

    $row = $result->fetch_array(MYSQLI_ASSOC);

   
    $user_id = $row['sr_no'];
    $_SESSION['user_data'] = $user_id; 
    header('Location: hall.php');    

    }
    else{
    $showError="invalid Credentials";
    
  }
?>

<!doctype html>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>login</title>
  </head>
  <body><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="hall.php">
          Auditorium-Booking-website </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </li>   </li>    <li class="nav-item">
         <a class="nav-link active" href="gallery.php"> GALLERY </a>
     </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php"> Login </a>
          
            <li class="nav-item">
              <a class="nav-link active" href="signup.php"> <font color=red>signup</font></a>
         
            <li class="nav-item">
         <a class="nav-link active" href="About.php"> About  </a>
     </li>
     <li class="nav-item"> 
         <a class="nav-link active" href="cancel.php"> Logout  </a>
     </li>
       </ul>
 </li>
            
</ul>
 </div>
</div>
    </nav>
   
<div class="contanor my-4">
<h1 class=text-center> Login</h1>
<form action="login.php" method="post"> 
 <center> <div class="form-group col-md-6">
    <label for="user name" class="form-label">User name</label>
    <input type="text" class="form-control" id="username" name="username" >
  
  </div>
  <div class="form-group col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="password">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Login</button> </center> 
</form>





</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>