<!DOCTYPE html>
<html lang="it">
<?php
session_start();
if(!isset($_SESSION['user'])){
	$err = "Dati scaduti";
	header("Location:loginStudente.php?err=$err");
	exit();
}
?>
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-icon-180x180.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">



  <title>jmTUTORING</title>  

<link href="./css/studStyle.css" rel="stylesheet"></head>

<body>

 <!-- Add your content of header -->
<header class="">
  <div class="navbar navbar-default visible-xs">
    <button type="button" class="navbar-toggle collapsed">
      <span class="sr-only"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="./index.html" class="navbar-brand">jmTUTORING</a>
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
        <li><a href="./contact.php" title="">Contattaci</a></li>
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


<div class="row">
  <div class="col-xs-12">
    <div class="section-container-spacer">
      <h1>Contattaci</h1>
    </div>
    <div class="section-container-spacer">
       <form action="" class="reveal-content">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="Enter your message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-lg">Send</button>
            </div>
            <div class="col-md-6">
              <ul class="list-unstyled address-container">
                <li>
                  <span class="fa-icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </span>
                  ----
                </li>
                <li>
                  <span class="fa-icon">
                    <i class="fa fa-at" aria-hidden="true"></i>
                  </span>
                  jmTutoring@ismonnet.gov
                </li>
                <li>
                  <span class="fa-icon">
                    <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                  </span>
                  Via Santa Caterina da Siena, 3, 22066 Mariano Comense CO
                </li>
              </ul>
              <h3>Seguiteci sui social networks</h3>
              <a href="https://www.linkedin.com/" title="" class="fa-icon">
                <i class="fa fa-linkedin"></i>
              </a>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>


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

--> <script type="text/javascript" src="./main.85741bff.js"></script></body>

</html>