<?php
  $mysql = new mysqli('210.114.6.140','ukhyun2402','dnr68425','ukhyun2402');

  $sql = "SELECT EMAIL,PASSWORD FROM USER WHERE EMAIL = ?";
  $stmt = $mysql->prepare($sql);
  $email ="hyun4911@gmail.com";
  $stmt->bind_param("s",$email);

  $stmt->execute();
  $stmt->bind_result($db_email, $db_password);
  
  while($stmt->fetch()){
    printf("%s %s\n",$db_email,$db_password);
    if(password_verify("hyun@1051..",$db_password)){
      printf("1");
    }
  }
  $stmt->close();