<?php
  $local=$_SERVER['HTTP_HOST'];
  if($local=='localhost'){
    $con= new mysqli('localhost','root','','certificado');
  } else {
    $con= new mysqli('108.179.192.85','avisnetc_cpr','95874MySQL','avisnetc_cpr');
  }

  if (!$con) {
     die(mysqli_error($con));
  } 
?>