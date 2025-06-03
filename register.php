<?php
  $conn=new mysqli('127.0.0.1','root','kalyani','Voting');
  if(!$conn){
    echo "not connected";
  }
  
  $name=$_POST['name'];
  
  $Fname=$_POST['fname'];
  $dob=$_POST['dob'];
  $Aadhaar=$_POST['aadhar'];
  $phone=$_POST['phone'];
  $mail=$_POST['mail'];
  $occupation=$_POST['occu'];
  $address=$_POST['add'];
  $sql="insert into Details values('$name','$Fname','$dob','$Aadhaar','$phone','$mail','$occupation','$address')";
  if ($conn->query($sql)) {
        echo "Successfully inserted!";
    }
  
  
?>



