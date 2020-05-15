<?php
include "php/dbCreation.php";
session_start();

// var_dump($_SESSION["Email"]);
// var_dump($_SESSION["Nome"]);
// var_dump($_SESSION["Cognome"]);
// var_dump($_POST["codF"]);
// var_dump($_POST["numeroTel"]);
// var_dump($_POST["Indirizzo"]);
// var_dump($_POST["pw1"]);
// var_dump($_POST["pw2"]);




if (isset($_SESSION['Nome']) && isset($_SESSION['Cognome']) && isset($_SESSION['Email'])) { //controlla che siano inseriti i dati
  if (!empty($_POST['codF']) && !empty($_POST['numeroTel']) && !empty($_POST['Indirizzo']) && !empty($_POST['pw1']) && !empty($_POST['pw2'])) { //controlla che siano inseriti i dati
	if($_POST['pw1'] != $_POST['pw2']){
    	echo "<script>alert('Le password devono essere uguali');</script>"; 
    }else{
      //$sql = "INSERT INTO usersTutor (Nome, Cognome, CodiceFiscale, Email, NumeroTelefono, IndirizzoResidenza, Password) VALUES ();"; //query sul db --> prende tutti i dati di utenti con quel nome e password
      //$result = $conn->query($sql); //esegue la query
      $pw = md5($_POST['pw1']);// cript pw
      $formazione = "Nessuna formazione";
      $descrizione = "Nessuna descrizione";
      $attivato = 0;
      $interno = 0;
      $stmt = $conn->prepare("INSERT INTO tutor(CF, nome, cognome, password, email, residenza, telefono, interno, descrizione, attivato, formazione) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); //avoid SQL injection
      $stmt->bind_param("sssssssisis", $_POST['codF'], $_SESSION['nome'], $_SESSION['cognome'], $pw, $_SESSION['email'], $_POST['Indirizzo'], $_POST['numeroTel'], $interno, $decrizione, $attivato, $formazione);
      $stmt->execute();
      echo "<script>alert('Registrazione effettuata con successo');</script>";
      header("location: studente.php");
    }
  }else{
    echo "<script>alert('Inserisci tutti i dati');</script>";
    header("location: RegisterData.php");
  }
}else
header("location: RegisterData.php");

?>