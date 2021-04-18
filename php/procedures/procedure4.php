<?php include_once '../db/conection.php'; ?>
<?php

$tipo_pessoa = $_POST['tipo_pessoa'];
	
 $result = mysqli_query($link, 
             "CALL p_fisica('$tipo_pessoa');") or die("Erro na query da procedure: " . mysqli_error());

          //lista os resultados
          while ($row = mysqli_fetch_array($result)) {   
              echo  $row[0] . "<br>\n";
                       // $row[1] . "<br>\n" 
                }
?>