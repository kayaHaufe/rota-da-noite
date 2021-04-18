<?php include_once '../db/conection.php'; ?>
<?php

$dinheiro = $_POST['dinheiro'];
$vl_evento = $_POST['vl_evento'];
	
 $result = mysqli_query($link, 
             "CALL desconta_dinheiro('$dinheiro', '$vl_evento');") or die("Erro na query da procedure: " . mysqli_error());

          //lista os resultados
          while ($row = mysqli_fetch_array($result)) {   
              echo  $row[0] . "<br>\n";
                       // $row[1] . "<br>\n" 
                }
?>