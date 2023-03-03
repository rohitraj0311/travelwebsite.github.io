<?php
$connection = mysqli_connect('localhost','root','','book_db');

$id = $_GET['id'];

$query = "delete from book_form where id='$id'";
$query_run = mysqli_query($connection , $query);
if($query_run)
{
    echo "<script>alert('updated successfully')</script>";
    ?>
    <meta http-equiv="refresh" content="0; url =http://localhost/travel%20website/displaybook.php";>

    <?php
}
else
{
    echo"failed to update";
}

?>