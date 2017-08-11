<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="This is the portfolio of Stephen Burden who is a Web Developer available for hire in the Portland, OR area." name="Description">
  <meta content="Junior, Software, spburden, Oregon, Epicodus, PHP, JavaScript, Drupal, Ember, EmberJS, JS, Python, Angular 2, Silex, Twig, MySQL, HTML, CSS, Bootstrap, JQuery, Wordpress, SEO, Node.JS" name="Keywords">
  <script type='application/ld+json'>
    /*<![CDATA[*/{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"http:\/\/spburden.me\/","name":"Stephen Burden - Web Developer","potentialAction":{"@type":"SearchAction","target":"http:\/\/spburden.me\/?s={search_term_string}","query-input":"required name=search_term_string"}}/*]]>*/
  </script>
  <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
  <title>Stephen Burden - Portfolio | Web Developer in Portland, OR</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <nav class="navbar nav-pills navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a data-part="pageOne" class="navbar-brand" href="#" id="home">
          <!-- Stephen Burden -->
          <?php bloginfo('name') ?>
        </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="page-scroll">
            <a data-part="pageTwo" href="#" id="about">About</a>
          </li>
          <li class="page-scroll">
            <a data-part="pageThree" href="#" id="portfolio">Portfolio</a>
          </li>
          <li class="page-scroll">
            <a data-part="pageFour" href="#" id="contact">Contact</a>
          </li>
        </ul>
      </div> -->
      <?php 
          $args = array(
            'menu' => 'header-menu',
            'menu_class' => 'nav navbar-nav navbar-right',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'bs-example-navbar-collapse-1'
          );
          wp_nav_menu( $args );
        ?>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>