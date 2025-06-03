<?php
  include 'verify.php';
  
  
  $gmail=trim($_POST['mail']);
  
  $sql="select * from Details where Gmail='$gmail'";
 
$stmt = $conn->query($sql);
  
  if($stmt->num_rows>0){
   echo "<script>let generate = Math.floor(100000 + Math.random() * 900000);
        alert('Your OTP is: ' + generate);window.location.href='Generateopt.html'</script>";
    
  }else{
    echo "<script>alert('Incorrect Email');window.location.href='Login.html'</script>";
  }
  

?>




