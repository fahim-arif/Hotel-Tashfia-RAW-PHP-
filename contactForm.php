<?php 

  if(isset($_POST['submit']))
  {

    $conn = mysqli_connect('localhost','root','','tashfia');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact_form` 
    (`Name`,`Email`,`Subject`,`Message`) 
    VALUES ('$name','$email','$subject','$message')";

   

     $result = mysqli_query($conn, $sql);

     if($result){
         echo "Good Job";
     }
    }
?>