<?php
	session_start();
	if($_SESSION['accesso']=="123456789")
	{	
?>
<html>
	<head>
		<title>Chat</title>
                <style type="text/css">
                     a.c:hover{text-decoration:none; font-weight: bold;}
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
				<tr bgcolor="green">
					<td colspan="6">
						<div align="center">
							<iframe name="visualizza" width="300" height="350" frameborder="0"; src="http://chatmaturita.altervista.org/chat/chat_visualizza.php"></iframe>
						</div>
					</td>
				</tr>
				<tr bgcolor="green">
					<td colspan="6">
						<div align="center">
							<iframe name="input" align="bottom" width="300" height="40"; frameborder="0"; src="http://chatmaturita.altervista.org/chat/chat_input.php" scrolling="no"></iframe>
						</div>
					</td>
				</tr>
				<tr bgcolor="green">
					<td colspan="6">
						<div align="center">
							<?php
								print "Sei collegato alla chat con il nome di: "."<b>".$_SESSION['utente']."</b>"."<br>";
							?>
						</div>
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