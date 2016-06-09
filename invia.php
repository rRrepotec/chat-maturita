 <?php
	session_start();
	if($_SESSION['accesso']=="123456789")
	{	
?>
<html>
	<head>
		<title>Info</title>
	</head>
	<body bgcolor="black" link="black" vlink="black" alink="black">
		<div align="center">
			<table border="0">
				<caption><font color="white"<b>Chat di Aleksandar Boshnakov</b></font></caption>
				<tr bgcolor="green">
					<td align="center" colspan="6"><img src="logo.jpg"></img></td>
				</tr>
				<tr bgcolor="green">
					<td>
						<center><a id="c" href="home.php">Chat</a></center>
					</td>
					<td>
						<center><a href="http://chatmaturita.altervista.org/admin/admin.html">Admin</a></center>
					</td>
					<td>
						<center><a href="profilo.php">Profilo</a></center>
					</td>
					<td>
						<center><a href="info.php">Info</a></center>
					</td>
					<td>
						<center><a href="contact.php">Contact Me</a></center>
					</td>
					<td>
						<center><a href="exit.php">Esci</a></center>
					</td>
				</tr>
				<tr bgcolor="green" width="300" height="400">
					<td colspan="6">
						<?php
							if(isset($_POST['nick']) && isset($_POST['mail']) && isset($_POST['text']))
							{
								$email=$_POST["mail"];
								$email = eregi("^[_a-z0-9+-]+(\.[_a-z0-9+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+$",$email); 
								if($email == TRUE ) 
								{
									$to = "aleksandarboshnakov@me.com";
									$subject = $_POST["oggetto"];
									$body .= "Nome: " . $_POST["nick"] . "\n";
									$body .= "E-mail: " . $_POST["mail"] . "\n";
									$body .= "Messaggio: " . $_POST["text"] . "\n";
									if(mail($to, $subject, $body))
									{
										print "<script langage=\"Javascript\">alert('E-mail inviata!');window.location.href='home.php';</script>";
									} 
									else 
									{
										print "<script langage=\"Javascript\">alert('Errore durante l'invio della e-mail!');window.location.href='contact.php';</script>";
									}
								}
								else
								{
									print "<script langage=\"Javascript\">alert('Devi inserire una e-mail valida!');window.location.href='contact.php';</script>";
								}
							}
							else
							{
								print "<script langage=\"Javascript\">alert('Tutti i campi sono obbligatori!');window.location.href='contact.php';</script>";
							}
						?>
                                                <br>
						<center><input type="button" value="Indietro" onClick="javascript:history.back()" name="button"></center>
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