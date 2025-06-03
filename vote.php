<?php
  include 'verify.php';
  $candidate=$_POST['cad'];
  $sql="update votingcount set Ccount=Ccount+1 where CName='$candidate'";
  $conn->query($sql);
  
  
?>
