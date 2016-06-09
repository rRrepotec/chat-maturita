<?php
	session_start();
	if($_SESSION['accessoadmin']=="123456789adm")
	{
?>
<html>
	<head>
		<title>Inserimento</title>
                <style type="text/css">
                     a.c:hover{font-weight: bold; text-decoration:none;}
                </style>
	</head>
	<body bgcolor="black" link="black" vlink="black" alink="black" onLoad="document.formi.nick.focus()">
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
				<td align="center">
					<form action="inserisciutente.php" method="POST" name="formi">
						<table border="0" bgcolor="green" width="300">
							<caption><font color="white"><b>Inserisci un utente nuovo:</b></font></caption>
							<tr>
								<td>
										Nickname:
								</td>
								<td>
									<input type='text' name='nick'>
								</td>
							</tr>
							<tr>
								<td>
										E-mail:
								</td>
								<td>
									<input type='text' name='mail'>
								</td>
							</tr>
							<tr>
								<td>
										Tipo utente[u/a]:
								</td>
								<td>
									<input name="tipo" type="radio" value="u" checked>u
									<input name="tipo" type="radio" value="a">a<br/>
								</td>
							</tr>
							<tr>
								<td>
										Password:<br>
								</td>
								<td>
									<input type='password' name='pass1'>
								</td>
							</tr>
							<tr>
								<td align="center" colspan="3">
									<input type="submit" name="sub" value="Inserisci"/>
									<input type="reset" name="can" value="Reset"/>
									<input type="button" value="Indietro" onClick="javascript:history.back()" name="button">
								</td>
							</tr>
						</table>
					</form>
				</td>
				<td width="200">
					<form name="form1" method="post" action=""> 
						<label>Menu:</label> 
						<select name="collegamento"> 
							        <option value="http://chatmaturita.altervista.org/admin/homeadmin.php">Home</option>
								<option value="visualizza.php">Visualizza</option> 
								<option value="inserisci.php">Inserisci</option> 
								<option value="modifica.php">Modifica</option>
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