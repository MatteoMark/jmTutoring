<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['user'])){
	$err = "Dati scaduti";
	header("Location:loginStudente.php?err=$err");
	exit();
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="Page description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-icon-180x180.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">



  <title>Title page</title>  

<link href="./css/studStyle.css" rel="stylesheet"></head>

<body>

<!-- Add your content of header -->
<header class="">
  <div class="navbar navbar-default visible-xs">
    <button type="button" class="navbar-toggle collapsed">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="./index.html" class="navbar-brand">Mashup Template</a>
  </div>

  <nav class="sidebar">
    <div class="navbar-collapse" id="navbar-collapse">
      <div class="site-header hidden-xs">
          <a class="site-brand" href="./index.html" title="">
            <img class="img-responsive site-logo" alt="" src="./assets/images/jmlogo_.svg">
            jmTUTORING
          </a>
        <?php
        $temp = explode("_", $_SESSION['user']);
        echo "<p>" . ucfirst($temp[1]) . " " . ucfirst($temp[0]) . ", benvenuto nel portale ufficiale ripetizioni dello Jean Monnet</p>";
      	?>
      </div>
      <ul class="nav">
        <li><a href="./studente.php" title="">Home</a></li>
        <li><a href="./services.php" title="">Servizi</a></li>
        <li><a href="./contact.php" title="">Contatti</a></li>

      </ul>

      <nav class="nav-footer">
        
		<p>INSTAGRAM</p>
		<p class="nav-footer-social-buttons">
          <a class="fa-icon" href="https://www.instagram.com/" title="">
            <i class="fa fa-instagram"></i>
          </a>
          <!--<a class="fa-icon" href="https://dribbble.com/" title="">
            <i class="fa fa-dribbble"></i>
          </a>-->
          <!--<a class="fa-icon" href="https://twitter.com/" title="">
            <i class="fa fa-twitter"></i>
          </a>
        </p>
        <p>© Untitled | Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></p>-->
      </nav>  
    </div> 
  </nav>
</header>
<main class="" id="main-collapse">

<!-- Add your site or app content here -->
 
<div class="hero-full-wrapper">
  <div class="grid">
  <div class="gutter-sizer"></div>
    <div class="grid-sizer"></div>
    
    <div class="grid-item">
      <img class="img-responsive" alt="" src="./assets/images/eng.svg">
      <a href="./materia.php" class="project-description">
        <div class="project-text-holder">
          <div class="project-text-inner">
            <h3>INGLESE</h3>
            <p style="color:#000000">Grammar & more</p>
          </div>
        </div>
      </a>
    </div>

    
    <div class="grid-item">
      <img class="img-responsive" alt="" src="./assets/images/mate.jpg">
      <a href="./materia.php" class="project-description">
        <div class="project-text-holder">
          <div class="project-text-inner">
            <h3>MATEMATICA</h3>
            <p style="color:white">Funzioni, Limiti, Grafici & altro</p>
          </div>
        </div>
      </a>
    </div>

    <div class="grid-item">
      <img class="img-responsive" alt="" src="./assets/images/informatica.jpg">
      <a href="./project.php" class="project-description">
        <div class="project-text-holder">
          <div class="project-text-inner">
            <h3>INFORMATICA</h3>
            <p>SQL, C++, C#, Java e altro</p>
          </div>
        </div>
      </a>
    </div>
    <div class="grid-item">
      <img class="img-responsive" alt="" src="./assets/images/ita.jpg">
      <a href="./materia.php" class="project-description">
        <div class="project-text-holder">
          <div class="project-text-inner">
            <h3>ITALIANO</h3>
            <p>Prima l'Italiano</p>
          </div>
        </div>
      </a>
    </div>
    
    <div class="grid-item">
      <img class="img-responsive" alt="" src="./assets/images/fisica.jpg">
      <a href="./materia.php" class="project-description">
        <div class="project-text-holder">
          <div class="project-text-inner">
            <h3>FISICA</h3>
            <p>DISCOVER MORE</p>
          </div>
        </div>
      </a>
    </div>

    <div class="grid-item">
      <img class="img-responsive" alt="" src="./assets/images/chimica.jpg">
      <a href="./materia.php" class="project-description">
        <div class="project-text-holder">
          <div class="project-text-inner">
            <h3>CHIMICA</h3>
            <p>Discover more</p>
          </div>
        </div>
      </a>
    </div>

    <div class="grid-item">
      <img class="img-responsive" alt="" src="./assets/images/img-10.jpg">
      <a href="./materia.php" class="project-description">
        <div class="project-text-holder">
          <div class="project-text-inner">
            <h3>MUSICA</h3>
            <p>*SUONO DEFORMATO DI UN FLAUTO*</p>
          </div>
        </div>
      </a>
    </div>
    <div class="grid-item">
      <img class="img-responsive" alt="" src="./assets/images/img-03.jpg">
      <a href="./materia.php" class="project-description">
        <div class="project-text-holder">
          <div class="project-text-inner">
            <h3>LATINO</h3>
            <p style="color:#0037ff">Arthago delenda est.</p>
          </div>
        </div>
      </a>
    </div>
    
  </div>
</div>


<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     masonryBuild();
  });
</script>

</main>

<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
  navActivePage();
});
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

--><script type="text/javascript" src="./main.85741bff.js"></script></body>

</html>