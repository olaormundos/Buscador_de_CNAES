<?php

        //session_start();
        //var_dump($_SESSION);
        //$principal = $_SESSION;
        //var_dump($principal);
        // Initializing curl
        //foreach ($principal as $value) {
            //echo "$value";
          //  $cod  = $value;
        //}
          //echo "$cod";

$codigo = $cod;
$username = 'root';
$password = '';

try {
  $conn = new PDO('mysql:host=localhost;dbname=tabela_cnaes', $username, $password);
  $stmt = $conn->prepare('SELECT * FROM dados WHERE codigo = :codigo');
  $stmt->execute(array('codigo' => $codigo));

  $result = $stmt->fetchAll();

  if ( count($result) ) {
    foreach($result as $row) {
      //print_r($row);
      $bc  = $row;
    }
  } else {
    echo "Nennhum resultado retornado.";
  }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

 ?>
 