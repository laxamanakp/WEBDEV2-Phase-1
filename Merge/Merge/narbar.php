<header class="header">

<?php if(isset($_SESSION['user_name'])) { ?>
   <!-- User is logged in -->
   <div class="header-2">
      <div class="flex">
         <a style="color:black;" href="home.php" class="logo">Cornhub</a>

         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="shop.php">Shop</a>
            <a href="contact.php">Contact</a>
            <a href="orders.php">Orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"><span><?php echo $_SESSION['user_name']; ?></span></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <a href="auth.php?action=logout" class="delete-btn">logout</a>
         </div>
      </div>
   </div>
<?php } else { ?>
   <!-- User is logged out -->
   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <a href="auth.php?action=login">login</a> | <a href="auth.php?action=register">register</a>
      </div>
   </div>
<?php } ?>

</header>
