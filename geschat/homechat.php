<?php
	session_start();
	if($_SESSION['accessoadmin']=="123456789adm")
	{
?>
<html>
	<head>
		<title>Home Chat</title>
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
						<li><a class="c" style="text-decoration: none;" href="http://chatmaturita.altervista.org/admin/homeadmin.php">Home</a></li>
						<li><a class="c" style="text-decoration: none;" href="http://chatmaturita.altervista.org/gesutenti/homeutenti.php">Gestione Utenti</a></li>
						<li><a class="c" style="text-decoration: none;" href="http://chatmaturita.altervista.org/geschat/homechat.php">Gestione Chat</a></li>
						<li><a class="c" style="text-decoration: none;" href="exit.php">Esci</a></li>
					</ul>
				</td>
				<td align="center"><marquee><u>Benvenuto nella pagina di amministrazione di CHAT!</u></marquee>
				<td width="200">
					<form name="form1" method="post" action=""> 
						<label>Menu:</label> 
						<select name="collegamento"> 
								<option value="http://chatmaturita.altervista.org/admin/homeadmin.php">Home</option>
								<option value="visualizza.php">Visualizza</option> 
								<option value="cancella.php">Cancella</option>
						</select><input onclick="location.href=form1.collegamento.value;" type="button" value="vai" name="button"> 
					</form>
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
		print "<script langage=\"Javascript\">alert('Accesso scaduto!');window.location.href='http://chatmaturita.altervista.org/admin/admin.html';</script>";
	}
?>