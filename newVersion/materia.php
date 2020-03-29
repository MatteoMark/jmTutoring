<!DOCTYPE html>
<html lang="en">
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



  <title>JmTutoring</title> 
  
   <script src="js/scriptMateria.js" type="text/javascript"></script>  

<link href="./css/studStyle.css" rel="stylesheet"></head>

<body onload="fillTable()">

 <!-- Add your content of header -->
<header class="">
  <div class="navbar navbar-default visible-xs">
    <button type="button" class="navbar-toggle collapsed">
      <span class="sr-only">Toggle navigation</span>
    </button>
    <a href="./index.html" class="navbar-brand">Mashup Template</a>
  </div>

  <nav class="sidebar">
    <div class="navbar-collapse" id="navbar-collapse">
      <div class="site-header hidden-xs">
          <a class="site-brand" href="./index.html" title="">
            <img class="img-responsive site-logo" alt="" src="./assets/images/jmlogo_.svg">
            JmTutoring
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
    </div> 
  </nav>
</header>

<main class="" id="main-collapse">


<div class="row">
  <div class="col-xs-12 col-md-8">

    <div class="section-container-spacer">
        <h1><?php echo $_GET["Materia"] ?></h1>
        
    </div>

    <div class="section-container-spacer">
      
	  <table id="Tabella">


      
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>

    </table>
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

 <script type="text/javascript" src="./main.85741bff.js"></script></body>

<script>!function(d,l,e,s,c){e=d.createElement("script");e.src="//ad.altervista.org/js.ad/size=2X2/?ref="+encodeURIComponent(l.hostname+l.pathname)+"&r="+Date.now();s=d.scripts;c=d.currentScript||s[s.length-1];c.parentNode.insertBefore(e,c)}(document,location)</script>

</html>
