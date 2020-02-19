<?php
include "php/dbCreation.php";
session_start();
if (isset($_POST['emailLog']) && isset($_POST['pwLog'])) { //controlla che siano inseriti i dati
  if (!empty($_POST['emailLog']) && !empty($_POST['pwLog'])) { //controlla che siano inseriti i dati
    $sql = "SELECT * FROM tutor WHERE email='" . $_POST['emailLog'] . "' AND Password='" . $_POST['pwLog'] . "'"; //query sul db --> prende tutti i dati di utenti con quel nome e password
    $result = $conn->query($sql); //esegue la query
    if ($result->num_rows == 1) { //se c'è un risultato
      $_SESSION['user'] = $_POST['emailLog']; //salva nella sessione l'utente
      header("location: signUpTutor.php?msg=Login effettuato con successo");
    } else
    	echo "<script>alert('Errore! Controlla i dati inseriti');</script>";
      //echo "<p align='center'>*Errore! Controlla i dati inseriti</p>";
      }
  }
?>