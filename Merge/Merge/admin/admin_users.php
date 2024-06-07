<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:index.php');
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `users` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_users.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>users</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="css/admin_style.css">
   <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box-1">
         <a href="logout.php" class="delete-btn">logout</a>
         <div>new <a href="login.php">login</a> | <a href="register.php">register</a></div>
      </div>
</head>
<body>
<?php include 'admin_header.php'; ?>

   <style>
      .account-box-1 {
    margin-left: 93%;
}
      .flex {
         background-attachment: fixed;
}
      span{
         color: black;
      }
   </style>
<section class="users">
<table class="table">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Add
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <?php include 'add_db.php' ?>
      </div>
    </div>
  </div>
</div>
  <thead>
    <tr class="text-center table-dark">
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">User type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
         $select_users = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
         while($fetch_users = mysqli_fetch_assoc($select_users)){
      ?>
  <tbody class="text-center">
    <tr>
      <td><span><?php echo $fetch_users['name']; ?></span></td>
      <td class="table-secondary"><span><?php echo $fetch_users['email']; ?></td>
      <td><span><?php echo $fetch_users['password']; ?></td>
      <td class="table-secondary"><span><span style="color:<?php if($fetch_users['user_type'] == 'admin'){ echo 'var(--orange)'; } ?>"><?php echo $fetch_users['user_type']; ?></span>
      <td><button><a class="fs-3 btn btn-secondary" href="update.php?update=<?php echo $fetch_users['id']; ?>" class="update-btn">update</a></button>
         <button><a class="fs-3 btn btn-danger" href="admin_users.php?delete=<?php echo $fetch_users['id']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">delete</a></button></td>
   </tr>
  </tbody>
  <?php
         };
      ?>
</table>
</section>



<script src="js/admin_script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>