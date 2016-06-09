<?php
	session_start();
	if($_SESSION['accesso']=="123456789")
	{	
?>
<html>
	<head>
		<title>Info</title>
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
					<td colspan="6">
						<p align="center"><font face="cursive">
							Chat a cura di <b>Aleksandar Boshnakov</b><br/>
							<b>Professione:</b> studente presso istituto<br/>
							<b>G.Caramuel Vigevano</b><br/>
							<b>E-mail:</b> aleksandarboshnakov@me.com<br/><br/>
						</font></p>
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
		print "<script langage=\"Javascript\">alert('Accesso scaduto');window.location.href='index.html';</script>";
	}
?>