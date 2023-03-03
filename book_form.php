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

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      $request_run = mysqli_query($connection, $request);
    /* <!-- if($request_run)
       {
           //echo"<script>alert('successfull');</script>";
           //echo"<script> document location ='book.php';</script>";
           
           //echo"saved";
           //$_SESSION['success']="Data saved";
           //$_SESSION['status_code']="success";
           header('location: book.php');
       }
       else
       {
          // echo"<script>alert('something is missing');</script>";
           //$_SESSION['status']="Not saved";
          // $_SESSION['status_code']="Error";
           header('location: book.php');
       } */
      header('location:book.php');
   }else{
      echo 'something went wrong please try again!';
   }

?>