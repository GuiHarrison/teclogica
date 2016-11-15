<?php get_header(); ?>

<div class="banner-trabalhe w-section">
  <div class="w-container">
	<div class="title" data-ix="correr-vertical-load-l">FAÇA PARTE DA NOSSA EQUIPE</div>
	<p class="texto-solues trabalhe-conosco" data-ix="correr-lateral-left-load">A Teclógica constantemente busca talentos e proporciona aos seus colaboradores um ótimo ambiente de trabalho, incentivando a troca de conhecimento, o desenvolvimento profissional e pessoal, a educação e promovendo ações de qualidade de vida.</p>
  </div>
</div>

<div class="vagas w-section">
	<?php
	if( have_rows('tc') ):

		echo 
		'<div class="w-container">
			<div class="gesto-ti" data-ix="vertical-rolagem">VAGAS EM ABERTO</div>';

			$cont=0;
			while ( have_rows('tc') ) : the_row();

				if ($cont % 2 == 0) echo '<div class="w-row grupo'. $cont/2 .'">';

					echo
					'<div class="item-vaga w-col w-col-6" data-ix="vertical-rolagem-l">'.
						'<h4 class="telefonia-digital titulo-itens-tv">' . get_sub_field('tc-t') . '</h4>'.
						'<p class="descrio-vaga">' . get_sub_field('tc-d') . '</p>'.
						'<a class="eventos tags-solu-es w-button" target="_blank" href="'. get_sub_field('tc-l') .'">Inscreva-se</a>'.
					'</div>';

				$cont++;

			if ($cont % 2 == 0) echo '</div>';
			endwhile;
			if ($cont % 2 != 0) echo '</div>';


		echo
		'</div>';

	else :

		echo '<h3 class="gesto-ti">Nenhuma vaga no momento.</h3>';

	endif;
	wp_reset_postdata();
	?>
</div>

<div class="beneficios w-section">
  <div class="w-container">
	<div class="pagina-beneficios title" data-ix="correr-vertical-load-l">Benefícios</div>
  </div>
  <div class="slider-cases slider-tc w-slider" data-animation="slide" data-duration="500" data-infinite="1">
	<div class="w-slider-mask">
	  <div class="w-slide">
		<div class="souza-cruz-conteiner w-container">
		  <div class="trabalhe-conosco-grupo-beneficios w-row">
			<div class="trabalhe-conosco-beneficios w-col w-col-4">
			  <div class="titulo-beneficio titulo-se-o-azul">Unimed</div>
			  <p class="texto-beneficio">O plano de saúde da Teclógica para colaboradores e dependentes é o mais completo do sistema Unimed e sem coparticipação dos usuários. A cobertura é nacional com acomodações em apartamentos.</p>
			</div>
			<div class="trabalhe-conosco-beneficios w-col w-col-4">
			  <div class="titulo-beneficio titulo-se-o-azul">Vale-alimentação</div>
			  <p class="texto-beneficio">A Teclógica disponibiliza atualmente o valor de alimentação superior ao estipulado pelo sindicato e sem descontos aos colaboradores. A parceria com o Sodexo, disponibiliza os cartões com as modalidades refeição ou alimentação, sendo a Sodexo a empresa com o maior número de estabelecimentos conveniados na região na categoria de alimentação.</p>
			</div>
			<div class="trabalhe-conosco-beneficios w-col w-col-4">
			  <div class="titulo-beneficio titulo-se-o-azul">Auxílio-educação</div>
			  <p class="texto-beneficio">Graduações voltadas para a área de atuação do colaborador são 50% pagas pela Teclógica. Pós-graduações, especializações e cursos de interesse para a progressão da carreira do colaborador também recebem auxílio conforme as especificidades.</p>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="w-slide">
		<div class="souza-cruz-conteiner w-container">
		  <div class="trabalhe-conosco-grupo-beneficios w-row">
			<div class="trabalhe-conosco-beneficios w-col w-col-4">
			  <div class="titulo-beneficio titulo-se-o-azul">Pacto</div>
			  <p class="texto-beneficio">Apoio oculto aos colaboradores e dependentes para assistência psicológica e social, consultoria jurídica e orientação financeira.</p>
			</div>
			<div class="trabalhe-conosco-beneficios w-col w-col-4">
			  <div class="titulo-beneficio titulo-se-o-azul">Vale-transporte</div>
			  <p class="texto-beneficio">O benefício segue de acordo com as obrigatoriedades do órgão regulador, sendo concedido ao colaborador com 6% de desconto do salário-base, inclusive entre cidades da região de Blumenau.</p>
			</div>
			<div class="trabalhe-conosco-beneficios w-col w-col-4">
			  <div class="titulo-beneficio titulo-se-o-azul">Seguro de Vida</div>
			  <p class="texto-beneficio">Todos os colaboradores da Teclógica são inscritos em seguro de vida em grupo.</p>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="w-slide">
		<div class="souza-cruz-conteiner w-container">
		  <div class="w-row">
			<div class="w-col w-col-4"></div>
			<div class="trabalhe-conosco-beneficios w-col w-col-4">
			  <div class="titulo-beneficio titulo-se-o-azul">Licença Maternidade</div>
			  <p class="texto-beneficio">Além da licença convencional de quatro meses, as mamães podem optar pela licença de seis meses, com os últimos dois meses garantidos pela Teclógica.</p>
			</div>
			<div class="w-col w-col-4"></div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="w-slider-arrow-left">
	  <div class="seta-no-azul slider-icontiguard w-icon-slider-left"></div>
	</div>
	<div class="w-slider-arrow-right">
	  <div class="seta-no-azul slider-icontiguard w-icon-slider-right"></div>
	</div>
  </div>
</div>
<div class="w-section secao-convenios">
  <div class="w-container">
	<div class="gesto-ti" data-ix="vertical-rolagem">Convênios</div>
	<p class="descrio-vaga" data-ix="vertical-rolagem-l">A Teclógica possui mais de <strong>60 convênios</strong> com empresas dos mais variados segmentos, que permitem valores diferenciados em produtos e serviços:</p>
	<p class="descrio-vaga convenios" data-ix="vertical-rolagem-r">Restaurantes - Farmácias - Lojas - Escolas de idiomas - Instituições de ensino - Cinemas - Academias - Associações culturais e desportivas - Redes cooperativas de atendimento em odontologia - Estéticas</p><img class="icone-convenio" data-ix="vertical-rolagem-l" src="<?php echo get_template_directory_uri(); ?>/images/vantagem-02.svg"><img class="icone-convenio" data-ix="vertical-rolagem-l" src="<?php echo get_template_directory_uri(); ?>/images/vantagem-01.svg"><img class="icone-convenio" data-ix="vertical-rolagem-l" src="<?php echo get_template_directory_uri(); ?>/images/vantagem-06.svg"><img class="icone-convenio" data-ix="vertical-rolagem-r" src="<?php echo get_template_directory_uri(); ?>/images/vantagem-05.svg"><img class="icone-convenio" data-ix="vertical-rolagem-r" src="<?php echo get_template_directory_uri(); ?>/images/vantagem-03.svg"><img class="icone-convenio" data-ix="vertical-rolagem-r" src="<?php echo get_template_directory_uri(); ?>/images/vantagem-04.svg">
  </div>
</div>
<div class="qualidade-de-vida w-section">
  <div class="w-container">
	<div class="gesto-ti qualidade-de-vida" data-ix="vertical-rolagem">Qualidade de vida</div>
  </div>
  <div class="slider-cases slider-tc w-slider" data-animation="slide" data-duration="500" data-infinite="1">
	<div class="w-slider-mask">
	  <div class="w-slide">
		<div class="souza-cruz-conteiner w-container">
		  <div class="trabalhe-conosco-grupo-qualidade-de-vida w-row">

			<div class="trabalhe-conosco-qualidade-de-vida w-col w-col-4">
			  <div class="qualidade-de-vida titulo-se-o-azul">Descanso e Área de Integração</div>
			  <p class="descrio-vaga qualidade-de-vida">É concedido &nbsp;a todos os colaboradores uma pausa do trabalho nos períodos da manhã e da tarde com a disponibilização da área de integração com equipamentos de cozinha, máquina de café e espaço para lanches.</p>
			</div>
			<div class="trabalhe-conosco-qualidade-de-vida w-col w-col-4">
			  <div class="qualidade-de-vida titulo-se-o-azul">Ginástica Laboral</div>
			  <p class="descrio-vaga qualidade-de-vida" data-ix="vertical-rolagem-r">As sessões ocorrem três vezes por semana atendendo a todos os colaboradores</p>
			</div>
			<div class="trabalhe-conosco-qualidade-de-vida w-col w-col-4">
			  <div class="qualidade-de-vida titulo-se-o-azul">Frutas</div>
			  <p class="descrio-vaga qualidade-de-vida">Através de convênio, os colaboradores podem optar por receber diariamente as frutas preferidas para facilitar a alimentação saudável. O valor é descontado em folha de pagamento.</p>
			</div>

		  </div>
		</div>
	  </div>
	  <div class="w-slide">
		<div class="souza-cruz-conteiner w-container">
		  <div class="trabalhe-conosco-grupo-qualidade-de-vida w-row">

			<div class="trabalhe-conosco-qualidade-de-vida w-col w-col-4">
			  <div class="qualidade-de-vida titulo-se-o-azul">Olimpíadas Teclógica</div>
			  <p class="descrio-vaga qualidade-de-vida">Organizada anualmente e disputada por quatro equipes formadas por sorteio de integrantes inscritos e as provas são programadas durante o ano todo e o principal intuito dos encontros é a integração dos colaboradores.</p>
			</div>
			<div class="trabalhe-conosco-qualidade-de-vida w-col w-col-4">
			  <div class="qualidade-de-vida titulo-se-o-azul">Biblioteca</div>
			  <p class="descrio-vaga qualidade-de-vida">A Teclógica disponibiliza aos colaboradores mais de 250 títulos de obras técnicas e literaturas diversas para empréstimos</p>
			</div>
			<div class="trabalhe-conosco-qualidade-de-vida w-col w-col-4">
			  <div class="qualidade-de-vida titulo-se-o-azul">Ergonomia</div>
			  <p class="descrio-vaga qualidade-de-vida">Uma preocupação da Teclógica é a correta postura e utilização de equipamentos pelos colaboradores, com ações coordenadas pela Cipa, sendo disponibilizados equipamentos ergonômicos para os postos de trabalho, incluindo correta iluminação dos ambientes.</p>
			</div>
		  
		  </div>
		</div>
	  </div>
	  <div class="w-slide">
		<div class="souza-cruz-conteiner w-container">
		  <div class="trabalhe-conosco-grupo-qualidade-de-vida w-row">
		  
			<div class="trabalhe-conosco-qualidade-de-vida w-col w-col-4">
			  <div class="qualidade-de-vida titulo-se-o-azul">Campanha de Vacinação</div>
			  <p class="descrio-vaga qualidade-de-vida">Em parceria com diferentes instituições, anualmente a Teclógica busca pelos melhores valores para a campanha de vacinação contra gripes para colaboradores e dependentes, sendo o valor descontado em folha de pagamento posteriormente.</p>
			</div>
			<div class="trabalhe-conosco-qualidade-de-vida w-col w-col-4">
			  <div class="qualidade-de-vida titulo-se-o-azul">Uso de bermudas</div>
			  <p class="descrio-vaga qualidade-de-vida">Aos homens é reservada a opção do uso de bermudas durante o ano inteiro, com algumas orientações específicas.</p>
			</div>
			<div class="trabalhe-conosco-qualidade-de-vida w-col w-col-4">
			  <div class="qualidade-de-vida titulo-se-o-azul">Datas comemorativas</div>
			  <p class="descrio-vaga qualidade-de-vida">Na Teclógica são comemorados aniversários, datas especiais para mamães e papais, mulheres e homens, dia dos profissionais e datas religiosas como Páscoa e Natal, além de adesão à campanhas nacionais e internacionais como outubro rosa, novembro azul, doação de sangue, conscientizações à saúde entre outras.</p>
			</div>
		  
		  </div>
		</div>
	  </div>
	</div>
	<div class="w-slider-arrow-left">
	  <div class="slider-icontiguard w-icon-slider-left"></div>
	</div>
	<div class="w-slider-arrow-right">
	  <div class="slider-icontiguard w-icon-slider-right"></div>
	</div>
  </div>
</div>
<div class="desenvolvimento-humano w-section">
  <div class="w-container">
	<div class="pagina-beneficios title" data-ix="correr-vertical-load-l">Desenvolvimento Humano</div>
	<div class="trabalhe-conosco-grupo-beneficios w-row">
	  <div class="trabalhe-conosco-beneficios w-col w-col-4">
		<div class="titulo-beneficio titulo-se-o-azul" data-ix="vertical-rolagem-l">Gestão por diretrizes</div>
		<p class="texto-beneficio" data-ix="vertical-rolagem-l">Grupo de gestores seguem o contrato de excelência Teclógica com sete diferentes diretrizes, incluindo ativa participação dos assuntos gerais da empresa, e disseminação destes assuntos entre as equipes, incluindo reuniões periódicas com as equipes e programa de feedback, também visando a comemoração e o compartilhamento de conquistas e o desenvolvimento da equipe através de boas práticas e lições aprendidas.</p>
	  </div>
	  <div class="trabalhe-conosco-beneficios w-col w-col-4">
		<div class="titulo-beneficio titulo-se-o-azul" data-ix="vertical-rolagem-r">Grupo de treinamento</div>
		<p class="texto-beneficio" data-ix="vertical-rolagem-r">Seguindo o objetivo de treinamento para lideranças que é uma das diretrizes do Conselho de Administração da Teclógica, o programa de Coach visa treinar e habilitar colaboradores em destaque para cargos de liderança.</p>
	  </div>
	  <div class="trabalhe-conosco-beneficios w-col w-col-4">
		<div class="titulo-beneficio titulo-se-o-azul" data-ix="vertical-rolagem-l">CORE</div>
		<p class="texto-beneficio" data-ix="vertical-rolagem-l">O Core é um programa da Teclógica com base nos nossos valores de Compromisso, Orientação para resultados, Relacionamento e Excelência, que valoriza e condecora a cultura do endoempreendedorismo dos colaboradores, reconhecendo atitudes de resolução, inovação, criação que visam a otimização de processos e ou ação que interfira positivamente no cotidiano individual ou coletivo dos colaboradores e da empresa.</p>
	  </div>
	</div>
  </div>
</div>

<?php get_footer(); ?>
