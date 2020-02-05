<?php
include "php/dbCreation.php";
session_start();
if (isset($_POST['user']) && isset($_POST['pw'])) { //controlla che siano inseriti i dati
  if (!empty($_POST['user']) && !empty($_POST['pw'])) { //controlla che siano inseriti i dati
    $sql = "SELECT * FROM usersStudente WHERE Username='" . $_POST['user'] . "' AND Password='" . $_POST['pw'] . "'"; //query sul db --> prende tutti i dati di utenti con quel nome e password
    $result = $conn->query($sql); //esegue la query
    if ($result->num_rows == 1) { //se c'è un risultato
      $_SESSION['user'] = $_POST['user']; //salva nella sessione l'utente
      header("location: ../studente.php");
    } else
    	echo "<script>alert('Errore! Controlla i dati inseriti');</script>";
      //echo "<p align='center'>*Errore! Controlla i dati inseriti</p>";
  }
}
?>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/form.css">
</head>

<body>
    <?php
    if(isset($_GET['err']))
    echo "<p align='center' style='color:red;'>" . $_GET["err"] . "</p>";
    ?>
	<div id="loginDiv" class="studenteDiv">
		<form class="montform" id="reused_form" method="post"><br>
			<input name="user" type="username" required class="inputStyle" id="username" placeholder="Username" style="width:100%;" />
			<p class="password">
				<input type="password" name="pw" type="text" class="inputStyle" required placeholder="Password" id="password" style="width:100%;" />
			</p>
			<div class="submit">
				<button type="submit" class="slButtons">ACCEDI</button>
				<div class="ease"></div>
			</div>
		</form>
		<div id="error_message" style="width:100%; height:100%; display:none;">
			<h4>
				Errore
			</h4>
			Username o password errati!
		</div>
	</div>
</body>

</html>
