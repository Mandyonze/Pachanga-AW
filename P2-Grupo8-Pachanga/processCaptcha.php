<?php
  $recaptcha = $_POST['g-recaptcha-response'];

  if($recaptcha != ''){
    $secret = "6LdLhxsUAAAAAKDNOSH1Z48IHkQsVvmD57CHy9-9";
    $ip = $_SERVER['REMOTE_ADDR'];
    $var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
    $array = json_decode($var, true);
    if($array['success']){
      echo "Verified";
    }
    else {
      echo "Not verified";
    }
  }
  else {
    echo "<script javascript>window.location='login.html'</script>";
  }
?>
