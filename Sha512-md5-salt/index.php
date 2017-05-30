
<form class="" action="index.php" method="post">
  <input type="text" name="password" value="" placeholder="Contraseña" autofocus required>
  <button type="submit" name="button">Enviar</button>
</form>

<?php

if(isset($_POST["password"])){
  $salt = substr(str_replace('+','.',base64_encode(md5(mt_rand(), true))),0,16);
  $rounds = 10000;

  $password = crypt($_POST["password"], sprintf('$5$rounds=%d$%s$', $rounds, $salt));
  echo 'Pass to Hash: ' . $_POST["password"] . '<br>';
  echo $password;
}

 ?>
