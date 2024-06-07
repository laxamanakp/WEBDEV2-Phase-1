<?php
include 'config.php';
$id=$_GET['update'];
$sql="select * from `users` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$user_name=$row['name'];
$email=$row['email'];
$pass=$row['password'];
$user_type=$row['user_type'];

if(isset($_POST['submit'])){
   $user_name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);
   $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
   
   $sql="UPDATE `users` SET name='$user_name', email='$email', password='$pass',
    user_type = '$user_type' WHERE id='$id'";
   $result=mysqli_query($conn, $sql);

   if($result){
     header('location:admin_users.php');
   }else{
     echo "Error: " . mysqli_error($conn);
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>UPDATE</title>

   <link rel="stylesheet" href="styles.css">

</head>
<body>
<style>
   .form-container {
  width: 500px;
  margin: 0 auto;
  text-align: center;
  padding: 30px;
  border: 1px solid #FFFF00;
  border-radius: 10px;
}

h3 {
  font-size: 30px;
  margin-bottom: 20px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #FFFF00;
  border-radius: 5px;
  font-size: 18px;
}

select {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #FFFF00;
  border-radius: 5px;
  font-size: 18px;
}

button[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #FFFF00;
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: 	#FFFF00;
}

</style>

   
<div class="form-container">

   <form action="" method="post" >
      <h3>UPDATE</h3>
      <input type="text" name="name" placeholder="enter your name" required class="box" value=<?php echo $user_name;?>>
      <input type="email" name="email" placeholder="enter your email" required class="box" value=<?php echo $email;?>>
      <input type="text" name="password" placeholder="enter your password" required class="box" value=<?php echo $pass;?>>
      <select name="user_type" class="box" value=<?php echo $user_type;?>>
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <button type="submit" name="submit" value="register now" class="btn">update</button>
   </form>

</div>

</body>
</html>