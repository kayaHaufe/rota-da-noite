<?php include 'header.php' ?>

<div class="container">
	<div class="accordion" id="accordionExample" style="margin-top: 100px; height: 70vh;">
	  <div class="card">
	    <div class="card-header" id="headingOne">
	      <h5 class="mb-0">
	        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	          Como publicar um evento?
	        </button>
	      </h5>
	    </div>

	    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
	      <div class="card-body">
	      	1° Cadastre-se ou efetue o login.<br>
	      	2° Clique no botão criar evento.<br>
			3° Preencha as informações do evento.<br>
			4° Efetue o pagamento.<br>
			5° Aguarde seu evento viralizar!
	      </div>
	    </div>
	  </div>
	  <div class="card">
	    <div class="card-header" id="headingTwo">
	      <h5 class="mb-0">
	        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	         Consigo baixar no celular?
	        </button>
	      </h5>
	    </div>
	    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
	      <div class="card-body">
	        <!-- Sim. Acesse a Play Store e baixe nosso app. -->
	        Futuramente sim. Visamos desenvolver um app o mais rápido possível para facilitar o uso do nosso site.
	      </div>
	    </div>
	  </div>
	  <div class="card">
	    <div class="card-header" id="headingThree">
	      <h5 class="mb-0">
	        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	          <!-- O pagamento é seguro? -->
	          Preciso pagar?
	        </button>
	      </h5>
	    </div>
	    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
	      <div class="card-body">
	        <!-- Sim. Antes de qualquer objetivo, nosso foco é manter a segurança do usuário protegendo seus dados de possíveis tentativas de invasões.<br><br>
	        Nosso sistema de pagamento é o PagSeguro, o qual a segurança já está garantida pelo sistema quando o cliente preenche os dados de seu cartão até o momento em que ele digita a senha. Pertence ao grupo UOL e é pioneiro e líder neste segmento no mercado brasileiro. -->
	        Não. Qualquer pessoa pode entrar e publicar seu evento gratuitamente.
	      </div>
	    </div>
	  </div>
	</div>
</div>

<?php include 'footer.php' ?>