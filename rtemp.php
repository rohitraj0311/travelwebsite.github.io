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
    <style>
        body{
            background-color: skyblue;
            font-size : 18px;
        }
        table{
            background-color: white;
        }
        table, th, td {
  border: 1px solid;
}
        table
        {
            border-collapse: collapse;
            width : 100%;
            
        }
        th{
            height: 50px;
        }
        th,td
        {
            padding: 10px;
        }
    
    </style>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">TravelScape</a>

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

<section >

   <h1 class="heading-title">All Bookings</h1>
    

   <form action="book_form.php" method="post" class="book-form">

      <div class="">
          <?php
          session_start();
$connection = mysqli_connect('localhost','root','','book_db');
error_reporting(0);
        $print = $_SESSION['user_name'];
        //echo"$print";
        if($print==true)
        {
            
        }
        else
        {
            header('location:login.php');
        }

$query  = "select * from book_form";
$data   = mysqli_query($connection , $query);

$total  = mysqli_num_rows($data);




if($total != 0)
{
    ?>

<center>
<table border="3px" cellspacing="7" >
    <tr>
        <th width="5">Id</th>
        <th width="10%">Name</th>
        <th width="15%">Email</th>
        <th width="10%">Phone</th>
        <th width="15%">Address</th>
        <th width="10%">Location</th>
        <th width="5%">Guests</th>
        <th width="10%">Arrivals</th>
        <th width="10%">Leaving</th>
        <th width="10%">Operation</th>
    
    </tr>




<?php
    //$a=1;
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
            <td>".$result[id]."</td>
            <td>".$result[name]."</td>
            <td>".$result[email]."</td>
            <td>".$result[phone]."</td>
            <td>".$result[address]."</td>
            <td>".$result[location]."</td>
            <td>".$result[guests]."</td>
            <td>".$result[arrivals]."</td>
            <td>".$result[leaving]."</td>
            <td><a href='update_book.php?id=$result[id]' class='btn'>Update</a>
            <a href='delete_book.php?id=$result[id]' class='btn'>Delete </a></td>
        </tr>";
        //echo $result[name]." ".$result[email]." ".$result[phone]." ".$result[address]." ".$result[location]." ".$result[guests]." ".$result[arrivals]." ".$result[leaving]."<br>";
    }
    //echo"Table has records";
}
else
{
    echo"No records";
}


?>
    
    </table></center>

         
      </div>

      
       

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
         <a href="#"> <i class="fas fa-envelope"></i> Random@gmail.com </a>
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

</body>
</html>