<?php
require 'config/function.php';

if(isset($_POST['signUp']))
 {
   $name = validate($_POST["name"]);
   $stId = validate($_POST["stId"]);
   $phone = validate($_POST["phone"]);
   $email= validate($_POST["email"]);
   $password = validate($_POST["password"]);
   $rigYear = validate($_POST["rigYear"]);

   $is_ban = 0;
   $role = 'user';
   
   if($name != ''|| $stid != '' || $phone != '' || $email != '' || $password != '' || $rigYear != '')
   {
      
    $query1="INSERT INTO students (name,stid,phone,email,password,rigYear) 
    VALUES ('$name','$stId','$phone','$email','$password','$rigYear')";

      $query="INSERT INTO users (name,phone,email,password,is_ban,role) 
      VALUES ('$name','$phone','$email','$password','$is_ban','$role')";
      $result = mysqli_query($conn,$query);
      $result = mysqli_query($conn,$query1);
      if($result)
      {
        redirect('sgin-up.php','accoun succesfuly Added');
      }else
      {
        redirect('sgin-up.php','Soryy!! Somethings went wrong!');
      }
   }else
   {
     redirect('sgin-up.php','please fill all input fields ');
   }

 }


?>