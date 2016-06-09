<?php
	session_start();
	if($_SESSION['accessoadmin']=="123456789adm")
	{
?>
<html>
	<head>
		<title>Pagina Iniziale Admin</title>
                <style type="text/css">
                     a.c:hover{font-weight: bold; text-decoration:none;}
                </style>
	</head>
	<body bgcolor="black" link="black" vlink="black" alink="black">
		<table align="center" border="0" width="800">
			<caption><font color="white"<b>Pagina di amministrazione!</b></font></caption>
			<tr bgcolor="green">
				<td align="center" colspan="3"><img src="car2.jpg"></img></td>
			</tr>
			<tr bgcolor="green">
				<td width="200">
					<ul>
						<li><a class="c" style="text-decoration: none;" href="homeadmin.php">Home</a></li>
						<li><a class="c" style="text-decoration: none;" href="http://chatmaturita.altervista.org/gesutenti/homeutenti.php">Gestione Utenti</a></li>
						<li><a class="c" style="text-decoration: none;" href="http://chatmaturita.altervista.org/geschat/homechat.php">Gestione Chat</a></li>
						<li><a class="c" style="text-decoration: none;" href="exit.php">Esci</a></li>
					</ul>
				</td>
				<td align="center"><marquee><u>Benvenuto nella pagina di amministrazione!</u></marquee>
					<?php
						print "Sei collegato alla pagina con il nome di: "."<b>".$_SESSION['admin']."</b></br>";
						if(isset($_COOKIE["ultimoaccessoa"])) 
						{
							$valore_cookiea = date("d/m/Y - H:i:s"); 
							setcookie ("ultimoaccessoa", $valore_cookiea, time() + 365 *24*3600);
							$ultimo_cookiea = $_COOKIE["ultimoaccessoa"];
							print "Il tuo ultimo accesso è stato il "."<b>$ultimo_cookiea</b></br>";
						}
						else 
						{
							$valore_cookiea = date("d/m/Y - H:i:s"); 
							setcookie ("ultimoaccessoa", $valore_cookiea, time() + 365 *24*3600);
							print "Benvenuto al tuo primo accesso nella chat!";
						}
					?>
				<td width="200">
					<ul>
						<li>Maturita 2013</li>	
					</ul>
				</td>
			</tr>
		</table>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
	</body>
</html>
<?php
	}
	else 
	{
		print "<script langage=\"Javascript\">alert('Accesso scaduto!');window.location.href='admin.html';</script>";
	}
?>