<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, ($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, ($_POST['cpassword']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:admin_users.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>
   
  

</head>
<body>


   <style>
    .form-container {
  width: 500px;
  margin: 0 auto;
  padding: 20px;
  text-align: center;
}

.form-group {
  margin-bottom: 20px;
}

.form-control {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #FFFFE0;
}

.btn-primary {
  background-color: blue;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  cursor: pointer;
}

.text-center {
  text-align: center;
}
select.form-control {
    width: 13%;
}
   </style>
   
<div class="form-container">

<form action="" method="post" class="form-group">
   <h3 class="text-center">ADD</h3>
   <div class="form-group">
      <input type="text" name="name" placeholder="enter your name"  class="form-control"  required>
   </div>
   <div class="form-group">
      <input type="email" name="email" placeholder="enter your email"  class="form-control"  required>
   </div>
   <div class="form-group">
      <input type="password" name="password" placeholder="enter your password"  class="form-control"  required>
   </div>
   <div class="form-group">
      <input type="password" name="cpassword" placeholder="confirm your password"  class="form-control"  required>
   </div>
   <div class="form-group">
      <select name="user_type" class="form-control">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
   </div>
   <div class="form-group text-center">
      <input type="submit" name="submit" value="ADD" class="btn btn-primary">
   </div>
</form>

</div>



</body>
</html>