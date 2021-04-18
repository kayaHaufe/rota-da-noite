<?php include_once '../db/conection.php'; ?>
<?php

$cupom = $_POST['cupom'];
$nm_evento = $_POST['nm_evento'];

 $result = mysqli_query($link, 
             "CALL cupom('$cupom', '$nm_evento');") or die("Erro na query da procedure: " . mysqli_error());

          //lista os resultados
          while ($row = mysqli_fetch_array($result)) {   
              echo "Valor normal: R$ " . $row[0] . "<br>\n";
              echo "Valor com 10% de desconto: R$ " . $row[1] . "<br>\n";
                }
?>