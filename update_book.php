<?php
$connection=mysqli_connect('localhost','root','','book_db');
$id=$_GET['id'];

$query  = "select * from book_form where id='$id'";
$data   = mysqli_query($connection , $query);

$total  = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
       <a href="login.php">Login</a>
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Updation Form</h1>

   <form action="#" method="post" class="book-form">

      <div class="flex">
           <div class="inputBox">
            <span>name :</span>
            <input type="text" value="<?php echo $result['name'] ?>" name="name" id="name" required>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" value="<?php echo $result['email'] ?>" name="email" required>
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" value="<?php echo $result['phone'] ?>" name="phone" required>
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" value="<?php echo $result['address'] ?>" name="address" required>
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" value="<?php echo $result['location'] ?>" name="location" required>
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" value="<?php echo $result['guests'] ?>" name="guests" required>
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals" required value="<?php echo $result['arrivals'] ?>">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" required value="<?php echo $result['leaving'] ?>">
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
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
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

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      //$request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
       $request = "update book_form set name='$name',email='$email',phone='$phone',address='$address',location='$location',guests='$guests',arrivals='$arrivals',leaving='$leaving' where id='$id'";
      $request_run = mysqli_query($connection, $request);
       if($request_run)
       {
           echo "<script>alert('updated successfully')</script>";
       }
       else
       {
           echo "failed to update";
       }
   
     // header('location:update_book.php');
   }

?>