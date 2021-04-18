<?php include 'header.php' ?>
<div class="container mt-5 pt-5">

<?php
// PART 1
$sql = "SELECT * FROM vw_evento_maior";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<h1 class='h1 mt-5'>Eventos para maior de idade</h1><table class='table table-dark'>";
	        echo "<thead><tr>";
	       		echo "<th scope='col'>Nome do responsável</th>";
	       		echo "<th scope='col'>Email</th>";
	       		echo "<th scope='col'>Evento</th>";
	       		echo "<th scope='col'>Data</th>";
	       		echo "<th scope='col'>Faixa etária</th>";
	        echo "</tr></thead>";

	        while($row = mysqli_fetch_array($result)){
	            echo "<tr>";
	                echo "<td>" . $row['nm_responsavel'] . "</td>";
	                echo "<td>" . $row['nm_email'] . "</td>";
	                echo "<td>" . $row['nm_evento'] . "</td>";
	                echo "<td>" . $row['dt_evento'] . "</td>";
	                echo "<td>" . $row['cd_faixa_etaria'] . "</td>";
	            echo "</tr>";
	        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "0 results";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// PART 2
$sql = "SELECT * FROM vw_evento_bar";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<h1 class='h1 mt-5'>Eventos cujo segmento seja Bar</h1><table class='table table-dark'>";
	        echo "<thead><tr>";
	       		echo "<th scope='col'>Evento</th>";
	       		echo "<th scope='col'>Data</th>";
	       		echo "<th scope='col'>Valor</th>";
	       		echo "<th scope='col'>Rua</th>";
	       		echo "<th scope='col'>N°</th>";
	       		echo "<th scope='col'>CEP</th>";
	       		echo "<th scope='col'>Bairro</th>";
	       		echo "<th scope='col'>Segmento</th>";	       		
	        echo "</tr></thead>";
	        
	        while($row = mysqli_fetch_array($result)){
	            echo "<tr>";
	                echo "<td>" . $row['nm_evento'] . "</td>";
	                echo "<td>" . $row['dt_evento'] . "</td>";
	                echo "<td>R$ " . $row['vl_evento'] . "</td>";
	                echo "<td>" . $row['nm_rua'] . "</td>";
	                echo "<td>" . $row['cd_numero'] . "</td>";
	                echo "<td>" . $row['cd_cep'] . "</td>";
	                echo "<td>" . $row['nm_bairro'] . "</td>";
	                echo "<td>" . $row['nm_segmento'] . "</td>";
	            echo "</tr>";
	        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "0 results";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// PART 3
$sql = "SELECT * FROM vw_evento_tupi";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<h1 class='h1 mt-5'>Eventos no bairro Tupi</h1><table class='table table-dark'>";
	        echo "<thead><tr>";
	       		echo "<th scope='col'>Evento</th>";
	       		echo "<th scope='col'>Data</th>";
	       		echo "<th scope='col'>Valor</th>";
	       		echo "<th scope='col'>Faixa etária</th>";
	       		echo "<th scope='col'>Descrição</th>";
	       		echo "<th scope='col'>Bairro</th>";
	        echo "</tr></thead>";

	        while($row = mysqli_fetch_array($result)){
	            echo "<tr>";
	                echo "<td>" . $row['nm_evento'] . "</td>";
	                echo "<td>" . $row['dt_evento'] . "</td>";
	                echo "<td>R$ " . $row['vl_evento'] . "</td>";
	                echo "<td>" . $row['cd_faixa_etaria'] . "</td>";
	                echo "<td>" . $row['ds_evento'] . "</td>";
	                echo "<td>" . $row['nm_bairro'] . "</td>";
	            echo "</tr>";
	        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "0 results";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// PART 4
$sql = "SELECT * FROM vw_cliente_sp";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<h1 class='h1 mt-5'>Clientes que moram na cidade de São Paulo</h1><table class='table table-dark'>";
	        echo "<thead><tr>";
	       		echo "<th scope='col'>Nome fantasia</th>";
	       		echo "<th scope='col'>Tipo de pessoa</th>";
	       		echo "<th scope='col'>Telefone</th>";
	       		echo "<th scope='col'>CPF</th>";
	       		echo "<th scope='col'>CNPJ</th>";
	       		echo "<th scope='col'>Cidade</th>";
	        echo "</tr></thead>";
	        
	        while($row = mysqli_fetch_array($result)){
	            echo "<tr>";
	                echo "<td>" . $row['nm_fantasia'] . "</td>";
	                echo "<td>" . $row['ic_tipo'] . "</td>";
	                echo "<td>" . $row['cd_telefone'] . "</td>";
	                echo "<td>" . $row['cd_cpf'] . "</td>";
	                echo "<td>" . $row['cd_cnpj'] . "</td>";
	                echo "<td>" . $row['nm_cidade'] . "</td>";
	            echo "</tr>";
	        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "0 results";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// PART 5
$sql = "SELECT * FROM vw_five_views";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<h1 class='h1 mt-5'>View com mais de 5 tabelas</h1><table class='table table-dark'>";
	        echo "<thead><tr>";
	       		echo "<th scope='col'>Responsável</th>";
	       		echo "<th scope='col'>Email</th>";
	       		echo "<th scope='col'>Celular</th>";
	       		echo "<th scope='col'>Evento</th>";
	       		echo "<th scope='col'>CEP</th>";
	       		echo "<th scope='col'>Bairro</th>";
	       		echo "<th scope='col'>Cidade</th>";	       		
	       		echo "<th scope='col'>UF</th>";
	        echo "</tr></thead>";
	        
	        while($row = mysqli_fetch_array($result)){
	            echo "<tr>";
	                echo "<td>" . $row['nm_responsavel'] . "</td>";
	                echo "<td>" . $row['nm_email'] . "</td>";
	                echo "<td>" . $row['cd_celular'] . "</td>";
	                echo "<td>" . $row['nm_evento'] . "</td>";
	                echo "<td>" . $row['cd_cep'] . "</td>";
	                echo "<td>" . $row['nm_bairro'] . "</td>";
	                echo "<td>" . $row['nm_cidade'] . "</td>";
	                echo "<td>" . $row['sg_uf'] . "</td>";
	            echo "</tr>";
	        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "0 results";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
</div>
<?php include 'footer.php' ?>