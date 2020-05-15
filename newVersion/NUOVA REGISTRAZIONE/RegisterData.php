<?php
include "php/dbCreation.php";
session_start();

if (isset($_POST['Nome']) && isset($_POST['Cognome']) && isset($_POST['Email'])) { //controlla che siano inseriti i dati
    
	$Query = "SELECT email FROM tutor WHERE email ='".$_POST["Email"]."'";
	$result = $conn->query($Query);
	

	if($result->num_rows == 1){
	   header("location: signUpTutor.php");
   }

   $_SESSION["Nome"] = $_POST["Nome"];
   $_SESSION["Cognome"] = $_POST["Cognome"];
   $_SESSION["Email"] = $_POST["Email"];


}else{
    echo "<script>alert('Inserisci tutti i dati');</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/form.css" >
		<script src="js/script.js"></script>
    </head>
    <body>
   		<?php
        	if(isset($_GET['msg'])){
            	echo "<script>alert(" . $_GET['msg'] . ")</script>";
            }
        ?>
		
        <div id="signupDiv" class="tutorDiv"  style="width:470px;height:410px;"> 
				 <form class="montform" id="reused_form" action="chkForm.php" method="post"> 

					 <p class="name"> 
						 <input name="numeroTel" type="tel" required class="inputStyle" style="float: left; width:48%;"  placeholder="Numero telefonico" pattern="[0-9]{3} [0-9]{3} [0-9]{4}|[0-9]{10}"/> 
						 <input name="Indirizzo" type="address" required class="inputStyle" style="float: right; width:48%;"  placeholder="Indirizzo di residenza"/> 
						 <input name="codF" type="text" required class="inputStyle" style="float: left; width:100%;" placeholder="Codice Fiscale">
					 </p><br><br><br><br><br><br><br><br><br><br><br> 
					 
					 <p class="password"> 
						 <input type="password" name="pw1" type="text" class="inputStyle" required placeholder="Password" id="password" style="width:100%;"/> 
						 <input type="password" name="pw2" type="text" class="inputStyle" required placeholder=" Conferma password" id="password" style="width:100%;"/> 
					 </p> 
					 <div class="submit"> 
						 <button type="submit" class="slButtons" value>Registrati</button> 
						 <div class="ease"></div> 
					 </div> 
				 </form> 
				 <div id="error_message" style="width:100%; height:100%; display:none;"> 
					 <h4> 
						 Errore 
					 </h4> 
					 Username o password errati! 
				 </div> 
				 <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div> 
			 </div> 
		</div>
	
    </body>
</html>