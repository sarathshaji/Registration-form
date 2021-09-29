
<?php
include("dbconnection.php");
global $connection;
if( isset($_POST['insertLogin']))
{
$userName = $_POST['userName'];
$password = $_POST['password'];

}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Document</title>

    <style>
      #mainDiv
      {
        margin-top: 2em;
        display: flex;
        justify-content: center;
      }
      </style>
      </head>

</head>
<body>
   
  <h1 class="text-center"><u>Login Form</u></h1>
  <div class="container" id="mainDiv">
    

        <form method="post">

            <div class="mb-3" >
            <label for="user" class="form-label">Username</label>
            <input type=text class="form-label" name="userName" id="user" >
         </div>
    

              
            <div  class="mb-3">
              <label for="exampleInputPassword3" class="form-label">Password</label>
              <input type="text" name="password"  id="exampleInputPassword3">
            </div>
    
           
            <button type="submit" name="insertLogin" class="btn btn-secondary">Login</button>
          </form>
    </div>

    
    
</body>
</html>