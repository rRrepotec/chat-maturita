<html>
	<head>
		<title>Accesso...</title>
	</head>
	<body bgcolor="black" link="green" vlink="green" alink="green" text="green">
		<?php
			//Connessione al DB
			mysql_connect("localhost","chatmaturita","");
			mysql_select_DB("my_chatmaturita");
			//Recupero i dati inviati tramite POST
		    $nick=addslashes($_POST['utente']);
			$pass=addslashes($_POST['password']);
			$passc=md5($pass);
			// controllo se il nickname e la password sono corretti
			$query="SELECT * FROM utente WHERE nick='$nick' AND pass='$passc'"; 
			$risultato=mysql_query($query) or die (mysql_error()); 
			$risp=mysql_fetch_assoc($risultato);
			if($risp==TRUE)
			{
				session_start();
				$_SESSION['accesso']="123456789";
				$_SESSION['utente']=$nick;
				$attuale=time();
				$query="update utente set time='$attuale' where nick='$nick'"; 
				$risultato=mysql_query($query) or die (mysql_error()); 
				header("location:home.php");
			}
			else
			{
				print "<script langage=\"Javascript\">alert('Nome utente e/o password errata!');window.location.href='index.html';</script>";
			}						
		?>	
	</body>
</html>