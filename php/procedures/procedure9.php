<?php include_once '../db/conection.php'; ?>
<?php

$verif_email = $_POST['verif_email'];
	
 $result = mysqli_query($link, 
             "CALL verifica_email('$verif_email');") or die("Erro na query da procedure: " . mysqli_error());

          //lista os resultados
          while ($row = mysqli_fetch_array($result)) {   
              echo  $row[0] . "<br>\n";
                       // $row[1] . "<br>\n" 
                }
?>