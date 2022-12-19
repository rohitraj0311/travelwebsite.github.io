<?php

//$id=$_GET['id'];
session_start();
$connection=mysqli_connect('localhost','root','','book_db');

$print=$_SESSION['user_name'];
$query  = "select * from user where email='$print'";
$data   = mysqli_query($connection , $query);

//$total  = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Travelscape</a>

   <nav class="navbar">
       <a href="logout.php">Logout</a>
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">
    <a href="profile.php" class="btn">Back</a>

   <h1 class="heading-title">Update Profile</h1>

   <form action="#" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" value="<?php echo $result['name']  ?>" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" value="<?php echo $result['email'] ?>" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" value="<?php echo $result['phone'] ?>" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" value="<?php echo $result['address'] ?>" name="address">
         </div>
         <div class="inputBox">
            <span>Password :</span>
            <input type="password" value="<?php echo $result['password'] ?>" name="location">
         </div>
         <div class="inputBox">
            <span>Confirm Password :</span>
            <input type="password" value="<?php echo $result['cpassword'] ?>" name="guests">
         </div>
        
      </div>

      <input type="submit" value="Update" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="login.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> random@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Delhi, india - 201301 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

<!-- server side code -->

<?php
$connection=mysqli_connect('localhost','root','','book_db');


if(isset($_POST['send']))
{
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $add   = $_POST['address'];
    $pwd   = $_POST['location'];
    $cpwd  = $_POST['guests'];
    
    $query = "update user set name='$name',email='$email',phone='$phone',address='$add',password='$pwd',cpassword='$cpwd' where email='$print'";
    $data=mysqli_query($connection, $query);
    if($data)
    {
        echo"Data Inserted";
    }
    else
    {
        echo"failed to send data";
    }
    
   
}


?>