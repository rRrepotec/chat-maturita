<?php
	session_start();
	if($_SESSION['accesso']=="123456789")
	{	
?>
<html>
	<head>
		<title>Profilo</title>
                <style type="text/css">
					a.c:hover{font-weight: bold; text-decoration:none;}
                </style>
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
					<td align="center" width="300" colspan="6">
						<?php
							$nome=$_SESSION['utente'];
							mysql_connect("localhost","chatmaturita","");
							mysql_select_DB("my_chatmaturita");
							$query="SELECT * FROM utente where nick='$nome'";
							$result=mysql_query($query) or die(mysql_error());
							while($riga = mysql_fetch_array($result))
							{
								$nome=$riga['nick'];
								$mail=$riga['mail'];
								$_SESSION['id']=$riga['id'];
								$id=$riga['id'];
								print "Benvenuto "."<b>".$nome."</b>".", questo e' il tuo profilo."."<br>";
								print "Il tuo ID e': "."<b>".$id."</b>"."<br>";
								print "Il tuo indirizzo e-mail e': "."<b>".$mail."</b>"."</br>";
							}
							mysql_close($db);
								if(isset($_COOKIE["ultimoaccesso"])) 
								{
									$valore_cookie = date("d/m/Y - H:i:s"); 
									setcookie ("ultimoaccesso", $valore_cookie, time() + 365 *24*3600);
									$ultimo_cookie = $_COOKIE["ultimoaccesso"];
									print "Il tuo ultimo accesso è stato il "."<b>$ultimo_cookie</b></br>";
								} else 
								{
									$valore_cookie = date("d/m/Y - H:i:s"); 
									setcookie ("ultimoaccesso", $valore_cookie, time() + 365 *24*3600);
									print "Benvenuto al tuo primo accesso nella chat!";
								}
							print "<br><br>";
							print "Per cambiare la tua password compila il seguente "."<b>"."form:"."</b>";
						?>
						<br>
							<form action="modificap.php" method="post" name="formp">
							<label>Password vecchia:*</br>
							<input type="password" name="passv"/></br>
							<label>Password nuova:*</br>
							<input type="password" name="passn"/></br>
							<label>Conferma password:*</br>
							<input type="password" name="passc"/></br>
							<input type="submit" name="sub" value="Cambia"/>
							<input type="reset" name="can" value="Reset"/>
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