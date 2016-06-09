<?php
	session_start();
	if($_SESSION['accessoadmin']=="123456789adm")
	{
	?>
<html>
	<head>
		<title>Pagina Iniziale Admin</title>
	</head>
	<body bgcolor="black" link="black" vlink="black" alink="black" text="green">
		<?
			//Connessione al DB
			mysql_connect("localhost","chatmaturita","");
			mysql_select_DB("my_chatmaturita");
			//Recupero i dati via POST
			$mail = addslashes($_POST['mail']);
			$nick = addslashes($_POST['nick']);
			$pass1 = addslashes($_POST['pass1']);
			$tipo = $_POST['tipo'];
			// Controllo se i campi sono stati compilati
			if ($mail==TRUE && $nick==TRUE && $pass1==TRUE && $tipo==TRUE )  
			{
				// controlliamo se il campo nick è già inserito all'inderno del db
				$query = "SELECT nick FROM utente WHERE nick = '$nick'"; 
				$risultato = mysql_query($query) or die (mysql_error()); 
				$risp = mysql_fetch_assoc($risultato);
				if($risp==FALSE)
				{
					// controlliamo se il campo mail è stato scritto in maniera errata
					$email = eregi("^[_a-z0-9+-]+(\.[_a-z0-9+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+$",$mail); 
					if($email == TRUE ) 
					{  
						// controlliamo se l'e-mail è già inserita all'interno del db
						$query = "SELECT mail FROM utente WHERE mail = '$mail'"; 
						$risultato = mysql_query($query) or die (mysql_error()); 
						$risp = mysql_fetch_assoc($risultato);
						if ( $risp == FALSE ) 
						{
							$passc=md5($pass1);
							// registro l'utente
							mysql_query("INSERT INTO utente (id , nick , mail , pass, tipo)
						          	  VALUES ('','$nick','$mail', '$passc','$tipo' )") OR DIE(mysql_error());	
							print "Registrazione completata con successo.";	
							header("location: visualizza.php");		
						} 
						else 
						{
							print "<script langage=\"Javascript\">alert('E-mail già utilizzata!');window.location.href='inserisci.php';</script>";
						}
					}
					else
					{
						print "<script langage=\"Javascript\">alert('Devi inserire un indirizzo di e-mail valido!');window.location.href='inserisci.php';</script>";
					}
				} 
				else
				{
					print "<script langage=\"Javascript\">alert('Nickname già utilizzato, prova a inserirne un altro!');window.location.href='inserisci.php';</script>";
				}
			}
			else 
			{
				print "<script langage=\"Javascript\">alert('Tutti i campi sono obbligatori!');window.location.href='inserisci.php';</script>";
			}
		?>
	</body>
</html>
<?php
	}
	else 
	{
		print "<script langage=\"Javascript\">alert('Accesso scaduto!');window.location.href='http://chatmaturita.altervista.org/admin/admin.html';</script>";
	}
?>