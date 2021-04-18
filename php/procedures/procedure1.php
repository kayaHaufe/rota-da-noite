<?php include_once '../db/conection.php'; ?>
<?php

$bairro = $_POST['bairro'];
	
 $result = mysqli_query($link, 
             "CALL desconto_bairro('$bairro');") or die("Erro na query da procedure: " . mysqli_error());

          //lista os resultados
          while ($row = mysqli_fetch_array($result)) {   
              echo  $row[0] . "<br>\n";
                       // $row[1] . "<br>\n" 
                }
?>