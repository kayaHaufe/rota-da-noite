<?php include 'header.php' ?>

			<div class="container-fluid social d-md-flex">
				<div class="col-xs-6 col-md-3 offset-md-3 text-center center box-social">
					<a href="https://www.facebook.com/empresarotadanoite/?ref=bookmarks" target="_blank">
						<img src="img/icon/face.png" class="img-responsive center-block">
					<h4>Facebook</h4><hr class="mt-4 mb-4">
					<p>Rota da Noite</p>
					</a>
				</div>

				<div class="col-xs-6 col-md-3 text-center center box-social">
					<a href="tel:+5513982084063">
						<img src="img/icon/phone.png" class="img-responsive mr-auto"></i>
					<h4>Celular</h4><hr class="mt-4 mb-4">
					<p>(13) 9820 84063</p></a>
				</div>
			</div>

		<div class="col-md-6 mx-auto">
			<?php
			if(isset($_SESSION['error']))
			{
				echo $_SESSION['error'];
				unset ($_SESSION['error']);
			}

			if(isset($_SESSION['ok']))
			{
				echo $_SESSION['ok'];
				unset ($_SESSION['ok']);
			}
			?>
		</div>
			<div class="container-fluid formulario mt-2">
				<div class="col-xs-12 col-md-6 offset-md-3">
					<form action="php/email" method="POST">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control form-shadow" name="nome" required placeholder="Digite seu nome">
						</div>

					  <div class="form-group">
					    <label for="input-email">E-mail</label>
					    <input type="email" class="form-control form-shadow" id="input-email" required placeholder="Digite seu email" name="email">
					  </div>

					  <div class="form-group">
							<label for="assunto">Assunto</label>
							<input type="text" class="form-control form-shadow" name="assunto" required placeholder="Digite o assunto">
						</div>

					  <div class="form-group">
					    <label for="mensagem">Mensagem</label>
					    <textarea class="form-control form-shadow"  id="mensagem" rows="3" required placeholder="Digite sua mensagem aqui..." name="mensagem"></textarea>
					  </div>

					  <button type="submit" class="btn btn-black">Enviar</button>
					</form>	
				</div>
			</div>

<?php include 'footer.php' ?>