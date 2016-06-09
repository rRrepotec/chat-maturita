<html>
	<head>
		<title>Accesso</title>
	</head>
	<body bgcolor="black" link="black" vlink="black" alink="black" text="green">
		<?php
			//Connessione al DB
			mysql_connect("localhost","chatmaturita","");
			mysql_select_DB("my_chatmaturita");
			//Recupero i dati inviati tramite POST
			$mail=addslashes($_POST['mail']);
			$nick=addslashes($_POST['nick']);
			$pass1=addslashes($_POST['pass1']);
			$pass2=addslashes($_POST['pass2']);
			//Controllo se i campi sono stati inseriti
			if ($mail==TRUE && $nick==TRUE && $pass1==TRUE && $pass2==TRUE )  
			{
				//Controllo se il nick è già stato inserito nel DB
				$query="SELECT nick FROM utente WHERE nick='$nick'"; 
				$risultato=mysql_query($query) or die (mysql_error()); 
				$risp=mysql_fetch_assoc($risultato);
				if($risp==FALSE)
				{
					//Controllo se l'e-mail è stata inserita correttamente
					$email=eregi("^[_a-z0-9+-]+(\.[_a-z0-9+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+$",$mail); 
					if($email==TRUE) 
					{  
						//Controllo se l'e-mail è già stata inserita nel DB
						$query="SELECT mail FROM utente WHERE mail='$mail'"; 
						$risultato=mysql_query($query) or die (mysql_error()); 
						$risp=mysql_fetch_assoc($risultato);
						if ($risp==FALSE) 
						{
							//Controllo se le due password sono uguali
							if ($pass1==$pass2) 
							{
								//Criptazione della password
								$passc=md5($pass1);
								//Registro dell'utente
								mysql_query("INSERT INTO utente (id , nick , mail , pass, tipo)
							          	  VALUES ('','$nick','$mail', '$passc','u' )") OR DIE(mysql_error());
								//Invio e-mail di effettuata registrazione
								$nostro_recapito="aleksandarboshnakov@me.com";
								$oggetto="Iscrizione alla chat di Boshnakov Aleksandar";
								$testo="		
									Complimenti per esserti registrato alla mia chat.\n		
									Il tuo nickname e' : $nick \n
									La tua password e' : $pass1 \n
									";		
								mail ("$mail", "$oggetto", "$testo", "From: $nostro_recapito");		
								print "<script langage=\"Javascript\">alert('Registrazione completa!');window.location.href='index.html';</script>";	
								header("location: paginabenv.html");		
							} 
							else 
							{
								print "<script langage=\"Javascript\">alert('Le due password inserite non coincidono');window.location.href='registra.html';</script>";
							}
						} 
						else 
						{
							print "<script langage=\"Javascript\">alert('E-mai già utilizzata');window.location.href='registra.html';</script>";
						}
					}
					else
					{
						print "<script langage=\"Javascript\">alert('Devi inserire un indirizzo e-mail valido');window.location.href='registra.html';</script>";
					}
				} 
				else
				{
					print "<script langage=\"Javascript\">alert('Nickname già utilizzato, prova a inserire un altro!');window.location.href='registra.html';</script>";
				}
			}
			else 
			{
				print "<script langage=\"Javascript\">alert('Tutti i campi sono obbligatori');window.location.href='registra.html';</script>";
			}
		?>
	</body>
</html>