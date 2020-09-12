  <link rel="stylesheet" href="assets/css/home.css">

  <?php require_once 'control/OportunidadeController.php';?>
  <div class = "banner" style="background-image: url('assets/images/banner2.png')">
  <div class="container">
    <h1 class="animate__animated animate__fadeInDown">Bem-vinda ao</h1>
    <h1 class="animate__animated animate__fadeInDown">STEM para as Minas</h1>
    <p class="animate__animated animate__fadeInDown">Um projeto de apoio à participação feminina em ciência e tenologia </p>
    <a href="#about"><i class="fa fa-arrow-down" aria-hidden="true" style="font-size: 50px; margin-top: 50px;"></i></a>
  </div>
</div>

<!-- Sobre STEM para as Minas -->
<div class="container">
  <div class="about" id="about">
    <h1 class="animate__animated animate__fadeInDown">Sobre o STEM para as Minas</h1>
    <p>STEM para as Minas é organização não governamental e sem fins lucrativos tem como o objetivo de motivar minas a seguirem áreas científicas e tecnológicas através de divulgação de oportunidades e assuntos a fim de empoderá-las nessas áreas.</p>
    <button type="button">Saiba mais</button>
  </div>
</div>

<!-- Servicos oferecidos-->
<div class="container">
  <div class = "services">
    <h1 class="title">Mais oportunidades ao se cadastrar</h1>
    <h3>Não perca essa chance de ter acesso a opotunidades exclusivas!</h3>
    <div class="row">
      <div class="col-lg-4">
        <div class= "service">
          <div class="info">
            <img src="assets/images/image 1.jpg" alt="bootcamp">
            <h2>BOOTCAMP</h2>
            <P>Cursos desenvolvidos especialmente para você!</P>
          </div>
           <div class="subscribe">
            <button type="button">Cadastre-se</button>
          </div>
        </div>          </div>
      <div class="col-lg-4">
        <div class= "service">
          <div class="info">
            <img src="assets/images/image 2.jpg" alt="bootcamp">
            <h2>NETWORK</h2>
            <P>Descubra uma rede de mulheres inspiradoras de todo o Brasil</P>
          </div>
          <div class="subscribe">
            <button type="button">Cadastre-se</button>
          </div>
        </div>    
      </div>
      <div class="col-lg-4">
        <div class= "service">
          <div class="info">
            <img src="assets/images/image 3.jpg" alt="bootcamp">
            <h2>TRAINEE</h2>
            <P>Ganhe novas experiencias e desenvolva habilidades</P>
          </div>
           <div class="subscribe">
            <button type="button">Cadastre-se</button>
          </div>
        </div>    
      </div>
    </div>
  </div>
</div>


<div class="container update">
  <h1 class="animate__animated animate__fadeInDown">Ultimas Atualizacoes</h1>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <div class='row opportunity'>
            <div class='col-sm-4'>
              <img src='https://lh3.googleusercontent.com/proxy/sycpXVUWJkx0pkYvgugNf7wPm5Eao5J24u8WjB3l66K-4WifDxwa7J9jvuiswv5OvYF0rjj_-sbNgRkYqGCatkd0YvVQlTM' alt='opportunity'>
            </div>
            <div class='col-sm-8'>
              <h2><?php require_once 'control/OportunidadeController.php';?></h2>
              <p>Esse sera a maior competicao de programacao. Vai perder essa chance de conhecer novas pessoas e demonstrar suas habilidades solucionando problema do mundo real</p>
            </div>
          </div>
      </div>

      <div class="item">
        <div class='row opportunity'>
            <div class='col-sm-4'>
              <img src='https://lh3.googleusercontent.com/proxy/sycpXVUWJkx0pkYvgugNf7wPm5Eao5J24u8WjB3l66K-4WifDxwa7J9jvuiswv5OvYF0rjj_-sbNgRkYqGCatkd0YvVQlTM' alt='opportunity'>
            </div>
            <div class='col-sm-8'>
              <h2>Olimpiada de Programacao</h2>
              <p>Esse sera a maior competicao de programacao. Vai perder essa chance de conhecer novas pessoas e demonstrar suas habilidades solucionando problema do mundo real</p>
            </div>
          </div>
      </div>
    
      <div class="item">
        <div class='row opportunity'>
            <div class='col-sm-4'>
              <img src='https://lh3.googleusercontent.com/proxy/sycpXVUWJkx0pkYvgugNf7wPm5Eao5J24u8WjB3l66K-4WifDxwa7J9jvuiswv5OvYF0rjj_-sbNgRkYqGCatkd0YvVQlTM' alt='opportunity'>
            </div>
            <div class='col-sm-8'>
              <h2>Olimpiada de Programacao</h2>
              <p>Esse sera a maior competicao de programacao. Vai perder essa chance de conhecer novas pessoas e demonstrar suas habilidades solucionando problema do mundo real</p>
            </div>
          </div>
      </div>

      <div class="item">
        <div class='row opportunity'>
            <div class='col-sm-4'>
              <img src='https://lh3.googleusercontent.com/proxy/sycpXVUWJkx0pkYvgugNf7wPm5Eao5J24u8WjB3l66K-4WifDxwa7J9jvuiswv5OvYF0rjj_-sbNgRkYqGCatkd0YvVQlTM' alt='opportunity'>
            </div>
            <div class='col-sm-8'>
              <h2>Olimpiada de Programacao</h2>
              <p>Esse sera a maior competicao de programacao. Vai perder essa chance de conhecer novas pessoas e demonstrar suas habilidades solucionando problema do mundo real</p>
            </div>
          </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container">
  <div class="redeSocial">
    <h1 class="title" class="animate__animated animate__fadeInDown">Siga nossas redes sociais</h1>
    <h3>E fique por dentro de todas as novidades</h3>
    <a href="https://www.facebook.com/stemparaminas" target="_blank"><i class="fab fa-facebook-square fa-7x"></i></a>
  	<a href="https://www.instagram.com/stemparaminas/" target="_blank"><i class="fab fa-instagram-square fa-7x"></i></a>
  	<a href="https://www.linkedin.com/company/stemparaminas/" target="_blank"><i class="fab fa-linkedin-square fa-7x"></i></a>
  	<a href="https://twitter.com/stemparaminas" target="_blank"><i class="fab fa-twitter-square fa-7x"></i></a>
  </div>
</div>

<div class="container">
  <div class="contato">
    <h1 class="title" class="animate__animated animate__fadeInDown">Quer entrar em contato ou enviar algumas sugestão?</h1>
    <button type="button">Fale conosco</button>
  </div>
</div>

<div class="container">
  <div class="newsletter">
    <h1 class="title">Inscreva-se para a nossa newsletter</h1>
    <form class="form-inline">
        <input type="text" class="form-control-plaintext" id="staticEmail2" placeholder="E-mail">
      <button type="submit">Enviar</button>
    </form>
  </div>
</div>

<div class="container">
  <div class="about">
    <h1>Gostou e quer saber mais sobre como contribuir?
</h1>
    <button type="button">Doe</button>
  </div>
</div>