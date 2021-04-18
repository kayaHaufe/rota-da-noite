<?php include_once '../db/conection.php'; ?>
<?php

$segmento = $_POST['segmento2'];
	
 $result = mysqli_query($link, 
             "CALL dica_bairro('$segmento');") or die("Erro na query da procedure: " . mysqli_error());

          //lista os resultados
          while ($row = mysqli_fetch_array($result)) {   
              echo  $row[0] . "<br>\n";
                       // $row[1] . "<br>\n" 
                }
?>