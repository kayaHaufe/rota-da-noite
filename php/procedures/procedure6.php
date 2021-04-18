<?php include_once '../db/conection.php'; ?>
<?php

$nivel_senha = $_POST['nivel_senha'];
	
 $result = mysqli_query($link, 
             "CALL senha('$nivel_senha');") or die("Erro na query da procedure: " . mysqli_error());

          //lista os resultados
          while ($row = mysqli_fetch_array($result)) {   
              echo  $row[0] . "<br>\n";
                       // $row[1] . "<br>\n" 
                }
?>