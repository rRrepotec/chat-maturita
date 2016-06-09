 <?php
	session_start();
	if($_SESSION['accesso']=="123456789")
	{	
?>
<html>
	<head>
		<title>Profilo</title>
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
						<center><a href="home.php">Chat</a></center>
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
							$id=$_SESSION['id'];
							$ut=$_SESSION['utente'];
							//Recupero i dati inviati tramite POST
							$passv=$_POST['passv'];
							$passn=$_POST['passn'];
							$passc=$_POST['passc'];
							if($passv==TRUE && $passn==TRUE && $passc==TRUE)
							{
								$passvc=md5($passv);
								$passnc=md5($passn);
								$passcc=md5($passc);
								mysql_connect("localhost","chatmaturita","");
								mysql_select_DB("my_chatmaturita");
								//Controllo se la password vecchia corrisponde a quella inserita nel DB
								$query="SELECT pass FROM utente WHERE id='$id'"; 
								$risultato=mysql_query($query) or die (mysql_error()); 
								$risp=mysql_fetch_assoc($risultato);
								if ($risp['pass']==$passvc) 
								{
									if ($passnc==$passcc)
									{
										//Modifico la password
										$sql="update utente set pass='$passnc' where id='$id'";
										mysql_query($sql);
										print "<script langage=\"Javascript\">alert('Password modifica con successo!');window.location.href='profilo.php';</script>";

									}
									else
									{
										print "<script langage=\"Javascript\">alert('Le password da cambiare inserite non coincidono!');window.location.href='profilo.php';</script>";
									}
								}
								else
								{
									print "<script langage=\"Javascript\">alert('La password vecchia e sbagliata!');window.location.href='profilo.php';</script>";
					
								}
							}
							else
							{
								print "<script langage=\"Javascript\">alert('Tutti i campi sono obbligatori!');window.location.href='profilo.php';</script>";
							}
							mysql_close();		
						?>
                                               <br>
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