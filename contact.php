<?php
	session_start();
	if($_SESSION['accesso']=="123456789")
	{	
?>
<html>
	<head>
		<title>Contact</title>
                <style type="text/css">
                     a.c:hover{font-weight: bold; text-decoration:none;}
                </style>
	</head>
	<body bgcolor="black" link="black" vlink="black" alink="black" onLoad="document.formail.nick.focus()">
		<div align="center">
			<table border="0">
				<caption><font color="white"<b>Chat di Aleksandar Boshnakov</b></font></caption>
				<tr bgcolor="green">
					<td align="center" colspan="6"><img src="logo.jpg"></img></td>
				</tr>
				<tr bgcolor="green">
					<td>
						<center><a style="text-decoration: none;" href="home.php" class="c">Chat</a></center>
					</td>
					<td>
						<center><a style="text-decoration: none;" href="http://chatmaturita.altervista.org/admin/admin.html" class="c">Admin</a></center>
					</td>
					<td>
						<center><a style="text-decoration: none;" href="profilo.php" class="c">Profilo</a></center>
					</td>
					<td>
						<center><a style="text-decoration: none;" href="info.php" class="c">Info</a></center>
					</td>
					<td> 
						<center><a style="text-decoration: none;" href="contact.php" class="c">Contact Me</a></center>
					</td>
					<td>
						<center><a style="text-decoration: none;" href="exit.php" class="c">Esci</a></center>
					</td>
				</tr>
				<tr bgcolor="green" width="300" height="400">
					<td colspan="6">
						<form action="invia.php" method="post" name="formail">
							Inserisci il tuo nickname:*<br>
							<input type="text" name="nick" maxlength="30" size="30">
							<br>
							Inserisci la tua e-mail:*<br>
                  					<input type="text" name="mail" maxlength="30" size="30">
                  					<br>
                  					Inserisci oggetto:*<br>
                  					<input type="text" name="oggetto" maxlenght="30" size="30">
                  					<br>
                  					Messaggio:*<br>
                         				<textarea name="text" cols="30" rows="6"></textarea>
                         				<br>
                  					<input type="submit" value="Invio e-mail" name="sub">
                  					<input type="reset" value="Reset" name="res">
            					</form>
                                                </br>Tutti i campi con * sono obbligatori!
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
<?php
	}
	else 
	{
		print "<script langage=\"Javascript\">alert('Accesso scaduto!');window.location.href='index.html';</script>";
	}
?>