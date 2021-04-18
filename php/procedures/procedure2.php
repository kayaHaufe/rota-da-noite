<?php include_once '../db/conection.php'; ?>
<?php

$idade = $_POST['idade'];
	
 $result = mysqli_query($link, 
             "CALL faixa_etaria('$idade');") or die("Erro na query da procedure: " . mysqli_error());

          //lista os resultados
          while ($row = mysqli_fetch_array($result)) {   
              echo  $row[0] . "<br>\n";
                       // $row[1] . "<br>\n" 
                }
?>