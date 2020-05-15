<?php
include "php/dbCreation.php";
session_start();
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
		<div class="slButtonsDiv">
			<button id="c_SignupButton" class="chooseSignupButton chooseButtonHover" onclick="animateButton();">Registrati</button>
			<button id="c_LoginButton" class="chooseLoginButton" onclick="animateButton();">Accedi</button>
		</div>
		<div id="loginDiv" class="tutorDiv" style="width:470px;height:220px;">
			<form class="montform" id="reused_form" method="post" action="loginTutor.php">
				<p class="name">
					<input name="emailLog" type="email" required class="inputStyle" id="email" placeholder="Email" style="width:100%;"/>
				</p>
				<p class="password">
					<input name="pwLog" type="password" type="text" class="inputStyle" required placeholder="Password" id="password" style="width:100%;"/>
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
		<div id="singUpTemp">
			<!-- <div id="signupDiv" class="tutorDiv"  style="width:470px;height:410px;"> -->
				<!-- <form class="montform" id="reused_form" > -->
					<!-- <p class="name"> -->
						<!-- <input name="nome" type="name" required class="inputStyle" style="float: left; width:48%;" placeholder="Nome" /> -->
						<!-- <input name="cognome" type="surname" required class="inputStyle" style="float: right; width:48%;" placeholder="Cognome"> -->
						<!-- <input name="codF" type="text" required class="inputStyle" style="float: left; width:48%;" placeholder="Codice Fiscale"> -->
						<!-- <input name="email" type="email" required class="inputStyle" style="float: right; width:48%;"  placeholder="Indirizzo e-mail"/> -->
						<!-- <input name="numeroTel" type="tel" required class="inputStyle" style="float: left; width:48%;"  placeholder="Numero telefonico" pattern="[0-9]{3} [0-9]{3} [0-9]{4}|[0-9]{10}"/> -->
						<!-- <input name="Indirizzo" type="address" required class="inputStyle" style="float: right; width:48%;"  placeholder="Indirizzo di residenza"/> -->
					<!-- </p><br><br><br><br><br><br><br><br><br><br><br> -->
					<!-- lo so che questi br sono brutti ma sono un poco ritardato -->
					<!-- <p class="password"> -->
						<!-- <input type="password" type="text" class="inputStyle" required placeholder="Password" id="password" style="width:100%;"/> -->
						<!-- <input type="password" type="text" class="inputStyle" required placeholder=" Conferma password" id="password" style="width:100%;"/> -->
					<!-- </p> -->
					<!-- <div class="submit"> -->
						<!-- <button type="submit" class="slButtons"></button> -->
						<!-- <div class="ease"></div> -->
					<!-- </div> -->
				<!-- </form> -->
				<!-- <div id="error_message" style="width:100%; height:100%; display:none;"> -->
					<!-- <h4> -->
						<!-- Errore -->
					<!-- </h4> -->
					<!-- Username o password errati! -->
				<!-- </div> -->
				<!-- <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div> -->
			<!-- </div> -->
		</div>
		<script type="text/javascript"> 
		document.body.onload = function(){
			<!-- il seguente codice è stato aggiunto per evitare che al load della pagina venga mostrato, anche se per pochi secondi, il div relativo alla registrazione sovrapposto a quello del login -->
			document.getElementById("singUpTemp").innerHTML = '<div id="signupDiv" class="tutorDiv" style="width:470px;height:410px;"><form class="montform" id="reused_form" action="RegisterData.php" method="post"> <br><br><br><br> <input name="Email" type="email" required class="inputStyle" style="float: right; width:100%;" placeholder="Indirizzo e-mail" /><br><br><br><br><br><br><input name="Nome" type="Nome" required class="inputStyle" style="float: left; width:48%;" placeholder="Nome" /><input name="Cognome" type="Cognome" required class="inputStyle" style="float: right; width:48%;" placeholder="Cognome"> <br><br><br><br><br><br><br><br><br><div class="submit"><button type="submit" class="slButtons">REGISTRATI</button><div class="ease"></div></div></form><div id="error_message" style="width:100%; height:100%; display:none;"><h4> Errore </h4>Username o password errati!</div><div id="success_message" style="width:100%; height:100%; display:none; "><h2>Success! Your Message was Sent Successfully.</h2></div></div>'
			document.getElementById("signupDiv").style.display = "none";
			document.getElementById("c_LoginButton").style.backgroundColor = "rgba(72,72,72,0.4)";
		}
        document.getElementById("c_LoginButton").addEventListener('click', function() { 
            document.getElementById("signupDiv").style.display = "none";
			document.getElementById("loginDiv").style.display = "block";
			document.getElementById("c_LoginButton").style.backgroundColor = "rgba(72,72,72,0.4)";
			document.getElementById("c_SignupButton").style.backgroundColor = "transparent";
		});
  
        document.getElementById("c_SignupButton").addEventListener('click', function() { 
            document.getElementById("loginDiv").style.display = "none"; 
			document.getElementById("signupDiv").style.display = "block"; 
			document.getElementById("c_SignupButton").style.backgroundColor = "rgba(72,72,72,0.4)";
			document.getElementById("c_LoginButton").style.backgroundColor = "transparent";  
        });
    </script> 
    </body>
</html>