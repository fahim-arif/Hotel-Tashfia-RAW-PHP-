<?php 
session_start();
  if(isset($_POST['submit']))
  {

    $conn = mysqli_connect('localhost','root','','tashfia');

    $room_cat = $_SESSION['room'];

    $checkin = $_SESSION['checkins'];
    $checkout = $_SESSION['checkouts'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `rooms` 
    (`room_cat`,`checkin`,`checkout`,`phone`,`name`,`book`) 
    VALUES ('$room_cat','$checkin','$checkout','$phone','$name','Yes')";

  $sql2 = "UPDATE `room_details` SET `available`= `available`-'1',`booked`= `booked`+'1' WHERE `room_name`= '$room_cat';";

     $result = mysqli_query($conn, $sql);

     $result2 = mysqli_query($conn, $sql2);

     if($result){
    echo "<script type='text/javascript'>
                  alert('Congratulaions! Your Booking has been Comfirmed!!');
             </script>";
     }
     echo "<a href= 'http://localhost:8080/tashfia/index.php')> Go back To home Page</a>";
    }
