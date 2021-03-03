<?php

  session_start();
  if (isset($_SESSION['loginn'])) {
    $user = $_SESSION['loginn'];
    
  } else{
    session_destroy();
    header("location: ../index.php?msg=Voce foi Expulso");
  }

?>