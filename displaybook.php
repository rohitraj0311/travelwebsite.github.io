<?php
session_start();
//echo "welcome ".$_SESSION['user_name'];


?>




<html>
<head>
    <title>Display Records</title>
    <style>
        body{
            background-color: skyblue;
        }
        table{
            background-color: white;
        }
    
    </style>
    
    </head>
    <body>
    
    


<?php
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

$query  = "select * from book_form where email='$print'";
$data   = mysqli_query($connection , $query);

$total  = mysqli_num_rows($data);




if($total != 0)
{
    ?>
<h2 align="center">Displaying All Records</h2>
<center>
<table border="3" cellspacing="7">
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
            <td><a href='update_book.php?id=$result[id]'>Update</a>
            <a href='delete_book.php?id=$result[id]'>Delete</a></td>
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
        </body>

</html>
