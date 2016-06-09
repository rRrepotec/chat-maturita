<?php
	session_start();
?>
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
			if(isset($_POST['utente']) && isset($_POST['password']))
			{
				$nick=addslashes($_POST['utente']);
				$pass=addslashes($_POST['password']);
				$tipo="a";
				$passc=md5($pass);
				//Controllo se il nick e la pass sono corretti
				$query="SELECT * FROM utente WHERE nick='$nick' AND pass='$passc' AND tipo='$tipo'";  
				$risultato=mysql_query($query) or die (mysql_error()); 
				$risp=mysql_fetch_assoc($risultato);
				if($risp==TRUE)
				{
					$_SESSION['accessoadmin']="123456789adm";
					$_SESSION['admin']=$_POST['utente'];
					header("location:homeadmin.php");
				}
				else
				{
					print "<script langage=\"Javascript\">alert('Nome utente e/o password errata!');window.location.href='admin.html';</script>";
				}
			}
			else
			{
				print "<script langage=\"Javascript\">alert('Accesso scaduto!');window.location.href='admin.html';</script>";
			}							
		?>	
	</body>
</html>