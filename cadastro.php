<?php include 'header.php' ?>
	<div class="container-fluid">
		<div class="row">
			<div class="termos">
				<img src="img/icon/politica.svg" class="img-fluid d-block mx-auto" width="60px" style="padding-top: 150px;">
				<p class="h1 text-center mt-5">Cadastro</p>
			</div>
		</div>
<?php
if(isset($_SESSION['error']))
{
	echo $_SESSION['error'];
	unset ($_SESSION['error']);
}
?>

<div class="container mt-5">
	
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		  <li class="nav-item ml-auto">
		    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pessoa Física</a>
		  </li>
		  <li class="nav-item mr-auto">
		    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Pessoa Jurídica</a>
		  </li>
		  <li class="nav-item">
		  </li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
		  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">



		  	<!-- FÍSICA -->
		  	<form action="cadastrar" method="POST" id="cadastro">
				<div class="form-row mt-4">
					<div class="form-group col-md-4 mx-auto">
						<input class="form-control" type="text" name="nome" maxlength="45" required id="nome" placeholder="Nome*">
					</div>

					<div id="fisica" data-cid="fisica" class="form-group col-md-4 mx-auto">
						<input class="form-control validate" id="cpf" type="text" required name="cpf" placeholder="CPF*">
					</div>

					<div class="form-group col-md-4 mx-auto">
						<input class="form-control celular" type="text" name="tcelular" placeholder="Telefone Celular">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6 mx-auto">
						<input class="form-control" type="email" name="email" maxlength="60" required placeholder="E-mail*">
					</div>

					<div class="form-group col-md-6 mx-auto">
						<input class="form-control telefone" type="text" name="tresidencial" placeholder="Telefone Residencial">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6 mx-auto">
						<input class="form-control" type="password" name="senha" id="senha" minlength="6" title="Mínimo de 6 caracteres" required placeholder="Senha*">
					</div>

					<div class="form-group col-md-6 mx-auto">
						<input class="form-control" minlength="6" title="Mínimo de 6 caracteres" type="password" id="confirmasenha" name="confirmasenha" required placeholder="Confirmar Senha*">
					</div>
					<div id="pass-info"></div>
				</div>
						<div class="form-group mx-auto mt-4 mb-4">
							<p class="text-center">Ao cadastrar, você concorda com os 
							
							<!-- Button trigger modal -->
							<a class="text-primary" href="#modaltermos" data-toggle="modal">
							Termos de Uso
							</a>

							<!-- Modal -->
							<div class="modal fade" id="modaltermos" tabindex="-1" role="dialog" aria-labelledby="modaltermosLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="modaltermosLabel">Termos de Uso</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body text-justify">
							        <div>
										<p>
											Esse site é operado pelo Rota da Noite. Em todo o site, os termos “nós”, “nos” e “nosso” se referem ao Rota da Noite. O Rota da Noite proporciona esse site, incluindo todas as informações, ferramentas e serviços disponíveis deste site para você, o usuário, com a condição da sua aceitação de todos os termos, condições, políticas e avisos declarados aqui.
											Ao visitar nosso site, você está utilizando nossos “Serviços”. Consequentemente, concordando com os seguintes termos e condições (“Termos e Condições Gerais”, “Termos”), incluindo os termos e condições e políticas adicionais mencionados neste documento e/ou disponíveis por hyperlink. Esses Termos se aplicam a todos os usuários do site, incluindo, sem limitação, os usuários que são navegadores, fornecedores, clientes, lojistas e/ou contribuidores de conteúdo.
											Por favor, leia esses Termos cuidadosamente antes de acessar ou utilizar o nosso site. Ao acessar ou usar qualquer parte do site, você concorda com os Termos. Se você não concorda com todos os termos e condições desse acordo, então você não pode acessar o site ou usar quaisquer serviços. Se esses Termos são considerados uma oferta, a aceitação é expressamente limitada a esses Termos.
											Quaisquer novos recursos ou ferramentas que forem adicionados à loja atual também devem estar sujeitos aos Termos. Pode-se revisar a versão mais atual dos Termos quando quiser nesta página. Reservamos o direito de atualizar, alterar ou trocar qualquer parte desses Termos ao publicar atualizações e/ou alterações no nosso site. É sua responsabilidade verificar as alterações feitas nesta página periodicamente. Seu uso contínuo ou acesso ao site após a publicação de quaisquer alterações constitui aceitação de tais alterações.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 1 - TERMOS DA LOJA VIRTUAL</p>

										<p class="mt-4">Ao concordar com os Termos, você confirma que você é maior de idade em seu estado ou província de residência e que você nos deu seu consentimento para permitir que qualquer um dos seus dependentes menores de idade usem esse site.
										Você não deve usar nossos produtos para qualquer fim ilegal ou não autorizado. Você também não pode, ao usufruir deste Serviço, violar quaisquer leis em sua jurisdição (incluindo, mas não limitado, a leis de direitos autorais).
										Você não deve transmitir nenhum vírus ou qualquer código de natureza destrutiva.
										Violar qualquer um dos Termos tem como consequência a rescisão imediata dos seus Serviços.</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 2 - CONDIÇÕES GERAIS</p>

										<p class="mt-4">Reservamos o direito de recusar o serviço a qualquer pessoa por qualquer motivo a qualquer momento.
										Você entende que o seu conteúdo (não incluindo informações de cartão de crédito), pode ser transferido sem criptografia e pode: (a) ser transmitido por várias redes; e (b) sofrer alterações para se adaptar e se adequar às exigências técnicas de conexão de redes ou dispositivos. As informações de cartão de crédito sempre são criptografadas durante a transferência entre redes.
										Você concorda em não reproduzir, duplicar, copiar, vender, revender ou explorar qualquer parte do Serviço, uso do Serviço, acesso ao Serviço, ou qualquer contato no site através do qual o serviço é fornecido, sem nossa permissão expressa por escrito.
										Os títulos usados nesse acordo são incluídos apenas por conveniência e não limitam ou afetam os Termos.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 3 - PRECISÃO, INTEGRIDADE E ATUALIZAÇÃO DAS INFORMAÇÕES</p>

										<p class="mt-4">Não somos responsáveis por informações disponibilizadas nesse site que não sejam precisas, completas ou atuais. O material desse site é fornecido apenas para fins informativos e não deve ser usado como a única base para tomar decisões sem consultar fontes de informações primárias, mais precisas, mais completas ou mais atuais. Qualquer utilização do material desse site é por sua conta e risco.
										Reservamos o direito de modificar o conteúdo desse site a qualquer momento, temos obrigação de atualizar as informações em nosso site. Você concorda que é de sua responsabilidade monitorar alterações no nosso site.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 4 - MODIFICAÇÕES DO SERVIÇO E PREÇOS</p>

										<p class="mt-4">Os preços dos nossos produtos são sujeitos a alterações sem notificação.
										Reservamos o direito de, a qualquer momento, modificar ou descontinuar o Serviço (ou qualquer parte ou conteúdo do mesmo) sem notificação em qualquer momento.
										Não nos responsabilizados por você ou por qualquer terceiro por qualquer modificação, alteração de preço, suspensão ou descontinuação do Serviço.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 5 - PRODUTOS OU SERVIÇOS (caso aplicável)</p>

										<p class="mt-4">Certos produtos ou serviços podem estar disponíveis exclusivamente através do site. Tais produtos ou serviços podem ter quantidades limitadas, de acordo com nossa Política.
										Fizemos todo o esforço possível da forma mais precisa as cores e imagens dos nossos produtos que aparecem na loja. Não podemos garantir que a exibição de qualquer cor no monitor do seu computador será precisa.
										Reservamos o direito, mas não somos obrigados, a limitar as vendas de nossos serviços para qualquer pessoa, região geográfica ou jurisdição. Podemos exercer esse direito conforme o caso. Todas as descrições de serviços ou preços dos mesmos são sujeitos à alteração a qualquer momento sem notificação, a nosso critério exclusivo. Reservamos o direito de descontinuar qualquer serviço a qualquer momento. Qualquer oferta feita por qualquer produto ou serviço nesse site é nula onde for proibido por lei.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 6 - PRECISÃO DE INFORMAÇÕES DE FATURAMENTO E CONTA</p>

										<p class="mt-4">Você concorda em fornecer suas informações de conta. Você concorda em atualizar prontamente sua conta e outras informações, incluindo seu e-mail, para que possamos completar suas transações e contatar você quando preciso.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 7 - FERRAMENTAS OPCIONAIS</p>

										<p class="mt-4">Você reconhece e concorda que nós fornecemos acesso a tais ferramentas ”como elas são” e “conforme a disponibilidade” sem quaisquer garantias, representações ou condições de qualquer tipo e sem qualquer endosso. Não nos responsabilizamos de forma alguma pelo seu uso de ferramentas opcionais de terceiros.
										Qualquer uso de ferramentas opcionais oferecidas através do site é inteiramente por sua conta e risco e você se familiarizar e aprovar os termos das ferramentas que são fornecidas por fornecedor(es) terceiro(s).
										Também podemos, futuramente, oferecer novos serviços e/ou recursos através do site (incluindo o lançamento de novas ferramentas e recursos). Tais recursos e/ou serviços novos também devem estar sujeitos a esses Termos.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 8 - LINKS DE TERCEIROS</p>

										<p class="mt-4">Certos produtos, conteúdos e serviços disponíveis pelo nosso Serviço podem incluir materiais de terceiros.
										Os links de terceiros nesse site podem te direcionar para sites de terceiros que não são afiliados a nós. Não nos responsabilizamos por examinar ou avaliar o conteúdo ou precisão. Não garantimos e nem temos obrigação ou responsabilidade por quaisquer materiais ou sites de terceiros, ou por quaisquer outros materiais, produtos ou serviços de terceiros.
										Não somos responsáveis por quaisquer danos ou prejuízos relacionados com a compra ou uso de mercadorias, serviços, recursos, conteúdo, ou quaisquer outras transações feitas em conexão com quaisquer sites de terceiros. Por favor, revise com cuidado as políticas e práticas de terceiros e certifique-se que você as entende antes de efetuar qualquer transação. As queixas, reclamações, preocupações ou questões relativas a produtos de terceiros devem ser direcionadas ao terceiro.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 9 - COMENTÁRIOS, FEEDBACK, ETC. DO USUÁRIO</p>

										<p class="mt-4">Se, a nosso pedido, você enviar certos itens específicos, ou sem um pedido nosso, você enviar ideias criativas, sugestões, propostas, planos, ou outros materiais, seja online, por e-mail, pelo correio, ou de outra forma (em conjunto chamados de 'comentários'), você concorda que podemos, a qualquer momento, sem restrição, editar, copiar, publicar, distribuir, traduzir e de outra forma usar quaisquer comentários que você encaminhar para nós. Não nos responsabilizamos por: (1) manter quaisquer comentários em sigilo; (2) indenizar por quaisquer comentários; ou (3) responder quaisquer comentários.
										Podemos, mas não temos a obrigação, de monitorar, editar ou remover conteúdo que nós determinamos a nosso próprio critério ser contra a lei, ofensivo, ameaçador, calunioso, difamatório, pornográfico, obsceno ou censurável ou que viole a propriedade intelectual de terceiros ou estes Termos.
										Você concorda que seus comentários não violarão qualquer direito de terceiros, incluindo direitos autorais, marcas registradas, privacidade, personalidade ou outro direito pessoal ou de propriedade. Você concorda que os seus comentários não vão conter material difamatório, ilegal, abusivo ou obsceno. Eles também não conterão nenhum vírus de computador ou outro malware que possa afetar a operação do Serviço ou qualquer site relacionado. Você não pode usar um endereço de e-mail falso, fingir ser alguém diferente de si mesmo, ou de outra forma enganar a nós ou terceiros quanto à origem de quaisquer comentários. Você é o único responsável por quaisquer comentários que você faz e pela veracidade deles. Nós não assumimos qualquer responsabilidade ou obrigação por quaisquer comentários publicados por você ou por qualquer terceiro.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 10 - INFORMAÇÕES PESSOAIS</p>

										<p class="mt-4">O envio de suas informações pessoais através do site é regido pela nossa Política de privacidade.
										<a href="politica">Ver nossa Política de privacidade.</a>
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 11 - ERROS, IMPRECISÕES E OMISSÕES</p>

										<p class="mt-4">Ocasionalmente, pode haver informações no nosso site ou no Serviço que contém erros tipográficos, imprecisões ou omissões que possam relacionar-se a descrições de produtos, preços, promoções, ofertas, taxas de envio do produto, o prazo de envio e disponibilidade. Reservamos o direito de corrigir quaisquer erros, imprecisões ou omissões, e de alterar ou atualizar informações ou cancelar encomendas caso qualquer informação no Serviço ou em qualquer site relacionado seja imprecisa, a qualquer momento e sem aviso prévio (até mesmo depois de você ter enviado o seu pedido).
										Não assumimos nenhuma obrigação de atualizar, alterar ou esclarecer informações no Serviço ou em qualquer site relacionado, incluindo, sem limitação, a informações sobre preços, exceto conforme exigido por lei. Nenhuma atualização específica ou data de atualização no Serviço ou em qualquer site relacionado, deve ser utilizada para indicar que todas as informações do Serviço ou em qualquer site relacionado tenham sido modificadas ou atualizadas.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 12 - USOS PROIBIDOS</p>

										<p class="mt-4">Além de outras proibições, conforme estabelecido nos Termos e Condições Gerais, você está proibido de usar o site ou o conteúdo para: (a) fins ilícitos; (b) solicitar outras pessoas a realizar ou participar de quaisquer atos ilícitos; (c) violar quaisquer regulamentos internacionais, provinciais, estaduais ou federais, regras, leis ou regulamentos locais; (d) infringir ou violar nossos direitos de propriedade intelectual ou os direitos de propriedade intelectual de terceiros; (e) para assediar, abusar, insultar, danificar, difamar, caluniar, depreciar, intimidar ou discriminar com base em gênero, orientação sexual, religião, etnia, raça, idade, nacionalidade ou deficiência; (f) apresentar informações falsas ou enganosas; (g) fazer o envio ou transmitir vírus ou qualquer outro tipo de código malicioso que será ou poderá ser utilizado para afetar a funcionalidade ou operação do Serviço ou de qualquer site relacionado, outros sites, ou da Internet; (h) coletar ou rastrear as informações pessoais de outras pessoas; (i) para enviar spam, phishing, pharm, pretext, spider, crawl, ou scrape; (j) para fins obscenos ou imorais; ou (k) para interferir ou contornar os recursos de segurança do Serviço ou de qualquer site relacionado, outros sites, ou da Internet. Reservamos o direito de rescindir o seu uso do Serviço ou de qualquer site relacionado por violar qualquer um dos usos proibidos.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 13 - ISENÇÃO DE RESPONSABILIDADE DE GARANTIAS; LIMITAÇÃO DE RESPONSABILIDADE</p>

										<p class="mt-4">Nós não garantimos, representamos ou justificamos que o seu uso do nosso serviço será pontual, seguro, sem erros ou interrupções.
										Você concorda que de tempos em tempos, podemos remover o serviço por períodos indefinidos de tempo ou cancelar a qualquer momento, sem te notificar.
										Você concorda que o seu uso ou incapacidade de usar o serviço é por sua conta e risco. O serviço e todos os produtos e serviços entregues através do serviço são, exceto conforme declarado por nós) fornecidos sem garantia e conforme a disponibilidade para seu uso, sem qualquer representação, garantias ou condições de qualquer tipo, expressas ou implícitas, incluindo todas as garantias implícitas ou condições de comercialização, quantidade, adequação a uma finalidade específica, durabilidade, título, e não violação.
										Em nenhuma circunstância o Rota da Noite, nossos diretores, oficiais, funcionários, afiliados, agentes, contratantes, estagiários, fornecedores, prestadores de serviços ou licenciadores serão responsáveis por qualquer prejuízo, perda, reclamação ou danos diretos, indiretos, incidentais, punitivos, especiais ou consequentes de qualquer tipo, incluindo, sem limitação, lucros cessantes, perda de receita, poupanças perdidas, perda de dados, custos de reposição, ou quaisquer danos semelhantes, seja com base em contrato, ato ilícito (incluindo negligência), responsabilidade objetiva ou de outra forma, decorrentes do seu uso de qualquer um dos serviços ou quaisquer produtos adquiridos usando o serviço, ou para qualquer outra reclamação relacionada de alguma forma ao seu uso do serviço ou qualquer produto, incluindo, mas não limitado a, quaisquer erros ou omissões em qualquer conteúdo, ou qualquer perda ou dano de qualquer tipo como resultado do uso do serviço ou qualquer conteúdo (ou produto) publicado, transmitido ou de outra forma disponível através do serviço, mesmo se alertado de tal possibilidade. Como alguns estados ou jurisdições não permitem a exclusão ou a limitação de responsabilidade por danos consequentes ou incidentais, em tais estados ou jurisdições, a nossa responsabilidade será limitada à extensão máxima permitida por lei.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 14 - INDENIZAÇÃO</p>

										<p class="mt-4">Você concorda em indenizar, defender e isentar Rota da Noite e nossos subsidiários, afiliados, parceiros, funcionários, diretores, agentes, contratados, licenciantes, prestadores de serviços, subcontratados, fornecedores, estagiários e funcionários, de qualquer reclamação ou demanda, incluindo honorários de advogados, por quaisquer terceiros devido à violação destes Termos de serviço ou aos documentos que incorporam por referência, ou à violação de qualquer lei ou os direitos de um terceiro.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 15 - INDEPENDÊNCIA</p>

										<p class="mt-4">No caso de qualquer disposição destes Termos ser considerada ilegal, nula ou ineficaz, tal disposição deve, contudo, ser aplicável até ao limite máximo permitido pela lei aplicável, e a porção inexequível será considerada separada desses Termos. Tal determinação não prejudica a validade e aplicabilidade de quaisquer outras disposições restantes.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 16 - RESCISÃO</p>

										<p class="mt-4">As obrigações e responsabilidades das partes incorridas antes da data de rescisão devem continuar após a rescisão deste acordo para todos os efeitos.
										Estes Termos e Condições Gerais estão em vigor, a menos que seja rescindido por você ou por nós. Você pode rescindir estes Termos a qualquer momento, notificando-nos que já não deseja utilizar os nossos serviços, ou quando você deixar de usar o nosso site.
										Se em nosso critério exclusivo você não cumprir com qualquer termo ou disposição destes Termos, nós também podemos rescindir este contrato a qualquer momento sem aviso prévio e você ficará responsável por todas as quantias devidas até a data da rescisão; também podemos lhe negar acesso a nossos Serviços (ou qualquer parte deles).
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 17 - ACORDO INTEGRAL</p>

										<p class="mt-4">Caso não exerçamos ou executemos qualquer direito ou disposição destes Termos, isso não constituirá uma renúncia de tal direito ou disposição.
										Estes Termos e quaisquer políticas ou normas operacionais postadas por nós neste site ou no que diz respeito ao serviço constituem a totalidade do acordo entre nós. Estes termos regem o seu uso do Serviço, substituindo quaisquer acordos anteriores ou contemporâneos, comunicações e propostas, sejam verbais ou escritos, entre você e nós (incluindo, mas não limitado a quaisquer versões anteriores dos Termos e Condições Gerais).
										Quaisquer ambiguidades na interpretação destes Termos não devem ser interpretadas contra a parte que os redigiu.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 18 - LEGISLAÇÃO APLICÁVEL</p>

										<p class="mt-4">Esses Termos e quaisquer acordos separados em que nós lhe fornecemos os Serviços devem ser regidos e interpretados de acordo com as leis.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 19 - ALTERAÇÕES DOS TERMOS DE SERVIÇO</p>

										<p class="mt-4">Você pode rever a versão mais atual dos Termos e Condições Gerais a qualquer momento nessa página.
										Reservamos o direito, a nosso critério, de atualizar, modificar ou substituir qualquer parte destes Termos ao publicar atualizações e alterações no nosso site. É sua responsabilidade verificar nosso site periodicamente. Seu uso contínuo ou acesso ao nosso site ou ao Serviço após a publicação de quaisquer alterações a estes Termos constitui aceitação dessas alterações.
										</p>
									</div>

									<div>
										<p class="h3 mt-5 text-center">SEÇÃO 20 - INFORMAÇÕES DE CONTATO</p>

										<p class="mt-4">As perguntas sobre os Termos e Condições Gerais devem ser enviadas para nós através do e-mail:  kayahaufe@gmail.com.
										</p>
									</div>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</div>

				<div class="container mx-auto row">
					<button type="submit" name="fisica" value="fisica" class="btn btn-primary btn-black mx-auto btn-block mr-5">CADASTRAR</button>
				</div>
			</form>
				  </div>

		  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
		  	


		  	<!-- JURÍDICA -->
		  	<form action="cadastrar" method="POST" id="cadastro">
				<div class="form-row mt-4">
					<div class="form-group col-md-4 mx-auto">
						<input class="form-control" type="text" name="nome" required id="nome" placeholder="Nome*">
					</div>

					<div class="form-group col-md-4 mx-auto">
						<input class="form-control validate" id="cnpj" type="text" required name="cnpj" placeholder="CNPJ*">
					</div>

					<div class="form-group col-md-4 mx-auto">
						<select class="form-control" name="situacao" required data-rule-required="true">
							<option value="">Situação*</option>
							<option value="ativa">Ativa</option>
							<option value="inapta">Inapta</option>
							<option value="omissa">Omissa</option>
							<option value="nao_localizada">Não localizada</option>
							<option value="irregularidade">Irregularidade em operações de comércio exterior</option>
							<option value="suspensa">Suspensa</option>
							<option value="baixada">Baixada</option>
							<option value="nula">Nula</option>
						</select>
					</div>

				</div>

				<div class="form-row">
					<div class="form-group col-md-6 mx-auto">
						<input class="form-control" id="insc" type="text" required name="insc_est" placeholder="Inscrição Estadual*">
					</div>

					<div class="form-group col-md-6 mx-auto">
						<input class="form-control celular" type="text" name="tcelular" placeholder="Telefone Celular">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6 mx-auto">
						<input class="form-control" type="email" name="email" required placeholder="E-mail*">
					</div>

					<div class="form-group col-md-6 mx-auto">
						<input class="form-control telefone" type="text" name="tresidencial" placeholder="Telefone Residencial">
					</div>
									</div>

				<div class="form-row">
					<div class="form-group col-md-6 mx-auto">
						<input class="form-control" type="password" name="senha" id="senha2" minlength="6" title="Mínimo de 6 caracteres" required placeholder="Senha*">
					</div>

					<div class="form-group col-md-6 mx-auto">
						<input class="form-control" minlength="6" title="Mínimo de 6 caracteres" type="password" id="confirmasenha2" name="confirmasenha" required placeholder="Confirmar Senha*">
					</div>
					<div id="pass-info2"></div>
				</div>

		<div class="form-group mx-auto mt-4 mb-4">
											<p class="text-center">Ao cadastrar, você concorda com os 
											
											<!-- Button trigger modal -->
											<a class="text-primary" href="#modaltermos" data-toggle="modal">
											Termos de Uso
											</a>

											<!-- Modal -->
											<div class="modal fade" id="modaltermos" tabindex="-1" role="dialog" aria-labelledby="modaltermosLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="modaltermosLabel">Termos de Uso</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											      </div>
											      <div class="modal-body text-justify">
											        <div>
														<p>
															Esse site é operado pelo Rota da Noite. Em todo o site, os termos “nós”, “nos” e “nosso” se referem ao Rota da Noite. O Rota da Noite proporciona esse site, incluindo todas as informações, ferramentas e serviços disponíveis deste site para você, o usuário, com a condição da sua aceitação de todos os termos, condições, políticas e avisos declarados aqui.
															Ao visitar nosso site, você está utilizando nossos “Serviços”. Consequentemente, concordando com os seguintes termos e condições (“Termos e Condições Gerais”, “Termos”), incluindo os termos e condições e políticas adicionais mencionados neste documento e/ou disponíveis por hyperlink. Esses Termos se aplicam a todos os usuários do site, incluindo, sem limitação, os usuários que são navegadores, fornecedores, clientes, lojistas e/ou contribuidores de conteúdo.
															Por favor, leia esses Termos cuidadosamente antes de acessar ou utilizar o nosso site. Ao acessar ou usar qualquer parte do site, você concorda com os Termos. Se você não concorda com todos os termos e condições desse acordo, então você não pode acessar o site ou usar quaisquer serviços. Se esses Termos são considerados uma oferta, a aceitação é expressamente limitada a esses Termos.
															Quaisquer novos recursos ou ferramentas que forem adicionados à loja atual também devem estar sujeitos aos Termos. Pode-se revisar a versão mais atual dos Termos quando quiser nesta página. Reservamos o direito de atualizar, alterar ou trocar qualquer parte desses Termos ao publicar atualizações e/ou alterações no nosso site. É sua responsabilidade verificar as alterações feitas nesta página periodicamente. Seu uso contínuo ou acesso ao site após a publicação de quaisquer alterações constitui aceitação de tais alterações.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 1 - TERMOS DA LOJA VIRTUAL</p>

														<p class="mt-4">Ao concordar com os Termos, você confirma que você é maior de idade em seu estado ou província de residência e que você nos deu seu consentimento para permitir que qualquer um dos seus dependentes menores de idade usem esse site.
														Você não deve usar nossos produtos para qualquer fim ilegal ou não autorizado. Você também não pode, ao usufruir deste Serviço, violar quaisquer leis em sua jurisdição (incluindo, mas não limitado, a leis de direitos autorais).
														Você não deve transmitir nenhum vírus ou qualquer código de natureza destrutiva.
														Violar qualquer um dos Termos tem como consequência a rescisão imediata dos seus Serviços.</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 2 - CONDIÇÕES GERAIS</p>

														<p class="mt-4">Reservamos o direito de recusar o serviço a qualquer pessoa por qualquer motivo a qualquer momento.
														Você entende que o seu conteúdo (não incluindo informações de cartão de crédito), pode ser transferido sem criptografia e pode: (a) ser transmitido por várias redes; e (b) sofrer alterações para se adaptar e se adequar às exigências técnicas de conexão de redes ou dispositivos. As informações de cartão de crédito sempre são criptografadas durante a transferência entre redes.
														Você concorda em não reproduzir, duplicar, copiar, vender, revender ou explorar qualquer parte do Serviço, uso do Serviço, acesso ao Serviço, ou qualquer contato no site através do qual o serviço é fornecido, sem nossa permissão expressa por escrito.
														Os títulos usados nesse acordo são incluídos apenas por conveniência e não limitam ou afetam os Termos.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 3 - PRECISÃO, INTEGRIDADE E ATUALIZAÇÃO DAS INFORMAÇÕES</p>

														<p class="mt-4">Não somos responsáveis por informações disponibilizadas nesse site que não sejam precisas, completas ou atuais. O material desse site é fornecido apenas para fins informativos e não deve ser usado como a única base para tomar decisões sem consultar fontes de informações primárias, mais precisas, mais completas ou mais atuais. Qualquer utilização do material desse site é por sua conta e risco.
														Reservamos o direito de modificar o conteúdo desse site a qualquer momento, temos obrigação de atualizar as informações em nosso site. Você concorda que é de sua responsabilidade monitorar alterações no nosso site.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 4 - MODIFICAÇÕES DO SERVIÇO E PREÇOS</p>

														<p class="mt-4">Os preços dos nossos produtos são sujeitos a alterações sem notificação.
														Reservamos o direito de, a qualquer momento, modificar ou descontinuar o Serviço (ou qualquer parte ou conteúdo do mesmo) sem notificação em qualquer momento.
														Não nos responsabilizados por você ou por qualquer terceiro por qualquer modificação, alteração de preço, suspensão ou descontinuação do Serviço.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 5 - PRODUTOS OU SERVIÇOS (caso aplicável)</p>

														<p class="mt-4">Certos produtos ou serviços podem estar disponíveis exclusivamente através do site. Tais produtos ou serviços podem ter quantidades limitadas, de acordo com nossa Política.
														Fizemos todo o esforço possível da forma mais precisa as cores e imagens dos nossos produtos que aparecem na loja. Não podemos garantir que a exibição de qualquer cor no monitor do seu computador será precisa.
														Reservamos o direito, mas não somos obrigados, a limitar as vendas de nossos serviços para qualquer pessoa, região geográfica ou jurisdição. Podemos exercer esse direito conforme o caso. Todas as descrições de serviços ou preços dos mesmos são sujeitos à alteração a qualquer momento sem notificação, a nosso critério exclusivo. Reservamos o direito de descontinuar qualquer serviço a qualquer momento. Qualquer oferta feita por qualquer produto ou serviço nesse site é nula onde for proibido por lei.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 6 - PRECISÃO DE INFORMAÇÕES DE FATURAMENTO E CONTA</p>

														<p class="mt-4">Você concorda em fornecer suas informações de conta. Você concorda em atualizar prontamente sua conta e outras informações, incluindo seu e-mail, para que possamos completar suas transações e contatar você quando preciso.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 7 - FERRAMENTAS OPCIONAIS</p>

														<p class="mt-4">Você reconhece e concorda que nós fornecemos acesso a tais ferramentas ”como elas são” e “conforme a disponibilidade” sem quaisquer garantias, representações ou condições de qualquer tipo e sem qualquer endosso. Não nos responsabilizamos de forma alguma pelo seu uso de ferramentas opcionais de terceiros.
														Qualquer uso de ferramentas opcionais oferecidas através do site é inteiramente por sua conta e risco e você se familiarizar e aprovar os termos das ferramentas que são fornecidas por fornecedor(es) terceiro(s).
														Também podemos, futuramente, oferecer novos serviços e/ou recursos através do site (incluindo o lançamento de novas ferramentas e recursos). Tais recursos e/ou serviços novos também devem estar sujeitos a esses Termos.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 8 - LINKS DE TERCEIROS</p>

														<p class="mt-4">Certos produtos, conteúdos e serviços disponíveis pelo nosso Serviço podem incluir materiais de terceiros.
														Os links de terceiros nesse site podem te direcionar para sites de terceiros que não são afiliados a nós. Não nos responsabilizamos por examinar ou avaliar o conteúdo ou precisão. Não garantimos e nem temos obrigação ou responsabilidade por quaisquer materiais ou sites de terceiros, ou por quaisquer outros materiais, produtos ou serviços de terceiros.
														Não somos responsáveis por quaisquer danos ou prejuízos relacionados com a compra ou uso de mercadorias, serviços, recursos, conteúdo, ou quaisquer outras transações feitas em conexão com quaisquer sites de terceiros. Por favor, revise com cuidado as políticas e práticas de terceiros e certifique-se que você as entende antes de efetuar qualquer transação. As queixas, reclamações, preocupações ou questões relativas a produtos de terceiros devem ser direcionadas ao terceiro.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 9 - COMENTÁRIOS, FEEDBACK, ETC. DO USUÁRIO</p>

														<p class="mt-4">Se, a nosso pedido, você enviar certos itens específicos, ou sem um pedido nosso, você enviar ideias criativas, sugestões, propostas, planos, ou outros materiais, seja online, por e-mail, pelo correio, ou de outra forma (em conjunto chamados de 'comentários'), você concorda que podemos, a qualquer momento, sem restrição, editar, copiar, publicar, distribuir, traduzir e de outra forma usar quaisquer comentários que você encaminhar para nós. Não nos responsabilizamos por: (1) manter quaisquer comentários em sigilo; (2) indenizar por quaisquer comentários; ou (3) responder quaisquer comentários.
														Podemos, mas não temos a obrigação, de monitorar, editar ou remover conteúdo que nós determinamos a nosso próprio critério ser contra a lei, ofensivo, ameaçador, calunioso, difamatório, pornográfico, obsceno ou censurável ou que viole a propriedade intelectual de terceiros ou estes Termos.
														Você concorda que seus comentários não violarão qualquer direito de terceiros, incluindo direitos autorais, marcas registradas, privacidade, personalidade ou outro direito pessoal ou de propriedade. Você concorda que os seus comentários não vão conter material difamatório, ilegal, abusivo ou obsceno. Eles também não conterão nenhum vírus de computador ou outro malware que possa afetar a operação do Serviço ou qualquer site relacionado. Você não pode usar um endereço de e-mail falso, fingir ser alguém diferente de si mesmo, ou de outra forma enganar a nós ou terceiros quanto à origem de quaisquer comentários. Você é o único responsável por quaisquer comentários que você faz e pela veracidade deles. Nós não assumimos qualquer responsabilidade ou obrigação por quaisquer comentários publicados por você ou por qualquer terceiro.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 10 - INFORMAÇÕES PESSOAIS</p>

														<p class="mt-4">O envio de suas informações pessoais através do site é regido pela nossa Política de privacidade.
														<a href="politica">Ver nossa Política de privacidade.</a>
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 11 - ERROS, IMPRECISÕES E OMISSÕES</p>

														<p class="mt-4">Ocasionalmente, pode haver informações no nosso site ou no Serviço que contém erros tipográficos, imprecisões ou omissões que possam relacionar-se a descrições de produtos, preços, promoções, ofertas, taxas de envio do produto, o prazo de envio e disponibilidade. Reservamos o direito de corrigir quaisquer erros, imprecisões ou omissões, e de alterar ou atualizar informações ou cancelar encomendas caso qualquer informação no Serviço ou em qualquer site relacionado seja imprecisa, a qualquer momento e sem aviso prévio (até mesmo depois de você ter enviado o seu pedido).
														Não assumimos nenhuma obrigação de atualizar, alterar ou esclarecer informações no Serviço ou em qualquer site relacionado, incluindo, sem limitação, a informações sobre preços, exceto conforme exigido por lei. Nenhuma atualização específica ou data de atualização no Serviço ou em qualquer site relacionado, deve ser utilizada para indicar que todas as informações do Serviço ou em qualquer site relacionado tenham sido modificadas ou atualizadas.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 12 - USOS PROIBIDOS</p>

														<p class="mt-4">Além de outras proibições, conforme estabelecido nos Termos e Condições Gerais, você está proibido de usar o site ou o conteúdo para: (a) fins ilícitos; (b) solicitar outras pessoas a realizar ou participar de quaisquer atos ilícitos; (c) violar quaisquer regulamentos internacionais, provinciais, estaduais ou federais, regras, leis ou regulamentos locais; (d) infringir ou violar nossos direitos de propriedade intelectual ou os direitos de propriedade intelectual de terceiros; (e) para assediar, abusar, insultar, danificar, difamar, caluniar, depreciar, intimidar ou discriminar com base em gênero, orientação sexual, religião, etnia, raça, idade, nacionalidade ou deficiência; (f) apresentar informações falsas ou enganosas; (g) fazer o envio ou transmitir vírus ou qualquer outro tipo de código malicioso que será ou poderá ser utilizado para afetar a funcionalidade ou operação do Serviço ou de qualquer site relacionado, outros sites, ou da Internet; (h) coletar ou rastrear as informações pessoais de outras pessoas; (i) para enviar spam, phishing, pharm, pretext, spider, crawl, ou scrape; (j) para fins obscenos ou imorais; ou (k) para interferir ou contornar os recursos de segurança do Serviço ou de qualquer site relacionado, outros sites, ou da Internet. Reservamos o direito de rescindir o seu uso do Serviço ou de qualquer site relacionado por violar qualquer um dos usos proibidos.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 13 - ISENÇÃO DE RESPONSABILIDADE DE GARANTIAS; LIMITAÇÃO DE RESPONSABILIDADE</p>

														<p class="mt-4">Nós não garantimos, representamos ou justificamos que o seu uso do nosso serviço será pontual, seguro, sem erros ou interrupções.
														Você concorda que de tempos em tempos, podemos remover o serviço por períodos indefinidos de tempo ou cancelar a qualquer momento, sem te notificar.
														Você concorda que o seu uso ou incapacidade de usar o serviço é por sua conta e risco. O serviço e todos os produtos e serviços entregues através do serviço são, exceto conforme declarado por nós) fornecidos sem garantia e conforme a disponibilidade para seu uso, sem qualquer representação, garantias ou condições de qualquer tipo, expressas ou implícitas, incluindo todas as garantias implícitas ou condições de comercialização, quantidade, adequação a uma finalidade específica, durabilidade, título, e não violação.
														Em nenhuma circunstância o Rota da Noite, nossos diretores, oficiais, funcionários, afiliados, agentes, contratantes, estagiários, fornecedores, prestadores de serviços ou licenciadores serão responsáveis por qualquer prejuízo, perda, reclamação ou danos diretos, indiretos, incidentais, punitivos, especiais ou consequentes de qualquer tipo, incluindo, sem limitação, lucros cessantes, perda de receita, poupanças perdidas, perda de dados, custos de reposição, ou quaisquer danos semelhantes, seja com base em contrato, ato ilícito (incluindo negligência), responsabilidade objetiva ou de outra forma, decorrentes do seu uso de qualquer um dos serviços ou quaisquer produtos adquiridos usando o serviço, ou para qualquer outra reclamação relacionada de alguma forma ao seu uso do serviço ou qualquer produto, incluindo, mas não limitado a, quaisquer erros ou omissões em qualquer conteúdo, ou qualquer perda ou dano de qualquer tipo como resultado do uso do serviço ou qualquer conteúdo (ou produto) publicado, transmitido ou de outra forma disponível através do serviço, mesmo se alertado de tal possibilidade. Como alguns estados ou jurisdições não permitem a exclusão ou a limitação de responsabilidade por danos consequentes ou incidentais, em tais estados ou jurisdições, a nossa responsabilidade será limitada à extensão máxima permitida por lei.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 14 - INDENIZAÇÃO</p>

														<p class="mt-4">Você concorda em indenizar, defender e isentar Rota da Noite e nossos subsidiários, afiliados, parceiros, funcionários, diretores, agentes, contratados, licenciantes, prestadores de serviços, subcontratados, fornecedores, estagiários e funcionários, de qualquer reclamação ou demanda, incluindo honorários de advogados, por quaisquer terceiros devido à violação destes Termos de serviço ou aos documentos que incorporam por referência, ou à violação de qualquer lei ou os direitos de um terceiro.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 15 - INDEPENDÊNCIA</p>

														<p class="mt-4">No caso de qualquer disposição destes Termos ser considerada ilegal, nula ou ineficaz, tal disposição deve, contudo, ser aplicável até ao limite máximo permitido pela lei aplicável, e a porção inexequível será considerada separada desses Termos. Tal determinação não prejudica a validade e aplicabilidade de quaisquer outras disposições restantes.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 16 - RESCISÃO</p>

														<p class="mt-4">As obrigações e responsabilidades das partes incorridas antes da data de rescisão devem continuar após a rescisão deste acordo para todos os efeitos.
														Estes Termos e Condições Gerais estão em vigor, a menos que seja rescindido por você ou por nós. Você pode rescindir estes Termos a qualquer momento, notificando-nos que já não deseja utilizar os nossos serviços, ou quando você deixar de usar o nosso site.
														Se em nosso critério exclusivo você não cumprir com qualquer termo ou disposição destes Termos, nós também podemos rescindir este contrato a qualquer momento sem aviso prévio e você ficará responsável por todas as quantias devidas até a data da rescisão; também podemos lhe negar acesso a nossos Serviços (ou qualquer parte deles).
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 17 - ACORDO INTEGRAL</p>

														<p class="mt-4">Caso não exerçamos ou executemos qualquer direito ou disposição destes Termos, isso não constituirá uma renúncia de tal direito ou disposição.
														Estes Termos e quaisquer políticas ou normas operacionais postadas por nós neste site ou no que diz respeito ao serviço constituem a totalidade do acordo entre nós. Estes termos regem o seu uso do Serviço, substituindo quaisquer acordos anteriores ou contemporâneos, comunicações e propostas, sejam verbais ou escritos, entre você e nós (incluindo, mas não limitado a quaisquer versões anteriores dos Termos e Condições Gerais).
														Quaisquer ambiguidades na interpretação destes Termos não devem ser interpretadas contra a parte que os redigiu.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 18 - LEGISLAÇÃO APLICÁVEL</p>

														<p class="mt-4">Esses Termos e quaisquer acordos separados em que nós lhe fornecemos os Serviços devem ser regidos e interpretados de acordo com as leis.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 19 - ALTERAÇÕES DOS TERMOS DE SERVIÇO</p>

														<p class="mt-4">Você pode rever a versão mais atual dos Termos e Condições Gerais a qualquer momento nessa página.
														Reservamos o direito, a nosso critério, de atualizar, modificar ou substituir qualquer parte destes Termos ao publicar atualizações e alterações no nosso site. É sua responsabilidade verificar nosso site periodicamente. Seu uso contínuo ou acesso ao nosso site ou ao Serviço após a publicação de quaisquer alterações a estes Termos constitui aceitação dessas alterações.
														</p>
													</div>

													<div>
														<p class="h3 mt-5 text-center">SEÇÃO 20 - INFORMAÇÕES DE CONTATO</p>

														<p class="mt-4">As perguntas sobre os Termos e Condições Gerais devem ser enviadas para nós através do e-mail:  kayahaufe@gmail.com.
														</p>
													</div>
											      </div>
											      <div class="modal-footer">
											        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
											      </div>
											    </div>
											  </div>
											</div>
		</div>

		<div class="container mx-auto row">
			<button type="submit" name="juridica" value="juridica" class="btn btn-primary btn-black mx-auto btn-block mr-5">CADASTRAR</button>
		</div>
		  </div>
		  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
		</div>
	</form>
</div>
	</div>
<?php include 'footer.php' ?>

<script src="js/valida_cpf_cnpj.js"></script>

<script src="js/validadigitando.js"></script>

<script type="text/javascript" src="js/jquery.mask.min.js"></script>	

<script>
	$(document).ready(function(){
		$("#cpf").mask("000.000.000-00")
		$("#cnpj").mask("00.000.000/0000-00")
		$("#insc").mask("000.000.000.000")
		$(".telefone").mask("(00) 0000-0000")

		$(".celular").mask("(00) 0000-00009")
			
			$(".celular").blur(function(event){
				if ($(this).val().length == 15){
					$(".celular").mask("(00) 00000-0009")
				}else{
					$(".celular").mask("(00) 0000-00009")
				}
			})
	})

$(document).ready(function() {
    var senha       = $('#senha');
    var confirmasenha       = $('#confirmasenha');
    var passwordsInfo   = $('#pass-info');

    passwordStrengthCheck(senha,confirmasenha,passwordsInfo);

});

function passwordStrengthCheck(senha, confirmasenha, passwordsInfo){
    var WeakPass = /(?=.{6,}).*/; 
    // var MediumPass = /^(?=S*?[a-z])(?=S*?[0-9])S{5,}$/; 
    // var StrongPass = /^(?=S*?[A-Z])(?=S*?[a-z])(?=S*?[0-9])S{5,}$/; 
    // var VryStrongPass = /^(?=S*?[A-Z])(?=S*?[a-z])(?=S*?[0-9])(?=S*?[^w*])S{5,}$/; 

    $(senha).on('keyup', function(e) {
        if(WeakPass.test(senha.val())){
            passwordsInfo.removeClass().addClass('stillweakpass').html("Senha segura!");
        }
        else{
            passwordsInfo.removeClass().addClass('weakpass').html("Muito fraca! (Deve ter 6 ou mais caracteres)");
        }
    });

    $(confirmasenha).on('keyup', function(e) {
        if(senha.val() !== confirmasenha.val()){
            passwordsInfo.removeClass().addClass('weakpass').html("As senhas não são iguais!");   
        }else{
            passwordsInfo.removeClass().addClass('goodpass').html("Senhas iguais!");  
        }
    });
}

$(document).ready(function() {
    var senha       = $('#senha2');
    var confirmasenha       = $('#confirmasenha2');
    var passwordsInfo   = $('#pass-info2');

    passwordStrengthCheck(senha,confirmasenha,passwordsInfo);

});

function passwordStrengthCheck(senha, confirmasenha, passwordsInfo){
    var WeakPass = /(?=.{6,}).*/; 
    // var MediumPass = /^(?=S*?[a-z])(?=S*?[0-9])S{5,}$/; 
    // var StrongPass = /^(?=S*?[A-Z])(?=S*?[a-z])(?=S*?[0-9])S{5,}$/; 
    // var VryStrongPass = /^(?=S*?[A-Z])(?=S*?[a-z])(?=S*?[0-9])(?=S*?[^w*])S{5,}$/; 

    $(senha).on('keyup', function(e) {
        if(WeakPass.test(senha.val())){
            passwordsInfo.removeClass().addClass('stillweakpass').html("Senha ok!");
        }
        else{
            passwordsInfo.removeClass().addClass('weakpass').html("Muito fraca! (Deve ter 6 ou mais caracteres)");
        }
    });

    $(confirmasenha).on('keyup', function(e) {
        if(senha.val() !== confirmasenha.val()){
            passwordsInfo.removeClass().addClass('weakpass').html("As senhas não são iguais!");   
        }else{
            passwordsInfo.removeClass().addClass('goodpass').html("Senhas iguais!");  
        }
    });
}

</script>