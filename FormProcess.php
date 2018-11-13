<?php 
$firstname = $_POST['firstname'];
$lastname=  $_POST['lastname'];
$email = $_POST['email']; 
$password= $_POST['password'];
$phonenumber= $_POST['phonenumber'];
$gender=$_POST['gender'];
$country=$_POST ['country'];
saveToDatabase($firstname, $lastname, $email, $password, $phonenumber, $gender, $country);
header('Location:FormSuccess.html');
function saveToDatabase($firstname, $lastname, $email, $password, $phonenumber, $gender, $country) {  
     $serverName = "localhost";  
      $database = "form_quiz"; 
        $username = "root";   
        $password = "";
 $conn = mysqli_connect($serverName, $username, $password, $database);
 if (!$conn) {      
      die("Connection failed: " . mysqli_connect_error());   
    }     $sql = "INSERT INTO clients (firstname,lastname, email, password, phonenumber, gender, country, created_date)   
        VALUES ('$firstname','$lastname','$email','$password', '$phonenumber','$gender', ' $country', NOW())";  
         $result = mysqli_query($conn, $sql);
 if (!$result) {       
     die("Error: " . $sql . "<br>" . mysqli_error($conn)); 
      }   
       mysqli_close($conn);
     }
?>
