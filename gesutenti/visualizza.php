<?php
	session_start();
	if($_SESSION['accessoadmin']=="123456789adm")
	{
?>
<html>
	<head>
		<title>Pagina Iniziale Admin</title>
	</head>
	<body bgcolor="black" link="black" vlink="black" alink="black">
		<center>

		<table border="0" width="800">
		<caption><font color="white"<b>Pagina di amministrazione!</b></font></caption>
		<tr bgcolor="green">
			<td align="center" colspan="3"><img src="car2.jpg"></img></td>
		</tr>
		<tr bgcolor="green">
			<td align="center">
				<table border="1" summary="" width="550" border="3">
					<caption> Visualizzazione Archivio Utenti</caption>
					<tr>
						<th width="10%">ID
						<th width="10%">Nick
						<th width="10%">Mail
						<th width="30%">Pass
						<th widht="10%">Tipo
					</tr>
					<?php 
						mysql_connect("localhost","chatmaturita","");
						mysql_select_DB("my_chatmaturita");
						$sql="SELECT * from utente";
						$query=mysql_query($sql);
						while($row = mysql_fetch_object($query))
						{	
							print "<tr>";
							print "<td width=\!10%\">".$row->id. "<br>";
							print "<td width=\!10%\">".$row->nick."<br>";
							print "<td width=\!10%\">".$row->mail. "<br>";
							print "<td width=\!30%\">".$row->pass."<br>";
							print "<td width=\!10%\">".$row->tipo."<br>";
							print "</tr>";
						}
						mysql_close();
					?>
				</table>
			<td widht="200">
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
		</center>
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