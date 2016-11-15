<?php get_header(); ?>

  <div class="w-section banner-contato">
    <div class="w-container">
      <div class="title">CONTATO</div>
      <p class="texto-bloco-final sobre">Vamos te ajudar a encontrar a melhor solução em Tecnologia da Informação e Comunicação</p>
    </div>
  </div>
  <div class="w-section seo-form" id="Formulario">
    <div class="w-container div-form pagina-contato">
      <p class="asterisco" data-ix="aparecer">*indica um campo de preenchimento obrigatório</p>
      <div class="w-form formulrio">
		  <?php echo do_shortcode('[formidable id=12]'); ?>
      </div>
    </div>
  </div>
  <div class="w-section contato-tels">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6 coluna-tels" data-ix="vertical-rolagem-l">
          <p class="texto-intro-formulario" data-ix="vertical-rolagem-l">Telefones</p>
          <ul class="w-list-unstyled">
            <li class="tels"><span>SC</span> (47) 3036-7700</li>
            <li class="tels"><span>PR</span> (41) 4062-5445</li>
            <li class="tels"><span>SP</span> (11) 4062-5445</li>
            <li class="tels"><span>RS</span> (51) 4062-5445</li>
            <li class="tels"><span>PE</span> (81) 4062-5445</li>
            <li class="tels"><span>BH</span> (31) 4062-5445</li>
            <li class="tels"><span>RJ</span> (21) 4062-5445</li>
          </ul>
        </div>
        <div class="w-col w-col-6">
          <p class="texto-intro-formulario" data-ix="vertical-rolagem-l">Endereço</p>
          <p class="texto-intro-formulario endereco" data-ix="vertical-rolagem-r">R. Quinze de Novembro
            <br>N: 759, Centro - Blumenau - SC&nbsp;
            <br>CEP: 89010-902 |&nbsp;Brasil</p>
        </div>
      </div>
    </div>
  </div>
  <div class="w-widget w-widget-map" data-widget-latlng="-26.92078,-49.064158" data-widget-style="roadmap" data-widget-zoom="16"></div>

<?php get_footer(); ?>
