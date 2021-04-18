<?php include 'header.php' ?>
<div class="container mt-5 pt-5">

<!-- PROCEDURE 1 -->
<form action="php/procedure1.php" method="POST">
	<h2 class="mt-5">Desconto no bairro Tude Bastos</h2>
	<input type="text" class="form-control" name="bairro" placeholder="Bairro">
	<button type="submit" class="btn btn-primary mt-3">Procedure 1</button>
</form>

<!-- PROCEDURE 2 -->
<form action="php/procedure2.php" method="POST">
	<h2 class="mt-5 pt-5">Verifica se é maior de idade, e, dirá se pode frequentar baladas ou não</h2>
	<input type="number" class="form-control" name="idade" placeholder="Idade">
	<button type="submit" class="btn btn-primary mt-3">Procedure 2</button>
</form>

<!-- PROCEDURE 3 -->
<form action="php/procedure3.php" method="POST">
	<h2 class="mt-5 pt-5">Recebe o dinheiro e subtrai pelo valor do evento</h2>
	<input type="number" class="form-control" name="dinheiro" placeholder="Seu dinheiro">
	<input type="number" class="form-control mt-2" name="vl_evento" placeholder="Valor do evento">
	<button type="submit" class="btn btn-primary mt-3">Procedure 3</button>
</form>

<!-- PROCEDURE 4 -->
<form action="php/procedure4.php" method="POST">
	<h2 class="mt-5 pt-5">Verifica o tipo de pessoa, se for pessoa física, o 1° post será gratuito</h2>
	<input type="text" class="form-control" name="tipo_pessoa" placeholder="Tipo de pessoa (Física ou Jurídica)">
	<button type="submit" class="btn btn-primary mt-3">Procedure 4</button>
</form>

<!-- PROCEDURE 5 -->
<form action="php/procedure5.php" method="POST">
	<h2 class="mt-5 pt-5">Verifica o tipo de pessoa, se for pessoa jurídica, ganha 1 post na página do Facebook</h2>
	<input type="text" class="form-control" name="tipo_pessoa2" placeholder="Tipo de pessoa">
	<button type="submit" class="btn btn-primary mt-3">Procedure 5</button>
</form>

<!-- PROCEDURE 6 -->
<form action="php/procedure6.php" method="POST">
	<h2 class="mt-5 pt-5">Verifica a segurança da senha através da quantidade de caracteres</h2>
	<input type="number" class="form-control" name="nivel_senha" placeholder="Digite a quantidade de caracteres da sua senha">
	<button type="submit" class="btn btn-primary mt-3">Procedure 6</button>
</form>

<!-- PROCEDURE 7 -->
<form action="php/procedure7.php" method="POST">
	<h2 class="mt-5 pt-5">Dicas de acordo com o segmento escolhido</h2>
	<select name="segmento" id="segmento" class="form-control">
		<option value="">Segmento</option>
		<option value="pizzaria">Pizzaria</option>
		<option value="restaurante">Restaurante</option>
		<option value="buffet">Buffet</option>
	</select>
	<button type="submit" class="btn btn-primary mt-3">Procedure 7</button>
</form>

<!-- PROCEDURE 8 -->
<form action="php/procedure8.php" method="POST">
	<h2 class="mt-5 pt-5">Escolha o segmento e te damos a preferência de bairro</h2>
	<select name="segmento2" id="segmento2" class="form-control">
		<option value="">Segmento</option>
		<option value="pizzaria">Pizzaria</option>
		<option value="restaurante">Restaurante</option>
		<option value="buffet">Buffet</option>
	</select>
	<button type="submit" class="btn btn-primary mt-3">Procedure 8</button>
</form>

<!-- PROCEDURE 9 -->
<form action="php/procedure9.php" method="POST">
	<h2 class="mt-5 pt-5">Verifica se o e-mail já foi ou não cadastrado</h2>
	<input type="text" class="form-control" name="verif_email" placeholder="E-mail">
	<button type="submit" class="btn btn-primary mt-3">Procedure 9</button>
</form>

<!-- PROCEDURE 10 -->
<form action="php/procedure10.php" method="POST">
	<h2 class="mt-5 pt-5">Se o cupom for = rotadanoite, e, o evento for igual a festival, retornar o valor com 10% de desconto</h2>
	<input type="text" class="form-control" name="cupom" placeholder="Nome do cupom">
	<input type="text" class="form-control mt-2" name="nm_evento" placeholder="Nome do evento">
	<button type="submit" class="btn btn-primary mt-3">Procedure 10</button>
</form>

</div>
<?php include 'footer.php' ?>