<?PHP 
    require_once('admin/conexao/conexao.php');

    $sql = "select *, date_format(alu_data_nascimento,'%d/%m/%Y') as data_nascimento from tb_aluno";
    $sql = mysqli_query($con, $sql) or die ("Erro no sql!");
    $dados = mysqli_fetch_array($sql);

    $sql2 = "select *, date_format(ski_data_cadastro,'%d/%m/%Y') as data from tb_skill";
    $sql2 = mysqli_query($con, $sql2) or die ("Erro no sql2!");


    $sql3 = "select *, date_format(pro_data_cadastro,'%d/%m/%Y') as data from tb_projetos";
    $sql3 = mysqli_query($con, $sql3) or die ("Erro no sql3!");


    $sql4 = "select *, date_format(ser_data_cadastro,'%d/%m/%Y') as data from tb_servicos";
    $sql4 = mysqli_query($con, $sql4) or die ("Erro no sql4!");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfólio - Daniel Simões de Souza</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v4.3.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Portfólio</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="#services">Serviços</a></li>
          <li><a class="nav-link scrollto " href="#work">Portfólio</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/web_dev.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">Faça sempre o seu melhor!</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Desenvolvimento Web, Programação C#, Programação Delphi, Banco de Dados"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/Daniel.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Nome: </span> <span><?php echo $dados['alu_nome']; ?></span></p>
                        <p><span class="title-s">Perfil: </span> <span><?php echo $dados['alu_objetivo']; ?></span></p>
                        <p><span class="title-s">Email: </span> <span><?php echo $dados['alu_email']; ?></span></p>
                        <p><span class="title-s">Telefone: </span> <span><?php echo $dados['alu_celular']; ?></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                      <?php while ($dados2 = mysqli_fetch_array($sql2)) { ?>

                        <span><?php echo $dados2['ski_descricao'];?> </span> <span class="pull-right"><?php echo $dados2['ski_porcentagem'];?>% </span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: <?php echo $dados2['ski_porcentagem'];?>%" aria-valuenow="<?php echo $dados2['ski_porcentagem']?> " aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                      <?php } ?>                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Sobre mim:
                      </h5>
                    </div>
                    <p class="lead">
                      Bem-vindo ao meu portfólio digital! Meu nome
                      é Daniel, mas a maioria das pessoas gosta de
                      me chamar só de Dani para ficar mais fácil de
                      falar.
                    </p>
                    <p class="lead">
                      Atualmente me encontro cursando o 2° ano do
                      ensino médio e informática no Colégio Politec,
                      ao mesmo tempo em que tive a oportunidade de
                      estagiar na mesma escola e colocar meus
                      conhecimentos em prática.
                    </p>
                    <p class="lead">
                      Sou alguém que gosta bastante de aprender novas
                      tecnologias, seja da área que estou buscando
                      emprego (Desenvolvimento Web) ou da área de 
                      informática em geral.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Serviços
              </h3>
              <p class="subtitle-a">
                Algumas das habilidades adquiridas no curso de informática.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">

          <?php while ($dados4 = mysqli_fetch_array($sql4)) { ?>
            
            <div class="col-md-4">
              <div class="service-box">
                <div class="service-ico">
                  <span class="ico-circle"><i class="<?php echo $dados4['ser_icone']; ?>"></i></span>
                </div>
                <div class="service-content">
                  <h2 class="s-title"><?php echo $dados4['ser_titulo']; ?> </h2>
                  <p class="s-description text-center">
                    <?php echo $dados4['ser_descricao']; ?>
                  </p>
                </div>
              </div>
            </div> 
            
          <?php } ?> 

        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/web_image.png)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
      <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">          
              </div>             
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfólio
              </h3>
              <p class="subtitle-a">
                Projetos realizados durante o curso de informática.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>

        <div class="row">

          <?php while ($dados3 = mysqli_fetch_array($sql3)) { ?>

            <div class="col-md-4">
              <div class="work-box">
                <a href="admin/projetos/<?php echo $dados3['pro_foto']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                  <div class="work-img">
                    <img src="admin/projetos/<?php echo $dados3['pro_foto']; ?>" alt="" class="img-fluid">
                  </div>
                </a>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title"><?php echo $dados3['pro_descricao']; ?></h2>
                      <div class="w-more">
                        <span class="w-ctegory"><?php echo $dados3['pro_categoria']; ?></span> - <span class="w-date"><?php echo $dados3['data']; ?></span>
                      </div>
                    </div>                
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>
            
        </div>

       

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Envie uma mensagem!
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Seu email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Conteúdo" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Carregando</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Enviar Mensagem</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Entre em contato
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Achou interessante o conteúdo mostrado em meu portifólio?
                        Se quiser, entre em contato através das formas de contato
                        apresentadas a seguir.
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span> Santa Bárbara d'Oeste</li>
                        <li><span class="bi bi-phone"></span>(19) 99757-2802</li>
                        <li><span class="bi bi-envelope"></span> danisimoes741@gmail.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>                        
                        <li><a href="https://www.instagram.com/danisimoes13/" target="_blank"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                        <li><a href="https://linkedin.com/in/daniel-sim%C3%B5es-de-souza/"  target="_blank"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                        <li><a href="https://github.com/DanielSouza2005" target="_blank"><span class="ico-circle"><i class="bi bi-github"></i></span></a></li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. Todos os direitos reservados</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Feito por <a href="https://bootstrapmade.com/">Daniel Simões de Souza</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>